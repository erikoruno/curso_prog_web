<?php
class Gato{
          Public $nombre;
          Public $edad;
          Public $raza;
          Public $color;
          Public $tamaño;

        public $mensaje;
   public function dormir(){
        $this->mensaje = "El gato esta durmiendo";
    }
 

    public function pelear(){
        $this->mensaje = "El gato esta peleando";
    }

    Public function comer($comida){
    If($comida=='galletas'){
        $this->mensaje = "El gato esta comiendo michicat";
    }else {
        $this->mensaje = "El gato no come nada";
    }

    }
}
    $gato1= new Gato();
    $gato2= new Gato();

    

        error_reporting(0);
        $accion = $_POST['selAccion'];

        if ($accion == 'comer') {
            $selComer = 'SELECTED';

        } else {
            $selComer = "";
        }

        if ($accion == 'dormir') {
            $selDormir = 'SELECTED';

        } else {
            $selDormir = "";
        }

        if ($accion == 'pelear') {
            $selPelear = 'SELECTED';

        } else {
            $selPelear = "";
        }

        
        switch ($accion) {
            case 'comer':
                $gato1-> comer("galletas");
                break;
            case 'dormir':
                $gato1-> dormir();
                break;
            case 'pelear':
                $gato1-> pelear();
                break;
            default:
                echo "Acción no valida";
                break;
        }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase Gato</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h3>Clase Gato</h3>
    </header>
    <section>
        <form action="clase3.php" method="post">
            <label for="accion">Seleccion acción:</label>
            <select name="selAccion" id="selAccion">
                <option value="comer" <?php echo $selComer ?>>Comer</option>
                <option value="dormir" <?php echo $selDormir ?>>Dormir</option>
                <option value="pelear" <?php echo $selPelear ?>>Pelear</option>

            </select>
            <button type="submit" class="btn-verde" >Realizar Acción</button>
            <p><?php echo $gato1->mensaje;?></p>
        </form>
        
        
    </section>
    <footer>
        <h6>Todos los derechos reservados @eriko@</h6>
    </footer>
</body>
</html>