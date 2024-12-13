<?php
require_once '../repoNoe/src/db_coneccion.php';
require_once '../repoNoe/src/EndangeredSpeciesListController.php';
require_once '../repoNoe/src/EndangeredSpeciesFormController.php';
// index.php?action=delete&id=1 este es para la url inge lo tengo aqui porque se me resulta mas facil solo de copiar y pegar 
$listController = new EndangeredSpeciesListController($pdo);
$formController = new EndangeredSpeciesFormController($pdo);

$action = $_GET['action'] ?? 'list';

try {
    switch ($action) {
        case 'list': 
            $especies = $listController->listAll();
            include '../repoNoe/src/EndangeredSpeciesListView.tpl';
            break;

        case 'view': 
            $id = $_GET['id'] ?? 0;
            if (filter_var($id, FILTER_VALIDATE_INT) === false) {
                throw new Exception("ID inválido.");
            }
            $especie = $listController->showById($id);
            include '../repoNoe/src/EndangeredSpeciesFormView.tpl';
            break;

        case 'create': 
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $data = sanitizeInput($_POST);
                $formController->create($data);
                header('Location: index.php?action=list');
                exit;
            } else {
                $especie = []; 
                include '../repoNoe/src/EndangeredSpeciesFormView.tpl';
            }
            break;

        case 'update': 
            $id = $_GET['id'] ?? 0;
            if (filter_var($id, FILTER_VALIDATE_INT) === false) {
                throw new Exception("ID inválido.");
            }
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $data = sanitizeInput($_POST);
                $formController->update($id, $data);
                header('Location: index.php?action=list'); 
                exit;
            } else {
                $especie = $listController->showById($id);
                include '../repoNoe/src/EndangeredSpeciesFormView.tpl';
            }
            break;

        case 'delete': 
            $id = $_GET['id'] ?? 0;
            if (filter_var($id, FILTER_VALIDATE_INT) === false) {
                throw new Exception("ID inválido.");
            }
            $formController->delete($id);
            header('Location: index.php?action=list');
            exit;

        default:
            throw new Exception("Acción no válida.");
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

function sanitizeInput($data) {
    return array_map(function ($value) {
        return htmlspecialchars(trim($value), ENT_QUOTES, 'UTF-8');
    }, $data);
}
?>
