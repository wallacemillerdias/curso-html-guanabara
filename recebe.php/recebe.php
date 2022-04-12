<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebe php</title>
</head>

<body>
<div class="topo">
    <img src="logo-php.png" alt="imagem olho">
</div>
<br><br>

<h1>TREINAMENTOS - VAMOS TREINAR COM PHP</h1><hr><br>

<div class="pesquisa">    
 <h6>Wallace Miller</h6>
    </div>

<div class="conteudo">
    <?php

    $pesquisa = $_GET["pesquisa"];

    switch ($pesquisa) {

        case 'Ofice':
            echo "
             <h2>Programação</h2><br>
             <img src="recebe.php/fotoprog.jpeg" alt="fotoprog">

             Programação é o processo de criação de um conjunto de instruções que dizem ao computador como realizar uma tarefa. Programação pode ser feita usando uma variedade de "idiomas" do computador, tais como SQL, Java, Python e C++.";
             break;

             case'marketing':
                echo"
                <h2>Marketig Digital</h2>
                <img src="recebe.php/fotomkt.jpeg" alt="fotomkt">
                Marketing é a ciência e arte de explorar, criar e entregar valor para satisfazer as necessidades e os desejos de um mercado consumidor a partir da oferta de produtos ou serviços que despertem o interesse do público. Assim, o Marketing consegue gerar valor para os clientes e também lucro para as empresas.";
                break;

                case'Inteligência Artificial':
                    <img src="recebe.php/fotointelegencia.jpeg" alt="fotointelegencia">
                    echo"Inteligência Artificial é um conceito que pertence à computação e consiste na capacidade que máquinas (físicas, softwares e outros sistemas) têm de interpretar dados externos, aprender a partir dessa interpretação e utilizar o aprendizado para resolver tarefas específicas e atingir objetivos determinados.";
            

 

    }


    ?>

</div>

</body>

</html>