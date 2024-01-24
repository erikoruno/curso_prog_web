<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Mensualidad</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header>
        <h3>Control de mensualidad</h3>
    </header>

    <section>
        <form action="caso7.php" method="post">
            <h4>MENSUALIDAD DE UNIVERSIDAD</h4>
            <img src="img/personas.jpg" width="500" height="150">
                <?php
                    error_reporting(0);
                    $alumno = $_POST['txtAlumno'];
                    $categoria = $_POST['selCategoria'];
                    $promedio = $_POST['txtPromedio'];

                    if ($categoria == 'a') {
                        $selA = 'SELECTED';

                    } else {
                        $selA = "";
                    }

                    if ($categoria == 'b') {
                        $selB = 'SELECTED';

                    } else {
                        $selB = "";
                    }

                    if ($categoria == 'c') {
                        $selC = 'SELECTED';

                    } else {
                        $selC = "";
                    }

                    if ($categoria == 'd') {
                        $selD = 'SELECTED';

                    } else {
                        $selD = "";
                    }



                ?>



            <table border="0" cellspacing ="0" cellpading="0">
                <tr>
                    <td class="etiqueta">Nombre alumno</td>
                    <td>
                        <input type="text" name="txtAlumno" size="30" placeholder="Ingrese su nombre" >
                    </td>
                    
                </tr>
                <tr>
                    <td class="etiqueta">Seleccione categoria</td>
                    <td>
                        <select name="selCategoria">
                            <option value="a" <?php echo $selA ?> >A</option>
                            <option value="b" <?php echo $selB ?>>B</option>
                            <option value="c" <?php echo $selC ?>>C</option>
                            <option value="d" <?php echo $selD ?>>D</option>
                            <option value="" ></option>
                        </select>
                    </td>
                    
                </tr>
                <tr>
                    <td class="etiqueta">Ingrese promedio</td>
                    <td>
                        <input type="text" name="txtPromedio" size="30" placeholder="Ingrese su promedio" >
                    </td>
                   
                </tr>
                <tr>
                    <td></td>
                    <td>
                         <button type="submit" class="btn-verde" value="procesar">Procesar</button>
                    </td>
                </tr>

                <tr>
                    <td>
                        <?php
                            if ($categoria == 'a') {
                                $montomensual = 850;
                            }
                            if ($categoria == 'b') {
                                $montomensual = 750;
                            }
                            if ($categoria == 'c') {
                                $montomensual = 650;
                            }
                            if ($categoria == 'd') {
                                $montomensual = 500;
                            }


                        ?>
                    </td>
                </tr>

                <tr>
                    <td class="etiqueta">Monto mensualidad</td>
                    <td>
                        <?php
                            printf("S/ %.2f",$montomensual);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td class="etiqueta">Monto descuento</td>
                    <td>
                        <?php
                            if ($promedio < 12) {
                                $dscto = 0;
                            }

                            if ($promedio >= 13 && $promedio <= 15) {
                                $dscto = 0.1;
                            }
                            if ($promedio >= 16 && $promedio <=17) {
                                $dscto = 0.15;
                            }
                            if ($promedio >=18 && $promedio <=19) {
                                $dscto = 0.25;
                            }
                            if ($promedio = 20) {
                                $dscto = 0.50;
                            }
                            if ($promedio >20) {
                                $dscto = 0;
                            }

                            $montodscto = $montomensual * $dscto; 
                            printf("S/ %.2f",$montodscto);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td class="etiqueta">Monto a cancelar</td>
                    <td>
                        <?php
                            
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