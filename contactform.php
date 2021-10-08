<?php
            //get data from form
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $email = $_POST['emailaddress'];
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


            if($email!=NULL){
                mail($to, $subject, $body);
                header("Location:thankyou.php");
            }
            //redirect 
            //        

?>







