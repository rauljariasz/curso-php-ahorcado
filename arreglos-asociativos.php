<?php

$cafes = [
    "Capuccino" => 50,
    "Latte" => 49,
    "Americano" => 70
];

echo "El precio del cafe Americano es de {$cafes['Americano']}" . "\n";


$personas = [

    "Carlos" => [
        "edad" => 20,
        "apellido" => "Santana",
        "coloresFavoritos" => [
            "Azul", "Rojo"
        ]
    ],

    "Mr.Michi" => array(
        "edad" => 18,
        "apellido" => "Michisancio",
        "coloresFavoritos" => [
            "Rosado", "Amarillo"
        ]
    ),

];

echo "La informacion de Mr. Michi es: Edad: " . $personas["Mr.Michi"]["edad"] . " Apellido: " . $personas["Mr.Michi"]["apellido"] . "Colores favoritos: " . implode(", ", $personas["Mr.Michi"]["coloresFavoritos"]);

echo "\n";