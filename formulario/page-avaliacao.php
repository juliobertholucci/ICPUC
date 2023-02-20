<?php
include 'functionLogadoAdmin.php';
include 'functionDeslogar.php';
include 'functionsAvaliacao.php';             
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
    <div class="Principal" style="height:auto;">

        <div class="formContainer">
            <br>
            <div class="title "><h3 class="font">Cadastrar Avaliação</h3></div>
            <h4 class="text-center mt-2 " style="font-style:italic;color:#009ada;"><?php echo $alerta;?></h4>
            <hr>
         
            <form action="" method="POST">

            <div class="mb-3 text-center">
                <label  class="form-label font">ID do Atleta</label>
                <input type="number" class="form-control text-center"  placeholder="IDAtleta" name="idatleta" maxlength="10" required >
            </div>

            <hr>
            <br>
            <div class="mb-3 text-center">
                <label  class="form-label font">Data</label>
                <input type="date" class="form-control text-center"  placeholder="" name="data" required>
            </div>

            <hr>
            <br>
            <div class="mb-3 text-center">
                <label  class="form-label font">Data da Proxima Avaliação</label>
                <input type="date" class="form-control text-center"  placeholder="" maxlength="14" name="dataprox" required>
                <p id="pt"></p>
            </div>

            <hr>
            <br>
            <div class="mb-3 text-center">
                <label  class="form-label font">Idade</label>
                <input type="text" class="form-control text-center"  placeholder="Idade (Ex: 59a 5m)" name="idade" >
                
            </div>

            <hr>
            <br>
            <div class="mb-3 text-center">
                <label  class="form-label font">Sexo</label>
                <input type="text" class="form-control text-center" id="s4"   placeholder="Sexo" name="sexo" >
                <p id="ps"></p>
            </div>


            <hr>
            <br>
            <div class="mb-3 text-center">
                <label  class="form-label font">Altura</label>
                <input type="text" class="form-control text-center" placeholder="Altura (Ex: 1m 75cm)" name="altura" >
                <p id="ps"></p>
            </div>

            <hr>
            <br>
            <div class="mb-3 text-center">
                <label  class="form-label font">Peso</label>
                <input type="text" class="form-control text-center"  placeholder="Peso (Ex: 75kg 300g)" name="peso" >
                <p id="ps"></p>
            </div>

            <hr>
            <br>
            <div class="mb-3 text-center">
                <label  class="form-label font">Torax</label>
                <input type="text" class="form-control text-center"  placeholder="Torax " name="torax" >
                <p id="ps"></p>
            </div>


            <hr>
            <br>
            <div class="mb-3 text-center">
                <label  class="form-label font">Cintura</label>
                <input type="text" class="form-control text-center"  placeholder="Cintura " name="cintura" >
                <p id="ps"></p>
            </div>

            <hr>
            <br>
            <div class="mb-3 text-center">
                <label  class="form-label font">Gordura Corporal Atual </label>
                <input type="text" class="form-control text-center"  placeholder="GCA" name="gca" >
                <p id="ps"></p>
            </div>


            <hr>
            <br>
            <div class="mb-3 text-center">
                <label  class="form-label font">Gordura Corporal Meta</label>
                <input type="text" class="form-control text-center"  placeholder="GCM " name="gcm" >
                <p id="ps"></p>
            </div>


            <hr>
            <br>
            <div class="mb-3 text-center">
                <label  class="form-label font">IMC Atual</label>
                <input type="text" class="form-control text-center"  placeholder="IMC Atual (Ex: 1.88)" name="imca" >
                <p id="ps"></p>
            </div>


            <hr>
            <br>
            <div class="mb-3 text-center">
                <label  class="form-label font">IMC Meta</label>
                <input type="text" class="form-control text-center"  placeholder="IMC Meta (Ex: 1.78)" name="imcm" >
                <p id="ps"></p>
            </div>

            <hr>
            <br>
            
            <input type="submit" name="botaoavalia" value="Enviar Avaliação" id="botaoCadUsu" class="btn btn-outline-success botao">
            <br>
            <br>
            </form>


        </div>



    </div>
    
</body>
</html>

