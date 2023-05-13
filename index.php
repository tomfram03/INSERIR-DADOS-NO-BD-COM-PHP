<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <title>Formulário</title>
</head>
<body>
    <form action="processa.php" method="post">
        <h1>Formulário</h1>
        <p>
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome">
        </p>
        <p>
            <label for="email">E-mail: </label>
            <input type="email" name="email" id="email">
        </p>
        <button type="submit">Cadastrar</button>
    </form>
    <div id="list">

    </div>
    <script src="main.js"></script>
</body>
</html>