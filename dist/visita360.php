<!DOCTYPE html>
<html lang="pt-br">
    <?php
        $page = "Faça uma visita 360º";
        include_once "inc/contents/head.php";
    ?>
    <body>
    <main class="visita360">

        <?php 
            include_once "inc/contents/header.php";
            $subpage = "visita360";
            include_once "inc/contents/nav-main.php";
            include_once "inc/contents/nav-sub-estrutura.php";
        ?>

        <article>
            
            <h1><strong>Conheça a Humana Magna, clique na imagem e veja o vídeo de apresentação de nossa estrutura e serviços</strong></h1>

            <video width="670" height="380" poster="images/videoPoster.jpg" controls>
              <source src="videos/estruturaNov2017-media.mp4" type="video/mp4">
              <source src="videos/estruturaNov2017-web.webm" type="video/webm">
                Your browser does not support HTML5 video.
            </video>

            <p><a href="comochegar.php"><strong>GOSTOU? venha nos visitar em nossa primeira unidade, CLIQUE AQUI e saiba como chegar</strong></a></p>

        </article>

        <?php 
            include_once "inc/contents/footer.php";
        ?>

    </main>

  </body>
</html>