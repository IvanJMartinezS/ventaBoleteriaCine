<?php

function show($seats)
{
    $numberRow = 1;
    echo "<table style='borser-collapse:collapse; border: 1px solid black;'>";
    echo "<tr>";
    echo "<th colspan=6>Scenery</td>";

    $header = ['X', 1, 2, 3, 4, 5];

    echo "<tr>";

    foreach($header as $head){
        echo "<td style='border: 1px solid black;'>$head</td>";
    }

    foreach($seats as $seat){

        echo "<tr>";
        echo "<td style='border: 1px solid black;'>$numberRow</td>";

        foreach($seat as $row){
            echo "<td style='border: 1px solid black;'>$row</td>";
        }

        $numberRow++;
    }
    echo "</tabla>";
}