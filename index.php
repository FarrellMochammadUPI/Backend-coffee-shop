<?php
header("Content-Type: application/json");

$coffees = [
    "espresso" => [
        "name" => "Espresso",
        "description" => "Rich and bold espresso with intense flavor",
        "price" => 3.50,
        "image" => "https://upload.wikimedia.org/wikipedia/commons/a/a5/Tazzina_di_caff%C3%A8_a_Ventimiglia.jpg"
    ],
    "latte" => [
        "name" => "Latte",
        "description" => "Smooth latte with steamed milk and a shot of espresso",
        "price" => 4.00,
        "image" => "https://upload.wikimedia.org/wikipedia/commons/9/91/Caff%C3%A8_latte_as_being_served_at_Kaffebrenneriet_Torshov%2C_Oslo%2C_Norway_2_600x600_100KB.jpg"
    ],
    "cappuccino" => [
        "name" => "Cappuccino",
        "description" => "Frothy cappuccino with steamed milk foam",
        "price" => 4.25,
        "image" => "https://upload.wikimedia.org/wikipedia/commons/c/c8/Cappuccino_at_Sightglass_Coffee.jpg"
    ]
];

echo json_encode(["coffees" => $coffees]);
?>
