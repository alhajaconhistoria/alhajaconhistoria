<php?

if(isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correoDe = $_POST['correo'];
    $celular = $_POST['celular'];
    $servicio = $_POST['servicio'];

    $correoA = "wendym.alhajaconhistoria@gmail.com";
    $headers = "De: ".$correoDe;
    $txt = "La página web de Alhaja con Historia ha recibido un mensaje de ".$nombre.".\n\n".$servicio;


    mail($correoDe, $txt, $headers);
    header("Location: index.html?correoenviado");
}
