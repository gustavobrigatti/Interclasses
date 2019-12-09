<!-- Nav -->
<nav id="nav">
    <ul>
        <li><a class="icon solid fa-home" href="home.php"><span>Pagina inicial</span></a></li>
        <li>
            <a href="#" class="icon solid fa-chart-bar"><span>Jogos</span></a>
            <ul>
                <li><a href="tabela.php?esporte=futsal">Futsal</a></li>
                <li><a href="tabela.php?esporte=volei">Vôlei</a></li>
                <li><a href="tabela.php?esporte=basquete">Basquete</a></li>
                <li><a href="tabela.php?esporte=handebol">Handebol</a></li>
            </ul>
        </li>
        <?php
            if(!isset($_SESSION['a9b29c7e8886937ae595b48911089f64'])){
        ?>
        <li><a class="icon solid fa-user" href="login.php"><span>Login</span></a></li>
        <?php
            }else{
        ?>
        <li>
            <a href="#" class="icon solid fa-cog"><span>Administrador</span></a>
            <ul>
                <li><a href="adicionar.php">Adicionar Jogos</a></li>
                <li><a href="remover.php">Remover Jogos</a></li>
            </ul>
        </li>
        <li><a class="icon solid fa-user" href="../bd/sair.php"><span>Sair</span></a></li>
        <?php
            }
        ?>
    </ul>
</nav>