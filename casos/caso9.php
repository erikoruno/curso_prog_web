<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venta productos usando While</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <header>
        <h3>Venta de productos Usando While</h3>
    </header>
    <section>
        <form action="caso9.php" method="post">
            <img src="img/cocina.jpg" width="500" height="150">

            <?php

            error_reporting(0);
            $producto = $_POST['selProducto'];
            $precio = $_POST['txtPrecio'];
            $cantidad = $_POST['txtCantidad'];
            $cuotas = $_POST['selCuotas'];

            switch ($producto) {
                case 'lavadora':
                    $precio = 1500;
                    break;
                case 'refrigeradora':
                    $precio = 3500;
                    break;
                case 'radiograbadora':
                    $precio = 500;
                    break;
                case 'tostadora':
                    $precio = 150;
                    break;
                default:
                    $precio = '';
                    break;
            }

            ?>

            <h4>VENTA DE PRODUCTOS</h4>
            <table border="0" cellspacing="0" cellpading="0">
                <tr>
                    <td class="etiqueta">Producto</td>
                    <td>
                        <select name="selProducto">

                            <option value="lavadora" <?php echo ($producto === 'lavadora') ? 'selected' : ''; ?>>Lavadora</option>
                            <option value="refrigeradora" <?php echo ($producto === 'refrigeradora') ? 'selected' : ''; ?>>Refrigeradora</option>
                            <option value="radiograbadora" <?php echo ($producto === 'radiograbadora') ? 'selected' : ''; ?>>Radiograbadora</option>
                            <option value="tostadora" <?php echo ($producto === 'tostadora') ? 'selected' : ''; ?>>Tostadora</option>
                        </select>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td class="etiqueta">Precio</td>
                    <td>
                        <input type="text" name="txtPrecio" size="13" value="<?php echo $precio; ?>" readonly>

                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td class="etiqueta">Cantidad</td>
                    <td>
                        <input type="text" name="txtCantidad" size="13" value="<?php echo $cantidad; ?>">
                    </td>
                    <td>

                        <button type="submit" class="btn-verde" value="procesar">Calcular</button>
                    </td>
                </tr>
                <tr>
                    <td class="etiqueta">Subtotal</td>
                    <?php
                    $subtotal = $cantidad * $precio;

                    $cuota_monto = $cuotas > 0 ? $subtotal / $cuotas : 0;
                    ?>
                    <td>
                        <input type="text" name="txtSubtotal" size="13" value="<?php echo $subtotal; ?>">
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td class="etiqueta">Cuotas</td>
                    <td>
                        <?php

                        $i = 1;
                        $options = '';


                        while ($i <= 24) {
                            $options .= '<option value="' . $i . '">' . $i . '</option>';
                            $i++;
                        }
                        ?>
                        <select name="selCuotas">
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
                    <td></td>
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
                    <td class="lineas resaltado">Nro Letras</td>
                    <td class="lineas resaltado">Monto</td>
                </tr>
                <?php

                $i = 1;


                while ($i <= $cuotas) {
                    printf('<tr>');
                    printf('<td>%d</td>', $i);
                    printf('<td>S/ %.2f</td>', $cuota_monto);
                    printf('</tr>');
                    $i++;
                }
                ?>
            </table>
        </form>
    </section>
  
    <footer>
        <h6>Todos los derechos reservados @eriko@</h6>
    </footer>
</body>

</html>