<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investigación Formativa</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h4 class="center">FUNCIONES DE PHP</h4>
        <h4>Integrantes:
            <br>
            - Jhojan Paul Lopez Navarro. 
            <br>
            - Antony Dany Lopez Perez.
            <br>
            - Erick Ergueta paravicino.
        </h4>
        <h3>1.-Funciones de variables</h3>
    </header>
    <div class="container">

        <section class="left-section">
            <form action="funciones.php" method="post">
                <?php
                error_reporting(0);
                $variable1 = empty($_POST['txtDato1']) ? null : $_POST['txtDato1'];
                $variable2 = empty($_POST['txtDato2']) ? null : $_POST['txtDato2'];
               

                

                ?>
                <table>

                    <tr>
                        <td><h2>Variable 1</h2></td>
                        <td>
                            <input type="text" name="txtDato1" value="<?php echo htmlspecialchars($variable1); ?>">
                        </td>
                    </tr>
                    <tr>
                        <td><h2>Variable 2</h2></td>
                        <td>
                            <input type="text" name="txtDato2" value="<?php echo htmlspecialchars($variable2); ?>">
                        </td>
                    </tr>
                    </tr>
                    <td>
                        <button type="submit" class="btn-verde">Mostrar</button>
                    </td>


                </table>

                <form>
                    <style>
                        .cuadricula,
                        .lineas {
                            border: 2px solid black;
                            width: 100%;
                        }

                        .delgado {
                            border: 1px solid black;
                        }

                        table {
                            border-collapse: collapse;
                            width: 100%;
                        }

                        .bordes {
                            padding: 5px;
                        }

                        .resaltado {
                            background-color: black;
                            color: white;
                        }
                    </style>
                    <table class="cuadricula">
                        <tr>
                            <td class="delgado"> <h5>Función isset:
                                Se usa para verificar si una variable esta definida o es nula</h5>
                            </td>
                            <td class="delgado">
                                <?php
                                if (isset($variable1, $variable2)) {
                                    echo "Ambas variables están definidas.";
                                } else {
                                    echo "Al menos una de las variables no está definida.";
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="delgado"> <h5>Función unset:
                                Destruye una o más variables especificas, solo usar variable 1 para el ejemplo</h5>
                            </td>
                            <td class="delgado">
                                <?php
                                $variable1 = $_POST['txtDato1'];
                                echo "Antes de unset: " . $variable1 . "<br>";
                                unset($variable1);
                                echo "Después de unset: ";
                                var_dump($variable1); 

                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="delgado"> <h5>Función gettype:
                                Se usa para obtener el tipo de variable. La variable 1 sale null, por que en la instrucción
                                unset se borro esa variable.</h5>
                            </td>
                            <td>
                                <?php
                                echo "Variable 1: " . gettype($variable1) . "<br>";
                                $variable2 = $_POST['txtDato2'];

                                if (is_numeric($variable2)) {
                                    $intValue = intval($variable2);
                                    if ($variable2 == $intValue) {
                                        echo "Variable 2: integer";
                                    } else {
                                        echo "Variable 2: float).";
                                    }
                                } elseif (is_string($variable2)) {
                                    echo "Variable 2: string";
                                } elseif (is_array($variable2)) {
                                    echo "Variable 2: es un array.";
                                } else {
                                    echo "Variable 2: " . gettype($variable2);
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="delgado"> <h5>Función settype: Se usa para
                                cambiar el tipo de una variable, el ejemplo es
                                en la variable 2 </h5>
                            </td>
                            <td class="delgado">
                                <?php
                                echo "Variable 2: " . gettype($variable2) . "<br>";  

                                if (is_numeric($variable2)) {
                                    
                                    settype($variable2, "float");
                                    echo "Tipo después de la conversión: " . gettype($variable2) . "<br>";
                                    printf("Variable 2: %.2f", $variable2);
                                } else {
                                    echo "La variable no es numérica y no se puede convertir a float.";
                                }
                                ?>

                            </td>
                        </tr>
                        <tr>
                            <td class="delgado"> <h5>Función empty: Determina si una variable está vacía.
                                siempre la variable 1 va salir vacia, por que se borro
                                con la función unset. </h5>
                            </td>
                            <td class="delgado">
                                <?php
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
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td><h5>Función is_integer: Esta función ha sido reemplazada por is_int,
                                sirve para determinar si un numero es entero o no </h5>
                            </td>
                            <td class="delgado">
                                <?php
                                if (is_numeric($variable2)) {
                                    echo "La variable 2: integer.";
                                } else {
                                    echo "La variable 2 no es un número entero.";
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="delgado"><h5>Función is_double:
                                La función para verificar si una variable es de tipo
                                double o float se llama is_float.<h5>
                            </td>
                            <td class="delgado">
                                <?php
                                if (filter_var($variable2, FILTER_VALIDATE_INT) !== false) {
                                    echo "La variable 2: integer.";
                                }
                                
                                elseif (is_numeric($variable2) && filter_var($variable2, FILTER_VALIDATE_FLOAT) !== false) {
                                    echo "La variable 2: float";
                                }
                               
                                else {
                                    echo "La variable 2: string.";
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="delgado">
                            <h5>Función is_string: La función para verificar
                                    si una variable es de tipo string.</h5>
                            </td>
                            <td class="delgado">
                                <?php
                                if (is_string($variable2)) {

                                    echo "<br>.La variable es una cadena de texto (string).";
                                } else {
                                    echo "<br>.La variable no es una cadena de texto (string).";
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="delgado">
                            <h5>Función var_dump: Se utiliza para mostrar información
                                    sobre una o más variables, incluyendo su tipo y valor.</h5>
                            </td>
                            <td class="delgado">

                                <?php

                                $numeroprueba = 42;
                                $cadenaprueba = "Hola, mundo";
                                $arregloprueba = array(1, 2, 3);
                                $booleanoprueba = true;
                                echo "numeroprueba = 42 <br>";
                                echo "cadenaprueba = Hola, mundo <br>";
                                echo "arregloprueba = array(1, 2, 3) <br>";
                                echo "booleanoprueba = true";
                                echo "<br>";
                                var_dump($numeroprueba, $cadenaprueba, $arregloprueba, $booleanoprueba);
                                ?>
                            </td>
                        </tr>
                    </table>
                </form>
        </section>

        <section class="right-section">

        <?php
        //FORMULARIO DE JHOJAN
        ?>
        <h3>2.- Funciones de cadena</h3>
        <form action="funciones.php" method="post">
        <?php
            error_reporting(0);

            $Cadena1 = $_POST['txtDato1'] ?? '';
            $Cadena2 = $_POST['txtDato2'] ?? '';
            $funcion = $_POST['selCadena'] ?? '';
            $cadena = htmlspecialchars($_POST['txtCadena'] ?? '');

            $selStrlen = ($funcion == 'Strlen') ? 'selected' : '';
            $selStrpos = ($funcion == 'Strpos') ? 'selected' : '';
            $selStrcmp = ($funcion == 'Strcmp') ? 'selected' : '';
            $selStrstr = ($funcion == 'Strstr') ? 'selected' : '';
            $selSubstr = ($funcion == 'Substr') ? 'selected' : '';
            $selTrimFunctions = ($funcion == 'Ltrim' || $funcion == 'Rtrim' || $funcion == 'Chop' || $funcion == 'Trim') ? 'selected' : '';
            $selStrReplace = ($funcion == 'Str_Replace') ? 'selected' : '';
            $selCaseFunctions = ($funcion == 'Strtolower' || $funcion == 'Strtoupper') ? 'selected' : '';
            $selPregMatch = ($funcion == 'Preg_Match') ? 'selected' : '';
            $selExplode = ($funcion == 'Explode') ? 'selected' : '';
            $selStrrev = ($funcion == 'Strrev') ? 'selected' : '';
            $selStrRepeat = ($funcion == 'Str_Repeat') ? 'selected' : '';
            $selStrPad = ($funcion == 'Str_Pad') ? 'selected' : '';
            ?>
            <table border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td><h2>Ingrese la cadena: </h2></td>
                    <td>
                        <input type="text" name="txtCadena" value="<?php echo $cadena; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Seleccione una función para la cadena: </td>
                    <td>
                        <select name="selCadena">
                            <option value="Strlen" <?php echo $selStrlen; ?>>Strlen</option>
                            <option value="Strpos" <?php echo $selStrpos; ?>>Strpos</option>
                            <option value="Strcmp" <?php echo $selStrcmp; ?>>Strcmp</option>
                            <option value="Strstr" <?php echo $selStrstr; ?>>Strstr</option>
                            <option value="Substr" <?php echo $selSubstr; ?>>Substr</option>
                            <option value="Ltrim" <?php echo $selTrimFunctions; ?>>Ltrim</option>
                            <option value="Rtrim" <?php echo $selTrimFunctions; ?>>Rtrim</option>
                            <option value="Chop" <?php echo $selTrimFunctions; ?>>Chop</option>
                            <option value="Trim" <?php echo $selTrimFunctions; ?>>Trim</option>
                            <option value="Str_Replace" <?php echo $selStrReplace; ?>>Str_Replace</option>
                            <option value="Strtolower" <?php echo $selCaseFunctions; ?>>Strtolower</option>
                            <option value="Strtoupper" <?php echo $selCaseFunctions; ?>>Strtoupper</option>
                            <option value="Preg_Match" <?php echo $selPregMatch; ?>>Preg_Match</option>
                            <option value="Explode" <?php echo $selExplode; ?>>Explode</option>
                            <option value="Strrev" <?php echo $selStrrev; ?>>Strrev</option>
                            <option value="Str_Repeat" <?php echo $selStrRepeat; ?>>Str_Repeat</option>
                            <option value="Str_Pad" <?php echo $selStrPad; ?>>Str_Pad</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" value="Realizar operación"></td>
                    <td colspan="2" align="center"><input type="reset" value="Refresh"></td>
                </tr>

                <?php
                if (!empty($funcion)) {
                    if ($funcion == 'Strlen') {
                        $resultado = strlen($cadena);
                        echo "<tr><td colspan='2'>La función Strlen devuelve la longitud de la cadena.</td></tr>";

                    } elseif ($funcion == 'Strpos') {
                        $resultado = strpos($cadena, 'buscar');
                        echo "<tr><td colspan='2'>La función Strpos busca la posición de 'buscar' en la cadena.</td></tr>";

                    } elseif ($funcion == 'Strcmp') {
                        
                        if (isset($_POST['Cadena1']) && isset($_POST['Cadena2'])) {
                            
                            $Cadena1 = $_POST['Cadena1'];
                            $Cadena2 = $_POST['Cadena2'];
                    
                            $resultado = strcmp($Cadena1, $Cadena2);
                    
                            echo "<tr>
                                    <td colspan='2'>La función Strcmp compara las cadenas '$Cadena1' y '$Cadena2'.</td>
                                 </tr>";
                            echo "<tr><td>Resultado:</td><td>$resultado</td></tr>";
                        } else {
                            echo "<form method='post' action='actividad.php'>";
                            echo "<tr>
                                    <td>Cadena1:</td><td><input type='text' name='Cadena1'></td>
                                 </tr>";
                            echo "<tr>
                                   <td>Cadena2:</td><td><input type='text' name='Cadena2'></td>
                                 </tr>";
                            echo "<tr>
                                   <td colspan='2'><input type='submit' value='Comparar'></td>
                                 </tr>";
                            echo "</form>";
                        }
                            echo "La función strcmp en PHP compara dos cadenas y devuelve un valor entero. El valor de retorno puede ser:

                            0: Si ambas cadenas son iguales.
                            Menor que 0: Si la primera cadena es menor que la segunda en orden lexicográfico.
                            Mayor que 0: Si la primera cadena es mayor que la segunda en orden lexicográfico.";
                    }
                    
                        
                    } elseif ($funcion == 'Strstr') {
                        $resultado = strstr($cadena, 'buscar');
                        echo "<tr><td colspan='2'>La función Strstr devuelve la parte de la cadena a partir de 'buscar'.</td></tr>";

                    } elseif ($funcion == 'Substr') {
                        $resultado = substr($cadena, 0, 5);
                        echo "<tr><td colspan='2'>La función Substr devuelve una parte de la cadena desde el inicio hasta el quinto carácter.</td></tr>";

                    } elseif ($funcion == 'Ltrim') {
                        $resultado = ltrim($cadena);
                        echo "<tr><td colspan='2'>La función Ltrim elimina los espacios en blanco del lado izquierdo de la cadena.</td></tr>";

                    } elseif ($funcion == 'Rtrim') {
                        $resultado = rtrim($cadena);
                        echo "<tr><td colspan='2'>La función Rtrim elimina los espacios en blanco del lado derecho de la cadena.</td></tr>";

                    } elseif ($funcion == 'Chop') {
                        $resultado = chop($cadena);
                        echo "<tr><td colspan='2'>La función Chop elimina los espacios en blanco del final de la cadena.</td></tr>";

                    } elseif ($funcion == 'Trim') {
                        $resultado = trim($cadena);
                        echo "<tr><td colspan='2'>La función Trim elimina los espacios en blanco del inicio y el final de la cadena.</td></tr>";

                    } elseif ($funcion == 'Str_Replace') {
                        $resultado = str_replace('buscar', 'reemplazar', $cadena);
                        echo "<tr><td colspan='2'>La función Str_Replace reemplaza 'buscar' con 'reemplazar' en la cadena.</td></tr>";

                    } elseif ($funcion == 'Strtolower') {
                        $resultado = strtolower($cadena);
                        echo "<tr><td colspan='2'>La función Strtolower convierte la cadena a minúsculas.</td></tr>";

                    } elseif ($funcion == 'Strtoupper') {
                        $resultado = strtoupper($cadena);
                        echo "<tr><td colspan='2'>La función Strtoupper convierte la cadena a mayúsculas.</td></tr>";

                    } elseif ($funcion == 'Preg_Match') {
                        $patron = '/\d+/';
                        if (preg_match($patron, $cadena)) {
                            $resultado = 'Coincidencia encontrada';
                            echo "<tr><td colspan='2'>La función Preg_Match busca dígitos en la cadena.</td></tr>";
                        } else {
                            $resultado = 'No se encontraron coincidencias';
                            echo "<tr><td colspan='2'>La función Preg_Match no encontró dígitos en la cadena.</td></tr>";
                        }

                    } elseif ($funcion == 'Explode') {
                        $resultado = implode(', ', explode(' ', $cadena));
                        echo "<tr><td colspan='2'>La función Explode divide la cadena en un array usando el espacio como delimitador.</td></tr>";

                    } elseif ($funcion == 'Strrev') {
                        $resultado = strrev($cadena);
                        echo "<tr><td colspan='2'>La función Strrev invierte la cadena.</td></tr>";

                    } elseif ($funcion == 'Str_Repeat') {
                        $resultado = str_repeat($cadena, 3);
                        echo "<tr><td colspan='2'>La función Str_Repeat repite la cadena tres veces.</td></tr>";

                    } elseif ($funcion == 'Str_Pad') {
                        $resultado = str_pad($cadena, 20, '*');
                        echo "<tr><td colspan='2'>La función Str_Pad rellena la cadena con asteriscos hasta alcanzar una longitud de 20 caracteres.</td></tr>";
                    }
                
                ?>

                <tr>
                    <td>El resultado de la función es: </td>
                    <td><?php echo $resultado; ?></td>
                </tr>
            </table>
        </form>
            <?php
            //FORMULARIO DE ANTONY
            ?>
        <form action="funciones.php" method="post">
        <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["funcion"])) {
        $funcion = $_POST["funcion"];

        switch ($funcion) {
            case 'exp':
                handleExponentialFunction();
                break;
            case 'flo':
                handleFloorFunction();
                break;
            case 'abs':
                handleAbsoluteFunction();
                break;
            case 'cei':
                handleCeiFunction();
                break;
            case 'gra':
                handleGraFunction();
                break;
            case 'max':
                handleMaxFunction();
                break;
            case 'min':
                handleMinFunction();
                break;
            case 'random':
                handleRandomFunction();
                break;
            case 'pi':
                handlePiFunction();
                break;
            case 'pow':
                handlePowFunction();
                break;
            case 'round':
                handleRoundFunction();
                break;
            case 'sqrt':
                handleSqrtFunction();
                break;
                
            default:
                echo "<p>Seleccione una función válida</p>";
                break;
        }
      
    }
    function handleSqrtFunction()
        {
            echo '<h3>Función sqrt</h3>';
            echo '<p>La función sqrt() en PHP se utiliza para calcular la raíz cuadrada de un número. Toma un único argumento, el número del cual deseas calcular la raíz cuadrada, y devuelve el resultado.</p>';

            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['valor_sqrt'])) {
                $valor_sqrt = floatval($_POST['valor_sqrt']);
                $resultado = sqrt($valor_sqrt);
                echo "<p>La raíz cuadrada de $valor_sqrt es: $resultado</p>";
            }
        }
    function handleExponentialFunction()
    {
        echo '<h3>Función Exponencial (e^x)</h3>';
        echo '<p>En PHP, puedes utilizar la función exp() para calcular la función exponencial. La función exp() devuelve el valor de e elevado a la potencia de x, donde e es la base del logaritmo natural (aproximadamente 2.71828) y x es el argumento de la función.</p>';

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['valor_x'])) {
            $valor_x = floatval($_POST['valor_x']);
            $resultado = exp($valor_x);
            echo "<p>El resultado de e^$valor_x es: $resultado</p>";
        }
    }

    function handleFloorFunction()
    {
        echo '<h3>Función Floor</h3>';
        echo '<p>En PHP, la función floor() se utiliza para redondear un número hacia abajo al entero más cercano. Devuelve el valor entero más grande que sea menor o igual al número proporcionado.</p>';

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['valor_x'])) {
            $valor_x = floatval($_POST['valor_x']);
            $resultado = floor($valor_x);
            echo "<p>El resultado de floor($valor_x) es: $resultado</p>";
        }
    }

    function handleAbsoluteFunction()
    {
        echo '<h3>Función Absoluta</h3>';
        echo '<p>En PHP, la función abs() se utiliza para obtener el valor absoluto de un número, es decir, su distancia respecto al cero en la recta numérica, sin tener en cuenta la dirección.</p>';

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['valor_x'])) {
            $valor_x = floatval($_POST['valor_x']);
            $resultado = abs($valor_x);
            echo "<p>El valor absoluto de $valor_x es: $resultado</p>";
        }
    }

    function handleCeiFunction()
    {
        echo '<h3>Función ceil</h3>';
        echo '<p>La función ceil() en PHP se utiliza para redondear un número hacia arriba al entero más cercano. Devuelve el valor entero más pequeño que sea mayor o igual al número proporcionado</p>';

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['valor_x'])) {
            $valor_x = floatval($_POST['valor_x']);
            $resultado = ceil($valor_x);
            echo "<p>El resultado de ceil($valor_x) es: $resultado</p>";
        }
    }

    function handleGraFunction()
    {
        echo '<h3>Función getrandmax</h3>';
        echo '<p>En PHP, la función getrandmax() se utiliza para obtener el valor máximo que puede devolver la función rand() en el sistema en el que se está ejecutando PHP. La función rand() se utiliza para generar números aleatorios, y getrandmax() proporciona el valor máximo posible que se puede generar.</p>';

        $max_rand = getrandmax();
        echo "<p>El valor máximo que puede generar rand() es: $max_rand</p>";
    }

    function handleMaxFunction()
    {
        echo '<h3>Función max</h3>';
        echo '<p>En PHP, la función max() se utiliza para encontrar el valor más grande entre dos o más valores. Puedes proporcionar varios argumentos, y la función devolverá el valor más grande de todos los argumentos dados.</p>';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['valores_max']) && !empty($_POST['valores_max'])) {
                
                $valores = explode(",", $_POST['valores_max']);
                
                $valores = array_map('trim', $valores);
                
                $valores = array_filter($valores);

                if (!empty($valores)) {
                    
                    $maximo = max($valores);
                    echo "<p>El valor máximo de los números ingresados es: $maximo</p>";
                } else {
                    echo "<p>Por favor, ingrese al menos un valor.</p>";
                }
            } else {
                echo "<p>Por favor, ingrese al menos un valor.</p>";
            }
        }
    }

    function handleMinFunction()
    {
        echo '<h3>Función min</h3>';
        echo '<p>En PHP, la función min() se utiliza para encontrar el valor más pequeño entre dos o más valores. Puedes proporcionar varios argumentos, y la función devolverá el valor más pequeño de todos los argumentos dados.</p>';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['valores_min']) && !empty($_POST['valores_min'])) {
                
                $valores = explode(",", $_POST['valores_min']);
                
                $valores = array_map('trim', $valores);
                
                $valores = array_filter($valores);

                if (!empty($valores)) {
                    
                    $minimo = min($valores);
                    echo "<p>El valor mínimo de los números ingresados es: $minimo</p>";
                } else {
                    echo "<p>Por favor, ingrese al menos un valor.</p>";
                }
            } else {
                echo "<p>Por favor, ingrese al menos un valor.</p>";
            }
        }
    }

    function handleRandomFunction()
    {
        echo '<h3>Función mt_rand</h3>';
        echo '<p>En PHP, la función mt_rand() se utiliza para generar un número entero aleatorio utilizando el generador de números aleatorios Mersenne Twister. Este generador es más rápido y tiene una mejor distribución de números aleatorios que el antiguo generador rand().</p>';

        $random_number = mt_rand(0, mt_getrandmax());
        echo "<p>El número aleatorio generado es: $random_number</p>";
    }

    function handlePiFunction()
    {
        echo '<h3>Función pi</h3>';
        echo '<p>En PHP, la función pi() devuelve el valor de la constante matemática π (pi). Pi es una constante que representa la relación entre la circunferencia de un círculo y su diámetro.</p>';

        
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['valor_pi'])) {
            $valor_pi = floatval($_POST['valor_pi']);
            $resultado = pi() * $valor_pi;
            echo "<p>El resultado de pi() multiplicado por $valor_pi es: $resultado</p>";
        }
    }
    function handlePowFunction()
    {
        echo '<h3>Función pow</h3>';
        echo '<p>La función pow() en PHP se utiliza para calcular una potencia. Toma dos argumentos: la base y el exponente, y devuelve el resultado de elevar la base al exponente.</p>';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['base_pow']) && isset($_POST['exponente_pow'])) {
                $base_pow = floatval($_POST['base_pow']);
                $exponente_pow = floatval($_POST['exponente_pow']);
                $resultado = pow($base_pow, $exponente_pow);
                echo "<p>El resultado de $base_pow elevado a la $exponente_pow es: $resultado</p>";
            } else {
                echo "<p>Por favor, ingrese la base y el exponente.</p>";
            }
        }
    }

    function handleRoundFunction()
    {
        echo '<h3>Función round</h3>';
        echo '<p>La función round() en PHP se utiliza para redondear un número a la cantidad de decimales especificada (o al entero más cercano si no se proporciona el número de decimales).</p>';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['numero_round']) && isset($_POST['decimales_round'])) {
                $numero_round = floatval($_POST['numero_round']);
                $decimales_round = intval($_POST['decimales_round']);
                $resultado = round($numero_round, $decimales_round);
                echo "<p>El resultado de redondear $numero_round a $decimales_round decimales es: $resultado</p>";
            } else {
                echo "<p>Por favor, ingrese el número y la cantidad de decimales.</p>";
            }
        }
    }

    ?>
    <H3>3.- Funciones numéricas</H3>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="funcion">Selecciona la función:</label>
        <select name="funcion" id="funcion" onchange="mostrarCampo()" required>
            <option value="exp">Función Exponencial (e^x)</option>
            <option value="flo">Función Floor</option>
            <option value="abs">Función Absoluta</option>
            <option value="cei">Función ceil</option>
            <option value="gra">Función getrandmax</option>
            <option value="max">Función max</option>
            <option value="min">Función min</option>
            <option value="random">Función mt_rand</option>
            <option value="pi">Función pi</option>
            <option value="pow">Función pow</option>
            <option value="round">Función round</option>
            <option value="sqrt">Función sqrt</option>

           
        </select>

        <br>

        <div id="campo_numeros">
            <label for="valor_x">Ingrese el/los números: </label>
            <input type="text" name="valor_x" id="valor_x" required>
        </div>

        <div id="campo_valores_max" style="display: none;">
            <label for="valores_max">Ingrese valores separados por comas para la función max: </label>
            <input type="text" name="valores_max" id="valores_max">
        </div>

        <div id="campo_valores_min" style="display: none;">
            <label for="valores_min">Ingrese valores separados por comas para la función min: </label>
            <input type="text" name="valores_min" id="valores_min">
        </div>

        <div id="campo_pi" style="display: none;">
            <label for="valor_pi">Ingrese el valor a multiplicar:</label>
            <input type="text" name="valor_pi" id="valor_pi">
        </div>

        <div id="campo_base_pow" style="display: none;">
            <label for="base_pow">Ingrese la base para la función pow: </label>
            <input type="text" name="base_pow" id="base_pow">
        </div>

        <div id="campo_exponente_pow" style="display: none;">
            <label for="exponente_pow">Ingrese el exponente para la función pow: </label>
            <input type="text" name="exponente_pow" id="exponente_pow">
        </div>

        <div id="campo_numero_round" style="display: none;">
            <label for="numero_round">Ingrese el número para la función round: </label>
            <input type="text" name="numero_round" id="numero_round">
        </div>

        <div id="campo_decimales_round" style="display: none;">
            <label for="decimales_round">Ingrese la cantidad de decimales para la función round: </label>
            <input type="text" name="decimales_round" id="decimales_round">
        </div>

        <div id="campo_valor_sqrt" style="display: none;">
            <label for="valor_sqrt">Ingrese el número para la función sqrt: </label>
            <input type="text" name="valor_sqrt" id="valor_sqrt">
        </div>

        <br>

        <input type="submit" value="Calcular">
    </form>

    <script>
        function mostrarCampo() {
            var seleccion = document.getElementById("funcion").value;
            var campoNumeros = document.getElementById("campo_numeros");
            var campoValoresMax = document.getElementById("campo_valores_max");
            var campoValoresMin = document.getElementById("campo_valores_min");
            var campoValorPi = document.getElementById("campo_pi");
            var campoBasePow = document.getElementById("campo_base_pow");
            var campoExponentePow = document.getElementById("campo_exponente_pow");
            var campoNumeroRound = document.getElementById("campo_numero_round");
            var campoDecimalesRound = document.getElementById("campo_decimales_round");
            var campoValorSqrt = document.getElementById("campo_valor_sqrt");
            var inputValorX = document.getElementById("valor_x");

            if (seleccion === "max") {
                campoNumeros.style.display = "none";
                campoValoresMax.style.display = "block";
                campoValoresMin.style.display = "none";
                campoBasePow.style.display = "none";
                campoExponentePow.style.display = "none";
                campoNumeroRound.style.display = "none";
                campoDecimalesRound.style.display = "none";
                campoValorSqrt.style.display = "none";
                inputValorX.setAttribute("disabled", "disabled");
            } else if (seleccion === "min") {
                campoNumeros.style.display = "none";
                campoValoresMax.style.display = "none";
                campoValoresMin.style.display = "block";
                campoBasePow.style.display = "none";
                campoExponentePow.style.display = "none";
                campoNumeroRound.style.display = "none";
                campoDecimalesRound.style.display = "none";
                campoValorSqrt.style.display = "none";
                inputValorX.setAttribute("disabled", "disabled");
            } else if (seleccion === "random") {
                campoNumeros.style.display = "none";
                campoValoresMax.style.display = "none";
                campoValoresMin.style.display = "none";
                campoBasePow.style.display = "none";
                campoExponentePow.style.display = "none";
                campoNumeroRound.style.display = "none";
                campoDecimalesRound.style.display = "none";
                campoValorSqrt.style.display = "none";
                inputValorX.setAttribute("disabled", "disabled");
            } else if (seleccion === "pi") {
                campoNumeros.style.display = "none";
                campoValoresMax.style.display = "none";
                campoValoresMin.style.display = "none";
                campoValorPi.style.display = "block";
                campoBasePow.style.display = "none";
                campoExponentePow.style.display = "none";
                campoNumeroRound.style.display = "none";
                campoDecimalesRound.style.display = "none";
                campoValorSqrt.style.display = "none";
                inputValorX.setAttribute("disabled", "disabled");
            } else if (seleccion === "pow") {
                campoNumeros.style.display = "none";
                campoValoresMax.style.display = "none";
                campoValoresMin.style.display = "none";
                campoBasePow.style.display = "block";
                campoExponentePow.style.display = "block";
                campoNumeroRound.style.display = "none";
                campoDecimalesRound.style.display = "none";
                campoValorSqrt.style.display = "none";
                inputValorX.setAttribute("disabled", "disabled");
            } else if (seleccion === "round") {
                campoNumeros.style.display = "none";
                campoValoresMax.style.display = "none";
                campoValoresMin.style.display = "none";
                campoBasePow.style.display = "none";
                campoExponentePow.style.display = "none";
                campoNumeroRound.style.display = "block";
                campoDecimalesRound.style.display = "block";
                campoValorSqrt.style.display = "none";
                inputValorX.setAttribute("disabled", "disabled");
            } else if (seleccion === "sqrt") {
                campoNumeros.style.display = "none";
                campoValoresMax.style.display = "none";
                campoValoresMin.style.display = "none";
                campoValorPi.style.display = "none";
                campoBasePow.style.display = "none";
                campoExponentePow.style.display = "none";
                campoNumeroRound.style.display = "none";
                campoDecimalesRound.style.display = "none";
                campoValorSqrt.style.display = "block";
                inputValorX.setAttribute("disabled", "disabled");

            } else {
                campoNumeros.style.display = "block";
                campoValoresMax.style.display = "none";
                campoValoresMin.style.display = "none";
                campoBasePow.style.display = "none";
                campoExponentePow.style.display = "none";
                campoNumeroRound.style.display = "none";
                campoDecimalesRound.style.display = "none";
                inputValorX.removeAttribute("disabled");
            }
        }
    </script>
        </form>

        <form action="funciones.php" method="post">
        <style>
                .cuadricula,
                .lineas {
                    border: 2px solid black;
                    width: 100%;
                    padding: 20px;
                }

                .delgado {
                    border: 1px solid black;
                }

                table {
                    border-collapse: collapse;
                    width: 100%;
                }

                .bordes {
                    padding: 5px;
                }

                .resaltado {
                    background-color: black;
                    color: white;
                }
            </style>
            <h3>4.- Funciones de fecha y hora</h3>
            <table class="cuadricula">

                <tr>
                    <td>
                        <label for="fecha">Ingresar Fecha:</label>
                        <input type="date" name="fecha" id="fecha">
                    </td>
                    <td>
                        <input type="submit" value="Validar Fecha">
                    </td>
                </tr>

                <tr>
                    <td class="delgado">La función
                        date: nos da la fecha y hora actual,
                        pero tiene una particularidad, que
                        coge la fecha y hora del servidor y
                        la zona horaria por lo tanto se
                        tiene que especificar la zona horaria,
                        ingresar acá para
                        conocerlos: https://www.php.net/manual/es/timezones.america.php
                    </td>
                    <td class="delgado">
                        <?php


                        error_reporting(0);
                        date_default_timezone_set("America/Lima");

                        $fecha_actual = date('d-M-Y H:i:s');



                        echo "<br>";
                        echo "Fecha y Hora Actual: $fecha_actual";
                        ?>
                    </td>
                </tr>
                <tr>
                    <td class="delgado">
                        Función time: Se utiliza para obtener la marca de
                        tiempo Unix actual, que es un valor entero que representa
                        el número de segundos transcurridos
                        desde el 1 de enero de 1970 a las 00:00:00
                    </td>
                    <td class="delgado">
                        <?php
                        $tiempoActual = time();
                        echo 'Tiempo actual en segundos: ' . $tiempoActual;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td class="delgado">
                        Función checkdate: Se utiliza para comprobar
                        si una fecha dada es válida. Toma tres argumentos:
                        el mes, el día y el año, y devuelve true si la fecha
                        es válida y false si no lo es.
                    </td>
                    <td class="delgado">
                        <?php
                        error_reporting(0);

                        $fecha = $_POST['fecha'];
                        $fecha_actual = date('Y-m-d');

                        if (empty($fecha)) {
                            echo "Por favor, ingrese una fecha.";
                        } elseif (checkdate(date('m', strtotime($fecha)), date('d', strtotime($fecha)), date('Y', strtotime($fecha)))) {
                            if ($fecha == $fecha_actual) {
                                echo "La fecha coincide con la fecha actual.";
                            } else {
                                echo "La fecha no coincide con la fecha actual.";
                            }
                        } else {
                            echo "La fecha ingresada no es válida.";
                        }
                        ?>


                    </td>
                </tr>
                <tr>
                    <td class="delgado">
                        Función getdate: Se utiliza para obtener información
                        detallada sobre la fecha actual.
                        Devuelve un array asociativo que contiene
                        diversos componentes de la fecha y hora
                    </td>
                    <td class="delgado">
                        <?php
                        date_default_timezone_set("America/Lima"); 
                        $hoy = getdate();
                        print_r($hoy);
                        ?>
                    </td>
                </tr>


            </table>
        </form>
        </section>

        </form>
    </div>
    
    <footer>
        <h6>Todos los derechos reservados @JAE@</h6>
    </footer>
    <script>
        function abrirNuevaVentana() {
            window.open("funciones2.php", "_blank");
        }
    </script>
</body>

</html>