/* Present module*/
var app = angular.module('exam_completed_student', []);
    app.controller('exam_completed_studentCtrl', function($scope, $http) {
        $http.get("/online_exam/php/admin/exam_completed_student.php")
        .then(function(response) {
        $scope.student_data = response.data; 
        });
    $scope.getPaper=function(student){
        $scope.student_marks=student;
        document.getElementById("student_list").style.display='none';
        document.getElementById("paper").style.display='block';
        $http.post("/online_exam/php/admin/get_paper.php",{s_id:student.s_id})
            .then(function(response) {
               $scope.student_paper=response.data;
        });
    }
    $scope.goToPrint=function(){
        var table=`<center><table border=1 style="border-collapse:collapse;margin-top:20px;" cellpadding=5><tr>
                            <th>Sr. No</th>
                            <th>Student Id</th>
                            <th>Student Name</th>
                            <th>Student Contact</th>
                            <th>College Name</th>
                            <th>Out Of Marks</th>
                            <th>Obtain Marks</th>
                        </tr>`;
        for( var student of $scope.student_data){
            table+=`<tr><td>`+student[0]+`</td><td >`+student.s_id+`</td><td>`+student.s_name+`</td><td>`+student.s_mo_no+`</td><td>`+student.s_clg_name+`</td> <td>`+student.out_of_marks+`</td><td>`+student.obtain_marks+`</td></tr>`;
        }
        table+="</table></center>";
        var op=window.open();
        op.document.write(table);
        op.print();
        op.close();
    }
 });

 