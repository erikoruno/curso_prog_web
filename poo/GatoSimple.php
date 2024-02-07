<?php

class GatoSimple{

        //atributos
        public $color;
        public $raza;
        public $sexo;
        public $edad;
        public $peso;

        //métodos
    public function maulla(){
        echo "Miauuuuuu";
    }
    
    public function ronronea(){
        echo "Mrrrr <br>";
    }

    //un método come, pero el gato solo come pescado


    public function comer($comida){
        if ($comida == 'pescado') {
            echo "<br> Hmmmm, miau, miau <br>";
        } else {
            echo "Lo siento, solo como pescado <br>";
        }
    }

    //poner a pelear a dos gatos, solo  se van a pelear 2 gatos machos


    public function pelearCon (GatoSimple $rival){
        if ($rival->sexo == "hembra") {
            echo "<br> no peleo con gatitas";
        } else {
            echo "<br>ven aqui que te voy a desmadrear";
        }
    }
}
    //instanciar
    $silvestre = new GatoSimple;
    $tom = new GatoSimple;
    $alejandra = new GatoSimple;



    echo "Hola gatito <br>";
    
    $silvestre->ronronea();
    echo "toma tus croquetas <br>";
    $silvestre->comer("croquetas");
    echo "Mejor te doy pescado <br>";
    $silvestre->comer("pescado");
    
    echo "veo otro gatito";
    $tom ->sexo = "macho";

    $silvestre->pelearCon($tom);

    $alejandra->sexo ="hembra";
    $silvestre->pelearCon($alejandra);

    
    
?>