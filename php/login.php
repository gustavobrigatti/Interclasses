<!DOCTYPE HTML>
<?php
    session_start();
    if(isset($_GET['error'])){
        echo  "<script>alert('ERRO NO LOGIN, USUÁRIO OU SENHA INCORRETO');</script>";
    }
?>
<!--
	Strongly Typed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Interclasses</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../assets/css/main.css" />
	</head>
	<body class="homepage is-preload" style="margin: auto;">
		<div id="page-wrapper">
            <section id="footer">
                <div class="container">
                    <header>
                        <h2> <strong>login - administrador</strong></h2>
                    </header>
                    <div class="row">
                        <div class="col-12 col-12">
                            <section>
                                <form method="post" action="../bd/login.php">
                                    <div>
                                        <div style="width: 50%; gravity: center; margin: auto;">
                                            <input name="administrador" id="administrador" placeholder="Administrador" type="text" required/>
                                        </div>
                                        <br>
                                        <div style="width: 50%; margin: auto;">
                                            <input name="senha" id="senha" placeholder="Senha" type="password" required/>
                                        </div>
                                        <br>
                                        <div style="margin: auto; width: 20%;">
                                            <button type="submit" class="form-button-submit button icon solid fa-user" style="cursor:pointer; margin: auto; width: 100%;">fazer login</button>
                                        </div>
                                    </div>
                                </form>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
		</div>
		<!-- Scripts -->
        <?php
            include("scripts.php");
        ?>
	</body>
</html>