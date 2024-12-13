<?php
require_once '../repoNoe/src/EndangeredSpeciesModel.php';

class EndangeredSpeciesListController {
    private $model;

    public function __construct($pdo) {
        $this->model = new EndangeredSpeciesModel($pdo);
    }

    public function listAll() {
        return $this->model->getAll();
    }

    public function showById($id) {
        if (filter_var($id, FILTER_VALIDATE_INT) === false) {
            throw new Exception("ID inválido.");
        }
        return $this->model->getById($id);
    }
}
?>
