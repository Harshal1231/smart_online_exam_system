/* Login Form*/
var loginModule = angular.module('login',[]);
loginModule.controller('loginCtrl', function($scope) {
  var person={
      id:"1001",
      password:"123",
      designation:"S"
  };
  function checkLogin(){
      alert("dfkjgh");
    $http.post("/hostel_system/php/login.php", {user:user}).then(
	          function(response){

	           },
	          function(response){
	                                         // failure callback
	          });
  }

  $scope.checkLogin= checkLogin;
  $scope.user=person;

});
