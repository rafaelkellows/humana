        <nav>
            <dl <?php  if ($subpage == "quemprecisa" or $subpage == "desospitalizacao" or $subpage == "comoajudar")  { echo " class='on'"; } ?>>
                <dt><h3><a href="<?php echo $actual_link; ?>quemprecisa.php" title="Saiba o que é desospitalização">Saiba o que é <strong>desospitalização</strong></a></h3></dt>
                <dd><a href="<?php echo $actual_link; ?>quemprecisa.php" title="O que fazer quando o paciente deve sair do hospital mas ainda precisa de cuidados?">O que fazer quando o paciente deve sair do hospital mas ainda precisa de cuidados?</a></dd>
            </dl>
            <dl <?php  if ($subpage == "conheca" or $subpage == "equipe" or $subpage == "filosofia") { echo " class='on'"; } ?>>
                <dt><h3><a href="<?php echo $actual_link; ?>conheca.php" title="Conheça a Humana Magna">Conheça a <strong>Humana Magna</strong></a></h3></dt>
                <dd><a href="<?php echo $actual_link; ?>conheca.php" title="Saiba quais são os nossos princípios, a nossa equipe e o que podemos fazer por você">Saiba quais são os nossos princípios, a nossa equipe e o que podemos fazer por você</a></dd>
            </dl>
            <dl <?php  if ($subpage == "oquefazemos" or $subpage == "nossaestrutura" or $subpage == "visita360") { echo " class='on'"; } ?>>
                <dt><h3><a href="<?php echo $actual_link; ?>oquefazemos.php" title="Nossa Estrutura">Nossa <strong>Estrutura</strong></a></h3></dt>
                <dd><a href="<?php echo $actual_link; ?>oquefazemos.php" title="A nossa primeira unidade, na Zona Sul de São Paulo, possui 78 leitos equipados">A nossa primeira unidade, na Zona Sul de São Paulo, possui 78 leitos equipados</a></dd>
            </dl>
        </nav>
