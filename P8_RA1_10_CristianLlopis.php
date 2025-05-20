<?php
# Administració de sistemes informatics en Xarxa
# Autor: Cristian Llopis Anguera
# Data: 20/05/2025

# Versió: 1.0

# Descripció(programa): Mostra una targeta personal amb informació dinàmica.

$nom = "Cristian Llopis Anguera";
$data = date("d/m/Y");
$missatge = "Benvingut a la meva targeta personal!";
$imatge = "https://via.placeholder.com/150"; // Pots canviar per una imatge teva
?>

<!DOCTYPE html>
<html>
<head>
    <title>Targeta Personal</title>
    <style>
        .targeta {
            border: 1px solid #000;
            width: 300px;
            padding: 15px;
            text-align: center;
            font-family: Arial;
        }
        .targeta img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <div class="targeta">
        <h2><?php echo $nom; ?></h2>
        <img src="<?php echo $imatge; ?>" alt="Foto">
        <p>Data: <?php echo $data; ?></p>
        <p><?php echo $missatge; ?></p>
    </div>
</body>
</html>
