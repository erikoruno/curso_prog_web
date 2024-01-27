<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago de préstamo usando FOR</title>
    <link rel="stylesheet" href="estilo.css">

    
    <header>
        <h3>PAGO DE PRÉSTAMO USANDO FOR</h3>
    </header>
    <section>
        <form action="caso10.php" method="post">
            <h4>CASA DE PRESTAMO</h4>
            <img src="img/prestamo.jpg" width="500" height="150">

            <?php
            error_reporting(0);
            $cliente = $_POST['txtCliente'];
            $montoprestamo = $_POST['txtPrestamo'];
            $nroCuotas = $_POST['selCuotas'];

            if ($nroCuotas >= 3 && $nroCuotas < 6) {
                $impsto = 0.05;
            } elseif ($nroCuotas >= 6 && $nroCuotas < 9) {
                $impsto = 0.07;
            } elseif ($nroCuotas >= 9 && $nroCuotas < 12) {
                $impsto = 0.1;
            } elseif ($nroCuotas >= 12) {
                $impsto = 0.2;
            }

            $subtotal = ($montoprestamo * $impsto) + $montoprestamo;

            ?>

            <table border="0" cellspacing="0" cellpading="0">

                <tr>
                    <td>Cliente</td>
                    <td>
                        <input type="text" name="txtCliente" value="<?php echo $cliente; ?>" size="30">
                    </td>
                    <td>
                        <?php
                        if (empty($cliente)) {
                            echo "<p style=\"color: red;\">Debe registrar el nombre del cliente</p>";
                        }

                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Monto prestado</td>
                    <td>
                        <input type="text" name="txtPrestamo" value="<?php echo $montoprestamo; ?>">
                    </td>
                    <td>
                        <?php
                        if (empty($montoprestamo)) {
                            echo "<p style=\"color: red;\">Debe registrar el monto de prestamo</p>";
                        } elseif (!is_numeric($montoprestamo)) {
                            echo "<p style=\"color: blue;\">El monto de préstamo debe ser un número</p>";
                        }

                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Nª CUotas</td>
                    <td>
                        

                        <select name="selCuotas">
                            <?php
                            $i = 1;
                            while ($i <= 24) {
                                $selected = ($i == $nroCuotas) ? 'selected' : '';
                                echo '<option value="' . $i . '" ' . $selected . '>' . $i . '</option>';
                                $i++;
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button type="submit" class="btn-azul" value="limpiar">Cotizar</button>
                    </td>
                </tr>
            </table>
        </form>

        <form>


            <style>
                .cuadricula,
                .lineas {
                    border: 2px solid black;
                    width: 100%;
                }


                .resaltado {
                    background-color: black;
                    color: white;
                }

                .lineas {
                    padding: 5px;

                    width: 9em;
                }
            </style>
            <table>
                <tr>
                    <td class="lineas resaltado">N° DE CUOTA</td>
                    <td class="lineas resaltado">FECHA DE PAGO</td>
                    <td class="lineas resaltado">MONTO MENSUAL</td>
                </tr>

                <?php
                if (!empty($cliente) && is_numeric($montoprestamo) && is_numeric($nroCuotas)) {
                    $monto_mensual = $subtotal / $nroCuotas;
                    $fecha_inicio = date('d-m-Y');

                    for ($i = 1; $i <= $nroCuotas; $i++) {
                        $fecha_pago = date('d-m-Y', strtotime("$fecha_pago +1 month"));
                        echo "<tr>
                                 <td >$i</td>
                                 <td >$fecha_pago</td>
                                 <td >";

                        
                        printf('S/ %.2f', $monto_mensual);

                        echo "</td>
                            </tr>";
                    }
                }
                ?>

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>


            </table>
        </form>
    </section>
    <footer>
        <h6>Todos los derechos reservados @eriko@</h6>
    </footer>
</body>

</html>