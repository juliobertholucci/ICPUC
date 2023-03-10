<?php
include 'functionLogadoAdmin.php';
include 'functionDeslogar.php';
include 'functionsProtocoloTreino.php';             
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

        function duplicarCampos(){
            var clone = document.getElementById('origem').cloneNode(true);
            var destino = document.getElementById('destino');
            destino.appendChild (clone);
            
            var camposClonados = clone.getElementsByTagName('input');
            
            alert("Campo Adicionado!");

            for(i=0; i<camposClonados.length;i++){
                camposClonados[i].value = '';
            }
            
        }

        function removerCampos(id){
            var node1 = document.getElementById('destino');
            node1.removeChild(node1.childNodes[0]);
            alert("Campo Removido!");
        }

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
            <div class="title "><h3 class="font">Cadastrar Protocolo de Treino</h3></div>
            <h4 class="text-center mt-2 " style="font-style:italic;color:#009ada;"><?php echo $alerta;?></h4>
            <hr>
         
            <form action="" method="POST">

            <div class="mb-3 text-center">
                <label  class="form-label font">Arte Marcial</label>
                <input type="number" class="form-control text-center"  placeholder="Insira o n??mero correspondente" name="artemarcial" maxlength="2" required >

            </div>

            <hr>
            <br>
            <div class="mb-3 text-center">
                <label  class="form-label font">Nome/Descri????o</label>
                <input type="text" class="form-control text-center"  placeholder="Nome e/ou Descri????o" name="nomedesc" required>
            </div>

            <hr>
            <br>
            <div class="mb-3 text-center">
                <label  class="form-label font">Objetivo</label>
                <input type="text" class="form-control text-center"  placeholder="" name="objetivo" required>
                <p id="pt"></p>
            </div>

            <hr>
            <br>
            <div class="mb-3 text-center">
                <label  class="form-label font">Dura????o M??dia</label>
                <input type="text" class="form-control text-center"  placeholder="Dura????o m??dia em dias" name="duracaomedia" >
                
            </div>

            <hr>
            <br>
            <div class="mb-3 text-center">
                <label  class="form-label font">Nivel</label>
                <input type="number" class="form-control text-center" placeholder="Nivel [1 a 14]" name="nivel" >
                <p id="ps"></p>
            </div>


            <hr>
            <br>
            <div class="mb-3 text-center">
                <label  class="form-label font">Sensor 1</label>
                <input type="text" class="form-control text-center" placeholder="" name="sensor1" >
                <p id="ps"></p>
            </div>

            <hr>
            <br>
            <div class="mb-3 text-center">
                <label  class="form-label font">Sensor 1 Descri????o (Opcional)</label>
                <input type="text" class="form-control text-center"  placeholder="Descri????o do Sensor 1" name="descs1" >
                <p id="ps"></p>
            </div>


            <hr>
            <br>
            <div class="mb-3 text-center">
                <label  class="form-label font">Sensor 2</label>
                <input type="text" class="form-control text-center" placeholder="" name="sensor2" >
                <p id="ps"></p>
            </div>


            <hr>
            <br>
            <div class="mb-3 text-center">
                <label  class="form-label font">Sensor 2 Descri????o (Opcional)</label>
                <input type="text" class="form-control text-center"  placeholder="Descri????o do Sensor 2" name="descs2" >
                <p id="ps"></p>
            </div>


            <hr>
            <br>
            <div class="mb-3 text-center">
                <label  class="form-label font">Sensor 3</label>
                <input type="text" class="form-control text-center" placeholder="" name="sensor3" >
                <p id="ps"></p>
            </div>


            <hr>
            <br>
            <div class="mb-3 text-center">
                <label  class="form-label font">Sensor 3 Descri????o (Opcional)</label>
                <input type="text" class="form-control text-center"  placeholder="Descri????o do Sensor 3" name="descs3" >
                <p id="ps"></p>
            </div>


            <hr>
            <br>
            <div class="mb-3 text-center">
                <label  class="form-label font">Sensor 4</label>
                <input type="text" class="form-control text-center" placeholder="" name="sensor4" >
                <p id="ps"></p>
            </div>


            <hr>
            <br>
            <div class="mb-3 text-center">
                <label  class="form-label font">Sensor 4 Descri????o (Opcional)</label>
                <input type="text" class="form-control text-center"  placeholder="Descri????o do Sensor 4" name="descs4" >
                <p id="ps"></p>
            </div>


            <hr>
            <br>
            <div class="mb-3 text-center">
                <label  class="form-label font">Sensor 5</label>
                <input type="text" class="form-control text-center" placeholder="" name="sensor5" >
                <p id="ps"></p>
            </div>


            <hr>
            <br>
            <div class="mb-3 text-center">
                <label  class="form-label font">Sensor 5 Descri????o (Opcional)</label>
                <input type="text" class="form-control text-center"  placeholder="Descri????o do Sensor 5" name="descs5" >
                <p id="ps"></p>
            </div>


            <hr>
            <br>
            <div class="mb-3 text-center">
                <label  class="form-label font">Sensor 6</label>
                <input type="text" class="form-control text-center" placeholder="" name="sensor6" >
                <p id="ps"></p>
            </div>


            <hr>
            <br>
            <div class="mb-3 text-center">
                <label  class="form-label font">Sensor 6 Descri????o (Opcional)</label>
                <input type="text" class="form-control text-center"  placeholder="Descri????o do Sensor 6" name="descs6" >
                <p id="ps"></p>
            </div>


            <hr>
            <br>
            <div class="mb-3 text-center">
                <label  class="form-label font">Sensor 7</label>
                <input type="text" class="form-control text-center" placeholder="" name="sensor7" >
                <p id="ps"></p>
            </div>


            <hr>
            <br>
            <div class="mb-3 text-center">
                <label  class="form-label font">Sensor 7 Descri????o (Opcional)</label>
                <input type="text" class="form-control text-center"  placeholder="Descri????o do Sensor 7" name="descs7" >
                <p id="ps"></p>
            </div>


            <hr>
            <br>
          
            
        

