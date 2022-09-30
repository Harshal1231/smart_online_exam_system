<?php
include "./../session_check.php";
    include "./../config.php";
    /*$qi_ans= array();
    $sid=$_SESSION['id'];
    $result = mysqli_query($conn,"SELECT * FROM q_temp as id where s_id='$sid'");
    $row = mysqli_fetch_array($result);
    $q=array(20);
    $i=0;
    $c=1;
   
    while($row!=null)
    {
        $qid=$row['q_id'];
        $result1 = mysqli_query($conn,"SELECT * FROM quetion_answer WHERE q_id='$qid'");
        $quetionDe = mysqli_fetch_array($result1);
        $q[$i]=(object)array('q_id'=>$row['q_id'],'qdec'=>$quetionDe['q_description'],'qans'=>$row['c_ans'],'count'=>$c);
        $c++;
        $i++;
        $row = mysqli_fetch_array($result);
    }
    echo json_encode($q);
    */

   $filename="./temp_file/".$_SESSION['id'].".json";
   $quetiondata=json_decode(file_get_contents($filename))[0];
   echo json_encode($quetiondata);
               
?>