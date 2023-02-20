<?php
global $wpdb;
$tabela_planos = $wpdb->prefix . 'tblplanos';
$tabela_planoempresausu = $wpdb->prefix . 'tblplanosempresausuario';
$atualDate = date('Y-m-d');
$endDate = date('d/m/y', strtotime("+ 1 months"));
//$PesquisaDatas = $wpdb->get_results("SELECT datVigenciaFinal AS DatF FROM wp_tblplanos");
//$Indices = $wpdb->get_results("SELECT COUNT(idPlano) as ids FROM wp_tblplanos");
//$Qtd = ($Indices[0]->ids);
 //for($i =0; $i < $Qtd; $i++){

  //$DataFinal = ($PesquisaDatas[$i]->DatF);


  //if(strtotime($DataFinal) > strtotime($atualDate)){

      $resultado = $wpdb->get_results("SELECT nomePlano, dscPlano, qtdAcessos, qtdBeneficiarios, qtdReponsaveis, vlrUnico, status, vlrMensal FROM wp_tblplanos WHERE datVigenciaFinal > DATE(NOW()) AND status = 1");
  //}
//}

//echo $DataFinal . "  ";
//echo $atualDate . "  ";

// if($DataFinal > $atualDate){

 

// }

// else 
  // echo "Sem planos vigentes";


// }



    

        try{
       
        if(!empty ($_POST['botaoPlano'])){
             
            $plano = sanitize_text_field($_POST['plano']);
            $idusu = sanitize_text_field($_POST['idUsu']);
            $BuscaID = $wpdb->get_results("SELECT idPlano AS idPego FROM wp_tblplanos WHERE nomePlano = '$plano'");
            $idPlano = ($BuscaID[0]->idPego);
            print_r($idPlano);

            $wpdb->insert($tabela_planoempresausu, array( 

                'idPlano' => $idPlano,
                'datAdesao' => $atualDate,
                'datEncerramento' => $endDate,
                'idEmpresaUsu' => $idusu

    
    
            ));
    
        }

        

      }catch (Exception $e)  
      {  
         echo "Excecao: ";
         echo $e->getMessage();
      }
      
      

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planos</title>
</head>
<body>
<form method="POST" action="">
<div class="container-fluid">
  <div class="table-responsive">
 <table class="table">
    <thead>

      <tr style="border:2px solid #373737; color:white; background-color:#434343;" class="text-center">
        <th>Plano</th>
        <th>Descrição</th>
        <th>Acessos</th>
        <th>Beneficiarios</th>
        <th>Responsaveis</th>
        <th>Valor Unico</th>
        <th>Valor Mensal</th>
        <th>Status</th>
      </tr>
    </thead>
<?php
foreach($resultado as $key => $valor):
?>
    <tbody>
      <tr class="text-center">
        
        <td><?php echo $valor->nomePlano;?></td>
        <td><?php echo $valor->dscPlano;?></td>
        <td><?php echo $valor->qtdAcessos;?></td>
        <td><?php echo $valor->qtdBeneficiarios;?></td>
        <td><?php echo $valor->qtdReponsaveis;?></td>
        <td><?php echo $valor->vlrUnico;?></td>
        <td><?php echo $valor->vlrMensal;?></td>
        <td><?php 
        if($valor -> status == 1){

          echo "Ativa";
            

        }

        else{

          echo "Inativa";

        }
        ?></td>
        
        
      </tr>
      
<?php endforeach ?>
    </tbody>
  </table>
  </div>

  <br>
  <br>
  <p>Escolha um Plano</p>
  <select class="form-control text-center" name="plano" required>
                    <?php
                    foreach ($resultado as $key => $value):
                    ?>                                   
                    <option value="<?php echo $value->nomePlano?>"><?php echo $value->nomePlano?></option>
                    <?php endforeach ?>
                </select>

                <label  class="form-label font">IdEmpresaUsu</label>
                <input type="number" name="idUsu" placeholder="Digite o id empresa Usu"/>

                <input type="submit" value="Aderir Plano" name = "botaoPlano"/>
  </div>
</form>
</body>
</html>


