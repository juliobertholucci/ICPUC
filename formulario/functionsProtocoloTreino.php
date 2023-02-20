<?php
session_start();
global $wpdb;
$alerta = "";
$tabela_nome = $wpdb->prefix . 'tblprotocolopadraotreino';
$atualDate = date('Y-m-d');


$_SESSION['Usuario'] = $userlogin;
try{


    if(!empty($_POST['botaoavalia'])){

        $artemarcial = sanitize_text_field( $_POST['artemarcial']);
        $nomedesc = sanitize_text_field( $_POST['nomedesc']);
        $objetivo = sanitize_text_field($_POST['objetivo']);
        $duracaomedia = sanitize_text_field($_POST['duracaomedia']);
        $nivel = sanitize_text_field($_POST['nivel']);
        $sensor1 = sanitize_text_field($_POST['sensor1']);
        $descs1 = sanitize_text_field($_POST['descs1']);
        $sensor2 = sanitize_text_field($_POST['sensor2']);
        $descs2 = sanitize_text_field($_POST['descs2']);
        $sensor3 = sanitize_text_field($_POST['sensor3']);
        $descs3 = sanitize_text_field($_POST['descs3']);
        $sensor4 = sanitize_text_field($_POST['sensor4']);
        $descs4 = sanitize_text_field($_POST['descs4']);
        $sensor5 = sanitize_text_field($_POST['sensor5']);
        $descs5 = sanitize_text_field($_POST['descs5']);
        $sensor6 = sanitize_text_field($_POST['sensor6']);
        $descs6 = sanitize_text_field($_POST['descs6']);
        $sensor7 = sanitize_text_field($_POST['sensor7']);
        $descs7 = sanitize_text_field($_POST['descs7']);
        $sensorSequencia = ($_POST['sensorSequencia']);
        $tipoSequencia = ($_POST['tipoSequencia']);
        $intervaloSequencia = ($_POST['intervaloSequencia']);

        $values = "";
        $mapa = array_map(null, $sensorSequencia, $tipoSequencia, $intervaloSequencia);

            $i=0;
            foreach($mapa AS $indice => $val) {
            $values .= " ('$sensorSequencia[$i]', '$tipoSequencia[$i]', '$intervaloSequencia[$i]'' ),";
            $i++;
            }
        
       

        try{

            $wpdb->insert($tabela_nome, array(

                'DataCadastro' => $atualDate,
                'ArteMarcial' => $artemarcial,
                'NomeDescricao'=>$nomedesc,
                'Objetivo'=>$objetivo,
                'DuracaoMedia' => $duracaomedia,
                'Nivel'=>$nivel,
                'Sensor1'=>$sensor1,
                'Sensor1Desc' => $descs1,
                'Sensor2'=>$sensor2,
                'Sensor2Desc'=>$descs2,
                'Sensor3' => $sensor3,
                'Sensor3Desc' => $descs3,
                'Sensor4' => $sensor4,
                'Sensor4Desc' => $descs4,
                'Sensor5' => $sensor5,
                'Sensor5Desc' => $descs5,
                'Sensor6' => $sensor6,
                'Sensor6Desc' => $descs6,
                'Sensor7' => $sensor7,
                'Sensor7Desc' => $descs7,
                'SequenciaGolpes' => $values

                
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