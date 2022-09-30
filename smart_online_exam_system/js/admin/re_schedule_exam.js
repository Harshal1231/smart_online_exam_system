/* absence module*/
var app = angular.module('absence', []);
    app.controller('absenceCtrl', function($scope, $http) {
        $http.get("/online_exam/php/admin/login_student.php")
        .then(function(response) {
        $scope.present_student_data = response.data; 
        });
/*set Present*/
    $scope.setPresent=function(user){
        $http.post("/online_exam/php/admin/set_present.php",{id:user.s_id})
        .then(function(rdesponse) {
            alert(user.s_name+" can Login Now..!");
            $http.get("/online_exam/php/admin/login_student.php")
        .then(function(response) {
        $scope.present_student_data = response.data; 
        });
      });
    }
/* Start Exam*/

$scope.setStart=function(user){
    $http.post("/online_exam/php/admin/set_start.php",{id:user.s_id})
    .then(function(rdesponse) {
        alert(user.s_name+" can Login Now..!");
        $http.get("/online_exam/php/admin/login_student.php")
    .then(function(response) {
    $scope.present_student_data = response.data; 
    });
  });
}
 });

