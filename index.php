<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOTÍCIAS</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    <div class="titulo">
        <h3> <center> Bem vindo ao Site  Web Design em Foco!</h3>
    </div>
    <br>    

    <div class="conteudo">
        <h4> Novidades INCRÍVEIS da Semana!!! </center> </h4>
        <br><br>
        <?php
            include 'novidades.inc';
        ?>
    </div>
    
    <br>

    <?php
        $arquivo = ("C:\\wamp64\\www\\aulas\\Projeto Contador\\contador.txt"); 
        if(file_exists($arquivo)) 
        {
            $valor_atual = file_get_contents($arquivo);
            //chop remove caracteres em branco(espaços, tabulações, quebra de linha)
            $valor_atual = chop($valor_atual); 
            $valor_atual++;
        }
        else
        {
            $valor_atual  = 1;
        }
        $ponteiro = fopen($arquivo, "w");
        fwrite ($ponteiro, $valor_atual);
        fclose ($ponteiro);

        $leitura = file_get_contents($arquivo);
        echo  "<h5>Total de acessos: $leitura </h5>";



        
    ?>


    <script src="javascript/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>