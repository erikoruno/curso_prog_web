<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Casos Desarrollados PHp</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header>
        <h3>Listado de casos a desarrollar en PHP</h3>
    </header>
    <section>

        <?php
            for ($i=1; $i <= 7; $i++) {   
        ?>

        <p>Caso <?php echo $i ?></p>
        <?php 
            }

           

        ?>
     
    </section>

    <footer>
    <h6>Derechos reservados - </h6>
    </footer>
</body>
</html>