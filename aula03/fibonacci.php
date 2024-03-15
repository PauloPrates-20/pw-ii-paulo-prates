<?php
    // execução com while

    $fibonacci = array(0, 1);
    $iterador = 0;
    $indice = 0;

    while($iterador < 10) {
        if($iterador < 2) {
            echo $fibonacci[$iterador] . "<br>";
        }
        else {
            array_push($fibonacci, ($fibonacci[$indice] + $fibonacci[$indice + 1]));
            $indice++;
            echo $fibonacci[$indice + 1] . "<br>";
        }
        $iterador++;
    }

    echo "<br>";

    // excecução com for

    $fibonacci = array(0, 1);
    $indice = 0;

    for($iterador = 0; $iterador < 10; $iterador++) {
        if($iterador < 2) {
            echo $fibonacci[$iterador] . "<br>";
        }
        else {
            array_push($fibonacci, ($fibonacci[$indice] + $fibonacci[$indice + 1]));
            $indice++;
            echo $fibonacci[$indice + 1] . "<br>";
        }
    }
?>