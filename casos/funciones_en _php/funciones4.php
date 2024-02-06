<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones de fecha y hora</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h3>4.-Funciones de fecha y hora</h3>
    </header>
    <section>
        <form action="funciones4.php" method="post">



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
    <footer>
        <h6>Todos los derechos reservados @JAE@</h6>
    </footer>
</body>

</html>