<!DOCTYPE html>
<html lang="pt-br">
    <?php
        $page = "Trabalhe Conosco";
        include_once "inc/contents/head.php";
    ?>
    <body>
    <main class="trabalhe">

        <?php 
            include_once "inc/contents/header.php";
            $subpage = "";
            include_once "inc/contents/nav-main.php";
        ?>

        <article>
            <?php 
                $submitReturn = (!isset($_GET["msg"]) ? -1 : $_GET["msg"]);
                switch ($submitReturn) {
                    case 'ok':
                    echo "<p style='color:#eb903d;'>Seu formulário foi enviado com sucesso.<br><br></p>";
                        break;
                    case 'errorSend':
                    echo "<p style='color:#eb903d;'>Seu formulário não pode ser enviado.<br>Tente novamente por favor.<br><br></p>";
                        break;
                    case 'errorUpload':
                    echo "<p style='color:#eb903d;'>Aconteceu algum erro ao tentar carregar seu arquivo.<br> Verifique se o arquivo corresponde às especificações.<br><br></p>";
                        break;
                    default:
                        break;
                }
            ?>
            <aside>
                <h1><strong>Trabalhe Conosco</strong></h1>
                <p><strong>Faça parte da nossa equipe!</strong></p>
                <p>Envie-nos seu currículo através do formulário abaixo</p>
                <form action="send_email.php" method="post" enctype="multipart/form-data" >
                    <input type="hidden" id="formName" name="formName" value="trabalhe">
                    <label for="nome">Nome Completo</label>
                    <input type="text" id="nome" name="nome" tabindex="1">
                    <label for="cargo">Cargo Pretendido</label>
                    <input type="text" id="cargo" name="cargo" tabindex="2">
                    <label for="email">E-mail</label>
                    <input type="text" id="email" name="email" tabindex="3">
                    <label for="celular">Celular</label>
                    <input type="text" id="celular" class="celular" placeholder="(00) 00000-0000" name="celular" tabindex="4">
                    <label for="arquivo">Arquivo <em>(enviar arquivo em .doc ou .pdf de até 2MB)</em></label>
                    <input type="file" id="arquivo" class="arquivo" name="arquivo" tabindex="5">
                    <label for="interesse">Mensagem</label>
                    <textarea id="interesse" name="interesse" tabindex="6"></textarea>
                    <ul></ul>
                    <input type="submit" name="enviar" value="enviar" tabindex="7"><input type="reset" name="reset" value="limpar" tabindex="8">
                </form>
            </aside>
        </article>

        <?php 
            include_once "inc/contents/footer.php";
        ?>
        
    </main>

  </body>
</html>