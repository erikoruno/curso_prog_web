<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - HTML5</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>

    <header>
        <h3>Fundamento de programación Web</h3>
    </header>
    <section>
        <?php
        // echo"";
        // echo '';
            echo "<br>1. Integrar código PHP en HTML5";
            echo "<br>2. pagina estatica versus Página Dinámica";
            echo "<br>3. Manejo de variables PHP";
            echo "<br>4. Aprender el lenguaje PHP";
            echo "<br>5. Lograr hacer formularios";
            echo "<br>6. Paginas web";
        // printf("");
        printf("<br> El sueldo básico es:");
        printf("<h3> El sueldo básico es: </h3>");

        $sueldoBasico = 350;
        printf("El sueldo básico es: %.3f", $sueldoBasico );

        ?>    
    </section>

    <footer>
    <h6>Derechos reservados - </h6>
    </footer>
</body>
</html>