<?php
global $wpdb;
$alerta = "";
$tabela_nome = $wpdb->prefix . 'tblempresa';

$id = sanitize_text_field($_GET["id"]);

if(!empty($_GET['id'])){

    
    $resultado = $wpdb->get_results("SELECT * FROM wp_tblempresa WHERE idEmpresa = $id");
    
}
 
 if(!empty($_POST['attbtn'])){

    try{
        $cnpj = sanitize_text_field($_POST['cnpj']);
        $nome = sanitize_text_field($_POST['nome']);
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
        $status = sanitize_text_field($_POST['status']);
        
        try{
            $wpdb->query($wpdb->prepare("UPDATE wp_tblempresa SET
            nome = '$nome',
            simples = '$simples',
            empregados = '$empregados',
            sistema = '$sistema',
            portefiscal = '$portefiscal',
            site = '$site',
            cep = '$cep',
            cidade = '$cidade',
            rua = '$rua',
            bairro = '$bairro',
            numero = '$numero',
            complemento = '$complemento',
            atividade = '$atividade',
            cpf = '$cpf',
            status = '$status'
            WHERE idEmpresa = $id"));

            header("Refresh:0");
            $alerta = "Atualizado com Sucesso!";        
                
            
        }catch (Exception $e)  
        {  
            echo "Excecao: ";
            echo $e->getMessage();
           
        }
    }catch (Exception $e)  
    {  
        echo "Excecao: ";
        echo $e->getMessage();
       
    }

}
?>