<?php
session_start();
global $wpdb;
$alerta = "";
$tabela_nome = $wpdb->prefix . 'tblavaliacao';


$_SESSION['Usuario'] = $userlogin;
try{


    if(!empty($_POST['botaoavalia'])){

        $idatleta = sanitize_text_field( $_POST['idatleta']);
        $data = sanitize_text_field( $_POST['data']);
        $dataprox = sanitize_text_field($_POST['dataprox']);
        $idade = sanitize_text_field($_POST['idade']);
        $sexo = sanitize_text_field($_POST['sexo']);
        $altura = sanitize_text_field($_POST['altura']);
        $peso = sanitize_text_field($_POST['peso']);
        $torax = sanitize_text_field($_POST['torax']);
        $cintura = sanitize_text_field($_POST['cintura']);
        $gca = sanitize_text_field($_POST['gca']);
        $gcm = sanitize_text_field($_POST['gcm']);
        $imca = sanitize_text_field($_POST['imca']);
        $imcm  = sanitize_text_field($_POST['imcm']);  

        try{

            $wpdb->insert($tabela_nome, array(

                'IDAtleta' => $idatleta,
                'Data'=>$data,
                'DataProxAvaliacao'=>$dataprox,
                'Idade' => $idade,
                'Sexo'=>$sexo,
                'Altura'=>$altura,
                'Peso' => $peso,
                'Torax'=>$torax,
                'Cintura'=>$cintura,
                'Gordura Corporal Atual' => $gca,
                'Gordura Corporal Meta'=>$gcm,
                'IMC Atual'=>$imca,
                'IMC Meta'=>$imcm
                
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