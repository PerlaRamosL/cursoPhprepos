<?php 
    
    //sirven para validar expersiones tal es el caso del operador or que sirve para validar una sentencia u otra.
    //en el caso del operador AND, sirve para validar ambas sentencia.


    $resultado=50;

        if($resultado < 51 AND $resultado > 49){
            // echo "Es un numero 50 valido";
         
        }

    $edadvalida=25;

         if ($edadvalida> 18 and $edadvalida< 26) {
              //echo "La edad es valida";
        }

    $sexo="F";

        if ($sexo=='M' or $sexo=='F') {
        	// echo "sexo valido";
        }

   //operador de diferente y la negaión
   //operador dferente, sirve para validar que un dato no corresponda a la cantidad o caracter.

    $dato=5;

    if ($dato!=10) {
    	//echo "Es un dato bueno";
    }


   //la negacion sirve para buscar una validacion de algo que no ocurre.
    $dato2=false;

    if(!$dato2){
    	echo "No es verdadero";
    }


 ?>