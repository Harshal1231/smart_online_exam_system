/* Welcome module*/
var loginapp = angular.module('welcome',[]);
loginapp.controller('welcomeCtrl', function($scope,$http) {  
  $http.get("/online_exam/php/student/welcome.php")
  .then(function(response) {
  $scope.user = response.data; 
  });
  $http.get("/online_exam/php/student/get_time_marks_subject.php")
  .then(function(response) {
  $scope.exam = response.data; 
  });
});