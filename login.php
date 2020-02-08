
    <?php
session_start();


if(isset($_POST)){


    //recoger los valores del formulario de registro

    $nombre = isset ($_POST['name']) ? $_POST['name'] : false;
    $apellidos   = isset ($_POST['apellido']) ? $_POST['apellido'] : false;
    $numerodocumento=  isset ($_POST['numerodocumento']) ? $_POST['numerodocumento'] : false;
    $codigoETB = isset ($_POST['codigoETB']) ? $_POST['codigoETB'] : false;
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
        
        if(!empty ($numerodocumento) && is_numeric($numerodocumento))
        {
            $numero_documento_valido =true;
        }else{
            $numero_documento_valido = false;
            $errores['numerodocumento'] = "el numero de documento no es valido";
           
        }   
        //Validar campo correo
        if(!empty ($codigoETB ) && filter_var($codigoETB,)){
            $codigoETB_valido =true;
        }else{
            $codigoETB_valido = false;
            $errores['correo'] = "el codigo ETB  no es valido";
        }    
        //Validar campo password
        if(!empty ($password)){
            $password_valido =true;
        }else{
            $password_valido = false;
            $errores['password'] = "El  campo contraseña no puede estar vacio";
        }
        $guardar_usuario= false;

        if (count($errores)== 0){
        $guardar_usuario= true;  
            //cifrar contraseña 
            $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost' =>4]);
            //var_dump($password);
            //var_dump($password_segura);
            //var_dump(password_verify($password, $password_segura));
            


            //insertar usuario en la base de datos en la tabla usuarios
                $sql = "INSERT INTO auditor VALUES ()";


        }
        else{
            $_SESSION['errores'] = $errores;
           header ('Location: registro.php'); 


        }

             
 //var_dump($_SESSION['errores']);
 //var_dump($_SESSION['errores']);

}