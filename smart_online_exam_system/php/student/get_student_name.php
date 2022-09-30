<?php
include "./../session_check.php";
include "./../config.php";

$id=$_SESSION['id'];
$result1 = mysqli_query($conn,"SELECT s_name FROM student WHERE s_id='$id'");
$row1 = mysqli_fetch_assoc($result1);
echo json_encode($row1);
?>