<!DOCTYPE html>
<html lang="pt-br">
  <title>Humana Magna - Excelência no cuidar</title>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="keywords" content="Humana Magna - Excelência, Cuidar, Nova, Solução, Cuidados, Paciente, Reabilitação, Longa, Permanência">
    <meta name="description" content="Humana Magna - Excelência no cuidar">
    <meta name="author" content="Rafael Kellows - rafaelkellows@hotmail.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="css/font-awesome/font-awesome.min.css">
    <link href="css/personal/stylesheet.css" rel="stylesheet" media="screen">

    <!-- build:css css/styles.min.css-->
    <link href="css/styles.css" rel="stylesheet">
    <!-- endbuild-->

    <link rel="apple-touch-icon" sizes="57x57" href="images/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="images/icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/icons/favicon-16x16.png">
    <link rel="manifest" href="images/icons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/icons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>

  </head>
  <body>
    <main class="parceiros">

        <?php 
            include_once "inc/contents/header.php";
            $subpage = "";
            include_once "inc/contents/nav-main.php";
        ?>

        <article>
            <aside>
                <h1><strong>Operadoras</strong></h1>
                <p><strong>Credencie Humana Magna</strong></p>
                <p>Ligue 11 2397-0229, envie e-mail para vamosfalar@humanamagna.com.br<br>ou preencha o formulário abaixo</p>
                <form>
                    <label>Nome Completo</label>
                    <input type="text" name="nome">
                    <label>Cargo </label>
                    <input type="text" name="cargo">
                    <label>Empresa</label>
                    <input type="text" name="empresa">
                    <label>E-mail</label>
                    <input type="text" name="email">
                    <label>Telefone </label>
                    <input type="text" name="telefone">
                    <label>Celular <em>(não obrigatório)</em></label>
                    <input type="text" name="celular">
                    <label>Interesse</label>
                    <textarea name="interesse"></textarea>
                    <ul>
                        <label>Gostaria de ser contatado como?</label>
                        <li><input type="checkbox" name="contactby" value="e-mail"><span>e-mail</span></li>
                        <li><input type="checkbox" name="contactby" value="telefone"><span>telefone</span></li>
                        <li><input type="checkbox" name="contactby" value="celular"><span>celular</span></li>
                    </ul>
                </form>
            </aside>
            <aside>
                <h1><strong>Médicos/Hospitais</strong></h1>
                <p><strong>Conheçam a Humana Magna</strong></p>
                <p>agora vocês tem com<br>quem contar no processo<br>de desospitalização</p>
                <form>
                    <label>Nome Completo</label>
                    <input type="text" name="nome">
                    <label>Cargo </label>
                    <input type="text" name="cargo">
                    <label>Empresa</label>
                    <input type="text" name="empresa">
                    <label>E-mail</label>
                    <input type="text" name="email">
                    <label>Telefone </label>
                    <input type="text" name="telefone">
                    <label>Celular <em>(não obrigatório)</em></label>
                    <input type="text" name="celular">
                    <label>Interesse</label>
                    <textarea name="interesse"></textarea>
                    <ul>
                        <label>Gostaria de ser contatado como?</label>
                        <li><input type="checkbox" name="contactby" value="e-mail"><span>e-mail</span></li>
                        <li><input type="checkbox" name="contactby" value="telefone"><span>telefone</span></li>
                        <li><input type="checkbox" name="contactby" value="celular"><span>celular</span></li>
                    </ul>
                </form>
            </aside>
        </article>

        <?php 
            include_once "inc/contents/footer.php";
        ?>
        
    </main>

  </body>
</html>