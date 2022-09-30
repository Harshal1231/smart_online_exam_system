/* Present module*/
var app = angular.module('totalStudent', []);
    app.controller('totalStudentCtrl', function($scope, $http) {
        $http.get("/online_exam/php/admin/total_student.php")
        .then(function(response) {
        $scope.total_student_data = response.data; 
        });
 });

