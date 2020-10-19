<?php 

     $var="pedro jimenez lopez";
     $fecha="01-05-2017";
 //explode es una funcion que convierte un string
 //a un arreglo depenciendo de la construccion pedida

     $datos=explode(" ",$var);
     $f=explode("-",$fecha);

     echo "El año de la fecha es: ".$f[2];

    /* echo "<pre>";
     print_r($datos);
     echo "<pre>"; */
     //var_dump($datos);

 ?>