<?php
date_default_timezone_set("America/Araguaina");
require_once '../sysfiles/connector.php';
$campaign = ( isset($_POST["campaign"] ) ) ? $_POST["campaign"] : '' ;
$patientName = ( isset($_POST["patientName"] ) ) ? $_POST["patientName"] : '' ;
$companyName = ( isset($_POST["companyName"] ) ) ? $_POST["companyName"] : '' ;
$date = ( isset($_POST["currentDate"] ) ) ? $_POST["currentDate"] : '' ;
$suggestion = ( isset($_POST["suggestion"] ) ) ? $_POST["suggestion"] : '' ;
$itens = ( isset($_POST["answers"] ) ) ? $_POST["answers"] : '' ;
$name = $_POST["ans1"];

//echo $patientName . $companyName. $date ;
$oConn = New Conn();
$sqlInsert = $oConn->SQLinserter("tbl_tmp_survey_users","id_survey,patient,company,date,suggestion,inserted","'$campaign','$patientName','$companyName','$date','$suggestion',now()");
if($sqlInsert){
    $sqlSct = $oConn->SQLselector("*","tbl_tmp_survey_users","","id DESC");
    $row_select = mysql_fetch_array($sqlSct);
    if($row_select){
        $id = $row_select['id'];
        for ($x = 1; $x <= $itens; $x++) {
            $name = $_POST["ans".$x];
            $answer = $_POST["answer"];
            foreach ($name as $color){ 
                $ans = $answer[$x-1];
                $oConn->SQLinserter("tbl_survey_answers","id_tmp_user,id_question,id_survey,answer,inserted","'$id','$ans','$campaign','$color',now()");
            }
        }
        header('location: ./?msg=1');
    }
}else{
    header('location: ./?msg=0');
}
?>