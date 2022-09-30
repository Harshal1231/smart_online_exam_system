<?php
include "./../session_check.php";
include "./../config.php";
$indata=json_decode(file_get_contents("php://input"));
$sid=$_SESSION['id'];
$qid=$indata->qid;
$qans=$indata->qans;
$q_time=$indata->q_time;
$q="UPDATE q_temp SET c_ans='$qans' WHERE q_id='$qid' and s_id='$sid'";
$result=mysqli_query($conn,$q);

$filename="./temp_file/".$_SESSION['id'].".json";
$temp_quetion=(array)json_decode(file_get_contents($filename));
for($i=0;$i<count($temp_quetion[0]);$i++){
    if(strcmp($temp_quetion[0][$i]->q_id,$qid)==0){
        $temp_quetion[0][$i]->selected_ans=$qans;
        $temp_quetion[1][0]->time=$q_time;
        file_put_contents($filename,json_encode($temp_quetion));
    break;
    }
}
?>