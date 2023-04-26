<?php
    namespace App;

    Class Aula {
        public function extrairInformacoes()
        {
            //Acessar o arquivo aula.js da aula:
            //      1.2 pegar a lista de questões, que é a propriedade: conteudo
            
            //Para cada questão, acessa a pasta dela e no arquivo: questao.js pegue:
            //      a propriedade: tipo
            
            //Mostre na tela o "ID" e o "tipo" da questão
            //EX: 18784 - multipla-escolha
            //
            
            echo "<center><font size=5> Testando se ta extraindo</font></center><hr align=center color=#0000FF width=10%>";

            $mostre = file_get_contents("aulas/aulaa/aula.js");
            $mostre = substr($mostre, 18);
            //$ver = json_decode($mostre);

            $content= json_decode($mostre);

            foreach ($content->imports as $key => $imports) {
                $import = file_get_contents("aulas/aulaa/".$imports);
                
                
                $import = substr($import, 14, -1);
                $conteudos= json_decode($import);


                //var_dump($conteudos);
                var_dump($conteudos -> id . "<br>");
                var_dump($conteudos -> tipo . "<br><hr>");
                
                
            }

            //var_dump($mostre);
            

            /*foreach($ver as $nome){

            echo "aaa nome: " . $nome . "<br>";
            }*/
        }
    }

?>