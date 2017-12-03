       	<nav class="sub">
<?php
switch ($subpage) {
    case "conheca":
        echo '<a class="on close" href="conheca.php" title="Quem Somos"><span>Quem Somos</span></a>';
        echo '<a class="close" href="equipe.php" title="A Equipe Humana"><span>A Equipe Humana</span></a>';
        echo '<a class="close" href="filosofia.php" title="Nossa Filosofia"><span>Nossa Filosofia</span></a>';
        break;
    case "equipe":
        echo '<a class="close" href="conheca.php" title="Quem Somos"><span>Quem Somos</span></a>';
        echo '<a class="on close" href="equipe.php" title="A Equipe Humana"><span>A Equipe Humana</span></a>';
        echo '<a class="close" href="filosofia.php" title="Nossa Filosofia"><span>Nossa Filosofia</span></a>';
        break;
    case "filosofia":
        echo '<a class="close" href="conheca.php" title="Quem Somos"><span>Quem Somos</span></a>';
        echo '<a class="close" href="equipe.php" title="A Equipe Humana"><span>A Equipe Humana</span></a>';
        echo '<a class="on close" href="filosofia.php" title="Nossa Filosofia"><span>Nossa Filosofia</span></a>';
        break;
    default:
       echo "Nothing to Load";
}

?>       
        </nav>
