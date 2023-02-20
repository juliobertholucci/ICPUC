<?php
include 'functionLogadoAdmin.php';
include 'functionDeslogar.php';
include 'functionsCadUsu.php';


 $dados = $wpdb->get_results("SELECT nome FROM `wp_tblempresa` WHERE admin = '$userlogin'");
 if(!$dados){

    $dados = $wpdb->get_results("SELECT * FROM wp_tblempresa JOIN wp_tblusuario1 WHERE nome = empresa AND usuario = '$userlogin'");
    
  }             
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300&display=swap" rel="stylesheet">
      <script src="https://kit.fontawesome.com/4117b8be6f.js" crossorigin="anonymous"></script>
  
      <!-- Latest compiled JavaScript -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  
    <script type="text/javascript">
    <?php include 'jscadUsu.js'; 
    ?>
  </script>

  <style>
    <?php include 'csscadUsu.css';
    ?>
  </style>

</head>
<body>
<?php
include 'menu.php';
?>
    <div class="Principal">

        <div class="formContainer">
            <br>
            <div class="title "><h3 class="font">Cadastrar Usuário</h3></div>
            <h4 class="text-center mt-2 " style="font-style:italic;color:#009ada;"><?php echo $alerta;?></h4>
            <hr>
         
            <form action="" method="POST">

            <div class="mb-3 text-center">
                <label  class="form-label font">Nome de Usuário (Login)</label>
                <input type="text" class="form-control text-center"  placeholder="Nome de Usuário" name="nomelogin" maxlength="30" required >
            </div>

            <hr>
            <br>
            <div class="mb-3 text-center">
                <label  class="form-label font">Nome Completo</label>
                <input type="text" class="form-control text-center"  placeholder="Nome Completo" name="nomecompleto" required>
            </div>

            <hr>
            <br>
            <div class="mb-3 text-center">
                <label  class="form-label font">Telefone</label>
                <input type="text" class="form-control text-center" onblur="QTDtel()" id="tel" onkeydown="javascript: fMasc( this, mTel );" placeholder="(DDD)XXXX-XXXX" maxlength="14" name="telefone" required>
                <p id="pt"></p>
            </div>

            <hr>
            <br>
            <div class="mb-3 text-center">
                <label  class="form-label font">Email</label>
                <input type="email" class="form-control text-center"  placeholder="Email" name="email" >
                
            </div>

            <hr>
            <br>
            <div class="mb-3 text-center">
                <label  class="form-label font">Senha</label>
                <input type="password" class="form-control text-center" id="s4" onblur="QTDsenha()"  placeholder="Senha" name="senha" >
                <p id="ps"></p>
            </div>

            <hr>
            <br>
            <div class="mb-3 text-center">
                <label  class="form-label font">Perfil</label>
                <select class="form-control text-center" name="perfil" required>
                    <option ></option>
                    <option value="S">Sys Admin</option>
                    <option value="D">Dono</option>
                    <option value="F">Funcionário</option>
                    <option value="P">Professor</option>
                    <option value="A">Aluno</option>
                
                </select>
            </div>

            <hr>
            <br>
            <div class="mb-3 text-center">
                <label  class="form-label font">Empresa</label>
                <select class="form-control text-center" name="empresa" required>
                    <?php
                    foreach ($dados as $key => $value):
                    ?>                                   
                    <option value="<?php echo $value->nome?>"><?php echo $value->nome?></option>
                    <?php endforeach ?>
                </select>
                
                
            </div >
            <hr>
            <br>
            <input type="submit" name="botaocadusu" value="Cadastrar Usuário" id="botaoCadUsu" class="btn btn-outline-success botao">
            </form>


        </div>



    </div>
    
</body>
</html>

