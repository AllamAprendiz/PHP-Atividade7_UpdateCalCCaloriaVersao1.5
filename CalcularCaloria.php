<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CalC Caloria</title>

    <!-- BOOTSTRAP 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FIM DA ESTILIAZAÇÃO COM BOOTSTRAP 4 -->

</head>
<body style="background-color: rgb(96, 96, 219);">
<div class="container">
    <table class="table table-dark">
    <!-- PHP -->
    <?php
        //CRIA AS VARIÁVEIS COM VALORES JÁ DEFINIDOS DOS PRODUTOS
        $Vegetariano_php = 180;
        $Peixe_php = 230 ;
        $Frango_php = 250;
        $Carne_php = 350;

        $Abacaxi_php = 75;
        $Sorvetediet_php = 110;
        $Moussediet_php = 170;
        $MousseChocolate_php = 200;

        $Cha_php = 20;
        $SucodeLaranja_php = 70;
        $Sucodemelão_php = 100;
        $Refrigerante_php = 65;

    //FIM DAS VARIÁVEIS COM VALORES JÁ DEFINIDOS

    //CRIA AS VARIÁVEIS DE ACORDO COM A ESCOLHA DO USUÁRIO
    $QuantidadeDePratos_php = filter_input(INPUT_POST,'QuantidadeDePratos_name');
    $QuantidadeDeSobremesas_php = filter_input(INPUT_POST,'QuantidadeDeSobremesas_name');
    $QuantidadeDeBebidas_php = filter_input(INPUT_POST,'QuantidadeDeBebidas_name');

    $EscolherPrato_php = filter_input(INPUT_POST,'EscolherPrato_name');
    $EscolherSobremesa_php = filter_input(INPUT_POST,'EscolherSobremesa_name');
    $EscolherBebida_php = filter_input(INPUT_POST,'EscolherBebida_name');
    //FIM DAS VARIÁVEIS OPCIONAIS


    //CRIA AS CONDIONAIS

    //Switch Pratos
    switch($EscolherPrato_php){

        case 'Selecione';
        echo "<p style=color:white;>Não Houve Escolha de Prato</p> ";
        $TotalCalorias_Prato_php = 0;
        break;

        case 'Vegetariano';
                $TotalCalorias_Prato_php = $Vegetariano_php * $QuantidadeDePratos_php;
                echo "<p style=color:yellow;>O Total de Calorias do Prato Escolhido:</p> " . $TotalCalorias_Prato_php . "<p style=color:white;> CaL</p>";
        break;

        case 'Peixe';
            $TotalCalorias_Prato_php = $Peixe_php * $QuantidadeDePratos_php;
            echo "<p style=color:yellow;>O Total de Calorias do Prato Escolhido:</p> " . $TotalCalorias_Prato_php . "<p style=color:white;> CaL</p>";
        break;

        case 'Frango';
            $TotalCalorias_Prato_php =$Frango_php * $QuantidadeDePratos_php;
            echo "<p style=color:yellow;>O Total de Calorias do Prato Escolhido:</p> " . $TotalCalorias_Prato_php . "<p style=color:white;> CaL</p>";
        break;

        case 'Carne';
            $TotalCalorias_Prato_php =$Carne_php * $QuantidadeDePratos_php;
            echo "<p style=color:yellow;>O Total de Calorias do Prato Escolhido:</p> " . $TotalCalorias_Prato_php . "<p style=color:white;> CaL</p>";
        break;
    }
    //Switch Sobremesa
    switch($EscolherSobremesa_php){

        case 'Selecione';
        echo "<p style=color:white;>Não Houve Escolha de Sobremesa</p> ";
        $TotalCalorias_Sobremesa_php = 0;
        break;

        case 'Abacaxi';
            $TotalCalorias_Sobremesa_php = $Abacaxi_php * $QuantidadeDeSobremesas_php;
            echo "<p style=color:yellow;>O Total De Calorias da Sobremesa Escolhida:</p> " . $TotalCalorias_Sobremesa_php . "<p style=color:white;> CaL</p>";
        break;

        case 'Sorvetediet';
            $TotalCalorias_Sobremesa_php =$Sorvetediet_php * $QuantidadeDeSobremesas_php;
            echo "<p style=color:yellow;>O Total De Calorias da Sobremesa Escolhida:</p> " . $TotalCalorias_Sobremesa_php . "<p style=color:white;> CaL</p>";
        break;

        case 'Moussediet';
            $TotalCalorias_Sobremesa_php =$Moussediet_php * $QuantidadeDeSobremesas_php;
            echo "<p style=color:yellow;>O Total De Calorias da Sobremesa Escolhida:</p> " . $TotalCalorias_Sobremesa_php . "<p style=color:white;> CaL</p>";
        break;
        
        case 'MousseChocolate';
            $TotalCalorias_Sobremesa_php =$MousseChocolate_php * $QuantidadeDeSobremesas_php;
            echo "<p style=color:yellow;>O Total De Calorias da Sobremesa Escolhida:</p> " . $TotalCalorias_Sobremesa_php . "<p style=color:white;> CaL</p>";
        break;
    }
    
    //Switch Bebidas
    switch($EscolherBebida_php){
    
        case 'Selecione';
        echo "<p style=color:white;>Não Houve Escolha de Bebida</p> ";
        $TotalCalorias_Bebida_php = 0;
        break;

        case 'Cha';
            $TotalCalorias_Bebida_php = $Cha_php * $QuantidadeDeBebidas_php;
            echo "<p style=color:yellow;>O Total De Calorias da Bebida Escolhida:</p> " . $TotalCalorias_Bebida_php . "<p style=color:white;> CaL</p>";
        break;

        case 'SucoDeLaranja';
            $TotalCalorias_Bebida_php =$SucodeLaranja_php * $QuantidadeDeBebidas_php;
            echo "<p style=color:yellow;>O Total De Calorias da Bebida Escolhida:</p> " . $TotalCalorias_Bebida_php . "<p style=color:white;> CaL</p>";
        break;

        case 'SucoDeMelao';
            $TotalCalorias_Bebida_php =$Sucodemelão_php * $QuantidadeDeBebidas_php;
            echo "<p style=color:yellow;>O Total De Calorias da Bebida Escolhida:</p> " . $TotalCalorias_Bebida_php . "<p style=color:white;> CaL</p>";
        break;
        
        case 'Refrigerante';
            $TotalCalorias_Bebida_php =$Refrigerante_php * $QuantidadeDeBebidas_php;
            echo "<p style=color:yellow;>O Total De Calorias da Bebida Escolhida:</p> " . $TotalCalorias_Bebida_php . "<p style=color:white;> CaL</p>";
        break;
    }
    //FIM DAS CONDICIONAIS

    //SOMA AS CALORIAS TOTAIS DOS ALIMENTO
    $SomaTotaisCalorias_php = $TotalCalorias_Prato_php + $TotalCalorias_Sobremesa_php + $TotalCalorias_Bebida_php;
    echo "<br><p style=color:gold;>Soma Total Calórica dos Alimentos :</p>" . $SomaTotaisCalorias_php;
    //FIM DA FUNÇÃO DA SOMA
    ?>
    <!-- FIM DO PHP -->
    </table>
</div>
</body>
</html>