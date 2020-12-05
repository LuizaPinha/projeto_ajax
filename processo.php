<?php
    $nome=$_POST['nome'];
    $estado=$_POST['estado'];
    $cidade=$_POST['cidade'];
    $email=$_POST['email'];

    include "abertura_conexao.inc";

    $SQL = "INSERT INTO pessoas (nome, cidade, estado, email) 

        VALUE ('$nome', '$cidade', '$estado', '$email')";



        echo'<center><h2>Cadastro bem sucedido!<h2>';

        

        include "fechamento_conexao.inc";


?>