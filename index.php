<!DOCTYPE HTML>

<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Auditoria_Calidad</title>
        <link  rel="stylesheet" type="text/css"  href="./assents/css/style.css"/>

    </head>
   
    <body>
        <!----CABEZERA--->
        
        
        <header id="header">
           
        
        <div id= "logo" >
            <a href="index.php">
            Auditoria Calidad ETB 2019  
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
        
        
        
        
        
        
        <div id="container">
            <!----BARRA LATERAL Y PRINCIPAL--->
            <aside id="sidebar"></aside>
                <div id="login">
                    <h3>Ingreso</h3>
                    <form action="login.php" method="POST">
                        <label for="email">Email</label>
                        <input type="email" name="email" /><br/>

                        <label for="password">Password</label>
                        <input type="password" name="password" />

                        <input type="submit" value="START" />

                        </form>

                        <div id="register">
                    <h3>register</h3>
                    <form action="register.php" method="POST">
                    
                        <label for="name">Name</label >
                        <input type="text" name="name"/>
                        
                        <label for="last name">Last name</label>
                        <input type="text" name="last name " />
                    
                        <label for="email">Email</label>
                        <input type="email" name="email" />

                        <label for="password">Password</label>
                        <input type="password" name="password" />

                        <input type="submit" value="REGISTER" />
			</form>

			<h1>CALIDAD 100 % ETB</h1>

                </div>

			
                
                
                
                
                
                <footer id="footer">
                    <p>Desarrolado por Diego Armando Garay Mejía &copy; 2019</p>
                </footer>


         </div>   










    </body>
</html>
