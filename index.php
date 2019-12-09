<?php
    session_start();
    if(isset($_SESSION['a9b29c7e8886937ae595b48911089f64'])){
        header("Location: php/home.php");
    }else{
         header("Location: php/home.php");
    }
?>