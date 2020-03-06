<?php
    if( 
        !isset($_REQUEST["numero1"] ) || 
                $_REQUEST["numero1"] == ""||
        !isset($_REQUEST["numero2"] ) ||
                $_REQUEST["numero2"] == ""
    ){

    
        echo "Parâmetros inválidos. Não da pra fazer a conta.";
        exit;
    }

    
    $numero1 = $_REQUEST["numero1"];
    $numero2 = $_REQUEST["numero2"];

    if( !is_numeric($numero1) ){
        echo "Voce informou parâmetro que não é numero ";
            exit;
    } 

        if( !is_numeric($numero2) ){
            echo "Voce informou parâmetro que não é numero ";
            exit;
        }

    


    $resultado = $numero1 + $numero2;
    

    if($resultado >=0) {
        $sinal = "Positivo";
        
    }

    if($resultado <0){
        $sinal = "Negativo";
        
    }

    $resposta["total"] = $resultado;
    $resposta["sinal"] = $sinal;

    echo json_encode($resposta);

    exit;


?>