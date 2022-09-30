<?php
include "./../session_check.php";
include "./../config.php";
$result1 = mysqli_query($conn,"SELECT subject_name,time,marks FROM paper_config");
$row1 = mysqli_fetch_assoc($result1);
echo json_encode($row1);
?>