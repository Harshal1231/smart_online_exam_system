<html>
    <head>
      <title>Admin Panel</title>
        <link rel="shortcut icon" href="../img/college logo.png" type="image/jpeg" />
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="./../boostrap/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="./../boostrap/headerfooter.css">
        <link rel="stylesheet" type="text/css" href="./../boostrap/css/student.css">
        <script src="./../boostrap/bootstrap.min.js"></script>

        <script src="./../boostrap/a.js"></script>
        <script src="./../boostrap/b.js"></script>
        <script src="./../boostrap/c.js"></script>

        <script src="./../boostrap/angular.min.js"></script>
        <script src="./../js/admin/dashboard.js"></script>
    </head>
    <body>  
        <div class="container-fluid outer-container" >
        <!-- Header Block-->
            <div class="container-fluid header">
           <div class="row">
               <div class="col-md-3  text-white text-center">
                    <img src="../img/college logo.png" class="img-fluid logo" alt="college logo"><br>
                    <b>DTE Code :</b>5008<br>
                    <b>MSBTE Code :</b>0018/1567
                </div>
                <div class="col-md-7 text-white">
                    <h1 class="text-center">Government Polytechnic, Jalgaon<br>शासकीय तंत्रनिकेतन, जळगांव<br></h1>
                    <h5 class="text-center">(An Institute of Government Of Maharashtra)<br>Since 1960</h5>
                </div>
            </div>   
        </div>
         <!--Menu Bar Block-->
         <nav class="navbar navbar-expand-md navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="./home.html">Home <span class="sr-only">(current)</span></a>
                </li>                
                <li class="nav-item">
                  <a class="nav-link" href="./add_student.html">Add Student</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./allow_login.html">Allow Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./re_schedule_exam.html">Re-Schedule Exam</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Upload</a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="./upload_student.php">Student Details</a>
                    <a class="dropdown-item" href="./upload_question.php">Question</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./exam_config.html">Exam Config</a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="./../php/admin/logout.php">Logout</a>
                </li>
              </ul>
            </div>
          </nav>

        <!--Profile Block-->
        <div class="container-fluid profile-outer">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="container-fluid profile-head">
                        Upload Question Data
                    </div>
                    <div class="container-fluid outer-login-form border border-warning text-black " style="font-size: 18px; " >
                        <br> 
                        <form action="" method="POST" enctype="multipart/form-data">

                            <div class="row form-group">
                                <div class="col-md-7">
                                   Select Category : 
                                </div>
                                <div class="col-md-5">
                                    <input type="radio" name="category" value ="MergedTable"> Merged Table <input type="radio" name="category" value ="ReplaceTable"> Replace
                                </div>
                            </div>

                          <div class="row form-group ">  
                            <div class="col-md-7">
                                <h5>Select .csv File : </h5>
                                <p class="text-muted" style="font-size: 13px;">(Please Follow Below Instruction Table)</p>
                            </div>
                            <div  class="col-md-5">
                                <input type="file" name="file">
                            </div>
                          </div>

                          <div class="form-group ">
                            <input type="submit" class="btn-login btn text-white form-control"name="submitUpload" value="Submit"  style="width: 60%;margin: 0px 20%;background-color: orange;">
                          </div>

                        </form>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>

            <!--Instruction table-->
            <div class="row" style="margin-bottom: 20px;">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="container-fluid profile-head">
                        Please Follow Instruction
                    </div>
                    <div class="container-fluid outer-login-form border border-warning text-black " style="font-size: 18px; " ng-app="registration" ng-controller="registrationCtrl">
                        <br> 
                        <ul>
                            <li>
                                <p>File Structure Must Be Same As Figure Shown Below</p>
                                <img class="img-thumbnail" src="../img/instructionQuestion.png">
                            </li>
                            <li>File Extension Must Be .csv(MS-DOS)</li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
        
        <!--Footer Block-->
            <div class="container-fluid footer">
                <div class="row">
                    <div class="col-md-12 text-center text-white">
                        <h5>Guided By: H .K . Nemade</h5>
                    </div>
                </div>
                <div class="container-fluid  text-center text-white">
                  <h5>Developed By</h5>
                </div>
                <div class="row text-center text-white">
                <div class="col-md-4">1. Umesh Chaudhari</div>
                        <div class="col-md-4">2. Bhavesh Patil</div>
                        <div class="col-md-4">3. Harshal Koli</div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php

include("./../php/config.php");

if(isset($_POST["submitUpload"])){
   // Allowed mime types
   $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
   
   // Validate whether selected file is a CSV file
   if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $csvMimes)){
   
       // If the file is uploaded
       if(is_uploaded_file($_FILES['file']['tmp_name'])){
          
           // Open uploaded CSV file with read-only mode
           $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
           
           // Skip the first line
           fgetcsv($csvFile);
           
           $id=1;
          if(strcmp($_POST['category'],"ReplaceTable")==0){
             $conn->query("DELETE FROM marks;");
             $conn->query("DELETE FROM q_temp;");
             $conn->query("DELETE FROM quetion_answer");
           }
           else if(strcmp($_POST['category'],"MergedTable")==0){
            $result=mysqli_query($conn,"SELECT count(*) AS lastQId FROM quetion_answer");
            $resultData =  mysqli_fetch_assoc($result);
            $id=$resultData['lastQId']+1;
           }
           // Parse data from CSV file line by line
           while(($line = fgetcsv($csvFile)) !== FALSE){
                // Get row data

                $question  = $line[0];
                $a  = $line[1];
                $b  = $line[2];
                $c = $line[3];
                $d = $line[4];
                $ans = $line[5];
                $level = $line[6];

                if($question!=null&&$a!=null&&$b!=null&&$c!=null&&$d!=null&&$ans!=null&&$level!=null){
                  $query="INSERT INTO quetion_answer (q_id,q_description,a,b,c,d,ans,q_level) VALUES ('$id','$question', '$a','$b','$c', '$d','$ans','$level');";
                // Insert member data in the database
                  $conn->query($query);
                //echo $query;

                   $id++;
                }
          
            }
            echo "<html><body><script>alert('File Is Successfully Uploaded');</script></body></html>";
           
           // Close opened CSV file
           fclose($csvFile);
   
       }else{
        echo "<html><body><script>alert('Something Went Wrong,Please Try Again');</script></body></html>";
       }
   }else{
    echo "<html><body><script>alert('Your File Is Not .csv');</script></body></html>";
  }
}

?>