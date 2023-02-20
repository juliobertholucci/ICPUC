<?php
require 'functionLogadoAdmin.php';
require 'functionDeslogar.php';

global $wpdb;
$tabela_nome = $wpdb->prefix . 'tblempresa';
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
global $wpdb;
$resultado = $wpdb->get_results("SELECT nome, idEmpresa, cpf, cnpj, cidade, rua, status FROM wp_tblempresa WHERE admin = '$userlogin'");
  if(!$resultado){

    $resultado = $wpdb->get_results("SELECT * FROM wp_tblempresa JOIN wp_tblusuario1 WHERE nome = empresa AND usuario = '$userlogin'");
    
  }

?>


<div class="container-fluid">
  <div class="table-responsive">
 <table class="table">
    <thead>

      <tr style="border:2px solid #373737; color:white; background-color:#434343;" class="text-center">
        <th>Nome</th>
        <th>CPF</th>
        <th>CNPJ</th>
        <th>Cidade</th>
        <th>Rua</th>
        <th>Status</th>
        <th>Editar</th>
        <th>Inativar</th>
      </tr>
    </thead>
<?php
foreach($resultado as $key => $valor):
?>
    <tbody>
      <tr class="text-center">
        
        <td><?php echo $valor->nome;?></td>
        <td><?php echo $valor->cpf;?></td>
        <td><?php echo $valor->cnpj;?></td>
        <td><?php echo $valor->cidade;?></td>
        <td><?php echo $valor->rua;?></td>
        <td><?php 
        if($valor -> status == 1){

          echo "Ativa";
            

        }

        else{

          echo "Inativa";

        }
        ?></td>
        
        <td ><a href="http://localhost/Formspuc/sys/alterar?id=<?php echo $valor->idEmpresa;?>"><i style="color:green;" class="fa-solid fa-pen-clip"></i></a></td>
        
        <td><a href="http://localhost/Formspuc/sys/empresas/?Inativar=<?php echo $valor->idEmpresa;?>"><i style="color:red;" class="fa-solid fa-x"></i> </a></td>
      </tr>
      
<?php endforeach ?>
    </tbody>
  </table>
  </div>
  </div>


    <div class="container-fluid row col-lg-12">
        <a style="background-color:#009ada; color:white; " href="http://localhost/Formspuc/sys/empresas/cadastrarempresa" class="btn margin col-lg-2 m-1" >Cadastrar Empresa</a>
    </div>
</div>



</body>