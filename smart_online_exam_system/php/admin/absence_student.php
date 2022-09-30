<?php
include "./../config.php";
$result1 = mysqli_query($conn,"SELECT * FROM student WHERE s_present_status='A'");
$row1 = mysqli_fetch_assoc($result1);
$arr=[];
while($row1!=null){
    array_push($row1,count($arr)+1);
    array_push($arr,$row1);
    $row1 = mysqli_fetch_assoc($result1);  
}
echo json_encode($arr);
?>