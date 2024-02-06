<?php
//  Crear una clase Automovil
class Automovil{
    
        public $placa;
        public $marca;
        public $modelo;
        public $año;
        public $color;
        public $cilindrada;

        public function mostrarInformacionDeAutos(){
            echo "El automóvil ".$this->marca." de modelo".$this->modelo;
        }

        public function acelera($acelerar){
            if ($acelerar>90) {
                echo "<br>";
                echo "El automóvil esta con más de 90 km/h";
            } else {
                echo "<br>";
                echo "El automóvil esta con menos de 90 km/h";
            }
        }

}

          

        $auto1 = new Automovil;
        $auto2 = new Automovil;
        $auto3 = new Automovil;
        $auto4 = new Automovil;
        $auto5 = new Automovil;

        //objeto auto1
        $auto1->placa = "ADN714";
        $auto1->marca = "Hyundai";
        $auto1->modelo = "Tucson";
        $auto1->año = 2022;
        $auto1->color = "azul";
        $auto1->cilindrada = "2cc";


        //objeto auto2

        $auto2->placa = "X4V840";
        $auto2->marca = "Toyota";
        $auto2->modelo = "Hilux";
        $auto2->año = 2020;
        $auto2->color = "Plomo";
        $auto2->cilindrada = "4cc";

        //objeto auto3
        $auto3->placa = "PQB856";
        $auto3->marca = "Subaru";
        $auto3->modelo = "Inresa";
        $auto3->año = 2023;
        $auto3->color = "Blanco";
        $auto3->cilindrada = "4.5cc";

        //objeto auto4
        $auto4->placa = "GRR567";
        $auto4->marca = "Ford";
        $auto4->modelo = "Ranger";
        $auto4->año = 2021;
        $auto4->color = "Negro";
        $auto4->cilindrada = "3cc";

        //objeto auto5
        $auto5->placa = "qwe456";
        $auto5->marca = "Kia";
        $auto5->modelo = "Rio";
        $auto5->año = 2024;
        $auto5->color = "Rojo";
        $auto5->cilindrada = "5cc";

        $auto1 -> mostrarInformacionDeAutos();
        $auto1 -> acelera(85);

        // echo "Lista de autos";
        // echo "<br>";
        // echo "<br>";
        // echo "El automóvil ".$auto1->marca." modelo ". $auto1->modelo." de año ".$auto1->año." de color "
        // .$auto1->color." y cilindrada ".$auto1->cilindrada;
        // echo "<br>";
        
        // echo "El automóvil ".$auto2->marca." modelo ". $auto2->modelo." de año ".$auto2->año." de color "
        // .$auto2->color." y cilindrada ".$auto2->cilindrada;
        // echo "<br>";

        // echo "El automóvil ".$auto3->marca." modelo ". $auto3->modelo." de año ".$auto3->año." de color "
        // .$auto3->color." y cilindrada ".$auto3->cilindrada;
        // echo "<br>";

        // echo "El automóvil ".$auto4->marca." modelo ". $auto4->modelo." de año ".$auto4->año." de color "
        // .$auto4->color." y cilindrada ".$auto4->cilindrada;
        // echo "<br>";

        // echo "El automóvil ".$auto5->marca." modelo ". $auto5->modelo." de año ".$auto5->año." de color "
        // .$auto5->color." y cilindrada ".$auto5->cilindrada;
        // echo "<br>";
       

?>