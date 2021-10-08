<?php
$message_sent = false;
if(isset($_POST['correo']) && $_POST['correo'] !=''){

    if(filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL)){

            //submit the form
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $correoDe = $_POST['correo'];
            $celular = $_POST['celular'];
            $servicio = $_POST['servicio'];

            $to = "wendym.alhajaconhistoria@gmail.com";
            $subject = "";
            $subject .="La página web de Alhaja con Historia ha recibido un mensaje de".$nombre. "\r\n";

            $body ="";

            $body .= "From:  ".$nombre. "\r\n";
            $body .= "From:  ".$apellido. "\r\n";
            $body .= "Email:  ".$correoDe. "\r\n";
            $body .= "Celular:  ".$celular. "\r\n";
            $body .= "Servicio:  ".$servicio. "\r\n";

            mail($to, $subject, $body);

            $message_sent = true;
    }          
}

?>

<?php
  if($message_sent):
    
    //redirect 
    header("Location:thankyou.php");
?>





