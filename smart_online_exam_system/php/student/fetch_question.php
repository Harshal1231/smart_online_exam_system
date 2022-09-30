<?php
include "./../session_check.php";
include "./../config.php";

$indata=json_decode(file_get_contents("php://input"));
$qid= $indata->qid;
/*
$result1 = mysqli_query($conn,"SELECT * FROM quetion_answer WHERE q_id='$qid'");
$row1 = mysqli_fetch_assoc($result1);
echo json_encode($row1);
*/

$filename="./temp_file/".$_SESSION['id'].".json";
$temp_quetion=(array)json_decode(file_get_contents($filename))[0];
for($i=0;$i<count($temp_quetion);$i++){
    if(strcmp($temp_quetion[$i]->q_id,$qid)==0){
        echo json_encode($temp_quetion[$i]);
    break;
    }
}
?>