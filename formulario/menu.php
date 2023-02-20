<style>

    .ctPrincipal{

        width: 100%;
        height: auto;
    
    }
    
    html *
        {
            
            font-family: 'Oxygen', sans-serif;
            font-weight:bold;
        }
    
    body{margin:0; padding: 0;}
    
    
    .heigthNavBar{
    
        height: 15vh;
    
    }
    
    .heightLogo{
    
        height: 10vh;
    
    }
    
    .nav-link{color: #f0eeee;}
    
    .sizer{
    
        font-size: 20px;
    
    }
    
    .minibar{
    
        height: 2vh;
        background-color: #f0eeee;
    
    }
    
    @media screen and (max-width: 900px) {
        .heigthNavBar {
            height: auto;
        }
    
    
    }
    
    @media screen and (max-width: 900px) {
        .heightLogo {
            height: 8vh;
        }
    
    }
    
    
    .submenu1{
    
        
        background-color:#009ada;
       
        border:none;
        padding-top: 20px;
    
    }
    
    .submenus123{
    
        width: 600px;
        height: auto;
    
    }
    
    .submenuadm{
    
        width: 300px;
        height: auto;
    
    }
    
    
    .submenuatendimento{
    
        width: 400px;
        height: auto;
    
    }
    
    .dropdown-item{color:white; font-weight: 900;}
    
    
    
    @media screen and (max-width: 900px) {
        .submenu1 {
            height: 100%;
            width: 100%;
        }
    
        
    
    }
    
    
    
    

</style>



<script type="text/javascript">

    $(document).ready(function(){

        $("#navbarDropdown1").click(function() {
            $("#icon1").removeClass("fa-solid fa-angle-down");
            $("#icon1").toggleClass("fa-solid fa-angle-right");
            $("#icon1").addClass("fa-solid fa-angle-down");
        });
    
        $("#navbarDropdown2").click(function() {
            $("#icon2").removeClass("fa-solid fa-angle-down");
            $("#icon2").toggleClass("fa-solid fa-angle-right");
            $("#icon2").addClass("fa-solid fa-angle-down");
        });
    
        $("#navbarDropdown3").click(function() {
            $("#icon3").removeClass("fa-solid fa-angle-down");
            $("#icon3").toggleClass("fa-solid fa-angle-right");
            $("#icon3").addClass("fa-solid fa-angle-down");
        });
    
        $("#navbarDropdown4").click(function() {
            $("#icon4").removeClass("fa-solid fa-angle-down");
            $("#icon4").toggleClass("fa-solid fa-angle-right");
            $("#icon4").addClass("fa-solid fa-angle-down");
        });
    
        $("#navbarDropdown5").click(function() {
            $("#icon5").removeClass("fa-solid fa-angle-down");
            $("#icon5").toggleClass("fa-solid fa-angle-right");
            $("#icon5").addClass("fa-solid fa-angle-down");
        });
    
    });

</script>

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
                    <li class="nav-item dropdown col-lg-1">

                        <a class="nav-link  active" href="http://formspuc.local/" >Inicial </a>

                    </li>
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
                            <a class="nav-link active" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">Administração <i id="icon2" class="fa-solid fa-angle-down"></i> </a>

                            <ul class="dropdown-menu submenu1 submenuadm row col-lg-12" aria-labelledby="navbarDropdown2">
                                <div class="col-lg-6 float-start">
                                    <li class="col-lg-2 w-100"><a class="dropdown-item" href="http://localhost/Formspuc/sys/empresas">Empresa(s)</a></li>
                                </div>
                                <div  class="col-lg-6 float-end">
                                    <li class="col-lg-2 w-100"><a class="dropdown-item" href="http://localhost/Formspuc/sys/usuario">Usuário(s)</a></li>
                                </div>
                            </ul>

                        </li>
                        <li class="nav-item dropdown col-lg-2 ">
                            <a class="nav-link active" id="navbarDropdown3" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">Treinos <i id="icon3" class="fa-solid fa-angle-down"></i></a>
                            <ul class="dropdown-menu submenu1 submenus123 row col-lg-12" aria-labelledby="navbarDropdown3">
                                <div class="col-lg-6 float-start">
                                    <li class="col-lg-2 w-100"><a class="dropdown-item" href="http://localhost/Formspuc/sys/avaliacao/">Avaliação</a></li>
                                    <li class="col-lg-2 w-100"><a class="dropdown-item" href="http://localhost/Formspuc/sys/protocolotreino/">Cadastrar Protocolo de Treino</a></li>
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
                             <a class="nav-link active" id="navbarDropdown5" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#"><?php echo $nomelogado ?> <i id="icon5" class="fa-solid fa-angle-down"></i></a>
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