<?php
include 'functions.php';
if(!empty ($_POST['botao1'])){

    if(!empty($_POST['cpf'])){

      $cpf = sanitize_text_field($_POST['cpf']);
      $cnpj = sanitize_text_field($_POST['cnpj']);
      
    
      
    }


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Àrea de Cadastro</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
      
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4117b8be6f.js" crossorigin="anonymous"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript" >
    
    <?php include 'jspage.js'; ?>


    </script>


    <style>

    <?php include 'csspage.css'; ?>

    </style>

</head>
<body>
    
<div class="principal">

      <div class="marg">
        <br>

        <div class="title "><h4 class="font">Dados da Empresa</h4></div>
        <br>
        <h4 class="text-center mt-2 " style="font-style:italic;color:#009ada;"><?php echo $alerta;?></h4>
        
        <form method="POST" action="">
        <?php $cpf = $_POST['cpf']; ?>
        <div class="input-group mb-3">
        <span class="input-group-text font spans  text-white" style="background-color:#009ada;" >CPF</span>
    
        <input type="text" name="cpf" value="<?php echo ($_POST['cpf']);?>" class="form-control  font" onkeydown="javascript: fMasc( this, mCPF );" placeholder="CPF" required maxlength="14" id="cpf" onblur="ValidCPF()">
                
      </div>
      
      <p id="pcpf"></p>
      <hr>
      
        
        <div class="input-group mb-3">
        <span class="input-group-text font spans text-white" style="background-color:#009ada" >CNPJ</span>
        <input type="text" name="cnpj" value="<?php echo ($_POST['cnpj']);?>" class="form-control  font" onkeydown="javascript: fMasc( this, mCNPJ );" placeholder="CNPJ" id="cnpj" maxlength="18" onblur="ValidCNPJ()">
                    
      </div>
      
      <p id="pcnpj"></p>



      <div class="mb-3">
        <label  class="form-label font">Nome</label>
        <input type="text" class="form-control"  placeholder="Nome" name="nome" >
      </div>

      <hr>

      <div class="mb-3">
        <label  class="form-label font">Optante pelo Simples?</label>
        <select class="form-control font" name="simples" >
        <option ></option>
        <option value=”S”>Sim</option>
        <option value=”N”>Não</option>
       
        </select>
        
      </div>


      <div class="mb-3">
        <label  class="form-label font">Empregados</label>
        <select class="form-control font" name="empregados" >
        <option ></option>
        <option value=”0a5”>0 a 5</option>
        <option value=”6a10”>6 a 10</option>
        <option value=”11a25”>11 a 25</option>
        <option value=”26a50”>26 a 50</option>
        <option value=”51a100”>51 a 100</option>
        <option value=”101a250”>101 a 250</option>
        <option value=”251a500”>251 a 500</option>
        <option value=”500+”>Acima de 500</option>
        <option value=”NSI”>Não sei informar</option>

        

        </select>
        <br>
        <br/>
        <p>O sistema será utilizado por quantas pessoas?</p>
        <select class="form-control font" name="sistema" >
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
        <option value=”NSI”>Não sei Informar</option>
        
       
        </select>
        
      </div>

      <hr>


      <div class="mb-3 font">
        <label  class="form-label font"><h5 class="font">Porte Fiscal</h5></label>
        <br/>
        
        
        <select class="form-control font" name="portefiscal" >
        <option ></option>
        <option value=”Microempresa”>Microempresa</option>
        <option value=”EPequenoP”>Empresa de Pequeno Porte</option>
        <option value=”EMedioP”>Empresa de Médio Porte</option>
        <option value=”EGrandeP”>Empresa de Grande Porte</option>
       
        </select>
        <br>
        <br/>
        <p>Principal Atividade:</p>
        <select class="form-control font" name="atividade" > 
        <option ></option>
        <option value=”Academia”>Academia</option>
        <option value=”Treinamento”>Treinamento</option>
        <option value=”Pesquisa”>Pesquisa</option>
        <option value=”ONG”>ONG</option>
        <option value=”Comercio”>Comércio</option>
        <option value=”Educacao”>Educação</option>
        <option value=”Saude”>Saúde</option>
        <option value=”Outros”>Outros</option>
        <option value=”NSI”>Não sabe/Não pode informar</option>
        </select>
        
      </div>

      <hr>

      <div class="mb-3 font">
        <label  class="form-label">Site</label>
        <input type="text" class="form-control font"  placeholder="Site" name="site" >
      </div>

      <hr>
      <br/>
      <div class="title "><h4 class="font">Endereço</h4></div>
      <br/>
      <hr>


      <div class="input-group mb-3 row " style="width:99.8%; margin:0 auto;">
      <span class="input-group-text col-md-2 font spans" style="border-radius:0px; background-color:#009ada; color:white;">CEP/Cidade</span>
      <input type="text" class="form-control col-md-4 font" name="cep" id="cp" placeholder="CEP" onkeydown="javascript: fMasc( this, mCEP );" maxlength="10">
      <input type="text" class="form-control col-md-4 font" name="cidade" id="city" placeholder="Cidade" maxlength="35">
      <button class="btn  col-md-2 font" style="border-radius:0px; background-color:#414141" type="submit">  <i class="fa-solid fa-magnifying-glass-location fa-xl"></i> </button>
      </div>
      
      <hr/>
      <div class="mb-3">
        <label  class="form-label font">Rua:</label>
        <input type="text" class="form-control"  placeholder="Rua" name="rua" >
      </div>

      
      <hr/>
      <div class="mb-3">
        <label  class="form-label font">Bairro:</label>
        <input type="text" class="form-control"  placeholder="Bairro" name="bairro" >
      </div>

      
      <hr/>
      <div class="mb-3">
        <label  class="form-label">Numero:</label>
        <input type="text" class="form-control"  placeholder="Numero " name="numero" >
      </div>

      
      <hr/>
      <div class="mb-3">
        <label  class="form-label">Complemento:</label>
        <input type="text" class="form-control" placeholder="complemento" name="complemento" >
      </div>

      
      <hr/>
      <br/>
      <div class="title "><h4 class="font">Dados do Usuário</h4></div>
      <br/>
      <hr/>
      

      <div class="mb-3">
        <label  class="form-label">Nome de Usuário <mark style="color:red; background-color:none">(login)</mark>:</label>
        <input type="text" class="form-control"  placeholder="Nome (login) " name="usuario" required>
        
      </div>


      <hr/>

      <div class="mb-3">
        <label  class="form-label">Nome Completo:</label>
        <input type="text" class="form-control"  placeholder="Nome Completo " name="nomecompleto" required>
        
      </div>

      <hr/>

      <div class="mb-3">
        <label  class="form-label"> Whatsapp:</label>
        <input type="tel" onkeydown="javascript: fMasc( this, mTel );" class="form-control" id="tel" placeholder="(DDD)XXXX-XXXX" name="telefone" onblur="QTDtel()" maxlength="14" required>
        <p id="pt"></p>
        <p style="color:red; margin-top:10px;">(informações poderão ser enviadas)</p>
      </div>


      <div class="mb-3">
        <label  class="form-label"> Email: </label>
        <input id="em1" type="email" class="form-control"  placeholder="Email" name="email" required onblur="confirm()">
        
      </div>


      <hr/>

      <div class="mb-3">
        <label  class="form-label"> Confirme o Email:</label>
        <input id="em2" type="email" class="form-control"  placeholder="Confirme o email" required onblur="confirm()"  >
        
        
        
        
      </div>

      <hr/>

        <div class="mb-3">
        <label  class="form-label">Senha:</label>
        <input type="password" id="s1" class="form-control"  placeholder="Senha" name="senha" required onblur="funcs()">
        <p id ="ps"></p>
        </div>


        <hr/>

        <div class="mb-3">
        <label  class="form-label">Confirme a Senha:</label>
        <input type="password" id="s2" class="form-control"  placeholder="Senha" required onblur="confirm()">
        
        </div>

      <hr/>
      <br/>
      <div class="title "><h4 class="font">Perfil </h4></div>
      <br/>
      <hr/>

      <select class="form-control font" name="perfil" required>
        <option ></option>
        <option value="S">Sys Admin</option>
        <option value="D">Dono</option>
        <option value="F">Funcionário</option>
        <option value="P">Professor</option>
        <option value="A">Aluno</option>
       
      </select>

       

      <div class="form-check">
      <input class="form-check-input" type="checkbox"  name="option1" value="something" required>
      <label class="form-check-label">Li e concordo com o <a href="">termo de adesão</a></label>
    </div>
        <br/>
        <p id="p1" style="font-weight:bold;"></p>
       <input type="submit" name="botao2" id="btd" class="btn btn-outline-success button">
      <br/>
      <br/>
      </div>

        <a class="back" href="#top"><i class="fa-solid fa-angles-up icon"></i></a>

      </form>

</div>

</body>
</html>
