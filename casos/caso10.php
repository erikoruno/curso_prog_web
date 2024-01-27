<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago de préstamo usando FOR</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header>
        <h3>PAGO DE PRÉSTAMO USANDO FOR</h3>
    </header>
    <section>
        <form action="caso10.php" method="post">
            <h4>CASA DE PRESTAMO</h4>
            <img src="img/prestamo.jpg" width="500" height="150">
            <table border="0" cellspacing="0" cellpading="0">

                <tr>
                    <td class="etiqueta">Cliente</td>
                    <td>
                        <input type="text" name="txtCliente">
                    </td>
                </tr>
                <tr>
                    <td class="etiqueta">Monto prestado</td>
                    <td>
                        <input type="text" name="txtPrestamo">
                    </td>
                </tr>
                <tr>
                    <td>Nª CUotas</td>
                    <td>
                        <select name="selCuotas" >
                            <?php
                            $i = 1;
                            while ($i <= 24) {
                                $selected = ($i == $cuotas) ? 'selected' : '';
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
                        <button type="reset" class="btn-azul" value="limpiar">Cotizar</button>
                    </td>
                </tr>
            </table>
        </form>
    </section>
    <footer>
        <h6>Todos los derechos reservados @eriko@</h6>
    </footer>
</body>
</html>