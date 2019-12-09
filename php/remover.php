<!DOCTYPE HTML>
<?php
    session_start();
    if(!isset($_SESSION['a9b29c7e8886937ae595b48911089f64'])){
        header("location: ../index.php");
    }
    include_once ("../bd/conexao.php");
    $_modalidade = $_GET['modalidade'];
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
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
            <section id="header">
                <div class="container">
                    <!-- Logo -->
                    <h1 id="logo"><a href="home.php">Interclasses</a></h1>
                    <p>site de administração esportiva.</p>
                    <!-- Nav -->
                    <?php
                        include("nav.php");
                    ?>
                </div>
            </section>

			<!-- Features -->
            <section id="features" style="margin: auto;">
                <div class="container">
                    <header>
                        <h2><strong>remover jogos</strong></h2>
                    </header>
                    <div class="row">
                        <div class="col-12 col-12-medium">
                            <section>
                                <?php
                                    if(!isset($_GET['modalidade'])){
                                ?>
                                <form method="get" action="remover.php">
                                    <div class="row gtr-50">
                                        <div class="col-12">
                                            <select name="modalidade" class="form-control show-tick" data-actions-box="true" id="modalidade" required>
                                                <option disabled selected>Modalidade</option>
                                                <?php
                                                    $_sql = "SELECT * FROM modalidade";
                                                    $_query = mysqli_query( $_conexao , $_sql ) or die ( mysqli_error( $_conexao ) );
                                                    while( $_line = mysqli_fetch_array( $_query ) ){
                                                        $_id_modalidade = $_line['id_modalidade'];
                                                        $_modalidade = $_line['modalidade'];
                                                ?>
                                                <option value="<?php echo $_modalidade; ?>"><?php echo $_modalidade; ?></option>
                                                <?php
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="form-button-submit button icon solid fa-arrow-right" style="cursor:pointer;">proximo</button>
                                        </div>
                                    </div>
                                </form>
                                <?php
                                    }else{
                                ?>
                                <form method="post" action="../bd/remover_jogo.php?modalidade=<?php echo $_modalidade; ?>">
                                    <div class="row gtr-50">
                                        <div class="col-12">
                                            <select name="jogo" class="form-control show-tick" data-actions-box="true" id="jogo" required>
                                                <option disabled selected>Jogos</option>
                                                <?php
                                                    if($_modalidade=='Futsal'){
                                                        $_sql = "SELECT * FROM jogos WHERE id_modalidade = 1";   
                                                    }else if($_modalidade=='Vôlei'){
                                                        $_sql = "SELECT * FROM jogos WHERE id_modalidade = 2";
                                                    }else if($_modalidade=='Basquete'){
                                                        $_sql = "SELECT * FROM jogos WHERE id_modalidade = 3";
                                                    }else if($_modalidade=='Handebol'){
                                                        $_sql = "SELECT * FROM jogos WHERE id_modalidade = 4";
                                                    }else{
                                                        header("location: remover.php");
                                                    }
                                                    $_query = mysqli_query( $_conexao , $_sql ) or die ( mysqli_error( $_conexao ) );
                                                    while( $_line = mysqli_fetch_array( $_query ) ){
                                                        $_id_jogo = $_line['id_jogo'];
                                                        $_timea = $_line['time_a'];
                                                        $_timeb = $_line['time_b'];
                                                ?>
                                                <option value="<?php echo $_id_jogo; ?>"><?php echo $_timea; ?> X <?php echo $_timeb; ?></option>
                                                <?php
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="form-button-submit button icon solid fa-trash" style="cursor:pointer;">remover jogo</button>
                                        </div>
                                    </div>
                                </form>
                                <?php
                                    }
                                ?>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
			<!-- Banner -->
			<!-- Main -->
			<!-- Footer -->
            <?php
                include ("footer.php");
            ?>
		</div>
		<!-- Scripts -->
        <?php
            include("scripts.php");
        ?>
	</body>
</html>