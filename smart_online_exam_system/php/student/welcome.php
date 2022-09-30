<?php
include "./../session_check.php";
require_once './../config.php';
// prepare and bind
$stmt = $conn->prepare("SELECT s_id,s_name,s_mo_no,s_clg_name FROM student WHERE s_id=?");
$stmt->bind_param("s", $id);

// set parameters and execute
$id=$_SESSION['id'];
$stmt->execute();

$res = $stmt->get_result();
$row = $res->fetch_assoc();
echo json_encode($row);
$stmt->close();
$conn->close();
?>
