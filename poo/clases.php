<?php
/*
Clases: una plantilla de la cual me basaré para crear objetos.
Objeto: Es un elemento del mundo real
*/
/*
$nombre = "Juan";
$edad = 25;
$pais = "Perú";

$nombre1 = "Carlos";
$edad1 = 20;
$pais1 = "Chile";
*/

     class Persona{
            //Atributos - Propiedades
            public $nombre;
            public $edad;
            public $pais;

    }

    $persona1 = new Persona; //instanciar
    $persona2 = new Persona;

    $persona1->nombre = "Juan";
    $persona1->edad = 25;
    $persona1->pais = "Perú";

    $persona2->nombre = "Carlos";
    $persona2->edad = 16;
    $persona2->pais= "México";

    echo $persona1->nombre." Tiene ". $persona1->edad." años."." y es de ".$persona1->pais;
    echo "<br>";
    echo $persona2->nombre." Tiene ". $persona2->edad." años."." y es de ".$persona2->pais;
  
    
    //  Crear una clase Automovil


   
?>