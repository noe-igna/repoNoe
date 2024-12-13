<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Especies en Peligro</title>
</head>
<body>
    <h1>Listado de Especies en Peligro</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Nombre Científico</th>
                <th>Estado de Conservación</th>
                <th>Tipo de Hábitat</th>
                <th>Estimación de Población</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($especies as $especie): ?>
                <tr>
                    <td><?= htmlspecialchars($especie['SpeciesID']) ?></td>
                    <td><?= htmlspecialchars($especie['CommonName']) ?></td>
                    <td><?= htmlspecialchars($especie['ScientificName']) ?></td>
                    <td><?= htmlspecialchars($especie['ConservationStatus']) ?></td>
                    <td><?= htmlspecialchars($especie['HabitatType']) ?></td>
                    <td><?= htmlspecialchars($especie['PopulationEstimate']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
