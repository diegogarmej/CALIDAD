<?php
session_start();
if(isset($_POST)){


    //recoger los valores del formulario de registro

    $nombre = isset ($_POST['name']) ? $_POST['name'] : false;
    $apellidos   = isset ($_POST['apellido']) ? $_POST['apellido'] : false;
    $numero_celular =  isset ($_POST['numerocelular']) ? $_POST['numerocelular'] : false;
    $correo =  isset ($_POST['correo']) ? $_POST['correo'] : false;
    $password = isset  ($_POST['contraseña']) ? $_POST['contraseña'] : false;

        //array de errores
        $errores = array();


    //validar los datos antes de guardarlos en la base de datos 
    
        //Validar campo nombre
        if(!empty ($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre))
        {
            $nombre_valido =true;
            
        }else{
            $nombre_valido = false;
            $errores['nombre'] = "el nombre no  es valido";
            
        }
         //Validar campo apellidos 
        if(!empty ($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos))
        {
            $apellidos_valido =true;
        }else{
            $apellidos_valido = false;
            $errores['apellidos'] = "los apellidos no son validos";
            
        }

        //validar campo  Numero celular
        
        if(!empty ($numero_celular) && is_numeric($numero_celular))
        {
            $numero_celular_valido =true;
        }else{
            $numero_celular_valido = false;
            $errores['numerocelular'] = "el numero de clular no es valido";
           
        }   
        //Validar campo correo
        if(!empty ($correo ) && filter_var($correo, FILTER_VALIDATE_EMAIL)){
            $email_valido =true;
        }else{
            $email_valido = false;
            $errores['correo'] = "el campo correo no es valido";
        }    
        //Validar campo password
        if(!empty ($password)){
            $password_valido =true;
        }else{
            $password_valido = false;
            $errores['contraseña'] = "El  campo contraseña esta vacio";
        }
        $guardar_usuario= false;

        if (count($errores)== 0){
        //insertar usuario en la base de datos en la tabla usuarios
         $guardar_usuario= true;
        }else{
            $_SESSION['errores'] = $errores;
           // header ('Location: registro.php'); 
        }
//var_dump($errores);
var_dump($_SESSION['errores']);

}
