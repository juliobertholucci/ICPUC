<?php
session_start();

global $wpdb;

$alerta = "";
$tabela_nome = $wpdb->prefix . 'tblempresa';
$tabela_nome2 = $wpdb->prefix . 'tblusuario1';
$tabela_nome3 = $wpdb->prefix . 'tblempresausuario';

$_SESSION['Usuario'] = $userlogin;
try{


    if(!empty($_POST['botaocademp'])){

        $cnpj = sanitize_text_field( $_POST['cnpj']);
        $nome = sanitize_text_field( $_POST['nome']);
        $simples = sanitize_text_field($_POST['simples']);
        $empregados = sanitize_text_field($_POST['empregados']);
        $sistema = sanitize_text_field($_POST['sistema']);
        $portefiscal = sanitize_text_field($_POST['portefiscal']);
        $site = sanitize_text_field($_POST['site']);
        $cep = sanitize_text_field($_POST['cep']);
        $cidade = sanitize_text_field($_POST['cidade']);
        $rua = sanitize_text_field($_POST['rua']);
        $bairro = sanitize_text_field($_POST['bairro']);
        $numero = sanitize_text_field($_POST['numero']);
        $complemento = sanitize_text_field($_POST['complemento']);
        $atividade  = sanitize_text_field($_POST['atividade']);
        $cpf = sanitize_text_field($_POST['cpf']);


    

        try{

            $wpdb->insert($tabela_nome, array(

                'cnpj' => $cnpj,
                'nome'=>$nome,
                'simples'=>$simples,
                'empregados' => $empregados,
                'sistema'=>$sistema,
                'portefiscal'=>$portefiscal,
                'site' => $site,
                'cep'=>$cep,
                'cidade'=>$cidade,
                'rua' => $rua,
                'bairro'=>$bairro,
                'numero'=>$numero,
                'complemento'=>$complemento,
                'atividade' => $atividade,
                'cpf' => $cpf,
                'admin' => $userlogin,
                'status' => 1
            ));

           
            
        }


        catch (Exception $e)  
        {  
            echo "Excecao: ";
            echo $e->getMessage();
           
        }

        $alerta = "Cadastrado com Sucesso!";

    }

   

    

    


}catch (Exception $e)  
    {  
      echo "Excecao: ";
      echo $e->getMessage();
    }

?>