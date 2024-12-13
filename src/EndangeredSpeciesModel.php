<?php
class EndangeredSpeciesModel {
    private $db;

    public function __construct($pdo) {
        $this->db = $pdo;
    }

    public function getAll() {
        $query = "SELECT * FROM EndangeredSpecies";
        $stmt = $this->db->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $query = "SELECT * FROM EndangeredSpecies WHERE SpeciesID = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function insert($data) {
        $query = "INSERT INTO EndangeredSpecies (CommonName, ScientificName, ConservationStatus, HabitatType, PopulationEstimate) 
                  VALUES (:CommonName, :ScientificName, :ConservationStatus, :HabitatType, :PopulationEstimate)";
        $stmt = $this->db->prepare($query);
        $stmt->execute($data);
        return $this->db->lastInsertId();
    }

    public function update($id, $data) {
        $query = "UPDATE EndangeredSpecies SET 
                    CommonName = :CommonName, 
                    ScientificName = :ScientificName, 
                    ConservationStatus = :ConservationStatus, 
                    HabitatType = :HabitatType, 
                    PopulationEstimate = :PopulationEstimate
                  WHERE SpeciesID = :id";
        $stmt = $this->db->prepare($query);
        $data['id'] = $id;
        return $stmt->execute($data);
    }

    public function delete($id) {
        $query = "DELETE FROM EndangeredSpecies WHERE SpeciesID = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}
?>