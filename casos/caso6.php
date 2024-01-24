<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venta de Productos</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header>
        <h3>Venta de Productos</h3>
    </header>
    <section>

    
            <form action="caso6.php" method="post">
                <h4>VENTA DE PRODUCTOS ELECTRODOMÉSTICOS</h4>
                <img src="img/electro.jpg" width="500" height="150" >
                    <?php
                    error_reporting(0);
                    $cliente = $_POST['txtCliente'];
                    $producto = $_POST['selProducto'];
                    $cantidad = $_POST['txtCantidad'];

                    if ($producto == 'cocina') {
                        $selCocina = 'SELECTED';

                    } else {
                        $selCocina = "";
                    }
                    
                    if ($producto == 'refrigeradora') {
                        $selRefrigeradora = 'SELECTED';

                    } else {
                        $selRefrigeradora = "";
                    }

                    if ($producto == 'television') {
                        $selTelevision = 'SELECTED';

                    } else {
                        $selTelevision = "";
                    }

                    if ($producto == 'lavadora') {
                        $selLavadora = 'SELECTED';

                    } else {
                        $selLavadora = "";
                    }

                    if ($producto == 'radiograbadora') {
                        $selRadiograbadora = 'SELECTED';

                    } else {
                        $selRadiograbadora = "";
                    }
                        define("COCINA",1200);
                        define("REFRI",2500);
                        define("TELE",3200);
                        define("LAVA",1200);
                        define("RADIOGRABA",1200);


                    ?>

                <table border="0" cellspacing ="0" cellpading="0">
            <tr>
                <td class="etiqueta">Cliente</td>
                <td>
                    <input type="text" name="txtCliente" size="30" placeholder="Ingrese su nombre" >
                </td>
            </tr>
            <tr>
                <td class="etiqueta">Producto</td>
                <td>
                    <select name="selProducto">
                        <option value="cocina" <?php echo $selCocina ?>>Cocina</option>
                        <option value="refrigeradora" <?php echo $selRefrigeradora ?>>Refrigeradora</option>
                        <option value="television" <?php echo $selTelevision ?>>Television</option>
                        <option value="lavadora" <?php echo $selLavadora ?>>Lavadora</option>
                        <option value="radiograbadora" <?php echo $selRadiograbadora ?>>Radiograbadora</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="etiqueta">Cantidad</td>
                <td>
                <input type="text" name="txtCantidad" size="30" placeholder="Ingrese la cantidad" >
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
                            if ($producto == 'cocina') {
                                $precioproducto = 1200;
                            }

                            $subtotalpagar = $cantidad * $precioproducto;
                            ?>
                        </td>
                    </tr>

            <tr>
                <td class="etiqueta">Precio del producto</td>
                <td>
                    <?php
                        echo $precioproducto;
                    ?>
                </td>
            </tr>
            <tr>
                <td>Subtotal a pagar</td>
                <td>
                <?php
                        echo $subtotalpagar;
                    ?>               
                </td>
            </tr>
            <tr>
                <td>Monto de descuento</td>
                <td>
                    
                </td>
            </tr>
            <tr>
                <td>Monto a pagar</td>
                <td></td>
            </tr>

            </table>
        </form>
    </section>
    <footer>
        <h6>Derechos Reservados Eriko</h6>
    </footer>
</body>
</html>