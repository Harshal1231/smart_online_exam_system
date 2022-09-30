<?php
session_start();
require_once "./php/config.php";
?>
<html>
    <head>
      <title>Login</title>
        <link rel="shortcut icon" href="../img/college logo.png" type="image/jpeg" />
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="./boostrap/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="./boostrap/headerfooter.css">
        <link rel="stylesheet" type="text/css" href="./boostrap/css/common.css">
        <script src="./js/login.js"></script>
        <script src="./boostrap/a.js"></script>
        <script src="./boostrap/b.js"></script>
        <script src="./boostrap/c.js"></script>
        <script src="./boostrap/bootstrap.min.js"></script>
        <!--<script src="./validjs.js"></script>-->
      
    </head>
    <body>  
        <div class="container-fluid outer-container" >
        <!-- Header Block-->
            <div class="container-fluid header">
           <div class="row">
               <div class="col-md-3  text-white text-center">
                    <img src="./img/college logo.png" class="img-fluid logo" alt="college logo"><br>
                    <b>DTE Code :</b>5008<br>
                    <b>MSBTE Code :</b>0018/1567
                </div>
                <div class="col-md-7 text-white">
                    <h1 class="text-center">Government Polytechnic, Jalgaon<br>शासकीय तंत्रनिकेतन, जळगांव<br></h1>
                    <h5 class="text-center">(An Institute of Government Of Maharashtra)<br>Since 1960</h5>
                </div>
            </div>
            <div class="row  header text-right">
                <div class="col-sm-10"></div>
                <div class="col-sm-2">
                <a class="text-white" href="index.php">Student Login</a>
                </div>
            </div>    
        </div>
        <!--Log in Block-->
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4">
              <div class="container-fluid outer-login">
                  <div class="container-fluid outer-login-img">
                      <img src="./img/college logo.png" class="img-fluid">
                  </div>
                  <div class="container-fluid outer-login-form bg-light">
                      <form method="POST">
                          <div class="form-group">
                            <lable>Enter Id: </lable>
                            <input type="text" class="form-control" name="id" placeholder="**************"  required>
                          </div>
                          <div class="form-group">
                            <lable>Enter Password: </lable>
                            <input type="text" class="form-control" name="pass" placeholder="umesh@123"  required>
                          </div>
                          <div class="form-group ">
                            <input type="submit" class="btn-login btn " name="sub" value="Login">
                          </div>
                          </div>
                      </form>
                  </div>
              </div>
          <div class="col-md-4"></div>
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
                        <div class="col-md-6">1. Umesh Chaudhari</div>
                        <div class="col-md-6">2. Bhavesh Patil</div>
                </div>
            </div>
        </div>
    </body>
</html>

<?php  
	
	if(isset($_POST["sub"]))
	{
        $id=$_POST["id"];
        $pass=$_POST["pass"];
        $q="SELECT * FROM admin WHERE a_id='$id' and a_pass='$pass'";
        $result=mysqli_query($conn,$q);
        $data=@mysqli_fetch_assoc($result);
        if(isset($data))
        {
            $_SESSION['a_id']=$data['a_id'];
            header("location:./admin/home.html");
        }
        else
        {
            echo "<html><body><script>alert('Plz Enter Correct Information');</script></body></html>";
		}
	}
?>
