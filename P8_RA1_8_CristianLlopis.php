<?php
# Administració de sistemes informatics en Xarxa
# Autor: Cristian Llopis Anguera
# Data: 20/05/2025

# Versió: 1.0

# Descripció(programa): Intercanvia valors entre dues variables.

$a = 5;
$b = 10;

echo "Abans: a = $a, b = $b<br>";

$temp = $a;
$a = $b;
$b = $temp;

echo "Després: a = $a, b = $b";
?>
