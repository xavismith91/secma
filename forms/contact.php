<?php
  
    $nombre =$_POST["nombre"];
    $mensaje=$_POST["message"];
    $correo = $_POST["email"];
    $correo2 = 'contacto@secmaseguridad.com.mx';
    $remitente="SECMA SEGURIDAD";
    $asunto=$_POST["subject"];
    $cuerpo="
    <html> 
    <meta charset='UTF-8'>
    <body>
      <h3> Cliente: $nombre</h3>
      <h3> Correo: $correo </h3> 
      <h3> $mensaje </h5>
      <h4>SECMA SEGURIDAD 2023</h4>
    </body> 
    </html> 
    ";
    $sheader="From:".$remitente."\n";
    $sheader=$sheader."BCC:sistemas@ce2000.mx";
    $sheader=$sheader."X-Mailer:PHP/".phpversion()."\n";
    $sheader=$sheader."Mime-Version: 1.0\n";
    $sheader=$sheader."Content-Type: text/html; charset=utf-8\n";
    mail($correo2,$asunto,$cuerpo,$sheader,$mensaje); 


      header("Location: ../index.html");
      
    
  


?>
 