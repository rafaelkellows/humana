<!DOCTYPE html>
<html lang="pt-br">
    <?php
        $page = "Parceiros";
        include_once "inc/contents/head.php";
    ?>
    <body>
    <main class="parceiros">

        <?php 
            include_once "inc/contents/header.php";
            $subpage = "";
            include_once "inc/contents/nav-main.php";
        ?>

        <article>
            <?php 
                if( isset($_REQUEST['fid']) ){
                    echo "<p style='color:#eb903d;'>Email enviado com sucesso!<br><br></p>";
                }
            ?>
            <aside>
                <h1><strong>Operadoras</strong></h1>
                <p><strong>Credencie Humana Magna</strong></p>
                <p>Ligue 11 2397-0229, envie e-mail para vamosfalar@humanamagna.com.br<br>ou preencha o formulário abaixo</p>
                <form action="send_email.php" method="post">
                    <input type="hidden" id="formName" name="formName" value="operadoras">
                    <label for="nome">Nome Completo</label>
                    <input type="text" id="nome" name="nome" tabindex="1">
                    <label for="cargo">Cargo </label>
                    <input type="text" id="cargo" name="cargo" tabindex="2">
                    <label for="empresa">Empresa</label>
                    <input type="text" id="empresa" name="empresa" tabindex="3">
                    <label for="email">E-mail</label>
                    <input type="text" id="email" name="email" tabindex="4">
                    <label for="telefone">Telefone </label>
                    <input type="text" id="telefone" class="telefone" placeholder="(00) 0000-0000" name="telefone" tabindex="5">
                    <label for="celular">Celular <em>(não obrigatório)</em></label>
                    <input type="text" id="celular" class="celular" placeholder="(00) 00000-0000" name="celular" tabindex="6">
                    <label for="interesse">Interesse</label>
                    <textarea id="interesse" name="interesse" tabindex="7"></textarea>
                    <ul>
                        <label for="contactby">Gostaria de ser contatado como?</label>
                        <li><input type="radio" id="contactby" checked="checked" name="contactby" value="e-mail" tabindex="8"><span>e-mail</span></li>
                        <li><input type="radio" name="contactby" value="telefone" tabindex="9"><span>telefone</span></li>
                        <li><input type="radio" name="contactby" value="celular" tabindex="10"><span>celular</span></li>
                    </ul>
                    <input type="submit" name="enviar" value="enviar" tabindex="11"><input type="reset" name="reset" value="limpar" tabindex="12">
                </form>
            </aside>
            <aside>
                <h1><strong>Médicos/Hospitais</strong></h1>
                <p><strong>Conheçam a Humana Magna</strong></p>
                <p>agora vocês tem com<br>quem contar no processo<br>de desospitalização</p>
                <form action="send_email.php" method="post">
                    <input type="hidden" id="formName" name="formName" value="medhospitais">
                    <label for="nome2">Nome Completo</label>
                    <input type="text" id="nome2" name="nome" tabindex="13">
                    <label for="cargo2">Cargo </label>
                    <input type="text" id="cargo2" name="cargo" tabindex="14">
                    <label for="empresa2">Empresa</label>
                    <input type="text" id="empresa2" name="empresa" tabindex="15">
                    <label for="email2">E-mail</label>
                    <input type="text" id="email2" name="email" tabindex="16">
                    <label for="telefone2">Telefone </label>
                    <input type="text" id="telefone2" class="telefone" placeholder="(00) 0000-0000" name="telefone" tabindex="17">
                    <label for="celular2">Celular <em>(não obrigatório)</em></label>
                    <input type="text" id="celular2" class="celular" placeholder="(00) 00000-0000" name="celular" tabindex="18">
                    <label for="interesse2">Interesse</label>
                    <textarea id="interesse2" name="interesse" tabindex="19"></textarea>
                    <ul>
                        <label for="contactby2">Gostaria de ser contatado como?</label>
                        <li><input type="radio" id="contactby2" checked="checked" name="contactby" value="e-mail" tabindex="20"><span>e-mail</span></li>
                        <li><input type="radio" name="contactby" value="telefone" tabindex="21"><span>telefone</span></li>
                        <li><input type="radio" name="contactby" value="celular" tabindex="22"><span>celular</span></li>
                    </ul>
                    <input type="submit" name="enviar" value="enviar" tabindex="23"><input type="reset" name="reset" value="limpar" tabindex="24">
                </form>
            </aside>
        </article>

        <?php 
            include_once "inc/contents/footer.php";
        ?>
        
    </main>

  </body>
</html>