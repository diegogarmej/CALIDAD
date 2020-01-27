<?php require_once 'includes/cabecera.php'; ?>


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
