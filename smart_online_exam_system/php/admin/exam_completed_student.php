<?php
include "./../config.php";
$result1 = mysqli_query($conn,"SELECT * FROM marks");
$row1 = mysqli_fetch_assoc($result1);
$student=[];
while($row1!=null){
    $s_id=$row1['s_id'];
    $s_result = mysqli_query($conn,"SELECT * FROM student WHERE s_id='$s_id'");
    $s_data = mysqli_fetch_assoc($s_result);

    array_push($s_data,count($student)+1);
    array_push($student,array_merge($row1,$s_data));
    $row1 = mysqli_fetch_assoc($result1);  
}
echo json_encode($student);
?>