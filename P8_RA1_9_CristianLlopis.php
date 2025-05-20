<?php
# Administració de sistemes informatics en Xarxa
# Autor: Cristian Llopis Anguera
# Data: 20/05/2025

# Versió: 1.0

# Descripció(programa): Crea una taula amb informació personal.

$nom = "Cristian";
$edat = 19;
$ciutat = "Mora la nova";
?>

<table border="1">
    <tr>
        <td>Nom</td>
        <td><?php echo $nom; ?></td>
    </tr>
    <tr>
        <td>Edat</td>
        <td><?php echo $edat; ?></td>
    </tr>
    <tr>
        <td>Ciutat</td>
        <td><?php echo $ciutat; ?></td>
    </tr>
</table>
