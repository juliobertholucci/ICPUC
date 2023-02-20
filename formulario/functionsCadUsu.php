<?php


global $wpdb;

$alerta = "";
$tabela_nome = $wpdb->prefix . 'tblempresa';
$tabela_nome2 = $wpdb->prefix . 'tblusuario1';
$tabela_nome3 = $wpdb->prefix . 'tblempresausuario';

try{

    if(!empty($_POST['botaocadusu'])){

        $nomelogin = sanitize_text_field( $_POST['nomelogin']);
        $nomecompleto = sanitize_text_field( $_POST['nomecompleto']);
        $telefone = sanitize_text_field( $_POST['telefone']);
        $email = sanitize_text_field( $_POST['email']);
        $senha = sanitize_text_field( $_POST['senha']);
        $perfil = sanitize_text_field( $_POST['perfil']);
        $empresa = sanitize_text_field( $_POST['empresa']);
        $hash = md5($senha);

        $wpdb->insert($tabela_nome2, array(

            'usuario' => $nomelogin,
            'nomecompleto'=>$nomecompleto,
            'email'=>$email,
            'senha' => $hash,
            'telefone'=>$telefone,
            'empresa' => $empresa
                        
        ));

        try{
           
            $result = $wpdb->get_results("SELECT MAX(idUsuario) AS maior_id FROM `wp_tblusuario1`");
            if($result != null) {

            $idUsuario = ($result[0]->maior_id);

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

            $result1 = $wpdb->get_results("SELECT MAX(idEmpresa) AS maior_id FROM `wp_tblempresa`");
            if($result1 != null) {

            $idEmpresa = ($result1[0]->maior_id);
            
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

            $wpdb->insert($tabela_nome3, array(
                'idEmpresa' => $idEmpresa,
                'idUsuario' => $idUsuario,
                'perfil' => $perfil
            

            
            ));
        }catch (Exception $e)  
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