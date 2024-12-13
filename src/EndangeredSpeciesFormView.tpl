<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Especies en Peligro</title>
</head>
<body>
    <h1><?= isset($especie) ? 'Editar Especie' : 'Agregar Especie' ?></h1>
    <form method="POST" action="">
        <label>Nombre:</label>
        <input type="text" name="CommonName" value="<?= htmlspecialchars($especie['CommonName'] ?? '') ?>" required><br>

        <label>Nombre Científico:</label>
        <input type="text" name="ScientificName" value="<?= htmlspecialchars($especie['ScientificName'] ?? '') ?>" required><br>

        <label>Estado de Conservación:</label>
        <input type="text" name="ConservationStatus" value="<?= htmlspecialchars($especie['ConservationStatus'] ?? '') ?>"><br>

        <label>Tipo de Hábitat:</label>
        <input type="text" name="HabitatType" value="<?= htmlspecialchars($especie['HabitatType'] ?? '') ?>"><br>

        <label>Estimación de Población:</label>
        <input type="number" name="PopulationEstimate" value="<?= htmlspecialchars($especie['PopulationEstimate'] ?? '') ?>"><br>

        <button type="submit"><?= isset($especie) ? 'Actualizar' : 'Agregar' ?></button>
    </form>
</body>
</html>