<?php

$tiendita_de_cafes = array(
    "Americano" => 20,
    "Latte" => 25,
    "Capuccino" => 27.5,
    "Mocca" => 24
);

foreach ($tiendita_de_cafes as $llave => $valor) {
    echo "El café $llave cuesta $$valor USD \n";
}

echo "\n";