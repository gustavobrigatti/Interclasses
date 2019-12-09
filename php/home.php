<!DOCTYPE HTML>
<?php
    session_start();
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
            <section id="features">
                <div class="container">
                    <header>
                        <h2><strong>Definição dos esportes</strong></h2>
                    </header>
                    <div class="row aln-center">
                        <div class="col-4 col-6-medium col-12-small">
                            <!-- Feature -->
                            <section>
                                <a href="tabela.php?esporte=futsal" class="image featured"><img src="../images/1.jpg" alt=""/></a>
                                <header>
                                    <h3>Futsal</h3>
                                </header>
                                <p><strong>Futebol de salão</strong> (também referido pelo acrônimo futsal) é o futebol adaptado para prática em uma quadra esportiva por times de 5 jogadores. As equipes, tal como no futebol, têm como objetivo colocar a bola na meta adversária, definida por dois postes verticais limitados pela altura por uma trave horizontal.</p>
                            </section>
                        </div>
                        <div class="col-4 col-6-medium col-12-small">
                            <!-- Feature -->
                            <section>
                                <a href="tabela.php?esporte=volei" class="image featured"><img src="../images/2.jpg" alt="" /></a>
                                <header>
                                    <h3>Vôlei</h3>
                                </header>
                                <p><strong>Voleibol</strong> (chamado frequentemente no Brasil de Vôlei e em Portugal de Vólei) é um desporto praticado numa quadra dividida em duas partes por uma rede, possuindo duas equipes de 6 jogadores em cada lado. O objetivo da modalidade é fazer a bola passar sobre a rede de modo a que a bola toque no chão dentro da quadra adversária, ao mesmo tempo que se evita que os adversários consigam fazer o mesmo. O voleibol é um desporto olímpico, regulado pela Fédération Internationale de Volleyball (FIVB).</p>
                            </section>
                        </div>
                        <div class="col-4 col-6-medium col-12-small">
                            <!-- Feature -->
                            <section>
                                <a href="tabela.php?esporte=basquete" class="image featured"><img src="../images/3.jpg" alt="" /></a>
                                <header>
                                    <h3>Basquetebol</h3>
                                </header>
                                <p>O <strong>basquetebol</strong> ou bola ao cesto é um jogo desportivo coletivo inventado em 1891 pelo professor de Educação Física canadense James Naismit, na Associação Cristã de Rapazes de Springfield, Massachusetts, Estados Unidos. É disputado por duas equipes de 12 jogadores (5 em campo e 7 suplentes) que têm como objetivo passar a bola por dentro de um cesto e evitar que a bola entre no seu cesto colocado nas extremidades da quadra, seja num ginásio ou ao ar livre.</p>
                            </section>
                        </div>
                        <div class="col-4 col-6-medium col-12-small">
							<section>
                                <a href="tabela.php?esporte=handebol" class="image featured"><img src="../images/4.jpg" alt="" /></a>
                                <header>
                                    <h3>Handebol</h3>
                                </header>
                                <p>O <strong>handebol</strong>  (do inglês handball) é uma modalidade desportiva criada pelo alemão Karl Schelenz, em 1919 — embora se baseasse em outros desportos praticados desde fins do século XIX, na Europa setentrional e no Uruguai. O jogo inicialmente era praticado na relva em um campo similar ao do futebol , e era disputado por duas equipas de 11 jogadores cada, sendo a bola semelhante à usada na versão de 7 jogadores. Hoje em dia a maioria dos jogadores pratica apenas o andebol de 7.</p>
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