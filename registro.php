<?php require_once 'includes/cabecera.php';?>

<?php require_once 'includes/helpers.php';?>
 



<div>
        

    <div id="container">
    <!--registo--->

            
        <div id="login" style= color >
           
        <?php if(isset($_SESSION['errores'])) : ?>
             <?php echo var_dump($_SESSION['errores']);?>  
            <?php endif; ?>


            <h3>Registro</h3> 
            <!--mostrar errores-->
             
                <form action="login.php" method="POST">
                <label for="name">Nombre</label>
                <input id="input" type="text" name="name" style="color:blue" /> <br/>

                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre'): '';?>
                           
                       
                <label for="apellidos">Apellidos</label>
                <input id="input" type="text" name="apellido" style="color:blue" /> <br/>
                
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos'): '';?>   

                <label for="numerodocumento">Numero Documento</label>
                <input id="input" type="text" name="numerodocumento" style="color:blue" /> <br/>
                
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'numerodocumento'): '';?>



                <label for="correo">Direccion de correo</label>
                <input id="input" type="text" name="correo" style="color:blue" /> <br/>
                
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'correo'): '';?>   
                        
                <label for="Codigo">Codigo ETB</label>
                <input id="input" type="text" name="Codigo" style="color:blue" /> <br/>
                
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'CodigoETB'): '';?>   
                


                
                <label for="password">Password</label>
                <input id="input" type="password" name="contraseña" style="color:blue" /> <br/>
                
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password'): '';?>    
                        
                <input type="submit" name="submit" value="Registar  " />
            </form>
            
             <!--?php borrarErrores(); ?-->
          
            </div> 
                                  
               
               
           <div id ="footer"> 
           <footer id="footer">
           <p>Desarrolado por Diego Armando Garay Mejía &copy; 2019</p>
           </footer>
            </div>
    </body>
</html>

