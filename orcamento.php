<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Orçamento</title>
    <link href="css/estilo.css" rel="stylesheet">
</head>
<body>
<div class="topo">
    <img src="img/logo-php.png" alt="imagem olho">
</div>
<br><br>

<h1>TREINAMENTOS - VAMOS TREINAR COM PHP</h1><hr><br>

<div class="conteudo">

    <?php
        $data = $_POST["data"];
        $garantia = $_POST["garantia"];
        $servico = $_POST["servico"];
        $aparelho = $_POST["aparelho"];
        $cliente = $_POST["cliente"];

        echo"<b>Olá Sr(a). $cliente </b><br><br>";
        echo"<b>Detalhes do Orçamento:</b><br><br>";
        echo"<b>Data</b>: $data Tempo de Garantia após a Entrega: $garantia meses.<br><br>";
        echo"<b>Aparelho para Manutenção</b>: $aparelho <br><br>";
        echo"<b>Serviço a ser Executado</b>: $servico <br><br>";

        switch($servico){ 
        case"Formatação":
            echo"o valor total será de: R$ 70,00 a mão de obra, mais a R$ 50,00 de equipamentos, <b>Totalizando R$ 120,00 reais.</b>";
        break;
        case"Troca de Peças":
            echo"o valor total será de: R$ 100,00 a mão de obra, mais a R$ 50,00 de equipamentos, <b>totalizando R$ 150,00 reais.</b>";
        break; 
        case"Outros":
            echo"o valor total será de: R$ 150,00 a mão de obra, mais a R$ 50,00 de equipamentos, <b>Totalizando R$ 200,00 reais.</b>";
        break;
            
        default:
        echo"Infelizmente não é possível reaçizar o serviço no momento.";
        }
        echo"Declaro estar de acordo com valores e informações acima descritos.<br><br> $cliente";
        ?>
        <p>Assinatura:____________________________________________________________________</p><br>
        <p>Data:____/____/____</p><br>
        <p>Ao assinar você concorda com todos os termos de serviço e garantia.</p>

        <form >
            <input type="button" value="Imprimir Orçamento" onclick="window.print()"><br><br>
        </form>

        <a href="index.php"> << voltar </a>
</div>

 <div class="rodape">
    <h2>Programação Web com PHP</h2>
</div>

<footer>
    <h3>Todos os direitos reservados - Wallace Miller Dias</h3>
</footer>

</body>

</html>