
var app = angular.module('Question', []);
    app.controller('getQCtrl', function($scope, $http, $interval) {
    /*Get Questions*/
    $scope.countq=0;
    $scope.ans="";
    $scope.timerState="";
    $http.get("/online_exam/php/student/get_question.php")
        .then(function(response) {
        $scope.phpData = response.data[0];
        $scope.countq=response.data[1][0]['q_no'];
        $scope.seconds=response.data[1][0]['time'];
        $scope.quetion=$scope.phpData[$scope.countq];
        });
    /* Get student_name*/
    $http.get("/online_exam/php/student/get_student_name.php")
        .then(function(response) {
        $scope.student_name=response.data;
        });
    /* delete temp question*/
    $http.get("/online_exam/php/student/delete_question.php")
        .then(function(response) {
        $scope.deleteData = response.data;
        });
    /*next Question*/
    $scope.nextq=function(){
        $http.post("/online_exam/php/student/upload_question.php",{qid:$scope.quetion.q_id,qans:$scope.ans,q_time:$scope.seconds})
                      .then(function(rdesponse) {
                       $scope.myWelcome1 = rdesponse.data;
                    });
  
          $scope.countq++;
          if($scope.countq<$scope.phpData.length){         
          $scope.ans="";          
          $scope.quetion=$scope.phpData[$scope.countq];
          }
          else{  
            /* display all question*/
          document.getElementById("question").style.display='none';
            document.getElementById("all_question").style.display='block';                    
            $http.get("/online_exam/php/student/get_temp_question.php").then(function(response) {
                $scope.temp_question = response.data;           
            });
          }
  
      }

      /*chaange Quetion*/
      $scope.change=function(q){
        document.getElementById("question").style.display='none';
        document.getElementById("all_question").style.display='none';
        document.getElementById("update_question").style.display='block';
        $http.post("/online_exam/php/student/fetch_question.php",{qid:q.q_id})
                      .then(function(rdesponse) {
                       $scope.quetionUpdate = rdesponse.data;
                    });
      }

      /*update Question*/
      $scope.updateQueation=function(quetionUpdate){
        document.getElementById("question").style.display='none';
        document.getElementById("all_question").style.display='block';
        document.getElementById("update_question").style.display='none';
        $http.post("/online_exam/php/student/update_question.php",{qid:$scope.quetionUpdate.q_id,qans:$scope.ans1,q_time:$scope.seconds})
                      .then(function(rdesponse) {
                       $scope.myWelcome2 = rdesponse.data;});
                       $http.get("/online_exam/php/student/get_temp_question.php").then(function(response) {
                $scope.temp_question = response.data;
            });
          $scope.ans1="";
  
      }
      /*Submit exam */
      $scope.submitResult=function(){
        document.getElementById("question").style.display='none';
        document.getElementById("all_question").style.display='none';
        document.getElementById("update_question").style.display='none';
        $http.post("/online_exam/php/student/submit_exam.php",{})
                      .then(function(rdesponse) {
                       $scope.myWelcome3 = rdesponse.data;});
  
        alert("successfully submited your exam..!");
        window.open("./../","_self");
      }
      $scope.timerState=$interval(function(){
        $scope.min = Math.round(($scope.seconds -30) / 60);
        $scope.sec = $scope.seconds % 60;
        if($scope.sec<10){
          $scope.sec = "0" + $scope.sec;
        }
        document.getElementById("countdown").innerHTML =  $scope.min + ":" + $scope.sec;

        if($scope.seconds == 0){
          $interval.cancel($scope.timerState);
          document.getElementById("countdown").innerHTML = "Time Over";
          alert("Time Over..!");
          $scope.submitResult();
        }
        else{
          $scope.seconds--;
        }
    },1000);
 });
  /*timer clock*/
  
  /**seconds = time1;
  alert(time1);
  function timer(){
    var min = Math.round((seconds -30) / 60);
    var sec = seconds % 60;
    if(sec<10)
    {
      sec = "0" + sec;
    }
    document.getElementById("countdown").innerHTML =  min + ":" + sec;

    if(seconds == 0)
    {
    clearInterval(CountDownTimer);
    document.getElementById("countdown").innerHTML = "Time Over";
    alert("Time Over..!");
    var scope = angular.element(document.getElementById('idForJS')).scope();
    scope.submitResult();
    }
    else
    {
      seconds--;
    }
}

var CountDownTimer = setInterval('timer()',1000);**/


  