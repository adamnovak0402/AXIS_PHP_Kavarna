<header>
    <nav class="main-nav">
        <ul>
            <?php
            $aktualniStranka = $_SERVER['PHP_SELF'];
            echo $aktualniStranka;

            if($aktualniStranka == "/index.php"){
                echo('
                <li><a href="index.php" class="active"></i>Domů</a></li>
                ');
            }else{
                echo('
                <a href="index.php">o nás</a>
                ');
            }

            ?>
            <li><a href="o-nas.php"></i>O nás</a></li>
            <li><a href="fotogalerie.php"></i>Fotogalerie</a></li>
            <li><a href="kontakt.php"></i>Kontakt</a></li>
        </ul>
    </nav>
</header>