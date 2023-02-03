<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>CONSOF</title>
        <link rel="icon" type="image/png" href="image/icon.png">

        <!-- Los iconos tipo Solid de Fontawesome-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
        <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

        <link rel="stylesheet" href="css/toastr.min.css">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>

        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/popper.min.js"></script>      
        <script src="js/bootstrap.min.js"></script>    
        <script src="js/toastr.min.js"></script> 

        <!--<script>
            document.cookie = 'same-site-cookie=foo; SameSite=Lax'; 
            document.cookie = 'cross-site-cookie=bar; SameSite=None; Secure';
        </script> -->
        
        <?php
            //$page = isset($_GET['p']) ? strtolower($_GET['p']) : 'login';
            //require_once('consof.net/include/float.php');
            //require_once('consof.net/include/header.php');
            //require_once('page/' . $page . '.php');
            //require_once('consof.net/include/footer.php');
            require_once('page/login.php');
        ?>

        <script>
        toastr . error ( 'Verifique sus datos y vuelva a intentar', 'Datos Incorrectos', {
            "progressBar": true
        } );
        </script>

        
        

    </body>
</html>
