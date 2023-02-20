<?php
session_start();

    $logadoUser = $_SESSION['logadoUser'] ?? False;
    $logadoAdmin = $_SESSION['logadoAdmin'] ?? False;
    
    if(isset($_POST['logSys'])){
        if($logadoUser == False && $logadoAdmin == False){
        
            header('Location: http://localhost/Formspuc/logar');
                                                                    
        }

        else if($logadoUser == False && $logadoAdmin == True){

            header('Location: http://localhost/Formspuc/sys');

        }

        else if($logadoUser == True && $logadoAdmin == False){

            header('Location: http://localhost/Formspuc/sysu');
           
        }

        else{

            header('Location: http://localhost/Formspuc/logar/');
            
        }
    }                        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotpage</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4117b8be6f.js" crossorigin="anonymous"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<script type="text/javascript">
<?php include 'jsindex.js';
?>
</script>

<style>
<?php include 'cssindex.css';
?>
</style>

<body>
    <div data-collapse="medium" data-animation="default" data-duration="400" data-easing="ease" data-easing2="ease"
        role="banner" class="navigation-bar w-nav">
        <nav class="navbar navbar-expand-lg  navbar-dark heigthNavBar" style="background-color:#009ada; ">
            <!-- container total -->
            <div class="container-fluid">
                <a class="navbar-brand col-lg-2 heightLogo " style="font-style:italic;">Logo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- container lista -->
                <div class="collapse navbar-collapse row text-center" id="collapsibleNavbar">
                    <!-- lista -->
                    <ul class="navbar-nav ">
                        <li class="nav-item dropdown col-lg-1">
                            <a class="nav-link  active" href="#" id="navbarDropdown1" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Inicio</a>



                        </li>

                        <li class="nav-item dropdown col-lg-2 ">
                            <a class="nav-link active" id="navbarDropdown2" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false" href="#">Plataforma X 
                                     </a>



                        </li>
                        <li class="nav-item dropdown col-lg-1 ">
                            <a class="nav-link active" id="navbarDropdown3" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false" href="#">Serviços
                                    </a>

                        </li>
                        <li class="nav-item dropdown col-lg-1  ">
                            <a class="nav-link active" id="navbarDropdown4" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false" href="#">Sobre </a>

                        </li>

                        <li class="nav-item dropdown col-lg-1">
                            <a class="nav-link active" id="navbarDropdown5" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false" href="#">Clientes </a>

                        </li>

                        <li class="nav-item dropdown col-lg-1">
                            <a class="nav-link active" id="navbarDropdown5" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false" href="#">Contato </a>

                        </li>

                        <li class="nav-item dropdown col-lg-2">
                        <form method="POST" action="">
                            <input type="submit" class="nav-link active w-100" name="logSys" id="system"   value="Acessar o Sistema" />
                               
                               </form>

                        </li>

                        <li class="nav-item dropdown col-lg-1">
                            <a class="nav-link active" id="navbarDropdown5" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false" href="#">Usuario </a>

                        </li>

                        



                    </ul>

                </div>

            </div>

        </nav>
    </div>

    
        <!-- Services-->
       
</body>

</html>