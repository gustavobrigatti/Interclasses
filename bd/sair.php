<?php
	session_start();
	unset( $_SESSION['a9b29c7e8886937ae595b48911089f64'] );
    unset( $_SESSION['b80bb7740288fda1f201890375a60c8f'] );
    unset( $_SESSION['d5bc45524ec3712a9a4ff59fd2c505be'] );
	session_destroy();
	sleep(2);
	header( "location:../index.php" );
?>