<?php

if(isset($_POST['submit'])){
    $nombre=$_POST['name'];
    $emil=$_POST['email'];
    $telefono=$_POST['number'];
    $mensaje=$_POST['mensaje'];

    $mailTo="rodrigo.bernel@davinci.edu.ar";
    $headers="MIME-Version: 1.0"."\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: $email". "\r\n";
    $asunto='Tengo una consulta';
    $cuerpo="
    <html>
    <body>
    <div style='background: gold;border:2px blue solid;padding: 1rem;border-radius:5%;'>
    <p>Recibiste un mail de: $nombre</p>
    <p>Mensaje: $mensaje</p>
    </div>
    </body>
    </html>
    ";
    mail($mailTo,$asunto,$cuerpo,$headers);
    header("Location:index.html");

}




























?>