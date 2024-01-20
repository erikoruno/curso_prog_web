<?php
 //Estructurales condicionales
 //Operaciones relaciones/comparacion

  /*
  > mayor que
  < menor que
  >= mayor o igual que
  <= meno o igual que
  == igualdad => 4 == 4 / 4 =='4'
  === identico = 4 === 4 / '4' === '4'
  != diferente
  */

 /*
 Lógica booelana
     Y lógico
       v v => v
       v f => f
       f v => f
       f f => f

     O lógico

       v v => v
       v f => v
       f v => v
       f f => f

    negación

    v => f
    f => v
 */

 $a = 15;
 $b = 5;
 $c = 20;

    echo ($a > $b) && ($a < $c);
    echo ($a > $b) || ($a < $c) ;

    /*
        if (condición) // if simple
            acción;

        if(condición) // if doble
            acción verdadera
        else
            acción falsa;


        if( condicion1) // if enlazada
            accion verdadera1
        elseif (condición2)
            acción verdadera2
        elseif (condicion3)
            acción verdadera3
        else
            acciones falsa condicion1

    */

// categoria operario,administrativo,jefe

    $categoria = 'jefe';

    if ($categoria == 'operario'){
        echo "<br>costo por hora 10";
    }
    elseif($categoria == 'administrativo'){
        echo "<br>Costo x hora 15";
    }
    elseif($categoria == 'jefe'){
        echo "<br>Costo x hora 25";
    }

    /**
     * Estructura Switch
     * 
     * switch($variable a evaluar){
     *      case valor1:
     *          accion valor 1;
     *          break;
     *      case valor2:
     *          accion valor 2;
     *          break;
     *      case valorN:
     *          accion valor N;
     *          break;
     * default: accion_falso;
     * }
     * 
     * 
     */
    
     $categoria = 'administrativo';

     switch ($categoria) {
        case 'operario':
            echo "<br>costo por hora 10";
            break;
        case 'administrativo':
            echo "<br>Costo x hora 15";
            break;
        case 'jefe':
            echo "<br>Costo x hora 25";
            break;
            default:
            echo "<br>Costo x hora 0";
            break;
     }

     
?>