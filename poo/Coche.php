<?php

class Coche{

    public $combustible;
    public $velocidad;
    public $nivelCombustible;

    public function __construct($combustible = "Gasolina")
    {
        $this->combustible = $combustible;
        $this->velocidad = 0;
        $this->nivelCombustible = 0;
    }
    
    public function mostrarTipoCombustible()
    {
        return $this->combustible;
    }

    public function acelerar($litros){
        if ($this->velocidad > 0) {
            return 0;
        }

        if ($this->nivelCombustible < 10) {
            return 0;
        }

        $this->nivelCombustible -=$litros;
        return $litros;
    }

    public function repostar($tipoCombustible,$litros)  {
        if ($this->combustible != $tipoCombustible) {
            return 0;
        }

        $this->nivelCombustible += $litros;
        return $this->nivelCombustible;
    }

    public function estado (){
        if ($this->velocidad > 0) {
            return "Moviendose";
        } else {
            return "Parado";
        }
    }

    // public function __destruct()
    // {
    //     echo "Objeto destruído.\n";
    // }
    // public $combustible;
    // public function __construct($combustible)
    // {
    //     $this->combustible = $combustible;
    //     return "Esto es un coche";
    // }
    // public function mostrarTipoCombustible()
    // {
    //     return $this->combustible;
    // }
    // public $combustible;
    // public function __construct($combustible)
    // {
    //     $this->combustible = $combustible;
    // }
    // public function mostrarTipoCombustible()
    // {
    //     return $this->combustible;
    // }
    // public $combustible;

    // public function definirTipoCombustible($combustible)
    // {
    //     $this->combustible = $combustible;
    // }
    // public function mostrarTipoCombustible()
    // {
    //     return $this->combustible;
    // }

    // function __construct()
    // {
    //     echo "Mensaje del constructor.\n";
    // }

    // public $litros = 10;
    // public function litros()
    // {
    //     return "Hay {$this->litros} litros." . PHP_EOL;
    // }

    // public function acelerar()
    // {
    //     echo "Brum, brum\n";
    // }
    // public function frenar()
    // {
    //     echo "Iiiiiiiijjh\n";
    // }
    // public $color ;
    // public $potencia;
    // public $velocidad = 0;

    // public function acelerar( int $incremento = 1){
    //     $this->velocidad += $incremento;
    // }

    // public function velocidad() : int {
    //     return $this->velocidad;
    // }

    // public function comprobar (){
    //     $this->comprobarNivelAceite();
    //     $this->comprobarPresionRuedas();
    // }

    // public function comprobarNivelAceite() {
    // }
    // public function comprobarPresionRuedas() {
    // }

    // public function metodo ($valor){
    //     $miArray = [];
    //     $miArray[10] = $valor;
    // }

    // public function repostar($tipoCombustible, $litros)
    // {
    //     echo "Glu, glu";
    // }
}

// echo "Vamos a crear el objeto.\n";
$miCoche = new Coche('Gasoil');
echo "<br> Velocidad después de acelerar con el depósito vacío: " . $miCoche->acelerar(10). "\n";
echo "<br> Combustible después de repostar con el combustible equivocado:  " . $miCoche->repostar("Gasolina", 40)."\n";
echo "<br> Combustible después de echar 40 litros de gasóleo: " . $miCoche->repostar("Gasoil", 40) . "\n";
echo "<br> Velocidad después de acelerar con combustible en el depósito: ". $miCoche->acelerar(10). "\n";
echo "<br> Estado del coche: ". $miCoche->estado();

//echo "Tipo de combustible: " . $miCoche->mostrarTipoCombustible() . "\n";

// $otroCoche = new Coche("Diesel"); // Especificando el tipo de combustible como "Diesel"
// echo "Tipo de combustible: " . $otroCoche->mostrarTipoCombustible() . "\n";

// echo "El coche usa " . $miCoche->mostrarTipoCombustible() . PHP_EOL;
// echo "Fin del programa.\n";
//$miCoche->definirTipoCombustible('gasolina');
//echo "El coche usa " . $miCoche->mostrarTipoCombustible() . PHP_EOL;
// echo "El objeto ya está creado.\n";


// var_dump(isset($miCoche->litros));
// var_dump(isset($miCoche->combustible));
// var_dump(method_exists('Coche', 'litros'));
// var_dump(method_exists('Coche', 'combustible'));
// var_dump(method_exists($miCoche, 'litros'));
// var_dump(method_exists($miCoche, 'combustible'));
// echo get_class($miCoche);
// echo $miCoche->litros . PHP_EOL;
// echo $miCoche->litros();
// $accion = 'acelerar';
// echo "{$miCoche->$accion()}";
// $miCoche->repostar("Gasolina", 10);
// $miCoche->acelerar("10");
// echo "Velocidad actual: {$miCoche->velocidad}\n";

//print_r($miCoche);


// $miCoche->color = 'Rojo';
// $tuCoche->color = "Azul";

// print_r($miCoche);
// print_r($tuCoche);

//$miCoche->color;
//$miCoche->acelerar();


//print_r($miCoche);

//echo $miCoche->color .'\n';
//$color = $miCoche->color;
