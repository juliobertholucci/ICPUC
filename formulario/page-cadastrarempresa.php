<?php
  include 'functionLogadoAdmin.php';
 include 'functionDeslogar.php';
 include 'functionsCadEmp.php';
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
    <?php include 'jscadEmp.js'; 
    ?>
  </script>

  <style>
    <?php include 'csscadEmp.css';
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
            <div class="title "><h3 class="font">Cadastrar Empresa</h3></div>
            <h4 class="text-center mt-2 " style="font-style:italic;color:#009ada;"><?php echo $alerta;?></h4>
            <hr>
         
            <form action="" method="POST">

            <div class="mb-3 text-center">
                <label  class="form-label font">CPF</label>
                <input type="text" class="form-control text-center" id="inptCPF" onblur="ValidCPF()" onkeydown="javascript: fMasc( this, mCPF );" placeholder="Insira o CPF" name="cpf" maxlength="14" required >
                <p id="pcpf"></p>
            </div>

            <hr>
            <br>
            <div class="mb-3 text-center">
                <label  class="form-label font">CNPJ</label>
                <input type="text" class="form-control text-center"  id="inptCNPJ" onblur="ValidCNPJ()"  placeholder="Insira o CNPJ" onkeydown="javascript: fMasc( this, mCNPJ );" name="cnpj" maxlength="18" required>
                <p id="pcnpj"></p>
            </div>

            <hr>
            <br>
            <div class="mb-3 text-center">
                <label  class="form-label font">Nome</label>
                <input type="text" class="form-control text-center"  placeholder="Nome Fantasia"  name="nome" required>
                <p id="pt"></p>
            </div>

            <hr>
            <br>
            <div class="mb-3 text-center">
                <label  class="form-label font">Optante pelo Simples?</label>
                <select class="form-control font text-center" name="simples" >
                    <option ></option>
                    <option value=”S”>Sim</option>
                    <option value=”N”>Não</option>
                </select>
                
            </div>

            <hr>
            <br>
            <div class="mb-3 text-center">
                <label  class="form-label font">Empregados</label>
                <select class="form-control font" name="empregados" required>
                    <option ></option>
                    <option value=”0a5”>0 a 5</option>
                    <option value=”6a10”>6 a 10</option>
                    <option value=”11a25”>11 a 25</option>
                    <option value=”26a50”>26 a 50</option>
                    <option value=”51a100”>51 a 100</option>
                    <option value=”101a250”>101 a 250</option>
                    <option value=”251a500”>251 a 500</option>
                    <option value=”500+”>Acima de 500</option>
                    <option value=”IDK”>Não sei informar</option>        
                 </select>
                
            </div>

            <hr>
            <br>
            <div class="mb-3 text-center">
                <label  class="form-label font">O sistema vai ser utlizado por quantas pessoas?</label>
                <select class="form-control font" name="sistema" required>
                    <option ></option>
                    <option value=”-2”>Até 2</option>
                    <option value=”3a5”>3 a 5</option>
                    <option value=”6a10”>6 a 10</option>
                    <option value=”11a15”>11 a 15</option>
                    <option value=”16a25”>16 a 25</option>
                    <option value=”26a35”>26 a 35</option>
                    <option value=”36a50”>36 a 50</option>
                    <option value=”51a75”>51 a 75</option>
                    <option value=”76a100”>76 a 100</option>
                    <option value=”100+”>Acima de 100</option>
                    <option value=”IDK”>Não sei Informar</option>
                 </select>
            </div>

            <hr>
            <br>
            <div class="mb-3 text-center">
                <label  class="form-label font">Porte Fiscal</label>
                <select class="form-control font" name="portefiscal" required>
                    <option ></option>
                    <option value=”Microempresa”>Microempresa</option>
                    <option value=”EPequenoP”>Empresa de Pequeno Porte</option>
                    <option value=”EMedioP”>Empresa de Médio Porte</option>
                    <option value=”EGrandeP”>Empresa de Grande Porte</option>
                 </select>
            </div >
            <hr>
            <br>

            <div class="mb-3 text-center">
                <label  class="form-label font">Principal Atividade</label>
                <select class="form-control font" name="atividade" required> 
                    <option ></option>
                    <option value=”Academia”>Academia</option>
                    <option value=”Treinamento”>Treinamento</option>
                    <option value=”Pesquisa”>Pesquisa</option>
                    <option value=”ONG”>ONG</option>
                    <option value=”Comercio”>Comércio</option>
                    <option value=”Educacao”>Educação</option>
                    <option value=”Saude”>Saúde</option>
                    <option value=”Outros”>Outros</option>
                    <option value=”IDK”>Não sabe/Não pode informar</option>
                </select>
            </div >
            <hr>
            <br>

            <div class="mb-3 text-center">
                <label  class="form-label font">Site</label>
                <input type="text" class="form-control font"  placeholder="Site" name="site" required>
            </div>
            <hr>
            <br>

            <div class="mb-3 text-center">
                <label  class="form-label font">Endereço</label>
                <div class="input-group mb-3 row " style="width:99.8%; margin:0 auto;">
                    <span class="input-group-text col-md-2 font spans" style="border-radius:0px; background-color:#009ada; color:white;">CEP/Cidade</span>
                    <input type="text" class="form-control col-md-4 font" name="cep" id="cp" placeholder="CEP" onkeydown="javascript: fMasc( this, mCEP );" maxlength="10" required>
                    <input type="text" class="form-control col-md-4 font" name="cidade" id="city" placeholder="Cidade" maxlength="35" required>
                    <button class="btn  col-md-2 font" style="border-radius:0px; background-color:#414141" type="">  <i class="fa-solid fa-magnifying-glass-location fa-xl"></i> </button>
                </div>
            </div >
            <hr>
            <br>

            <div class="mb-3 text-center">
                <label  class="form-label font">Rua</label>
                <input type="text" class="form-control"  placeholder="Rua" name="rua" required>
            </div >
            <hr>
            <br>

            <div class="mb-3 text-center">
                <label  class="form-label font">Bairro</label>
                <input type="text" class="form-control"  placeholder="Bairro" name="bairro" required>
            </div >
            <hr>
            <br>

            <div class="mb-3 text-center">
                <label  class="form-label font">Número</label>
                <input type="text" class="form-control"  placeholder="Numero " name="numero" required>
            </div >
            <hr>
            <br>

            <div class="mb-3 text-center">
                <label  class="form-label font">Complemento</label>
                <input type="text" class="form-control" placeholder="Complemento" name="complemento" required>
            </div >
            <hr>
            <br>

            <input type="submit" name="botaocademp" value="Cadastrar Empresa" id="botaoCadUsu" class="btn btn-outline-success botao">
            </form>


        </div>



    </div>
    
</body>
</html>

