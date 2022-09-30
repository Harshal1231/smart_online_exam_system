<?php
include "./../config.php";

$arr=[];
$result1 = mysqli_query($conn,"SELECT COUNT(*) AS total FROM student");
$row1 = mysqli_fetch_assoc($result1);
array_push($arr,$row1['total']);

$result1 = mysqli_query($conn,"SELECT COUNT(*) AS present FROM student WHERE s_present_status='P' OR s_present_status='S'");
$row1 = mysqli_fetch_assoc($result1);
array_push($arr,$row1['present']);

$result1 = mysqli_query($conn,"SELECT COUNT(*) AS logins FROM student WHERE s_present_status='L'");
$row1 = mysqli_fetch_assoc($result1);
array_push($arr,$row1['logins']);

$result1 = mysqli_query($conn,"SELECT COUNT(*) AS absence FROM student WHERE s_present_status='A'");
$row1 = mysqli_fetch_assoc($result1);
array_push($arr,$row1['absence']);

$result1 = mysqli_query($conn,"SELECT COUNT(*) AS exam_completed FROM marks");
$row1 = mysqli_fetch_assoc($result1);
array_push($arr,$row1['exam_completed']);

echo json_encode($arr);
?>