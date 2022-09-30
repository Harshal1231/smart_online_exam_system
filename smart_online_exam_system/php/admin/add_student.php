<?php
include "./../config.php";

$indata=json_decode(file_get_contents("php://input"));
$student= $indata->student;

$result = mysqli_query($conn,"INSERT INTO student VALUES ('$student->id','$student->name','$student->mo_no','$student->clg_name','A','$student->password')");
if($result){
    echo "Student Successfully Added..!";
}
else{
    echo $student->id." student id alredy have ..!";
}
?>