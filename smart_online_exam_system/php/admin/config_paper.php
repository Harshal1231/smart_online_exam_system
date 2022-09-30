<?php
include "./../config.php";

$indata=json_decode(file_get_contents("php://input"));
$paper= $indata->exam;

$result=mysqli_query($conn,"SELECT count(*) AS ACount FROM quetion_answer WHERE q_level='A'");
$resultData =  mysqli_fetch_assoc($result);
if($resultData['ACount']>=$paper->A){
    $result=mysqli_query($conn,"SELECT count(*) AS RCount FROM quetion_answer WHERE q_level='R'");
    $resultData =  mysqli_fetch_assoc($result);
    if($resultData['RCount']>=$paper->R){
        $result=mysqli_query($conn,"SELECT count(*) AS UCount FROM quetion_answer WHERE q_level='U'");
        $resultData =  mysqli_fetch_assoc($result);
        if($resultData['UCount']>=$paper->U){
            $marks=$paper->A+$paper->R+$paper->U;
            $time=($paper->time*60);
            $result = mysqli_query($conn,"UPDATE paper_config SET A='$paper->A',R='$paper->R',U='$paper->U',subject_name='$paper->subject_name',time='$time',marks='$marks'");
            if($result){
                echo "Student Successfully Added..!";
            }
        }
        else{
            echo "Insufficient U level Question, Please Update Question Bank First";
        }

    }
    else{
        echo "Insufficient R level Question, Please Update Question Bank First";
    }
}
else{
    echo "Insufficient A level Question, Please Update Question Bank First";
}
?>