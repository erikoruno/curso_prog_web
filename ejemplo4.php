<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <head>
        <h3>Operadores en PHP</h3>
    </head>

    <section>
        <?php

         /* $variable = literal
            Entero 10 100 230 -123
            Reales 20.50   0.0052  -23.635
            Booleanos true  false
            Caracter "a" , 'b'
            Cadena de caracteres "jefe",'gerente'

            */


            /*
            Operadores:

            + Suma                      $a = $b + $c
            - resta                     $a = $b - $c
            * multiplicación            $a = $b * $c
            / división entera.          $a = $b / $c
            % resto de la division.     $a = $b % $c


            */

            /* Operadores de cadenas de caracteres.

            . punto (sirve concatenar, unir cadena de caracteres)
             

            */


            $a= 15;
            $cadena = $a. " <br> nota final del curso";            
            echo $cadena;

            

            printf("<br>La nota final del curso es: %.2f",$a);

        ?>

    </section>

    <footer>

    </footer>
</body>
</html>