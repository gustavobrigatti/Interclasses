<?php
    include_once ("conexao.php");
    mysqli_set_charset($_conexao,"utf8");
    mysqli_query("SET NAMES 'utf8'");
    mysqli_query('SET character_set_connection=utf8');
    mysqli_query('SET character_set_client=utf8');
    mysqli_query('SET character_set_results=utf8');

    $_name = $_POST['name'];
    $_email = $_POST['email'];
    $_message = $_POST['message'];

    $_sql = "INSERT INTO mensagem (nome, email, mensagem)
             VALUES ('$_name', '$_email', '$_message');";
    $_query = mysqli_query($_conexao, $_sql) or die (mysqli_error($_conexao));

    header('Location: ../php/home.php');
?>