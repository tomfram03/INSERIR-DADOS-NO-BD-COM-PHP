<?php

include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email');

//echo "Nome: $nome <br>";
//echo "E-mail: $email";

$insert_user = "INSERT INTO usuarios (nome, email, created) VALUES ('$nome', '$email', NOW())";
$inserido_user = mysqli_query($conn, $insert_user);

if(mysqli_insert_id($conn)){
    header("Location: index.php");
} else {
    header("Location: index.php");
}