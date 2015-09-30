<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
<div class="task" ng-app="taskManager" ng-controller="listController">
    <div class="welcomeText">{{welcomeMessage}}</div>    
    <br/><span class="searchLabel">Search here </span><input type="text" ng-model="searchItem"/> <a id="search" href="javascript:void(0);" ng-click="toggle();">Show or hide</a>&nbsp;&nbsp;&nbsp;&nbsp;<a id="search" href="javascript:void(0);" ng-click="showAddNewForm();">Add new</a>
    <div ng-hide="addNewElement"><br/><input type="text" name="task" ng-model="task"><input type="button" value="Add new task" ng-click="save(task)"></div>
    <ul ng-hide="taskList">
        <li ng-repeat="x in tasks |filter:searchItem| orderBy:'created_at'">
            {{x.task | uppercase}}
        </li>
    </ul>
</div>

<script>
 var app = angular.module("taskManager", []);
 app.controller('listController', function($scope, $http) {
    $scope.welcomeMessage = 'Welcome to angular js. This is a simple task manager and is database driven.';
    $scope.taskList = false;
    getTasks();
    
    function getTasks() {
        $http.get("tasks.php").success(function(response) {
            $scope.tasks = response;
        });
    }
    
    $scope.toggle = function() {
       $scope.taskList = !$scope.taskList;
    };
    
    $scope.addNewElement = true;
    $scope.showAddNewForm = function() {
        $scope.addNewElement = false;
    };
    
   $scope.save = function(task) {  
        $http.get("add.php?task="+task).success(function(response) {
            $scope.task = "";
            getTasks();
        });
    };
 });
</script>

<style>
.task {
    margin: 0 auto; width: 500px; border: 1px solid activeborder; padding: 10px; margin-top: 50px;
}
.welcomeText{color: blue;}
.taskList li{color: green;}
.searchLabel{color: #003956;}
</style>