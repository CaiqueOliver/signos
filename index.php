<html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>signos</title>
        <link rel="stylesheet" href="style.css">
    </head>
<body>    
    <div class="apresentacao">
        <h2>Você sabe qual é seu signo e o que ele significa?</h2>
        <p>Olá, esta simples página web te dá a possibilidade de saber qual <br> é seu signo e algumas características dele</p>
        <p>Para tanto, digite as informações abaixo</p>
    
    <form action="result.php" method="post">
        <label for="">Nome: </label><input type="text" name="name" placeholder="Seu nome"><br><br>
        <label for="">Dia do seu nascimento: </label>  <input type="int" name="DiaNascimento" placeholder="11"><br><br>
        <label for="">Mês do seu nascimento: </label>  <input type="int" name="MesNascimento" placeholder= "06"><br><br>     
        <input class="botao" type="submit">
    </form>
</div>

</body>
</html>