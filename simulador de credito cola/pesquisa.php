<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Pesquisa</title>
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

    $pesquisa = $_GET["pesquisa"];

    switch ($pesquisa) {
        case "Programação":
        case "programação":
        case "Programaçao":
        case "programaçao":
        case "Programacao":
        case "programacao":
            echo '
             <h2>programação</h2><br>
             <img src="img/fotoprog.jpeg" alt="imagem olho"><br><br>
             Programação é o processo de criação de um conjunto de instruções que dizem ao computador como realizar uma tarefa. Programação pode ser feita usando uma variedade de "idiomas" do computador, tais como SQL, Java, Python e C++.';
             break;
        case "marketing":
            echo'
            <h2>Marketig digital</h2>
            <img src="img/fotomkt.jpeg" alt="fotomkt"><br><br>
            Marketing é a ciência e arte de explorar, criar e entregar valor para satisfazer as necessidades e os desejos de um mercado consumidor a partir da oferta de produtos ou serviços que despertem o interesse do público. Assim, o Marketing consegue gerar valor para os clientes e também lucro para as empresas.';
        break;
        case "inteligência artificial":
            echo' <img src="img/fotointelegencia.jpeg" alt="fotointelegencia"><br><br>
               Inteligência Artificial é um conceito que pertence à computação e consiste na capacidade que máquinas (físicas, softwares e outros sistemas) têm de interpretar dados externos, aprender a partir dessa interpretação e utilizar o aprendizado para resolver tarefas específicas e atingir objetivos determinados.';
        break;
        
        default: 
        echo'Pesquisa não encontrada. Volte e selecione uma opção';
       }
     ?> 
        <br><br>
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