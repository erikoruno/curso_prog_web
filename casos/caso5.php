<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Comercial</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header>
        <h3>Autoservicios Todo Caro</h3>
    </header>
    <section>
    <?php
            
                   
                    error_reporting(0);
                    $cliente = $_POST['txtCliente'];
                    $montoTotal = $_POST['txtMontoTotal'];
                    $nroTicket = $_POST['txtNroTicket'];

            
                      
            if ($nroTicket  <1 || $nroTicket>20) {
                echo '<script>alert("Ticket no válido..!!");</script>';
            }

            if($nroTicket >=1 && $nroTicket <=4){
                $dcto = 0.16;
            } elseif ($nroTicket >=5 && $nroTicket <=9) {
                $dcto = 0.13;
            } elseif ($nroTicket >=10 && $nroTicket <=14) {
                $dcto = 0.06;
            } elseif ($nroTicket >=15 && $nroTicket <=19) {
                $dcto = 0.12;
            } else {
                $dcto = 0.1;
            }

            
            $montoDscto = $montoTotal -($montoTotal*$dcto);

        ?>
        <form action="caso5.php" method="post">
            <h4>Obsequio a clientes</h4>
            <img src="img/supermercado.jpg" width="500" height="150" >
                <?php
                    
                    
                ?>
            <table border="0" cellspacing ="0" cellpading="0">
                <tr>
                    <td class="etiqueta">Nombre de cliente</td>
                    <td>
                        <input type="text" name="txtCliente" size="30" placeholder="Ingrese su nombre" value="<?php echo "$cliente"; ?>">
                    </td>
                </tr>
                <tr>
                    <td class="etiqueta">Monto total S/</td>
                    <td>
                        <input type="text" name="txtMontoTotal" placeholder="Ingrese el monto total"
                        value="<?php echo "$montoTotal"; ?>"
                        >
                    </td>
                </tr>
                <tr>
                    <td class="etiqueta">Número de ticket</td>
                    <td>
                        <input type="text" name="txtNroTicket" placeholder="Ingrese el Nro de Ticket"
                        value="<?php echo "$nroTicket"; ?>"
                        >
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button type="submit" class="btn-verde" value="procesar">Procesar</button>
                    </td>
                </tr>
                <tr>
                    <td>Monto a cancelar</td>
                    <td>
                        <?php
                        printf("S/ %.2f",$montoDscto);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Obsequio obtenido</td>
                    <td>
                        <?php
                         if ($dcto == 0.16) {
                            echo "Canasta con productos diversos.";
                         } elseif ($dcto == 0.13) {
                            echo "Saco de azúcar de 50kg.";
                         } elseif ($dcto == 0.06) {
                            echo "Aceite 5 litros.";
                         } elseif ($dcto == 0.12) {
                            echo "Caja de leche de 24 latas grandes.";
                         } else {
                            echo "Saco de arroz de 50kg.";
                         }
                        ?>
                    </td>
                </tr>
            </table>
        </form>
<form>
<style>
    .cuadricula,.lineas {
    border:2px solid black;
  }
  .delgado{
    border: 1px solid black;
  }

  table {
    border-collapse:collapse;
    width:100%;
  }
  .bordes {
    padding:5px;
  }
  .resaltado {
        background-color: black;
        color: white;
    }
</style>
        <table class="cuadricula">
            <tr class="bordes">
                <td class="lineas resaltado">NUMERO DE TICKET</td>
                <td class="lineas resaltado">DESCRIPCION DEL OBSEQUIO</td>
                <td class="lineas resaltado">PORCENTAJE DE DESCUENTO</td>
            </tr>
            <tr>
                <td class="delgado">20</td>
                <td class="delgado">Saco de arroz de 50kg.</td>
                <td class="delgado">10 %</td>
            </tr>
            <tr>
                <td class="delgado">15 - 19 </td>
                <td class="delgado">Caja de leche de 24 latas grandes.</td>
                <td class="delgado">12 %</td>
            </tr>
            <tr>
                <td class="delgado">10 - 14</td>
                <td class="delgado">Aceite 5 litros.</td>
                <td class="delgado">6 %</td>
            </tr>
            <tr>
                <td class="delgado">5 - 9</td>
                <td class="delgado">Saco de azúcar de 50kg.</td>
                <td class="delgado">13 %</td>
            </tr>
            <tr>
                <td class="delgado">1 - 4</td>
                <td class="delgado">Canasta con productos diversos.</td>
                <td class="delgado">16 %</td>
            </tr>
        </table>
        </form>
    </section>

    <footer>
        <h6>Derechos Reservados Eriko.com</h6>
    </footer>
</body>
</html>