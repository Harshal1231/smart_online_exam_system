<?php

include "./../session_check.php";
include "./../config.php";
    $arr= array(); 
    $sid=$_SESSION['id'];
    $result1 = mysqli_query($conn,"SELECT s_present_status FROM student WHERE s_id='$sid'");
    $row1 = mysqli_fetch_assoc($result1);
    $filename=$_SESSION['id'].".json";
    if(strcmp($row1['s_present_status'],"S")==0)
    {
        $quetiondata=json_decode(file_get_contents("./temp_file/".$filename));
        $qQuery="UPDATE student SET s_present_status='L' WHERE s_id='$sid'";
        $qResult=mysqli_query($conn,$qQuery);
        echo json_encode($quetiondata);   
    }
    else{
        $result = mysqli_query($conn,"SELECT MAX(q_id) As id FROM quetion_answer");
            $row = mysqli_fetch_array($result);        
            $no=$row["id"];
            
            $paperConfigResult = mysqli_query($conn,"SELECT * FROM paper_config");
            $paperConfigData = mysqli_fetch_assoc($paperConfigResult);
            $ARU=array($paperConfigData['A'],$paperConfigData['R'],$paperConfigData['U']);
            $level=array("A","R","U");
            $arr=[];
            $n=rand(1,$no);
            for($j=0;$j<3;$j++)
            {
                $noQuestion=$ARU[$j];
                $questionLevel=$level[$j];
                while($noQuestion>0) 
                {   
                    $done=true;
                    $result1 = mysqli_query($conn,"SELECT * FROM quetion_answer WHERE q_id='$n' and q_level='$questionLevel'");
                    $row1 = mysqli_fetch_assoc($result1);
                    if($row1!=null)
                    {
                        $row1['selected_ans']="";
                        $row1['quetion_no']=count($arr);
                        $arr[]=$row1;
                        $noQuestion--;
                    }                  
                    while($done)
                    {
                        $n=rand(1,$no);
                        for($i=0;$i<count($arr);$i++)
                        {
                            $quetion=$arr[$i];
                            if($n==$quetion['q_id'])
                                break;
                        }
                        if($i==count($arr))
                            $done=false;
                    }
                }
            }
            $data[]=$arr;
            $data[]=array(["time"=>$paperConfigData['time'],"q_no"=>0]);
            file_put_contents("./temp_file/".$filename,json_encode($data));
            $quetiondata=json_decode(file_get_contents("./temp_file/".$filename));
            echo json_encode($quetiondata);
    }
    
?>