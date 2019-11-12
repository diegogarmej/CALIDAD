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
            <!--inicio de sesion--->
            <div id="login" style= color >
                    <h3>Ingreso</h3>
                    <form action="index.php" method="POST">
                        <label for="email">Email</label>
                        <input id="input" type="email" name="email" style="color:blue" /> <br/>

                        <label for="password">Password</label>
                        <input  id="input" type="password" name="password" />

                        <input type="submit" value="Iniciar" />

                        <h3>Crear Cuenta</h3>
                      </form>  
                       <form action="./registro.php" method="POST"> 
                        <input id="registrar" type="submit" value="Registrate"/>  
                        </form> 

                    </form>
            </div> 
                                  
               
               
                <div id ="footer"> 
                    <footer id="footer">
                    <p>Desarrolado por Diego Armando Garay Mejía &copy; 2019</p>
                    </footer>
                </div>
    </body>
</html>
