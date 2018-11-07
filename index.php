<!DOCTYPE html>
<html lang="pt-br">
<?php
    $page = "Home";
    include_once "inc/contents/head.php";
?>
  <body>
    <main class="home">
        <?php 
            include_once "inc/contents/header.php";
            $subpage = "";
            include_once "inc/contents/nav-main.php";
        ?>

        <section class="conheca box-parallixit">
            
            <figure class="bxn-parallixit top">
                <img src="images/box-nav/ilustraConheca.jpg" alt="" />
                <figcaption>Cuidado Humano especializado ao nosso paciente, visando a melhoria de seu estado.</figcaption>
            </figure>

            <h4>Cuidado Humano especializado ao nosso paciente, visando a melhoria de seu estado.</h4>

            <nav>
                <a href="conheca.php" title="Quem Somos"><span>Quem Somos</span></a>
                <a href="equipe.php" title="A Equipe Humana"><span>A Equipe Humana</span></a>
                <a href="filosofia.php" title="Nossa Filosofia"><span>Nossa Filosofia</span></a>
            </nav>

        </section>

        <section class="estrutura box-parallixit">
            
            <figure class="bxn-parallixit bottom">
                <img src="images/box-nav/ilustraEstrutura.jpg" alt="" />
                <figcaption>Nossa primeira unidade tem excelência no tratamento e nas instalações</figcaption>
            </figure>

            <h4>Nossa primeira unidade tem excelência no tratamento e nas instalações</h4>

            <nav>
                <a href="oquefazemos.php" title="O que fazemos"><span>O que fazemos</span></a>
                <a href="nossaestrutura.php" title="Conheça Nossa Estrutura"><span>Conheça Nossa Estrutura</span></a>
                <a href="visita360.php" title="Faça uma vista 360º"><span>Faça uma vista 360<sup>o</sup></span></a>
            </nav>

        </section>

        <section class="desospitalizacao box-parallixit">
            
            <figure class="bxn-parallixit top">
                <img src="images/box-nav/ilustraDesospitalizacao.jpg" alt="" />
                <figcaption>A Humana Magna estará ao seu lado no processo de desospitalização</figcaption>
            </figure>
            <h4>A Humana Magna estará ao seu lado no processo de desospitalização</h4>
            <nav>
                <a href="quemprecisa.php" title="Quem precisa desta assistência"><span>Quem precisa desta assistência</span></a>
                <a href="desospitalizacao.php" title="Processo de desospitalização"><span>Processo de desospitalização</span></a>
                <a href="comoajudar.php" title="Como podemos ajudar"><span>Como podemos ajudar</span></a>
            </nav>

        </section>

        <section class="conceitos">
            
            <dl>
                <dt>Bem-vindo</dt>
                <dd>Bem-vindo ao Humana Magna. Aqui, nosso foco é a melhoria contínua do paciente e sua qualidade de vida. E sabe por quê?</dd>
            </dl>

            <dl>
                <dt>Quem atendemos</dt>
                <dd>Pacientes de reabilitação por incapacidade temporária ou definitiva, longa permanência ou finitude.</dd>
            </dl>

            <dl>
                <dt>Significado</dt>
                <dd>Humana Magna traduz o nosso maior valor do que achamos realmente relevante: o ser humano.</dd>
            </dl>

            <dl>
                <dt>Cuidados</dt>
                <dd>É usar as melhores práticas de saúde direcionadas ao paciente em reabilitação ou cuidado permanente.</dd>
            </dl>

            <dl>
                <dt>Humanização</dt>
                <dd>Característica essencial e obrigatória para nós que trabalhamos com Cuidados Continuados.</dd>
            </dl>

            <dl>
                <dt>Evolução</dt>
                <dd>Acreditamos na evolução positiva da condição do paciente e este é o foco diário.</dd>
            </dl>

            <dl>
                <dt>Garantia</dt>
                <dd>Nosso VOTO DE TRANSPARÊNCIA é garantir, quando possível, a reabilitação do paciente dentro de um tempo pré-determinado e de acordo com a sua condição.</dd>
            </dl>

            <dl>
                <dt>Compromisso</dt>
                <dd>Em nossa DECLARAÇÃO MAGNA firmamos o compromisso de não reter pacientes em nossa estrutura que não necessitem de nosso serviços.</dd>
            </dl>
            <aside class="logoH box-parallixit">
                <figure class="bxn-parallixit to-right">
                    <img src="images/partLogoH.png" alt="" />
                </figure>
            </aside>
            <aside class="logoV box-parallixit">
                <figure class="bxn-parallixit to-left">
                    <img src="images/partLogoV.png" alt="" />
                </figure>
            </aside>
        </section>

        <?php 
            include_once "inc/contents/footer.php";
        ?>
        
    </main>

  </body>
</html>