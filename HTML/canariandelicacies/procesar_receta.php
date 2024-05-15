<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $titulo = $_POST["titulo"];
    $ingredientes = $_POST["ingredientes"];
    $preparacion = $_POST["preparacion"];

    $imagen_nombre = $_FILES["imagen"]["name"];
    $imagen_tmp = $_FILES["imagen"]["tmp_name"];
    $imagen_tipo = $_FILES["imagen"]["type"];
    $carpeta_destino = "./images/";
    
    $ruta_imagen = $carpeta_destino . $imagen_nombre;
    move_uploaded_file($imagen_tmp, $ruta_imagen);

    echo "<h2>Receta Subida Exitosamente</h2>";
    echo "<p>Título: $titulo</p>";
    echo "<p>Ingredientes: $ingredientes</p>";
    echo "<p>Instrucciones de Preparación: $preparacion</p>";
    echo "<p>Imagen: <img src='$ruta_imagen' alt='Imagen de la Receta'></p>";
} else {
    header("Location: canariandelicacies.html");
}
?>
