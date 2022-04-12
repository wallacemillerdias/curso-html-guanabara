<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Crédito</title>
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
     $nome = $_POST["nome"];
     $renda = $_POST["renda"];

      echo "Olã $nome, muito obrigado pelo seu contato!";

     if($renda>=2000) {
       echo"Parabéns! O seu crédito foi Aprovado!";
     }elseif($renda<2000){
       echo" Infelizmente neste momento não poderemos liberar o Crédito. Por favor clique aqui para Retornar à Página Principal.";
    }
    ?> <br><br>  
  
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