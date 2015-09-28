<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
<div ng-app="myApp" ng-controller="myController" ng-init="quantity='4';quality='3'; names=[{'name':'rahim', 'roll':2}, {'name':'karim', 'roll':3}]">
    Type name: <input type="text" name="fullname" ng-model="name"/><br>
    you typed <span style="color: red">{{name}}  {{5+5}}</span>
    <p><span ng-bind="firstname"></span> <span ng-bind="name"></span></p> 
    <div ng-controller="subjectController">
        <p ng-bind="subject"></p>
        <p>Nice {{name}}<span ng-bind="subject"></span></p>
        <p>{{quality*quantity}}</p>
        <p ng-bind="quality*quantity"></p>
    </div>
    <ul>
        <li ng-repeat="x in names">
            {{x.roll}}
        </li>
    </ul>
</div>

<script>
 var app = angular.module("myApp", []);
 app.controller('myController', function($scope) {
    $scope.firstname = 'Mr';
 });
 app.controller("subjectController", function($scope) {
    $scope.subject = "angular js";
 });
 
 var currentDate = new Date();
var startDate = new Date();
 for (var i = 0; i <=4; i++) {
      currentDate.setTime(startDate.getTime() + (i*86400000));
console.log(currentDate);
    }
</script>