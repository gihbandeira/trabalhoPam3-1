<?php
    // if( 
    //     !isset($_REQUEST["numero1"] ) || 
    //             $_REQUEST["numero1"] == ""||
    //     !isset($_REQUEST["numero2"] ) ||
    //             $_REQUEST["numero2"] == ""
    //     !isset($_REQUEST["numero3"] ) ||
    //             $_REQUEST["numero3"] == ""
    //     !isset($_REQUEST["numero4"] ) ||
    //             $_REQUEST["numero4"] == ""
    // ){

    
    //     echo "Parâmetros inválidos. Não da pra fazer a conta.";
    //     exit;
    // }

    
    $numero1 = $_REQUEST["numero1"];
    $numero2 = $_REQUEST["numero2"];
    $numero3 = $_REQUEST["numero3"];
    $numero4 = $_REQUEST["numero4"];

    if( !is_numeric($numero1) ){
        echo "Voce informou parâmetro que não é numero ";
            exit;
    } 

        if( !is_numeric($numero2) ){
            echo "Voce informou parâmetro que não é numero ";
            exit;
        }
        if( !is_numeric($numero3) ){
            echo "Voce informou parâmetro que não é numero ";
            exit;
        }
        if( !is_numeric($numero4) ){
            echo "Voce informou parâmetro que não é numero ";
            exit;
        }

    


    $media = ($numero1 + $numero2 + $numero3 + $numero4) /4  ;
    

    if($media >=0 && $media<2) {
        $situacao = "Muito ruim";
        

        
    }elseif($media >=2 && $media<5){
        $situacao = "Ruim";
        
        

    }elseif($media >=5 && $media <7){
        $situacao = "Regular";
        


    }elseif($media >=7 && $media <9){
        $situacao = "Bom";
        


    }else{
        $situacao = "Muito bom";
        


    }


  
    

    $resposta["media"] = $media;
    $resposta["situacao"] = $situacao;

    echo json_encode($resposta);

    exit;


?>