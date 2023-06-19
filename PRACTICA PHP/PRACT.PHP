<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuesta ....</title>
</head>
<body>
    <?php

        $us="maria solome";
        $co='where@gmail.com';
        $ps="halo123456789";
        $contf='halo123456789'
        $numt='771245500902'
        $respuesta="";

        $usuario=$_POST['user'];
        $correo=$_POST['mail']
        $contraseña=$_POST['password'];
        $confirmacion_de_contraseña=$_POST['password confirmation']
        $numero_de_telefono=$_POST['phone number']

        if($us==$usuario && $ps==$contraseña && $co==$correo && $contf==$confirmacion_de_contraseña && $numt==$numero_de_telefono){
            $respuesta="Correcto";
        }else{
            $respuesta="Incorrecto";
        }
    ?>

    <h1>Respuesta...</h1>
    <h2>Hola : <?php echo($usuario) ?> </h2>
    <h2>Tu logueo fue : <?= $respuesta ?> </h2>
</body>
</html>