/* add Student module*/
var app = angular.module('add_student', []);
app.controller('add_studentCtrl', function($scope, $http) {
    var user={
        id:"",
        name:"",
        mo_no:"",
        clg_name:"",
        password:""
    }
    $scope.student=user;
    $scope.addStudent=function(){
        if($scope.student.id==""||$scope.student.name==""||$scope.student.mo_no==""||$scope.student.clg_name==""||$scope.student.password==""){
            alert("Fill the blank field");
            return;
        }
        else{
        $http.post("/online_exam/php/admin/add_student.php",{student:$scope.student})
            .then(function(response) {
                $scope.student.id="";
                $scope.student.name="";
                $scope.student.mo_no="";
                $scope.student.clg_name="";
                $scope.student.password="";
                alert(response.data);
        });
    }
    }
 });

