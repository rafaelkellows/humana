       	<nav class="sub">
<?php
switch ($subpage) {
    case "quemprecisa":
        echo '<a class="on" href="quemprecisa.php" title="Quem precisa dessa assistência"><span>Quem precisa dessa assistência</span></a>';
        echo '<a href="desospitalizacao.php" title="Processo da Pós-hopitalização"><span>Processo da Pós-hopitalização</span></a>';
        echo '<a href="comoajudar.php" title="Como podemos ajudar"><span>Como podemos ajudar</span></a>';
        break;
    case "desospitalizacao":
        echo '<a href="quemprecisa.php" title="Quem precisa dessa assistência"><span>Quem precisa dessa assistência</span></a>';
        echo '<a class="on" href="desospitalizacao.php" title="Processo da Pós-hopitalização"><span>Processo da Pós-hopitalização</span></a>';
        echo '<a href="comoajudar.php" title="Como podemos ajudar"><span>Como podemos ajudar</span></a>';
        break;
    case "comoajudar":
        echo '<a href="quemprecisa.php" title="Quem precisa dessa assistência"><span>Quem precisa dessa assistência</span></a>';
        echo '<a href="desospitalizacao.php" title="Processo da Pós-hopitalização"><span>Processo da Pós-hopitalização</span></a>';
        echo '<a class="on" href="comoajudar.php" title="Como podemos ajudar"><span>Como podemos ajudar</span></a>';
        break;
    default:
       echo "i is not equal to 0, 1 or 2";
}

?>       
        </nav>
