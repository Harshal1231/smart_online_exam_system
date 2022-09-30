/* Present module*/
var app = angular.module('present', []);
    app.controller('presentCtrl', function($scope, $http) {
        $http.get("/online_exam/php/admin/login_student.php")
        .then(function(response) {
        $scope.present_student_data = response.data; 
        });
 });

