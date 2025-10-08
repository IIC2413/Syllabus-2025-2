<?php
#########################################################################
function leerArchivo($nombreArchivo) {
    $arreglo = array();
    $archivo = fopen($nombreArchivo, "r");
    $header = fgets($archivo); // sacar encabezado
    while (!feof($archivo)) {
        $linea = fgets($archivo);
        if ($linea !== false && $linea != "") {
            $arreglo[] = explode(",", $linea);
        }
    }
    fclose($archivo);
    return $arreglo;
}
$datos = leerArchivo("ayudantia2-1.csv");
print_r($datos);
#########################################################################








#########################################################################
function eliminarDuplicados($array) {
    $resultado = array();
    foreach ($array as $fila) {
        if (!in_array($fila, $resultado)) {
            $resultado[] = $fila;
        }
    }
    return $resultado;
}
// Ejemplo
$productos = [
    ["Laptop", 1200],
    ["Mouse", 20],
    ["Teclado", 50],
    ["Laptop", 1200],
    ["Monitor", 300]
];
print_r(eliminarDuplicados($productos));
#########################################################################








#########################################################################
function escribirArchivo($array, $nombreArchivo) {
    $archivo = fopen($nombreArchivo, "w");
    foreach ($array as $linea) {
        fwrite($archivo, $linea . "\n");
    }
    fclose($archivo);
}
// Ejemplo
$lineas = ["Hola mundo", "PHP es genial", "Hello world", "Aprender a programar"];
escribirArchivo($lineas, "salida.txt");
#########################################################################








#########################################################################
function imprimirLista($array) {
    foreach ($array as $elemento) {
        echo $elemento . "\n";
    }
}
// Ejemplo
$mensajes = ["Hola mundo", "PHP es genial", "Hola mundo", "Aprender a programar"];
imprimirLista($mensajes);
#########################################################################
?>
