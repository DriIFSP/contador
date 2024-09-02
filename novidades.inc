<?php
        
        $arquivo = ("C:\\wamp64\\www\\aulas\\Projeto Contador\\noticias.txt"); 
        $ponteiro=fopen($arquivo, "a+");
        $conteudo= file_get_contents($arquivo);
        if($conteudo == "")
        {
            $noticia1 = "<h3> JIT no PHP </h3> Resumidamente, o JIT é um compilador que faz parte da extensão Opcache. Com o JIT, alguns Opcodes não precisarão ser interpretados pela ZendVM, pois, essas instruções serão executadas diretamente a nível de CPU. Por isso que você poderá observar um grande ganho de desempenho para algumas instruções.<br><br>";
            $noticia2 = "<h3> Avisos de Erros mais elaborados e precisos </h3>Atualmente, com o PHP, você já pode ver os avisos de erros. Mas, esses avisos ainda são gerados de forma básica. Porém, no PHP 8.0, você já poderá encontrar avisos com explicações mais precisas.";
            fwrite ($ponteiro, $noticia1.$noticia2);

        }
        echo $conteudo;
        fclose ($ponteiro);

?>