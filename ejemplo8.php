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

 /*       
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
*/


//PROFESOR

/*
$n=20;
$i = 1;
$num = 1;
$den = 2;

while ($i <= $n) {
    echo $num."/"."$den"."<br>";
    $num+=2;
    $den+=2;
    $i++;
}
*/
    //LIstar los N primeros elemntos de la siguiente seri 1/5 , -2/10,  3/15, -4/20..N

    
   /*
   
$n = 20; 
echo "Los primeros $n elementos de la serie son: ";

$num = 1;
$den = 5;
$contador = 0;

while ($contador < $n) {
    $elemento = ($contador % 2 == 0) ? $num."/".$den : -$num."/".$den."<br>";
    echo "$elemento ";

    $num++;
    $den += 5;
    $contador++;
}
*/
 // profesor

 /*
 $n=20;
$i = 1;
$num = 1;
$den = 5;
 
while ($i <= $n) {
    if ($i % 2 != 0) {
        echo $num."/".$den."<br>";
    } else {
        echo "-".$num."/".$den."<br>";
    }
    $num+=1;
    $den+=5;
    $i++;
}

*/


    /**
     * ESTRUCTURA REPETITIVA FOR
     * 
     *      for(iniciliazación; condicion; incremento){
     *      intrucciones a repetir;
     * 
     *      }
     */

     /*
     for ($i=1; $i<=10; $i++) { 
       echo $i."<br>";
     } 

     */

    /*
    ANIDCACION DE ESTRCUTURAS REPETITIVAS

    */
/*
    $n =10;
    $i =1;
    while ($i <= $n) {
        $j =1;
        while ($j <= $i) {
            echo $i;
            $j++;
        }
        echo "<br>";
        $i++;
    }
*/
    //Mostrar en pantalla toso los numeros pares comprendidos entre 1 y 1000
    // en filas de 5 numeros, 10 numeros y 15 numeros 


    



/*
$n =1000;
$i =2;
while ($i <= $n) {
    $j =2;
    while ($j <= $i) {
        echo $i;
        $j+=2;
    }
    echo "<br>";
    $i++;
}
*/
$n = 210;

$contador = 0;
$columnas = 5;
$i =2;
for ($i = 2; $i <= $n; $i += 2) {
    
    echo $i;

    $contador++;

    if ($contador == $columnas) {
        echo "<br>";
        $contador = 0;
        $columnas += 5; 
    } else {
        echo ", ";
    }
}






/*


2,4,6,8,10
12,14,16,18,20,22,24,26,28,30
32,34,26,28,40,42,44,46,48,50,52,54,56,58,60
*/
?>