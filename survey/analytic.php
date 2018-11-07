<!DOCTYPE html>
<html lang="pt-br">
<?php
    error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
    if(!$_REQUEST['token'] && !$_REQUEST['token']=='FFW1eXkKCMQOuKgGWi17lBP4msiZkz8m') {
        header('location: ./');
    }else{
        if($_REQUEST['token']!='FFW1eXkKCMQOuKgGWi17lBP4msiZkz8m') {
            header('location: ./');
        }
    }
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
                <fieldset>
                    <?php
                        $oConn = New Conn();
                        //Get last tag inserted
                        $oSlctSurvey = $oConn->SQLselector("*","tbl_surveys","id='".$_REQUEST['id']."' and status='1'","");
                        $rSurvey = mysql_num_rows($oSlctSurvey);
                        if($rSurvey && !isset($_REQUEST['msg'])) {
                            $row = mysql_fetch_array($oSlctSurvey);
                            
                    ?>
                    <legend><h3><?php echo utf8_encode($row['campaign']); ?></h3></legend>
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
                            $countAns1 = 0; $countAns2 = 0; $countAns3 = 0; $countAns4 = 0; $countAns5 = 0;
                            if($rSurveyQ) {
                                $count = 0;
                                while ( $row = mysql_fetch_array($oSlctSurveyQ) ) {
                                    $count++;
                        ?>
                        <ul class="ul-content">
                            <li><span><?php echo $count; ?></span></li>
                            <li><span><?php echo utf8_encode($row['question']); ?></span></li>
                            <?php
                                //Get last tag inserted
                                $oSlctSurveyA = $oConn->SQLselector("*","tbl_survey_answers","id_survey='".$_REQUEST['id']."' and id_question='".$row['id']."' ","");
                                $rSurveyA = mysql_num_rows($oSlctSurveyA);
                                $ans1 = 0; $ans2 = 0; $ans3 = 0; $ans4 = 0; $ans5 = 0;
                                if($rSurveyA) {
                                    //$rowA = mysql_fetch_array($oSlctSurveyA);
                                    while ( $rowA = mysql_fetch_array($oSlctSurveyA) ) {
                                        switch ($rowA['answer']) {
                                            case 1:
                                              $ans1++;
                                              $countAns1++;
                                              break;
                                            case 2:
                                              $ans2++;
                                              $countAns2++;
                                              break;
                                            case 3:
                                              $ans3++;
                                              $countAns3++;
                                              break;
                                            case 4:
                                              $ans4++;
                                              $countAns4++;
                                              break;
                                            case 5:
                                              $ans5++;
                                              $countAns5++;
                                              break;
                                            default:
                                              break;
                                        }
                                    }
                                    //echo $rowA['answer'];
                                }
                            ?>
                            <li>
                            <?php 
                                if($rSurveyA){ echo round($ans1*100/$rSurveyA).'%'; }else{ echo "0"; }
                             ?>
                            </li>
                            <li>
                            <?php 
                                if($rSurveyA){ echo round($ans2*100/$rSurveyA).'%'; }else{ echo "0"; }
                             ?>
                            </li>
                            <li>
                            <?php 
                                if($rSurveyA){ echo round($ans3*100/$rSurveyA).'%'; }else{ echo "0"; }
                             ?>
                            </li>
                            <li>
                            <?php 
                                if($rSurveyA){ echo round($ans4*100/$rSurveyA).'%'; }else{ echo "0"; }
                             ?>
                            </li>
                            <li>
                            <?php 
                                if($rSurveyA){ echo round($ans5*100/$rSurveyA).'%'; }else{ echo "0"; }
                             ?>
                            </li>
                        </ul>
                        <?php
                                }

                            }
                        ?>
                        <ul class="ul-content">
                            <li><span></span></li>
                            <li><span style="font-weight: 500;">Total de votos por satisfação: </span> </li>
                            <li><span style="font-weight: 500;"><?php echo $countAns1; ?></span></li>
                            <li><span style="font-weight: 500;"><?php echo $countAns2; ?></span></li>
                            <li><span style="font-weight: 500;"><?php echo $countAns3; ?></span></li>
                            <li><span style="font-weight: 500;"><?php echo $countAns4; ?></span></li>
                            <li><span style="font-weight: 500;"><?php echo $countAns5; ?></span></li>
                        </ul>
                        <ul class="ul-content">
                            <li><span></span></li>
                            <li><span style="font-weight: 500;">Total de votos: <?php echo $rSurveyA; ?></span></li>
                            <li><span style=""></span></li>
                            <li><span style=""></span></li>
                            <li><span style=""></span></li>
                            <li><span style=""></span></li>
                            <li><span style=""></span></li>
                        </ul>
                    </section>
                    <?php
                        $oSlctSurveyU = $oConn->SQLselector("*","tbl_tmp_survey_users","id_survey='".$_REQUEST['id']."'","id DESC");
                        $rSurveyU = mysql_num_rows($oSlctSurveyU);
                        if($rSurveyU) {
                            while ( $rowU = mysql_fetch_array($oSlctSurveyU) ) {
                                
                    ?>
                    <div class="info">
                        <label>Nome Completo:</label> <p><?php echo $rowU['patient']; ?></p><br>
                        <label>Nome da Empresa:</label> <p><?php echo $rowU['company']; ?></p><br>
                        <label>Sugestão para melhoria:</label> <p><?php echo $rowU['suggestion']; ?></p><br>
                        <label>Data:</label> <p><?php echo $rowU['date']; ?></p>
                        <!--label>Respostas:</label><br>
                        <ul>
                            <li></li>
                        </ul-->
                    </div>
                    <br>
                    <?php

                            }
                        }
                        }else{
                            echo "<legend><h3>Nenhuma campanha ativa</h3></legend>";
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