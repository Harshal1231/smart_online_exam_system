/* add Student module*/
var app = angular.module('configExam', []);
app.controller('configExamCtrl', function($scope, $http) {
    var exam={
        R:"",
        U:"",
        A:"",
        subject_name:"",
        time:""
    }
    $scope.paper=exam;
    $scope.setPaper=function(){
        if($scope.paper.R==""||$scope.paper.A==""||$scope.paper.U==""||$scope.paper.subject_name==""||$scope.paper.pptime==""){
            alert("Fill the blank field");
            return;
        }
        else{
        $http.post("/online_exam/php/admin/config_paper.php",{exam:$scope.paper})
            .then(function(response) {
                $scope.paper.R="";
                $scope.paper.U="";
                $scope.paper.A="";
                $scope.paper.subject_name="";
                $scope.paper.time="";
                alert(response.data);
        });
    }
    }
 });

