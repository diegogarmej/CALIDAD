<?php   

//iniciar la sesión y la conexion a la base de datos 

require_once "includes/conexion.php";

 // recoger datos del formulario 

if (isset($_POST )){

    $correo= trim($_POST['correo']);
    $password= $_POST['password'];




        //consulta para comprobar las credenciales del usuario


        
        //comprobar contraseña


}



 




//utilizar una sesión para guardar los datos del usuario logueado 

// si algo falla enviar una sesión con el fallo

//redirigir al index.php
