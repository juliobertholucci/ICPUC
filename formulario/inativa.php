<?php

    include 'functionLogado.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4117b8be6f.js" crossorigin="anonymous"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript">
    <?php include 'jsadmin.js'; ?>
    </script>


    <style>
    <?php include 'cssadmin.css';
    ?>
    </style>
</head>

<body>

    <div class="Principal24">


        <nav class="navbar navbar-expand-sm bgcolor navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" style="font-style:italic" href="http://formspuc.local/index/logar/masteradmin">Administrador</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item ">
                            <a class="nav-link  " href="http://formspuc.local/index/logar/masteradmin/cadastrarempresa">Cadastrar Empresa</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="http://formspuc.local/index/logar/masteradmin/cadastrarusuario">Cadastrar Usuário</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="#">Excluir</a>
                        </li>
                        <li class="nav-item " style="margin-right:5px;">
                            <a class="nav-link" href="#">Consultar</a>
                        </li>

                        <li class="nav-item " style="margin-right:5px;">
                            <a class="nav-link" ><?php echo "Logado como: $nomelogado";?></a>
                        </li>

                        <li class="nav-item logoff ">
                            <form  method="POST" action ="">
                                 <input  type="submit" class="botaosair btn btn-outline" name="btnLogoff" value = "Sair"/>
                                 <?php
                                 
                                 if(isset($_POST['btnLogoff'])){
                                    session_destroy();
                                    // session_unset();
                                    header('Location: http://formspuc.local/index/logar/');
                                    }
                                 
                                 ?>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

            

    </div>

</body>

</html>