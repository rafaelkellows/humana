       	<nav class="sub">
<?php
switch ($subpage) {
    case "conheca":
        echo '<a class="on" href="conheca.php" title="Quem Somos"><span>Quem Somos</span></a>';
        echo '<a href="equipe.php" title="A Equipe Humama"><span>A Equipe Humama</span></a>';
        echo '<a href="filosofia.php" title="Nossa Filosofia"><span>Nossa Filosofia</span></a>';
        break;
    case "equipe":
        echo '<a href="conheca.php" title="Quem Somos"><span>Quem Somos</span></a>';
        echo '<a class="on" href="equipe.php" title="A Equipe Humama"><span>A Equipe Humama</span></a>';
        echo '<a href="filosofia.php" title="Nossa Filosofia"><span>Nossa Filosofia</span></a>';
        break;
    case "filosofia":
        echo '<a href="conheca.php" title="Quem Somos"><span>Quem Somos</span></a>';
        echo '<a href="equipe.php" title="A Equipe Humama"><span>A Equipe Humama</span></a>';
        echo '<a class="on" href="filosofia.php" title="Nossa Filosofia"><span>Nossa Filosofia</span></a>';
        break;
    default:
       echo "i is not equal to 0, 1 or 2";
}

?>       
        </nav>
