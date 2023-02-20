<?php
include 'functionLogar.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>

  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/4117b8be6f.js" crossorigin="anonymous"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <title>Formulário</title>

  <script type="text/javascript">
    <?php include 'jslogin.js';
    ?>
  </script>

  <style>
    <?php include 'csslogin.css';
    ?>
  </style>
</head>

<body>

  <div class="principal">


    <div class="texttop font ">
      <h1 style="text-align:center; margin-top:10px;">Fazer Login no Sistema</h1>

    </div>
    <hr>

<?php
    // $loged = $_SESSION['logadoAdmin'] ?? False;
    // if ($loged)

    //   echo "<a href='?logout=1'>Sair</a>";

    // if(isset($_GET['logout']) && $_GET['logout']==1){

    //   $_SESSION = array();
    //   session_destroy();
    //   echo "Deslogado";
    //   echo "<br>";


    // }

?><br>
    <div class="titulobox text-center text-white">Logar no Sistema</div>

    <div class="box ">




      <div class="p-2 mb-3 pt-2 mt-2">
        <form method="POST" action="">
          <p class="font">Usuário:</p>
          <input type="text" class="form-control text-center ipt" name="usuarioLogin" placeholder="Insira o Usuário" required id="inptCPF" onblur="ValidCPF()" maxlength="14">
          <p id="pcpf"></p>


          <p class="font">Senha:</p>
          <input type="password" class="form-control text-center ipt" name="usuarioSenha" placeholder="Insira a Senha" required id="inptCNPJ" onblur="ValidCNPJ()" maxlength="18">
          <p id="pcnpj"></p>
          <!-- <p style="color:#444444; margin-top:10px;">(Campo Opcional)</p>  -->
          <hr>
          <input class="form-check-input" type="checkbox" name="option1" value="something">
          <label class="form-check-label">Manter Conectado</label>
          <br>
          <br>


          <button type="submit" style="width:300px; " value="Continuar" name="botao3" id="btnIndex" class="font btn btn-outline-success">Continuar</button>
          <p id="errologin" style="color:red;font-weight:bold;"><?php echo $error?></p>
         
          
        </form>




        <a href="http://localhost/Formspuc/cadinicial/">Não é Cadastrado?</a>

        <br>

        <a href="http://formspuc.local/">Esqueci a Senha</a>




      </div>


    </div>


  </div>



</body>

</html>