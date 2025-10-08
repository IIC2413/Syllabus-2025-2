<?php
// 1. Leer archivo Personas.csv
$array_personas = [];
$array_descartados = [];
$archivo_personas = fopen('Personas.csv', 'r');

$columnas = fgetcsv($archivo_personas, 0, ';', '"', '\\');
print_r($columnas); // printea array de manera legible

while (!feof($archivo_personas)) {
    $linea = fgetcsv($archivo_personas, 0, ';', '"', '\\');
    
    if ($linea[0] === "Luis Isabel") {
        $array_descartados[] = $linea;
    } else {
        $array_personas[] = $linea;
    }
}

fclose($archivo_personas);

// 2. Limpiar datos
// rut fila 4
$array_personas[2][2] = str_replace('A', '', $array_personas[2][2]); 
// si preguntan por slicing como python seria substr( $array_personas[2][2], 3) que seria como hacer [3:]

// correo fila 12
$partes = explode('@', $array_personas[10][5]); // [antonio, perez, dominiofake.net]
$array_personas[10][5] = "$partes[0].$partes[1]@$partes[2]";

// 3. Escribir en un archivo datos_personas.csv las columnas (limpias) de nombre, apellido, rut y correo.
$archivo_datos = fopen('datos_personas.csv', 'w');
fputcsv($archivo_datos, ['nombre', 'apellido', 'rut', 'correo'], ';', '"', '\\');
foreach ($array_personas as $persona) {
    $fila = [$persona[0], $persona[1], $persona[2], $persona[5]];
    fputcsv($archivo_datos, $fila, ';', '"', '\\');
}
fclose($archivo_datos);

// 4. Escribir en un archivo rol_personas.csv las columnas (limpias) de rut, rol y profesión.
// con fwrite para que vean que se puede con los dos
$archivo_rol = fopen('rol_personas.csv', 'w');
fwrite($archivo_rol, "rut;rol;profesion\n");
foreach ($array_personas as $persona) {
    $fila = [$persona[5], $persona[9], $persona[10]];
    fwrite($archivo_rol, implode(';', $fila) . "\n");
}
fclose($archivo_rol);

// 5. Escribir en un archivo Personas_descartados.csv los datos descartados
$archivo_descartados = fopen('Personas_descartadas.csv', 'w');
fputcsv($archivo_descartados, $columnas, ';', '"', '\\');
foreach ($array_descartados as $persona) {
    fputcsv($archivo_descartados, $persona, ';', '"', '\\');
}
fclose($archivo_descartados);
?>