<?php
global $wpdb;
$alerta = "";
$tabela_nome = $wpdb->prefix . 'tblempresa'; //utiliza um prefix p/ o nome das tabelas
$tabela_nome2 = $wpdb->prefix . 'tblusuario1';
$tabela_nome3 = $wpdb->prefix . 'tblempresausuario';
try{
    
    if(!empty ($_POST['botao2'])){ //se clicou no botão
        //filtra os campos       
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
        $usuario = sanitize_text_field($_POST['usuario']);
        $nomecompleto = sanitize_text_field($_POST['nomecompleto']);
        $telefone = sanitize_text_field($_POST['telefone']);
        $email = sanitize_email($_POST['email']);
        $senha = sanitize_text_field($_POST['senha']);
        $perfil = sanitize_text_field($_POST['perfil']);
        $cpf = sanitize_text_field($_POST['cpf']);
        $hash = md5($senha);

        $wpdb->insert($tabela_nome, array( //insere na tabela 1

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
            'status' => 1,
            'admin' => $usuario
        
        ));


        $wpdb->insert($tabela_nome2, array( //insere na tabela 2

            'usuario' => $usuario,
            'nomecompleto'=>$nomecompleto,
            'email'=>$email,
            'senha' => $hash,
            'telefone'=>$telefone
            
            

        ));


        try{
           
            $result = $wpdb->get_results("SELECT MAX(idUsuario) AS maior_id FROM `wp_tblusuario1`"); //selecionando o ultimo id do usuario
            if($result != null) {

                $idUsuario = ($result[0]->maior_id); //atribui o valor a uma variavel
                $alerta = "Cadastrado com Sucesso!";
                header("Refresh:0; url=http://formspuc.local/index/logar/");
            }

            else {
                 echo 'Nenhuma informação encontrada para Usuario!';
            }      

          
           
        }catch (Exception $e)  
        {  
           echo "Excecao: ";
           echo $e->getMessage();
        }


        try{

            $result1 = $wpdb->get_results("SELECT MAX(idEmpresa) AS maior_id FROM `wp_tblempresa`"); //selecionando o ultimo id da empresa
            if($result1 != null) {

                $idEmpresa = ($result1[0]->maior_id); //atribui o valor a uma variavel
            
            }

            else {
                echo 'Nenhuma informação encontrada para Empresa!';
            }
            
            

        }catch (Exception $e)  
        {  
           echo "Excecao: ";
           echo $e->getMessage();
        }
        
       
        
        try{

            $wpdb->insert($tabela_nome3, array( //insere na tabela de relação entre usuario e empresa os respectivos ids
                'idEmpresa' => $idEmpresa,
                'idUsuario' => $idUsuario,
                'perfil' => $perfil
                        
            ));

           
        }catch (Exception $e)  
        {  
           echo "Excecao: ";
           echo $e->getMessage();
        }
    }


}
 

catch (Exception $e)  
{
   
   echo "Excecao: ";
   echo $e->getMessage();
}
?>