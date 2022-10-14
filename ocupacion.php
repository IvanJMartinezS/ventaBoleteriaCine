<?php
//verifica si se presiona el boton "Enviar"
if(isset($_POST['enviar'])){
    
    //Valores enviados desde el form del index
    $fila = $_POST['fila'];
    $columna = $_POST['columna'];
    $estado = $_POST['estado'];
    $puestoSillas = $_POST['puestosillas'];
    
    $i = 0;
    
    //guarda en $sillas los valores actuales de los asientos.
    for($m = 0; $m < 5; $m++){
        for($n = 0; $n < 5; $n++){
            
            $i = 5*$m + $n;
            $sillas[$m][$n] =  $puestoSillas[$i];
        }
        $i = 0;
    }
    
    //Valida los requerimientos y condiciones pedidos en la evaluacion
    
    //Limita las acciones que se pueden hacer cuando el asiento esta en estado reservado
    if($estado == "reservar"){
        if($sillas [$fila - 1][$columna - 1] == '<img src="./images/L.png">'){
            $sillas[$fila - 1][$columna - 1] = '<img src="./images/R.png">';
        }else if($sillas [$fila - 1][$columna - 1] == '<img src="./images/R.png">'){
            echo '<script languaje="javascript">alert("Esta Silla Esta Reservada");</script>';
        }else if($sillas [$fila - 1][$columna - 1] == '<img src="./images/V.png">'){
            echo '<script languaje="javascript">alert("Esta Silla Esta Vendida");</script>';
        }
    }
    //Limita las acciones que se pueden hacer cuando el asiento esta en estado vendido
    if($estado == "comprar"){
        if($sillas [$fila - 1][$columna - 1] == '<img src="./images/L.png">' || $sillas [$fila - 1][$columna - 1] == '<img src="./images/R.png">'){
            $sillas[$fila - 1][$columna - 1] = '<img src="./images/V.png">';
        }else if($sillas [$fila - 1][$columna - 1] == '<img src="./images/V.png">'){
            echo '<script languaje="javascript">alert("Esta Silla Esta Vendida");</script>';
        }
    }
    //Limita las acciones que se pueden hacer cuando el asiento esta en estado libre
    if($estado == "liberar"){
        if($sillas [$fila - 1][$columna - 1] == '<img src="./images/R.png">'){
            $sillas[$fila - 1][$columna - 1] = '<img src="./images/L.png">';
        }else if($sillas [$fila - 1][$columna - 1] == '<img src="./images/L.png">'){
            echo '<script languaje="javascript">alert("Esta Silla Ya Esta Libre");</script>';
        }else if($sillas [$fila - 1][$columna - 1] == '<img src="./images/V.png">'){
            echo '<script languaje="javascript">alert("Esta Silla Esta Vendida");</script>';
        }
    }
    // Hace un llamado a la funcion mostrar del archivo escenario.php
    mostrar($sillas);
    
}