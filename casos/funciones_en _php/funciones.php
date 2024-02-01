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
        <h3>1.-Funciones de variables</h3>
    </header>
    <div class="container">

        <section class="left-section">
            <form action="funciones.php" method="post">
                <?php
                error_reporting(0);
                $variable1 = empty($_POST['txtDato1']) ? null : $_POST['txtDato1'];
                $variable2 = empty($_POST['txtDato2']) ? null : $_POST['txtDato2'];
                //$variable1 = null;
                //$variable2 = "Hola";

                // Verificar si las variables están definidas

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
                                var_dump($variable1); // Esto generará NULL

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
                                echo "Variable 2: " . gettype($variable2) . "<br>";  // Muestra: string

                                if (is_numeric($variable2)) {
                                    // Si es numérico, intenta la conversión
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
                                // Verificar si es un número de punto flotante
                                elseif (is_numeric($variable2) && filter_var($variable2, FILTER_VALIDATE_FLOAT) !== false) {
                                    echo "La variable 2: float";
                                }
                                // Si no es un número, considerarlo como cadena
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

            <form action="funciones2.php" method="post" target="_blank">
                <h3>2.-Funciones de cadena </h3>

                
                    <button type="button" onclick="abrirNuevaVentana()">Presione para ir:</button>
            </form>
        </section>

        </form>
    </div>
    <footer>
        <h6>Todos los derechos reservados @eriko@</h6>
    </footer>
    <script>
        function abrirNuevaVentana() {
            window.open("funciones2.php", "_blank");
        }
    </script>
</body>

</html>