<?php

include_once("conexao.php");

$id = filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email');

//echo "Nome: $nome <br>";
//echo "E-mail: $email";

$insert_user = "UPDATE usuarios SET nome='$nome', email='$email', modified=NOW() WHERE id='$id'";
$inserido_user = mysqli_query($conn, $insert_user);

if(mysqli_affected_rows($conn)){
    header("Location: index.php");
} else {
    header("Location: index.php?id=$id");
}