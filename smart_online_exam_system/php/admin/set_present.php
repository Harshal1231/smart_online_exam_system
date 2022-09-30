<?php
include "./../config.php";

$indata=json_decode(file_get_contents("php://input"));
$sid= $indata->id;
$result1 = mysqli_query($conn,"UPDATE student SET s_present_status='P' WHERE s_id='$sid'");
?>