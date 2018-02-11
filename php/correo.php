<?php
 $emailAddress="cristr97@gmail.com"
 $name=$_POST(Name);
 $phone=$_POST(phone);
 $email=$_POST(email);
 $message=$_POST(message);
 
 $content="Nombre: ". $name . "\nCorreo: " . $email . "\nTeléfono: " . $phone . "\nMensaje: " . $message;
 mail($emailAddress,"Contacto",$content);

?>