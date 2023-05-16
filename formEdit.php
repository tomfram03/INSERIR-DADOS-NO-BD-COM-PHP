<?php 
include_once "conexao.php";

$id = filter_input(INPUT_GET, 'id');
$listUser = "SELECT * FROM usuarios WHERE id='$id'";
$showUser = mysqli_query($conn, $listUser);

$rowsUser = mysqli_fetch_assoc($showUser);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <title>Editar</title>
</head>
<body>
    <form action="procEdit.php" method="post">
        <h1>Editar</h1>
        <p>
            <input type="hidden" name="id" id="id" value="<?php echo $rowsUser['id'] ?>" >
        </p>
        <p>
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome" value="<?php echo $rowsUser['nome'] ?>" >
        </p>
        <p>
            <label for="email">E-mail: </label>
            <input type="email" name="email" id="email" value="<?php echo $rowsUser['email'] ?>">
        </p>
        <button type="submit">Editar</button>
    </form>
    <script src="main.js"></script>
</body>
</html>