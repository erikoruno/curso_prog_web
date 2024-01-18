<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago de Empleados</title>
    <link rel="stylesheet" href="estilo.css">
    
</head>
<body>
    <style>
       
    </style>

    <header>
        <h3>Cuadro de Sueldos</h3>
    </header>

    <section>

        <form action="caso2.php" method="get">
            <h4 >PAGO DE EMPLEADOS</h4>
            <table border="0" cellspacing = "0" cellpading = "0" >
                <tr>
                    <td class="etiqueta">Empleado        </td>
                    <td>     <input type="text" name="txtEmpleado" value="">
                    </td>
                </tr>
                <tr>
                    <td class="etiqueta">Horas trabajadas    </td>
                    <td>    <input type="text" name="txtHorasTrabajo" value=""> </td>
                </tr>
                <tr>
                    <td class="etiqueta">Tarifa por Hora</td>
                    <td><input type="text" name="txtTarifaPorHora" value=""></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button type="submit" class="btn-verde">Procesar</button>
                        <button type="reset" class="btn-azul">Limpiar</button>   
                       
                    </td>
                </tr>

                <?php
                error_reporting(0);
                 $empleado = $_GET['txtEmpleado'];
                 $horasTrabajo = $_GET['txtHorasTrabajo'];
                 $tarifaPorHora = $_GET['txtTarifaPorHora'];

                ?>
                <tr>
                    <td>Empleado    </td>
                    <td placeholder = "Ingrese nombre">
                        <?php
                        echo $empleado;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Horas de trabajo</td>
                    <td>
                        <?php
                        echo $horasTrabajo;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Tarifa por hora</td>
                    <td>
                        <?php
                        echo "S/ $tarifaPorHora";
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Sueldo bruto</td>
                    <td>
                        <?php
                        $sueldoBruto = $horasTrabajo * $tarifaPorHora;
                        printf("S/ %.2f", $sueldoBruto);                        
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Descuento ESSALUD</td>
                    <td>
                        <?php
                        define("ESSALUD",0.12);
                        $dctoEssalud = $sueldoBruto * ESSALUD;
                        printf("S/ %.2f", $dctoEssalud);                        
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Descuento AFP</td>
                    <td>
                        <?php
                        define("AFP",0.10);
                        $dctoAfp = $sueldoBruto * AFP;
                        printf("S/ %.2f", $dctoAfp);                        
                        ?>
                        </td>
                </tr>
                <tr>
                    <td>Sueldo neto</td>
                    <td>
                        <?php
                        $sueldoNeto = $sueldoBruto - $dctoEssalud - $dctoAfp;
                        printf("S/ %.2f", $sueldoNeto);
                        ?>
                    </td>
                </tr>
            </table>
        </form>
    </section>
    <footer>
        <H6>DERECHOS RESERVADOS ERIKO</H6>
    </footer>
</body>
</html>