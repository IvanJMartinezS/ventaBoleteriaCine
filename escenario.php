<?php

function mostrar($sillas)
{
    $i = 1;
    echo "<table style='border-collapse:collapse; margin: 20px auto'>";
    
    //Muestra la pantalla del cine en la parte superior de la tabla
    echo "<tr>";
    echo "<td colspan=6><img src='./images/screen.png'></td>";
       
    //$i -> Muestra la parte de los numeros correspondientes a la fila en la tabla
    //$puesto -> muestra el asiento de la matriz (array) dentro de la tabla
    foreach($sillas as $silla){
        
        echo"<tr>";        
        
        foreach($silla as $puesto){
        
        echo "<td>$puesto</td>";
        }
        echo "<td>$i</td>";
        $i++;
    }
    
    //Muestra la parte de los numeros correspondientes a la columna en la tabla
    echo "<tr>";
    
    $numerosColumna = [1, 2, 3, 4, 5];    
    foreach($numerosColumna as $numeroColumna){
        echo "<td>$numeroColumna</td>";
    }
    echo"</tabla>";
}
