<?php
/*
Clases: una plantilla de la cual me basaré para crear objetos.
Objeto: Es un elemento del mundo real
*/


     class Persona{
            //Atributos - Propiedades
            public $nombre;
            public $edad;
            public $pais;

            //métodos
            public function mostrarInformacion(){
                
                echo $this->nombre." tiene ".$this->edad." años.";
                
            }

            public function comer($comida){
                if ($comida=="ceviche") {
                    echo "<br>Hmmmm, que rico gracias";
                } else {
                    echo "<br>lo siento, yo solo como ceviche";
                }
            }

            public function dormir(){
                echo "<br>";
                echo "zzzzz";
            }


    }

    $persona1 = new Persona; //instanciar
    $persona2 = new Persona;



     $persona1->nombre = "Juan";
     $persona1->edad = 25;
     $persona1->pais = "Perú";

     $persona1-> mostrarInformacion();
     $persona1-> comer("ceviche");
     $persona1-> dormir();

    // $persona2->nombre = "Carlos";
    // $persona2->edad = 16;
    // $persona2->pais= "México";

    // echo $persona1->nombre." Tiene ". $persona1->edad." años."." y es de ".$persona1->pais;
    // echo "<br>";
    // echo $persona2->nombre." Tiene ". $persona2->edad." años."." y es de ".$persona2->pais;
  
    echo "<br>";
    print_r($persona1);
    echo "<br>";
    var_dump($persona1);
    


   
?>