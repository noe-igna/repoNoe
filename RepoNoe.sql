CREATE DATABASE RepoNoeI;
USE RepoNoeI;


CREATE TABLE EndangeredSpecies (
    SpeciesID INT AUTO_INCREMENT PRIMARY KEY,
    CommonName VARCHAR(100) NOT NULL,
    ScientificName VARCHAR(150) NOT NULL,
    ConservationStatus VARCHAR(50),
    HabitatType VARCHAR(100),
    PopulationEstimate INT
);

LOCK TABLES  EndangeredSpecies WRITE;
INSERT INTO EndangeredSpecies VALUES 
('1','Oso Polar', 'Ursus maritimus', 'Vulnerable', 'Ártico', 26000),
('2','Tigre de Bengala', 'Panthera tigris tigris', 'En peligro', 'Bosques Tropicales', 2500);