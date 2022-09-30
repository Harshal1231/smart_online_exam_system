<?php
include "./../session_check.php";
include "./../config.php";
$sid=$_SESSION['id'];
$obMarks=0;
/*
$result = mysqli_query($conn,"SELECT * FROM q_temp  where s_id='$sid'");
$row = mysqli_fetch_assoc($result);

while($row!=null)
{
    $id=$row['q_id'];
    $resultq = mysqli_query($conn,"SELECT ans FROM quetion_answer WHERE q_id='$id'");
    $rowq = mysqli_fetch_assoc($resultq);

    if(strcmp($row['c_ans'],$rowq['ans'])==0)
    {
        $obMarks++;
    }

    $row = mysqli_fetch_assoc($result);
}
*/
$filename="./temp_file/".$_SESSION['id'].".json";
$temp_quetion=(array)json_decode(file_get_contents($filename));
for($i=0;$i<count($temp_quetion[0]);$i++)
{
    $id=$temp_quetion[0][$i]->q_id;
    $resultq = mysqli_query($conn,"SELECT ans FROM quetion_answer WHERE q_id='$id'");
    $rowq = mysqli_fetch_assoc($resultq);

    if(strcmp($rowq['ans'],$temp_quetion[0][$i]->selected_ans)==0)
    {
        $obMarks++;
    }
    $selected_ans=$temp_quetion[0][$i]->selected_ans;
    $qQuery="INSERT INTO q_temp(s_id,q_id,c_ans) VALUES ('$sid','$id','$selected_ans')";
    $result=mysqli_query($conn,$qQuery);
}
$resultString=mysqli_query($conn,"SELECT marks FROM paper_config");
$resultStringMarks =  mysqli_fetch_assoc($resultString);
$totalq=$resultStringMarks['marks'];
$q="INSERT INTO marks(s_id, out_of_marks,obtain_marks) VALUES ('$sid','$totalq','$obMarks')";
mysqli_query($conn,$q);
$result1 = mysqli_query($conn,"UPDATE student SET s_present_status='C' WHERE s_id='$sid'");
unset($_SESSION['id']);
session_destroy();
?>