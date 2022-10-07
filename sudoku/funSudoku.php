<?php

    function comprovar_fila($fila){
        for ($i=1; $i < 10; $i++) { 
            if($fila == $_POST['casilla'.$fila."-".$i]){
                return true;
                echo "true";
            }
            else{
                return false;
                echo "false";
            }
        }
    }

    function comprovar_columna($column){
        for ($i=1; $i < 10; $i++) { 
            if($column == $_POST['casilla'.$i."-".$column]){
                return true;
                echo "true";
            }
            else{
                return false;
                echo "false";
            }
        }
    }


?>