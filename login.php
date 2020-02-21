
    <?php

//session_start();
require_once 'includes/conexion.php';


if(isset($_POST)){


    //recoger los valores del formulario de registro

    $nombre = isset ($_POST['name']) ? $_POST['name'] : false;
    $apellidos   = isset ($_POST['apellido']) ? $_POST['apellido'] : false;
    $numerodocumento=  isset ($_POST['numerodocumento']) ? $_POST['numerodocumento'] : false;
    $correo= isset ($_POST['correo']) ? trim($_POST['correo']) : false;
    $codigoETB = isset ($_POST['codigo']) ? $_POST['codigo'] : false;
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
            $errores['nombre'] = "El nombre no  es valido";
            
        }
         //Validar campo apellidos 
        if(!empty ($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos))
        {
            $apellidos_valido =true;
        }else{
            $apellidos_valido = false;
            $errores['apellidos'] = "Los apellidos no son validos";
            
        }

        //validar campo  Numero celular
        
        if(!empty ($numerodocumento) && is_numeric($numerodocumento))
        {
            $numero_documento_valido =true;
        }else{
            $numero_documento_valido = false;
            $errores['numerodocumento'] = "El numero de documento no es valido";
           
        }   
        //Validar campo correo
        if(!empty ($correo) && filter_var($correo)){
            $correo_valido=true;
        }else{
            $correo_valido = false;
            $errores['correo'] = "El correo no es valido";
        }    

        //validar campo codigo ETB

        if(!empty($codigoETB)){
                $codigoETB_valido= true;
        }else{

            $codigoETB_valido= false;
            $errores['codigo'] = "El codigo ETB no es valido";
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
        // var_dump($password);
        //var_dump($password_segura);
        //var_dump(password_verify($password, $password_segura));
        

            //insertar usuario en la base de datos en la tabla usuarios
                $sql = "INSERT INTO auditor VALUES (null, '$nombre', '$apellidos', '$numerodocumento', '$correo', '$codigoETB', '$password_segura');";
                $guardar  = mysqli_query($db, $sql );

                if($guardar){

                    $_SESSION['completado']= "El registro se completo con exito";
                }else {
                    $_SESSION['errores']['general']= "fallo al registrar el usuario :|";

                }

        }
        else{
            $_SESSION['errores'] = $errores;
              }
        

             
 //var_dump($_SESSION['errores']);
 //var_dump($_SESSION['errores']);

}
header ('Location: registro.php'); 