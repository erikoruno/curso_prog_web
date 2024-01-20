<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header>
        <h3>Pago de Empleados</h3>
    </header>
    <section>
        <form action="caso4.php" method="post">
            <h4>PAGO DE SALARIO DE EMPLEADOS</h4>
            <img src="img/empleados.jpg" width="500" height="150">
            <?php
                        error_reporting(0);
                        $empleado = $_POST['txtEmpleado'];
                        $horas = $_POST['txtHoras'];
                        $categoria = $_POST['selCategoria'];

                        if ($categoria == 'jefe') {
                            $selJefe = 'SELECTED';

                        } else {
                            $selJefe = "";
                        }

                        if ($categoria == 'administrativo') {
                            $selAdminstrtivo = 'SELECTED';

                        } else {
                            $selAdminstrtivo = "";
                        }

                        if ($categoria == 'operario') {
                            $selOperario = 'SELECTED';

                        } else {
                            $selOperario = "";
                        }

                        if ($categoria == 'practicante') {
                            $selPracticante = 'SELECTED';

                        } else {
                            $selPracticante = "";
                        }


                        
                        ?>
            <table border="0" cellspacing = "0" cellpading = "0">
                <tr>
                    <td class="etiqueta">Empleado</td>
                    <td>
                        <input type="text" name="txtEmpleado" value=" <?php echo $empleado;?>">
                    </td>
                </tr>
                <tr>
                    <td class="etiqueta">Horas</td>
                    <td>
                    <input type="text" name="txtHoras" value=" <?php echo $horas;?>">
                    </td>
                </tr>
                <tr>
                    <td class="etiqueta">Categoria</td>
                    <td>
                        <select name="selCategoria" >
                        <option value="jefe" <?php echo $selJefe ?>>Jefe</option>
                        <option value="adminsitrativo" <?php echo $selAdminstrtivo ?>>Administrativo</option>
                        <option value="operario" <?php echo $selOperario ?>>Operario</option>
                        <option value="practicante" <?php echo $selPracticante ?>>Practicante</option>
                        </select>
                    </td>
                </tr>
                <tr>
                     <td>
                     <button type="submit" class="btn-verde" value="calcular">Calcular</button>
                    </td>
                    <td>
                     <button type="reset" class="btn-azul" value="limpiar">Limpiar</button>
                    </td>
                </tr>

                <tr>
                    
                    <td>
                        <?php 
                            if ($categoria == 'jefe') {
                                $pagoHora = 50;
                            } elseif ($categoria == 'administrativo') {
                                $pagoHora = 30;
                            } elseif ($categoria == 'operario') {
                                $pagoHora = 15;
                            } elseif ($categoria == 'practicante') {
                                $pagoHora = 5;
                            }

                            $sueldoBruto = $pagoHora * $horas;
                                                  
                        ?>
                    
                    </td>

                    <tr>
                        <td class="etiqueta">Empleado</td>
                        <td>
                            <?php
                                echo $empleado;
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="etiqueta">Horas trabajadas</td>
                        <td>
                            <?php
                                echo $horas;
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="etiqueta">Cargo</td>
                        <td>
                            <?php
                                echo $categoria;
                            ?>
                
                        </td>
                    </tr>
                    <tr>
                        <td class="etiqueta">Sueldo a pagar</td>
                        <td>
                            <?php
                                echo $sueldoBruto;
                            ?>
                        </td>
                    </tr>
                </tr>
            </table>
        </form>
    </section>
    <footer>
        <h6>Derechos Reservados Eriko</h6>
    </footer>
</body>
</html>