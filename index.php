<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <link href="css/estilo.css" rel="stylesheet">
</head>

<body>
    <div class="topo">
        <img src="img/logo-php.png" alt="logo php">
    </div>
    <br><br>
    
    <h1>TREINAMENTOS - VAMOS TREINAR COM PHP</h1><hr><br>
    
    <div class="pesquisa">
        <form method="get" action="pesquisa.php">
            <h6>Wallace Miller</h6>
            Pesquise no Site: &nbsp; <input type="text" name="pesquisa">
            <input type="submit" name="enviar" value="Pesquisar"><br><br>
            </form>
    </div>
    
    <div class="conteudo">
        <fieldset>
            <legend>Calcule aqui sua Possibilidade de Crédito</legend>
            <form method="post" action="credito.php"><
    
                Nome: &nbsp;<input type="text" name="nome">
                Renda: &nbsp;<input type="number" name="renda"><br><br>
                <input type="submit" name="enviar" value="Calcular Crédito">
            </form>
        </fieldset>
        <br><br>
    
        <fieldset>
            <legend> Faça Aqui o Seu Orçamento</legend>
            <form action="orcamento.php" method="post">
    
                Data do Orçamento: &nbsp; <input type="date" name="data">
                Tempo de Garantia: &nbsp; <input type="number" name="garantia" min="1" max="6"><br><br>
    
                Serviço a ser Realizado: &nbsp;
                <select name="servico">
                    <option>Formatação</option>
                    <option>Troca de Peças</option>
                    <option>Outros</option>
                </select><br><br>
    
                Descriçao do Aparelho: &nbsp; <input type="text" name="aparelho"><br><br>
                Nome do Cliente: &nbsp; <input type="text" name="cliente"><br><br>
                Descriçao do Aparelho: &nbsp; <input type="submit" name="enviar" value="Visualizar Orçamento"><br><br>
            </form>
        </fieldset><br>

   <div class="rodape">
    <h2>Programação Web com PHP</h2>
  </div>
    <footer>
        <h3>Todos os direitos reservados - Wallace Miller Dias</h3>
    </footer>
</body>

</html>