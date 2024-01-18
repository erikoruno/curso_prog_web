<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header>
        <h3>TIENDA</h3>
    </header>
    <section>
        <form action="caso3.php" method="get">
            <h4>VENTA DE PRODUCTO</h4>
            <table border="0" cellspacing = "0" cellpading = "0">

                <?php
                
                $precioProducto = 20.55;
                ?>


                <tr>
                    <td class="etiqueta">Cantidad </td>
                    <td >
                        <input type="text" name="txtCantidad" value="">
                    </td>
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
                $cantidad= $_GET['txtCantidad'];
                ?>

                <tr>
                    <td class="etiqueta">Precio de Producto</td>
                    <td>
                        <?php
                        printf("S/ %.2f",$precioProducto);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td class="etiqueta">Cantidad</td>
                    <td>
                        <?php
                        echo "$cantidad";
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Importe de compra</td>
                    <td>
                        <?php
                        $importeCompra = $precioProducto * $cantidad;
                        printf("S/ %.2f",$importeCompra);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Importe de descuento</td>
                    <td>
                        <?php
                        define("DCTO",0.10);
                        $dscto = $importeCompra * DCTO;
                        printf("S/ %.2f", $dscto);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Importe neto</td>
                    <td>
                        <?php
                        $importeNeto = $importeCompra - $dscto;
                        printf("S/ %.2f", $importeNeto);
                        ?>

                    </td>
                </tr>

            </table>


        </form>
    </section>
    <footer>
        <h6>Derechos Reservados Eriko</h6>
    </footer>
</body>
</html>