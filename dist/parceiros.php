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
                    <input type="button" name="enviar" value="enviar"><input type="reset" name="reset" value="limpar">
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
                    <input type="button" name="enviar" value="enviar"><input type="reset" name="reset" value="limpar">
                </form>
            </aside>
        </article>

        <?php 
            include_once "inc/contents/footer.php";
        ?>
        
    </main>

  </body>
</html>