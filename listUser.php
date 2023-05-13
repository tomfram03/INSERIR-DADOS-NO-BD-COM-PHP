<?php

include_once "conexao.php";

$selectUser = "SELECT * FROM usuarios ORDER BY id DESC";
$listUser = mysqli_query($conn, $selectUser);

if(($listUser) AND ($listUser->num_rows != 0)){
    while($rowsUser = mysqli_fetch_assoc($listUser)){
        echo "<p>Nome: " .$rowsUser['nome']. "<br>";
        echo "E-mail: " .$rowsUser['email']. "<br></p>";
    }
} else {
    echo "Nenhum dado encontrado!";
}