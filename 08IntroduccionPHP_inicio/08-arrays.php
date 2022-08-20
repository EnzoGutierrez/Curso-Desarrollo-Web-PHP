<?php include 'includes/header.php';

$carrito = ["tablet", "Television", "Computadora"];

//Añadir un elemento nuevo al final
array_push($carrito, "Audifonos");

//Acceder a un elemento del arrray
echo $carrito[1];

//Añadir al inicio
array_unshift($carrito, "Monitor");

//Util para ver contenidos de un array
echo "<pre>";
var_dump($carrito);
echo "</pre>";


include 'includes/footer.php';