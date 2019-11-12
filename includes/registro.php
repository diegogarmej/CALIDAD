<!DOCTYPE HTML>

<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Auditoria_Calidad</title>
        <link  rel="stylesheet" type="text/css"  href="../assents/css/style.css"/>

    </head>
   
    <body>
        <!----CABEZERA--->
        
        
        <header id="header">
           
        
        <div id= "logo" >
            <a href="index.php">
             Calidad ETB 2019  
            </a>
        </div>
        
          
         
        <!------Menu----->

         <nav id="menu">

            <ul>
                <li>
                    <a href="index.php"x|>Inicio</a>
                </li>
                <li>
                    <a href="index.php">Cambios Con Novedad</a>
                </li>
                <li>
                    <a href="index.php">Buscar Cambio</a>
                </li>
                <li>
                    <a href="index.php">Buscar Tarea</a>
                </li>
                <li>
                    <a href="https://docs.google.com/spreadsheets/d/1AUJVnh8w-KtGQAgw7iBTq7Simv1UJJ4WbwQ-3a4ISOw/edit#gid=1278966298">Agenda Diaria</a>
                </li>
                <li>
                    <a href="index.php">Contacto</a>
                </li>
            </ul>         
          
         </nav>


         <div class="clearfix"></div>
        
        </header>
        <div>
        <div id="container">
            <!--registo--->
            <?php if(isset($_SESSION['errores'])):?>
                    <?php var_dump($_SESSION['errores']);?>
                <?php endif;?>
            
            <div id="login" style= color >
               


                    <h3>Registro</h3>
                   
                        <form action="login.php" method="POST">
                        <label for="name">Nombre</label>
                        <input id="input" type="text" name="name" style="color:blue" /> <br/>

                        <form action="login.php" method="POST">
                        <label for="apellidos">Apellidos</label>
                        <input id="input" type="text" name="apellido" style="color:blue" /> <br/>


                        <form action="login.php" method="POST">
                        <label for="numerocelular">Numero Celular</label>
                        <input id="input" type="text" name="numerocelular" style="color:blue" /> <br/>

                        <form action="login.php" method="POST">
                        <label for="correo">Correo</label>
                        <input id="input" type="text" name="correo" style="color:blue" /> <br/>

                        <label for="email">Contraseña Nueva</label>
                        <input id="input" type="password" name="contraseña" style="color:blue" /> <br/>

                        
                        <input type="submit" value="Registrate" />
  

                    </form>
            </div> 
                                  
               
               
                <div id ="footer"> 
                    <footer id="footer">
                    <p>Desarrolado por Diego Armando Garay Mejía &copy; 2019</p>
                    </footer>
                </div>
    </body>
</html>

