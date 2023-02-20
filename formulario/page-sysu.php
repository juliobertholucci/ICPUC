<?php
require 'functionLogadoUser.php';
require 'functionDeslogar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4117b8be6f.js" crossorigin="anonymous"></script>
    <script src="jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<script type="text/javascript">
<?php require 'jsmaster.js';
?>
</script>
<style><?php require 'cssmaster.css'?>;</style>
<body>
    <!-- div principal -->
    <div class="ctPrincipal">
        <!-- nav principal -->
        <nav class="navbar navbar-expand-lg  navbar-dark heigthNavBar" style="background-color:#009ada; ">
                <!-- container total -->
                <div class="container-fluid">
                    <a class="navbar-brand col-lg-3 heightLogo " style="font-style:italic;">Logo</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- container lista -->
                    <div class="collapse navbar-collapse row text-center" id="collapsibleNavbar">
                        <!-- lista -->
                        <ul class="navbar-nav ">
                            <li class="nav-item dropdown col-lg-2">
                                <a class="nav-link  active" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false" >Minha Conta <i id="icon1" class="fa-solid fa-angle-down"></i></a>

                                <ul class="dropdown-menu submenu1 submenus123 row col-lg-12" aria-labelledby="navbarDropdown1">
                                    <div class="col-lg-6 float-start">
                                        <li class="col-lg-2 w-100"><a class="dropdown-item" href="#">Action</a></li>
                                        <li class="col-lg-2 w-100"><a class="dropdown-item" href="#">Another action</a></li>
                                        <li class="col-lg-2 w-100"><a class="dropdown-item" href="#">Another action</a></li>
                                    </div>
                                    <div  class="col-lg-6 float-end">
                                        <li class="col-lg-2 w-100"><a class="dropdown-item" href="#">Something else here</a></li>
                                        <li class="col-lg-2 w-100"><a class="dropdown-item" href="#">Another action</a></li>
                                        <li class="col-lg-2 w-100"><a class="dropdown-item" href="#">Another action</a></li>
                                    </div>
                                </ul>

                            </li>
                            
                            <li class="nav-item dropdown col-lg-2 ">
                                <a class="nav-link active" id="navbarDropdown3" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">Treinos <i id="icon3" class="fa-solid fa-angle-down"></i></a>
                                <ul class="dropdown-menu submenu1 submenus123 row col-lg-12" aria-labelledby="navbarDropdown3">
                                    <div class="col-lg-6 float-start">
                                        <li class="col-lg-2 w-100"><a class="dropdown-item" href="#">Action</a></li>
                                        <li class="col-lg-2 w-100"><a class="dropdown-item" href="#">Another action</a></li>
                                        <li class="col-lg-2 w-100"><a class="dropdown-item" href="#">Another action</a></li>
                                    </div>
                                    <div  class="col-lg-6 float-end">
                                        <li class="col-lg-2 w-100"><a class="dropdown-item" href="#">Something else here</a></li>
                                        <li class="col-lg-2 w-100"><a class="dropdown-item" href="#">Another action</a></li>
                                        <li class="col-lg-2 w-100"><a class="dropdown-item" href="#">Another action</a></li>
                                    </div>
                                </ul>
                            </li>
                            <li class="nav-item dropdown col-lg-2  ">
                                <a class="nav-link active" id="navbarDropdown4" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">Atendimentos <i id="icon4" class="fa-solid fa-angle-down"></i></a>
                                <ul class="dropdown-menu submenu1 submenuatendimento row col-lg-12" aria-labelledby="navbarDropdown3">
                                    <div class="col-lg-6 float-start">
                                        <li class="col-lg-2 w-100"><a class="dropdown-item" href="#">Action</a></li>
                                        <li class="col-lg-2 w-100"><a class="dropdown-item" href="#">Another action</a></li>
                                        <li class="col-lg-2 w-100"><a class="dropdown-item" href="#">Another action</a></li>
                                    </div>
                                    <div  class="col-lg-6 float-end">
                                        <li class="col-lg-2 w-100"><a class="dropdown-item" href="#">Something else here</a></li>
                                        <li class="col-lg-2 w-100"><a class="dropdown-item" href="#">Another action</a></li>
                                        <li class="col-lg-2 w-100"><a class="dropdown-item" href="#">Another action</a></li>
                                    </div>
                                </ul>
                            </li>

                            <li class="nav-item dropdown col-lg-2">
                                 <a class="nav-link active" id="navbarDropdown5" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">Julio Bertholucci <i id="icon5" class="fa-solid fa-angle-down"></i></a>
                                 <ul class="dropdown-menu submenu1 row col-lg-12" aria-labelledby="navbarDropdown3">
                                    <!-- <div class="col-lg-6 float-start">
                                        <li class="col-lg-2 w-100"><a class="dropdown-item" href="#">Action</a></li>
                                        <li class="col-lg-2 w-100"><a class="dropdown-item" href="#">Another action</a></li>
                                        <li class="col-lg-2 w-100"><a class="dropdown-item" href="#">Another action</a></li>
                                    </div>
                                    <div  class="col-lg-6 float-end">
                                        <li class="col-lg-2 w-100"><a class="dropdown-item" href="#">Something else here</a></li>
                                        <li class="col-lg-2 w-100"><a class="dropdown-item" href="#">Another action</a></li>
                                        <li class="col-lg-2 w-100"><a class="dropdown-item" href="#">Another action</a></li>
                                    </div> -->
                                    
                                        <li class="col-lg-2 w-100">
                                            <form method="POST" action="">
                                            <input  type="submit" class="dropdown-item" name="btnLogoff" value = "Sair"/>
                                             </form>     
                                        </li>
                                        <li class="col-lg-2 w-100"><a class="dropdown-item" href="#">Another action</a></li>
                                        <li class="col-lg-2 w-100"><a class="dropdown-item" href="#">Another action</a></li>


                                </ul>
                            </li>

                            <li class="nav-item col-lg-1 ">
                                <a class="nav-link active" href="#"><i class="fa-regular fa-bell sizer"></i></a>
                            </li>


                            
                        </ul>
                        
                    </div>
                    
                </div>
                
            </nav>
           

            <div class="minibar"></div>

            

            

        </div>
</body>
</html>