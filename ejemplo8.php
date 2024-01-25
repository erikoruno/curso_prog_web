<?php
/**
 * Estructuras repetitivas
 * - Operadores de incremento y decremento
 *  ++$variable  incrementa el valor en uno antes de evaluar
 *  $variable++  incrementa el valor de la variable en uno, evalua y luego incrementa
 * 
 *  --$variable  disminuye el valor en uno antes de evaluar
 *  $variable--  disminuye el valor de la variable en uno, evalua y luego disminuye
 *  - Operadores complejos 
 *     +=  Es un operador de aumento y acumulación
 *     -=  Es un operador de disminución y acumulación.
 *     *=  Es un operador que acumula valores en productos.
 *     /=  Es un operador que acumula divisiones.
 *  
 * * Contadores
 *     $contador = $contador + 1; //$contador++
 *     
 *  * Acumuladores
 *     $acumulador = $acumulador + $valor; //$acumulador += $valor     
 *     
 *      ESTRCUTURA REPETITIVA WHILE
 * 
 *      while(condición){
 *      
 *      instrucciones a repetir;    
 *      
 *      }
 */

    /*    $i = 10;
        while ($i >= 1) {
            echo $i."<br>";
            $i--;
        }

        
        //Listar los n primeros pares

        
        
        $n = 100; 
        
        echo "Los primeros $n números pares son: ";
        
        $i = 2;
        while ($i <= $n * 2) {
            
            echo $i . "<br> ";
            $i += 2;
        }


        $m = 20; 
        
        echo "Los primeros $m números pares son: ";
        
        $i = 1;
        while ($i <= $n) {
            
            if ($i % 2 ==0) {
                echo $i."<br";
            }
            $i++;
        }
       */ 
        //LIstar los N primeros elementos de la siguiente serie: 1/2, 3/4, 5/6,..N

        
$k = 5; 

echo "Los primeros $k elementos de la serie son: ";

$p = 1;
$q = 2;

$contador = 0;

while ($contador < $k) {
    echo ", "."$p/$q";

    $p += 2;
    $q += 2;

    $contador++;
}



?>