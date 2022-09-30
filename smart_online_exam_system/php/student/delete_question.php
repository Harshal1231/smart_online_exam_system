<?php
include "./../session_check.php";
include "./../config.php";
$sid=$_SESSION['id'];
$q1="DELETE FROM q_temp WHERE s_id='$sid'";
$result1=mysqli_query($conn,$q1);

?>
