<html>
    <head>
        <title>Resultado</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <?php       
        $xml = simplexml_load_file("signos.xml");        
        $DiaNascimento = $_POST["DiaNascimento"];
        $MesNascimento = $_POST["MesNascimento"];
       
        for($i=1; $i<=12; $i++){           
            $dataInicial = $xml->signo[$i-1]->dataInicio;            
            $dados = explode("/", $dataInicial);            
            if($dados[1] == $MesNascimento){        
                
                if($DiaNascimento>=$dados[0]){

                    $SignoSujeito = $xml->signo[$i-1]->signoNome;
                    $auxiliar=$i-1;
                    break;
                }else{if($i-2 == -1){ 
                    $j = 11;
                    $SignoSujeito = $xml->signo[$j]->signoNome;
                    $auxiliar = $j;
                    break;

                    }else{
                    $SignoSujeito = $xml->signo[$i-2]->signoNome;
                    $auxiliar=$i-2;
                    break;
                    }
                }
            }
        }
        
    ?>
    <div class="apresentacao">
        <?php
            echo "<h2>Bem vindo(a) ".$_POST["name"]."!</h2><br>";
            echo "<p class='retorno'>Seu dia de nascimento é <b>".$_POST["DiaNascimento"]."</b></p>";
            echo "<p class='retorno'>Seu mês de nascimento é <b>".$_POST["MesNascimento"]."</b></p>";
            echo "<p class='retorno'>Seu signo é: <b>".$SignoSujeito."</b></p>";
            echo "<div class='caixa'><p class='retorno'>
            É característico do signo de <b>" .$SignoSujeito."</b>: <br><i>".$xml->signo[$auxiliar]->descricao. "</i></p><p class='fonte'><a  href='https://www.oguru.com.br/signos'><i>Fonte</i></a></p></div><br>";
        ?>
        <form action="index.php"> <input type="submit" value="Reiniciar"></form>
    </div>
    
    </body>
</html> 