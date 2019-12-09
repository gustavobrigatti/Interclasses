<?php
    include_once ("conexao.php");
    mysqli_set_charset($_conexao,"utf8");
    mysqli_query("SET NAMES 'utf8'");
    mysqli_query('SET character_set_connection=utf8');
    mysqli_query('SET character_set_client=utf8');
    mysqli_query('SET character_set_results=utf8');

    $_id_jogo = $_POST['jogo'];
    $_modalidade = $_GET['modalidade'];

    $_sql = "DELETE FROM jogos WHERE id_jogo = $_id_jogo;";
    $_query = mysqli_query($_conexao, $_sql) or die (mysqli_error($_conexao));

    if($_modalidade=='Futsal'){
        header('Location: ../php/tabela.php?esporte=futsal');   
    }else if($_modalidade=='Vôlei'){
        header('Location: ../php/tabela.php?esporte=volei');   
    }else if($_modalidade=='Basquete'){
        header('Location: ../php/tabela.php?esporte=basquete');   
    }else if($_modalidade=='Handebol'){
        header('Location: ../php/tabela.php?esporte=handebol');   
    }
?>