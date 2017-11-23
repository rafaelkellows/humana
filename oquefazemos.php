<!DOCTYPE html>
<html lang="pt-br">
    <?php
        $page = "O que fazemos";
        include_once "inc/contents/head.php";
    ?>
    <body>
    <main class="oquefazemos">

        <?php 
            include_once "inc/contents/header.php";
            $subpage = "oquefazemos";
            include_once "inc/contents/nav-main.php";
            include_once "inc/contents/nav-sub-estrutura.php";
        ?>

        <section class="box-parallixit">
            
            <figure class="bxn-parallixit top">
                <img src="images/box-nav/ilustraOQFazemos.jpg" alt="" />
                <figcaption>A Humana Magna está 100% focada em cuidar do paciente no processo de desospitalização</figcaption>
            </figure>

            <h4>A Humana Magna está 100% focada em cuidar do paciente no processo de desospitalização</h4>

        </section>

        <article>
            
            <h1><strong>Confira as vantagens de receber Cuidados Continuados</strong></h1>
            <ol>
                <li>Recuperação mais rápida e salutar. Possibilidade de voltar para casa com estrutura e autonomia.</li>
                <li>Qualidade de vida e bem-estar do paciente e da família estão em primeiro lugar na Humana Magna.</li>
                <li>Estrutura e suporte necessário e completo para continuidade no tratamento com êxito.</li>
            </ol>

            <aside>
                <h2><strong>E como iniciar o processo?</strong></h2>
                <p>Primeiro, a partir de um serviço que conhece quais pacientes estão internados e clinicamente estáveis, a equipe hospitalar ou do convênio (também conhecida como operadora) entra em contato com os médicos assistentes.<br>Neste momento, há muita conversa e diálogo com a família para analisar sobre esta possibilidade de tratamento longe do hospital. Depois, se a ideia for bem aceita por todos, a alta é programada para dar continuidade no processo do cuidar.</p>
            </aside>

            <div class="logoH box-parallixit">
                <figure class="bxn-parallixit top to-left">
                    <img src="images/partLogoH.png" alt="" />
                </figure>
            </div>

            <div class="logoV box-parallixit">
                <figure class="bxn-parallixit bottom to-left">
                    <img src="images/partLogoV.png" alt="" />
                </figure>
            </div>
            <aside class="bg-filled">
                <p><strong>*Mas vale lembrar que:</strong><br>O foco do processo da desospitalização não é dar alta precoce ao paciente, e sim, fazer este processo com muita estrutura e segurança para proporcionar qualidade de vida ao paciente e buscar, antes de mais nada, a melhoria de sua condição.</p>
            </aside>
        </article>

        <?php 
            include_once "inc/contents/footer.php";
        ?>

    </main>

  </body>
</html>