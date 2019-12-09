<!DOCTYPE HTML>
<?php
    session_start();
    include_once ("../bd/conexao.php");
    $_esporte = $_GET['esporte'];
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
                    <?php
                        if($_esporte == 'futsal'){
                    ?>
                    <h1 id="logo">Futsal</h1>
                    <?php
                        }else if($_esporte == 'volei'){
                    ?>
                    <h1 id="logo">Vôlei</h1>
                    <?php
                        }else if($_esporte == 'basquete'){
                    ?>
                    <h1 id="logo">Basquete</h1>
                    <?php
                        }else if($_esporte == 'handebol'){
                    ?>
                    <h1 id="logo">Handebol</h1>
                    <?php
                        }else{
                            header("location: home.php");
                        }
                    ?>
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
                        <h2><strong>Tabela de jogos</strong></h2>
                    </header>
                    <table border="1">
                        <?php
                            if($_esporte=='futsal'){
                                $_sql = "SELECT * FROM jogos WHERE id_modalidade = 1 ORDER BY data ASC";
                            }else if($_esporte=='volei'){
                                $_sql = "SELECT * FROM jogos WHERE id_modalidade = 2 ORDER BY data ASC";
                            }else if($_esporte=='basquete'){
                                $_sql = "SELECT * FROM jogos WHERE id_modalidade = 3 ORDER BY data ASC";
                            }else if($_esporte=='handebol'){
                                $_sql = "SELECT * FROM jogos WHERE id_modalidade = 4 ORDER BY data ASC";
                            }
                            $_query = mysqli_query($_conexao, $_sql) or die (mysqli_error($_conexao));
                            while($_line = mysqli_fetch_array($_query)){
                                $_time_a = $_line['time_a'];
                                $_time_b = $_line['time_b'];
                                $_data = $_line['data'];
                                
                                $_data = date("d/m/Y", strtotime($_data));
                        ?>
                        <tr>
                            <td><?php echo $_data;?></td>
                            <td><?php echo $_time_a;?></td>
                            <td>x</td>
                            <td><?php echo $_time_b;?></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </table>
                </div>
            </section>
            <!-- Banner -->
            <!-- Main -->
            <!-- Footer -->
            <?php
                include("footer.php");
            ?>
        </div>
        <!-- Scripts -->
        <?php
            include("scripts.php");
        ?>
	</body>
</html>