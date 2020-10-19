<?php 
     
     //un arreglo es un tipo de dato que puede contener n datos a partir de un almacenamiento por indice
     $arreglo=array();
     $arreglo[0]="Juan";
     $arreglo[1]=10;
     $arreglo[2]="Facultad";
     $arreglo[3]="Autodidacta";

     
      //var_dump($arreglo);

      //podemos llenar el arreglo desde el inicio o por posicion
      $arreglo2= array('Jose',5,6,7,8,9,10);

     // echo $arreglo[1]+5;

     
     // echo count($arreglo);
     
     for ($i=0; $i < count($arreglo2); $i++) { 
     	echo $arreglo2[$i];
     	echo "<br>";

     	if($arreglo2[$i]=='Autodidacta'){
            echo "Felicidades encontraste el dato";
            echo "<br>";
     	}
     }  
 ?>