<div id="origem" align="center" >
    <div class="title "><h3 class="font">Sequencia de Golpes</h3></div>
        <br>
        <br>
    <div class="mb-3 text-center">
        <label  class="form-label font">Sensor</label>
                <input type="text" class="form-control text-center" name="sensorSequencia[]"  />
            <hr>
            <br>
            <br>
    </div>

    <div class="mb-3 text-center">
        <label  class="form-label font">Tipo Estimulo</label>
                <input type="text" class="form-control text-center" name="tipoSequencia[]"  />
            <hr>    
            <br>
            <br>
    </div>

    <div class="mb-3 text-center">
        <label  class="form-label font">Intervalo</label>
                <input type="text" class="form-control text-center" name="intervaloSequencia[]"  />
            <hr>    
		    <br>
    </div>

            <p style="cursor: pointer;color:green; font-weight:900" onclick="duplicarCampos();">Adicionar</p>
            <p style="cursor: pointer;color:red; font-weight:900" onclick="removerCampos(this);">Remover</p> 
	


	
	<div id="destino">
	</div>



    </div>

            <br> 
            <input type="submit" name="botaoavalia" value="Cadastrar Protocolo" id="botaoCadUsu" class="btn botao">
            <br>
            <br>
            </form>

 

    </div>
      
    

        <!-- Button to Open the Modal -->
<button type="button" class="back" data-bs-toggle="modal" data-bs-target="#myModal" style="border-radius:20px;">
<i class="fa-solid fa-info" data-bs-toggle="tooltip" title="Sensores" style="font-size:30px;"></i>
</button>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Sensores & Artes Marciais </h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <pre>
        Sensores: 
        1-Soco Cabe??a
        2-Soco Cabe??a Esq
        3-Soco Cabe??a Dir
        4-Soco Peito
        5-Soco Bra??o Esq
        6-Soco Bra??o Dir
        7-Soco Barriga
        8-Soco Barriga Esq
        9-Soco Barriga Dir
        10-Cotovelada Cabe??a
        11-Chute Cabe??a
        12-Chute Cabe??a Esq
        13-Chute Cabe??a Dir
        14-Chute Peito
        15-Chute Bra??o Esq
        16-Chute Bra??o Dir
        17-Chute Barriga
        18-Chute Barriga Esq
        19-Chute Barriga Dir
        20-Chute Coxa Esq
        21-Chuta Coxa Dir
        22-Chute Canela Esq
        23-Chuta Canela Dir
        </pre>
        <hr/>

        <pre>
        Artes Marciais:
        1-Aikido
        2-Boxe
        3-Capoeira
        4-Jiu-j??tsu
        5-Karate
        6-Kick Boxing
        7-Kung Fu
        8-Muay Thai
        9-Tae Kwon Do
        </pre>
        
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn" style="background-color:#009ada; color:white;" data-bs-dismiss="modal">Fechar</button>
      </div>

    </div>
  </div>
</div>

    </div>
    
</body>
</html>

