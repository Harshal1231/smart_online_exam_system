<?php
include "./../config.php";
$indata=json_decode(file_get_contents("php://input"));
$sid=$indata->s_id;
$student_paper=[];
/*student paper*/
$result = mysqli_query($conn,"SELECT s_id,q_id,c_ans FROM q_temp  where s_id='$sid'");
$row = mysqli_fetch_assoc($result);
while($row!=null)
{
    $id=$row['q_id'];
    $resultq = mysqli_query($conn,"SELECT * FROM quetion_answer WHERE q_id='$id'");
    $rowq = mysqli_fetch_assoc($resultq);
    array_push($rowq,count($student_paper)+1);
    array_push($student_paper,array_merge($row,$rowq));
    
    $row = mysqli_fetch_assoc($result);
}
echo json_encode($student_paper);

?>