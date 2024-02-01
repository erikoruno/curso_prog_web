
<?php

// FUNCION ISSET
/*
$variable1 = null;
$variable2 = "Hola";

// Verificar si las variables están definidas
if (isset($variable1, $variable2)) {
    echo "Ambas variables están definidas.";
} else {
    echo "Al menos una de las variables no está definida.";
}


*/

// FUNCION UNSET

/*
$variable = "Hola, mundo";

// Mostrar el contenido de la variable antes de unset
echo $variable . "<br>";

// Unset de la variable
unset($variable);

// Intentar mostrar el contenido de la variable después de unset
// Esto generará un "Notice: Undefined variable" ya que la variable ya no existe
echo $variable;
 
*/
// FUNCION GETTYPE

$numero = 42.5;
$cadena = "Hola, mundo";
$arreglo = array(1, 2, 3);
$booleano = true;
$nulo = null;

echo gettype($numero) ."<br>";   // Muestra: integer 
echo gettype($cadena)."<br>";   // Muestra: string
echo gettype($arreglo)."<br>";  // Muestra: array
echo gettype($booleano)."<br>"; // Muestra: boolean
echo gettype($nulo)."<br>";     // Muestra: NULL

// FUNCION SETTYPE

$numero = "42";
echo gettype($numero) . "<br>";  // Muestra: string

// Cambiar el tipo de la variable a integer
settype($numero, "float");

echo gettype($numero) . "<br>";  // Muestra: integer


// FUNCION EMPTY

$variable1 = "Hola, mundo";
$variable2 = "";

if (empty($variable1)) {
    echo "La variable1 está vacía.<br>";
} else {
    echo "La variable1 no está vacía.<br>";
}

if (empty($variable2)) {
    echo "La variable2 está vacía.<br>";
} else {
    echo "La variable2 no está vacía.<br>";
}

// FUNCION IS_INTEGER - IS_INT
$numeroint = 'cadena';

if (is_int($numeroint)) {
    echo "La variable es un número entero.";
} else {
    echo "La variable no es un número entero.";
}

// FUNCION IS_DOUBLE - IS_FLOAT

$numero_decimal = 3;

if (is_float($numero_decimal)) {
	
    echo "<br>.La variable es un número decimal (float/double).";
} else {
    echo "<br>.La variable no es un número decimal (float/double).";
}

// FUNCION IS_STRING


$cadena = 3;

if (is_string($cadena)) {
	
    echo "<br>.La variable es una cadena de texto (string).";
} else {
    echo "<br>.La variable no es una cadena de texto (string).";
}

// FUNCION VAR_DUMP

$numeroprueba = 42;
$cadenaprueba = "Hola, mundo";
$arregloprueba = array(1, 2, 3);
$booleanoprueba = true;
echo "<br>";
var_dump($numeroprueba, $cadenaprueba, $arregloprueba, $booleanoprueba);

//FUNCION DATE()

date_default_timezone_set("America/Lima");
// Obtener la fecha y hora actual
$fecha_actual = date('d-M-Y H:i:s');

// Imprimir la fecha y hora actual
echo "Fecha y Hora Actual: $fecha_actual";

//**************************************************** */
//FUNCION TIME()
$timestamp = time();
$fechaHora = date("d-m-Y H:i:s", $timestamp);

echo "Fecha y hora actual: $fechaHora";


//FUNCIO CHECKDATE

$mes = 1;    // Mes (febrero)
$dia = 29;   // Día
$anio = 2024; // Año bisiesto

if (checkdate($mes, $dia, $anio)) {
    echo "La fecha es válida.";
} else {
    echo "La fecha no es válida.";
}

//funcion GETDATE

$fecha_actual = getdate();

// Mostrar la información obtenida
echo "Día de la semana: " . $fecha_actual['weekday'] . "<br>";
echo "Día del mes: " . $fecha_actual['mday'] . "<br>";
echo "Mes: " . $fecha_actual['month'] . "<br>";
echo "Año: " . $fecha_actual['year'] . "<br>";
echo "Hora: " . $fecha_actual['hours'] . "<br>";
echo "Minutos: " . $fecha_actual['minutes'] . "<br>";
echo "Segundos: " . $fecha_actual['seconds'] . "<br>";

$hoy = getdate();
print_r($hoy);
?>
