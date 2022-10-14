<?php
/**
* autor: Iván J. Martínez S.
* CC: 1.013.367.721
* 
* Desarrollo Web con PHP
* U3_Evidencia: Taller "Uso de funciones"
*/
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Venta de Boletos</title>
    </head>
    <body>
        <main style="text-align: center;">
            
            <div 
                style='background-image: url(./images/header.png); background-repeat: no-repeat; background-size: cover; width: 1250px; height: 70px'>
            </div>
            
            <div style="display: flex;">
                <div class="one" style="background-image: url(./images/estrenos.png);background-repeat: no-repeat; background-size: cover; width: 350px; height: 500px">
          
                </div>
                <div class="two" style="flex-grow: 10">
                    
                <?php
                
                //incluye los dos archivos php 
                include './escenario.php';
                include './ocupacion.php';
                
                //Muestra el estado inicial de los asientos o el estado reseteado
                if(isset($_REQUEST['reset']) || !isset($_REQUEST['enviar'])){
                
                    $sillas = [
                        [1 => '<img src="./images/L.png">', 2 => '<img src="./images/L.png">', 3 => '<img src="./images/L.png">', 4 => '<img src="./images/L.png">', 5 => '<img src="./images/L.png">'],
                        [6 => '<img src="./images/L.png">', 7 => '<img src="./images/L.png">', 8 => '<img src="./images/L.png">', 9 => '<img src="./images/L.png">', 10 => '<img src="./images/L.png">'],
                        [11 => '<img src="./images/L.png">', 12 => '<img src="./images/L.png">', 13 => '<img src="./images/L.png">', 14 => '<img src="./images/L.png">', 15 => '<img src="./images/L.png">'],
                        [16 => '<img src="./images/L.png">', 17 => '<img src="./images/L.png">', 18 => '<img src="./images/L.png">', 19 => '<img src="./images/L.png">', 20 => '<img src="./images/L.png">'],
                        [21 => '<img src="./images/L.png">', 22 => '<img src="./images/L.png">', 23 => '<img src="./images/L.png">', 24 => '<img src="./images/L.png">', 25 => '<img src="./images/L.png">']
                    ];
                    
                    mostrar($sillas);                
                }
            
                ?>
                
                <!--Formulario-->
                <form method="post">
                    <div style="margin-top: 10px;">
                        <label>Fila <input type="text" name="fila" placeholder="Numero Fila"></label>
                        <label>Columna <input type="text" name="columna" placeholder="Numero Columna"></label><br>
                    </div>
                
                    <div style="margin-top: 10px;">
                        <label><input type="radio" name="estado" value="reservar">Reservar</label>
                        <label><input type="radio" name="estado" value="comprar">Comprar</label>
                        <label><input type="radio" name="estado" value="liberar">Liberar</label><br>
                    </div>
                
                    <div style="margin-top: 10px;">
                        <input type="submit" name="enviar" value="Enviar">
                        <input type="submit" name="reset" value="Reset">
                    </div>
                <?php
                //Se envia el estado actual de cada puesto
                $clave =[];
                $i = 0;
                foreach($sillas as $silla){                     
                    foreach ($silla as $key => $puesto){
                       echo "<input type='text' style='display:none' name='puestosillas[]'  value='$puesto'>";
                    }
                }                
                ?>
                </form>
                    <!--Pelicula Seleccionada Para Comprar el Boleto-->
                    <div style="margin-top: 10px">
                        <img src="./images/opciones.png">
                    </div>                    
                </div>
            </div>
        </main>
    </body>
</html>