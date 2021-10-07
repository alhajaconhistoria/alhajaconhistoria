<?php
//get data from form
if(isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correoDe = $_POST['correo'];
    $celular = $_POST['celular'];
    $servicio = $_POST['servicio'];

    $to = "wendym.alhajaconhistoria@gmail.com";

    $subject = "La página web de Alhaja con Historia ha recibido un mensaje de".$nombre.".\n\n;
    $txt = "Nombre = ". $nombre . "\r\n Apellido = " . $apellido . "\r\n Correo = " . $correoDe . "\r\n Celular = ". $celular . "\r\n Servicio =". $servicio; 

    $headers = "De: ".$correoDe;
    if($correoDe!=NULL) {
        mail($correoDe, $txt, $headers);
    }
     
    //redirect 
    header("Location:thankyou.php");
}

?>
