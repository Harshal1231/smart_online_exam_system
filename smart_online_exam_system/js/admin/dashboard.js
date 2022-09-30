/* dashboard module*/
var app = angular.module('dashboard', []);
    app.controller('dashboardCtrl', function($scope, $http) {
        $http.get("/online_exam/php/admin/dashboard.php")
        .then(function(response) {
        $scope.dashboard_data = response.data; 
        });
 });

