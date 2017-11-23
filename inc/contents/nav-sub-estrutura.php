       	<nav class="sub">
<?php
switch ($subpage) {
    case "oquefazemos":
        echo '<a class="on" href="conheca.php" title="O que fazemos"><span>O que fazemos</span></a>';
        echo '<a href="nossaestrutura.php" title="Conheça nossa estutura"><span>Conheça nossa estutura</span></a>';
        echo '<a href="visita360.php" title="Faça uma visita 360º"><span>Faça uma vista 360<sup>o</sup></span></a>';
        break;
    case "nossaestrutura":
        echo '<a href="conheca.php" title="O que fazemos"><span>O que fazemos</span></a>';
        echo '<a class="on" href="nossaestrutura.php" title="Conheça nossa estutura"><span>Conheça nossa estutura</span></a>';
        echo '<a href="visita360.php" title="Faça uma visita 360º"><span>Faça uma vista 360<sup>o</sup></span></a>';
        break;
    case "visita360":
        echo '<a href="conheca.php" title="O que fazemos"><span>O que fazemos</span></a>';
        echo '<a href="nossaestrutura.php" title="Conheça nossa estutura"><span>Conheça nossa estutura</span></a>';
        echo '<a class="on" href="visita360.php" title="Faça uma visita 360º"><span>Faça uma vista 360<sup>o</sup></span></a>';
        break;
    default:
       echo "Nothing to Load";
}

?>       
        </nav>
