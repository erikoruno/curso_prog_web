<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caso desarrollado 01</title>
    <link rel="stylesheet" href="estilo.cc">
</head>
<body>
    <head>
        <h3>Casa de Cambios</h3>
    </head>
    <section>
        <?php
            $soles= 0;
            $dolares = 0;
            $euros = 0;
        ?>
        <form action="caso1.php" method="get">
            <table border="0" cellspacing = "0" cellpading = "0" >
                <tr>
                    <td>Monto en Soles: </td>
                    <td>
                        <input type="text" name="txtSoles" value=
                        <?php
                        
                            echo $soles;
                        ?>
                        
                        >

                    </td>
                </tr>
                <tr>
                    <td>Monto en Dólares: </td>
                    <td>
                        <input type="text" name="txtDolares" value = 
                        <?php
                        
                            echo $dolares;
                        ?>
                        
                        >
                    </td>
                </tr>
                <tr>
                    <td>Monto en Euros: </td>
                    <td>
                        <input type="text" name="txtEuros" value=
                        <?php
                        
                            echo $euros;
                        ?>
                        
                        >
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Procesar">
                    </td>
                    <td>
                        <input type="reset" value="Limpiar">
                    </td>
                </tr>

                <?php
                    error_reporting(0);
                    $soles = $_GET['txtSoles'];
                    $dolares = $_GET['txtDolares'];
                    $euros = $_GET['txtEuros'];


                ?>
                <tr>
                    <td>Total soles: </td>
                    <td>
                        <?php
                        printf("%.2f SOLES",$soles);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Total dólares: </td>
                    <td>
                        <?php
                        define("DOLAR",3.71);
                        $dolar = $soles / DOLAR;
                        printf("%.2f DOLARES",$dolar);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Total euros: </td>
                    <td>
                    <?php
                        define("EURO",4.05);
                        $euro = $soles / EURO;
                        printf("%.2f EUROS",$euro);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Monto total de euros: </td>
                    <td></td>
                </tr>
            </table>
        </form>
        
        <?php
        
        ?>
    </section>
    <footer>
        <h6>Derechos reservados EEP</h6>
    </footer>
</body>
</html>