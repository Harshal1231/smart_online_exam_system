<?php
include "./../session_check.php";
include "./../config.php";

$indata=json_decode(file_get_contents("php://input"));
$sid=$_SESSION['id'];
$qid=$indata->qid;
$qans=$indata->qans;
$q_time=$indata->q_time;
$filename="./temp_file/".$_SESSION['id'].".json";
$temp_quetion=(array)json_decode(file_get_contents($filename));
for($i=0;$i<count($temp_quetion[0]);$i++){
    if(strcmp($temp_quetion[0][$i]->q_id,$qid)==0){
        $temp_quetion[0][$i]->selected_ans=$qans;
        $temp_quetion[1][0]->time=$q_time;
        $temp_quetion[1][0]->q_no=$temp_quetion[0][$i]->quetion_no;

        file_put_contents($filename,json_encode($temp_quetion));
    break;
    }
}



/*

$q="INSERT INTO q_temp(s_id,q_id,c_ans) VALUES ('$sid','$qid','$qans')";
$result=mysqli_query($conn,$q);
*/
?>