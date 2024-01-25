<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venta de entradas</title>
    <link rel="stylesheet" href="estilo.css">
    
</head>
<body>
    <header>
        <h3>Venta de entradas</h3>
    </header>

    <section>
        <?php
            $fechaActual = date('Y-m-d');
        ?>
        <form action="caso8.php" method="post">
            <h4>VENTA DE ENTRADAS (TEATRO)</h4>
            <img src="img/teatro.jpg" width="500" height="150">

                <?php
                    error_reporting(0);
                    $comprador = $_POST['txtComprador'];
                    $cantidadAdultos = $_POST['txtAdultos'];
                    $cantidadNiños = $_POST['txtNiños'];

                    $diaSemana = date('N', strtotime($fechaActual));

                    $nombreDia = '';

                    switch ($diaSemana) {
                        case 1:
                            $nombreDia = 'Domingo';
                            $costoAdulto = 50;
                            $costoNiño = 45;
                            $subTotalAdultos = $cantidadAdultos * $costoAdulto;
                            $subTotalNiños = $cantidadNiños * $costoNiño;
                            break;
                        case 2:
                            $nombreDia = 'Lunes';
                            $costoAdulto = 10;
                            $costoNiño = 5;
                            $subTotalAdultos = $cantidadAdultos * $costoAdulto;
                            $subTotalNiños = $cantidadNiños * $costoNiño;
                            break;
                        case 3:
                            $nombreDia = 'Martes';
                            $costoAdulto = 8;
                            $costoNiño = 4;
                            $subTotalAdultos = $cantidadAdultos * $costoAdulto;
                            $subTotalNiños = $cantidadNiños * $costoNiño;
                            break;
                        case 4:
                            $nombreDia = 'Miercoles';
                            $costoAdulto = 16;
                            $costoNiño = 8;
                            $subTotalAdultos = $cantidadAdultos * $costoAdulto;
                            $subTotalNiños = $cantidadNiños * $costoNiño;

                            break;
                        case 5:
                            $nombreDia = 'Jueves';
                            $costoAdulto = 16;
                            $costoNiño = 8;
                            $subTotalAdultos = $cantidadAdultos * $costoAdulto;
                            $subTotalNiños = $cantidadNiños * $costoNiño;
                            break;
                        case 6:
                            $nombreDia = 'Viernes';
                            $costoAdulto = 16;
                            $costoNiño = 8;
                            $subTotalAdultos = $cantidadAdultos * $costoAdulto;
                            $subTotalNiños = $cantidadNiños * $costoNiño;
                            break;
                        case 7:
                            $nombreDia = 'Sabado';
                            $costoAdulto = 50;
                            $costoNiño = 45;
                            $subTotalAdultos = $cantidadAdultos * $costoAdulto;
                            $subTotalNiños = $cantidadNiños * $costoNiño;
                            break;
                        default:
                            $nombreDia = 'Desconocido';
                            break;
                    }


                ?>

            <table border="0" cellspacing ="0" cellpading="0">
                <tr>
                    <td class="etiqueta">Comprador</td>
                    <td>
                    <input type="text" name="txtComprador" size="30" placeholder="Ingrese su nombre" 
                        >
                    </td>
                </tr>
                <tr>
                    <td>Fecha actual</td>
                    <td>
                    <input type="date" name="txtFecha"  
                    value="<?php echo $fechaActual; ?>" readonly > 
                    </td>
                </tr>
                <tr>
                    <td>N° entrada adultos</td>
                    <td>
                        <input type="text" name="txtAdultos" size="30"  
                        >
                    </td>
                </tr>
                <tr>
                    <td>N° entrada niños</td>
                    <td>
                    <input type="text" name="txtNiños"   
                        >
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                    <button type="submit" class="btn-verde" value="procesar">Adquirir</button>
                    </td>
                </tr>
            
                </table>
        </form>
        
        <form>
            

            <style>
                .cuadricula,.lineas {
                 border:2px solid black;
                 width: 100%;
                 
                 
                 }
                
                 
            </style>
            <table class="cuadricula">
                <tr>
                    <td >Comprador</td>
                    <td>
                        <?php
                            echo $comprador;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Costo por adultos</td>
                    <td>
                        <?php
                           printf("S/ %.2f",$subTotalAdultos);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Costo por niños</td>
                    <td>
                        <?php
                           printf("S/ %.2f",$subTotalNiños);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Día de promoción</td>
                    <td>
                    <?php
                           echo $nombreDia; 
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Monto total a pagar</td>
                    <td>
                        <?php
                           $totalPagar = $subTotalAdultos+$subTotalNiños;
                           printf("S/ %.2f",$totalPagar);
                        ?>
                    </td>
                </tr>
            </table>
            </form>
    </section>

    <footer>
        <h6>Derechos reservados eriko@</h6>
    </footer>
</body>
</html>