<?php
    include_once ("conexao.php");
    mysqli_set_charset($_conexao,"utf8");
    mysqli_query("SET NAMES 'utf8'");
    mysqli_query('SET character_set_connection=utf8');
    mysqli_query('SET character_set_client=utf8');
    mysqli_query('SET character_set_results=utf8');

    $_timea = $_POST['timea'];
    $_timeb = $_POST['timeb'];
    $_modalidade = $_POST['modalidade'];
    $_data = $_POST['data'];

    $_sql = "INSERT INTO jogos (id_modalidade, time_a, time_b, data)
             VALUES ('$_modalidade', '$_timea', '$_timeb', '$_data');";
    $_query = mysqli_query($_conexao, $_sql) or die (mysqli_error($_conexao));

    if($_modalidade==1){
        header('Location: ../php/tabela.php?esporte=futsal');   
    }else if($_modalidade==2){
        header('Location: ../php/tabela.php?esporte=volei');   
    }else if($_modalidade==3){
        header('Location: ../php/tabela.php?esporte=basquete');   
    }else if($_modalidade==4){
        header('Location: ../php/tabela.php?esporte=handebol');   
    }
?>