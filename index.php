<?php
    // $papitas = (int) rand(1,10);

    // while ($papitas > 0) {
    //     echo "Le quedan $papitas papitas.<br>";  //El ciclo se repite indefinidamente hasta q la condicion sea false
    //     $papitas--;
    // }
    // // echo "Se le acabaron las papitas";
    //  Ejemplo:
    //     $num = (int) $_REQUEST['numero'];
    //     $bandera = (bool) true;
    //     while ($num>0 && $num <=5) {
    //         echo "El numero enviado al archivo php es el correcto $num<br>";
    //         $num--;
    //         $bandera = false;
    //          break;
    //     }
    //     if($bandera) echo '<script>window.history.back();</script>';
//     while($_GET['Nombre']!="Jaime"){
//         echo <<<Datos
//         <script>
//             let nom = prompt('Ingrese el nombre');
//             location.href = '?Nombre='+nom+'';
//         </script> 
// Datos;
//     }
   do {
       echo "Hola estoy en el do while"; //Do while va a primero hacer el codigo, luego verifica la condicion con el While, si es true se ejecuta de nuevo.
   } while (false);  
    
?>