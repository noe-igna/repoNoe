<?php
require_once '../src/db_coneccion.php';
require_once '../src/EndangeredSpeciesModel.php';

class EndangeredSpeciesFormController {
    private $model;

    public function __construct($pdo) {
        $this->model = new EndangeredSpeciesModel($pdo);
    }

    public function create($data) {
        $filteredData = $this->sanitizeInput($data);
        return $this->model->insert($filteredData);
    }

    public function update($id, $data) {
        if (filter_var($id, FILTER_VALIDATE_INT) === false) {
            throw new Exception("ID inválido.");
        }
        $filteredData = $this->sanitizeInput($data);
        return $this->model->update($id, $filteredData);
    }

    public function delete($id) {
        if (filter_var($id, FILTER_VALIDATE_INT) === false) {
            throw new Exception("ID inválido.");
        }
        return $this->model->delete($id);
    }

    private function sanitizeInput($data) {
        return array_map(function ($value) {
            return htmlspecialchars(trim($value), ENT_QUOTES, 'UTF-8');
        }, $data);
    }
}
?>
