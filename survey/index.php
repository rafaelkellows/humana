<!DOCTYPE html>
<html lang="pt-br">
<?php
    error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
    require_once '../sysfiles/connector.php'; 
    $page = "Home";
    include_once "../inc/contents/head.php";
?>
  <body>
    <main class="survey">
        <?php 
            include_once "../inc/contents/header.php";
            $subpage = "";
            include_once "../inc/contents/nav-main.php";
        ?>

        <div id="lbox">
            <form action="survey_action.php" method="post">
                <input type="hidden" id="formName" name="formName" value="survey">
                <fieldset>
                    <?php
                        $oConn = New Conn();
                        //Get last tag inserted
                        $oSlctSurvey = $oConn->SQLselector("*","tbl_surveys","status='1'","");
                        $rSurvey = mysql_num_rows($oSlctSurvey);
                        if($rSurvey && !isset($_REQUEST['msg'])) {
                            $row = mysql_fetch_array($oSlctSurvey);
                            
                    ?>
                    <legend><h3><?php echo utf8_encode($row['campaign']); ?></h3></legend>
                    <input type="hidden" name="campaign" value="<?php echo $row['id']; ?>">
                    <div>
                        <label>Nome completo:</label>
                        <input type="text" name="patientName" /><br>
                        <label>Nome da Empresa:</label>
                        <input type="text" name="companyName" />
                        <label>Data:</label>
                        <input class="mdata" placeholder="dd/mm/yyyy" type="text" name="currentDate" />
                    </div>
                    <section>
                        <ul class="ul-header">   
                            <li><span>Item</span></li>
                            <li><span>Descrição</span></li>
                            <li><span class="ft-veryunsatisfied" title="Muito Insatisfeito">Muito Insatisfeito</span></li>
                            <li><span class="ft-unsatisfied" title="Insatisfeito">Insatisfeito</span></li>
                            <li><span class="ft-indifferent" title="Neutro">Neutro</span></li>
                            <li><span class="ft-satisfied" title="Satisfeito">Satisfeito</span></li>
                            <li><span class="ft-verysatisfied" title="Muito Satisfeito">Muito Satisfeito</span></li>
                        </ul>
                        <?php
                            $oConn = New Conn();
                            //Get last tag inserted
                            $oSlctSurveyQ = $oConn->SQLselector("*","tbl_survey_questions","id_survey='".$row['id']."'","");
                            $rSurveyQ = mysql_num_rows($oSlctSurveyQ);
                            if($rSurveyQ) {
                                $count = 0;
                                while ( $row = mysql_fetch_array($oSlctSurveyQ) ) {
                                    $count++;
                        ?>
                        <ul class="ul-content">
                            <li><span><?php echo $count; ?></span></li>
                            <li><span><?php echo utf8_encode($row['question']); ?></span></li>
                            <li><input type="radio" name="ans<?php echo $count; ?>[]" value="1" /></li>
                            <li><input type="radio" name="ans<?php echo $count; ?>[]" value="2" /></li>
                            <li><input type="radio" name="ans<?php echo $count; ?>[]" value="3" /></li>
                            <li><input type="radio" name="ans<?php echo $count; ?>[]" value="4" /></li>
                            <li><input type="radio" name="ans<?php echo $count; ?>[]" value="5" /></li>
                            <input type="hidden" name="answer[]" value="<?php echo $row['id']; ?>">
                        </ul>
                        <?php
                                }
                            }
                        ?>
                        <input type="hidden" name="answers" value="<?php echo $count; ?>">
                    </section>
                    <div>
                        <label>Sugestão para melhoria:</label>
                        <textarea name="suggestion"></textarea>
                    </div>
                    <input type="submit" name="enviar" value="enviar" />
                    <input type="reset" name="reset" value="limpar" />                    
                    <?php
                        }else{
                            if( isset($_REQUEST['msg']) ){
                                if($_REQUEST['msg'] == '1' ){
                                    echo "<legend><h3 class='success'>Enviado com sucesso</h3></legend>";
                                }else{
                                    echo "<legend><h3>Nenhuma campanha ativa</h3></legend>";
                                }
                            }else{
                                echo "<legend><h3>Nenhuma campanha ativa</h3></legend>";
                            }
                        }
                    ?>

                </fieldset>
            </form>

        </div>

        <?php 
            include_once "../inc/contents/footer.php";
        ?>
        
    </main>

  </body>
</html>