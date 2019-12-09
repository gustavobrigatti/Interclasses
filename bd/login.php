<?php
    session_start();
    include_once("conexao.php");
    
    $_administrador = $_POST['administrador'];
    $_senha = $_POST['senha'];

    $_senha = md5($_senha);
    
    $_sql = "SELECT * FROM administrador WHERE administrador = '$_administrador' AND senha = '$_senha'";
    $_query = mysqli_query($_conexao,$_sql);
    $_line = mysqli_fetch_array($_query);
    if($_administrador == $_line['administrador'] and $_senha == $_line['senha']){
        $_id = $_line['id_administrador'];
        
        $_SESSION['a9b29c7e8886937ae595b48911089f64'] = 1;
        $_SESSION['b80bb7740288fda1f201890375a60c8f'] = $_id;
        $_SESSION['d5bc45524ec3712a9a4ff59fd2c505be'] = $_administrador;
        
        header("location: ../index.php");
    }else{
        header("location: ../php/login.php?error=nologin");
    }