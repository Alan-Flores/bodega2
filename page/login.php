        

    <!-- Nuestro css-->
    <link rel="stylesheet" type="text/css" href="page/css/login.css">
       
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img class="icon-login" src='page/images/cs_login.png'/>
                </div>
                <div class="col-12 forgot subtitle">
                    <a>Ingrese sus Datos <br></a>
                    <a>para iniciar sesión</a>
                </div>
                <form class="col-12" action="app/config/validate.php" method="post" enctype="application/x-www-form-urlencoded">
                        
                    <div class="form-group" id="email-group">
                        <input type="text" class="form-control" placeholder="Usuario" name="user" required/>
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" class="form-control" placeholder="Contraseña" name="password" required/>
                    </div>
                    <button type="submit" class="btn btn-primary" name="crear"><i class="fas fa-sign-in-alt"></i>  Ingresar </button>

                </form>
            </div>
        </div>
    </div>