<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
<div ng-app="myApp" ng-controller="myController" style="margin: 0 auto; width: 500px; border: 1px solid activeborder; padding: 10px; margin-top: 50px">
    <div style="color: blue">{{message}}</div>    
    <br/><span style="color: #003956">Search here  </span><input type="text" ng-model="test"/>
    <ul>
        <li style="color: green" ng-repeat="x in names |filter:test| orderBy:'roll'">
            {{x.name}}
        </li>
    </ul>
</div>

<script>
 var app = angular.module("myApp", []);
 app.controller('myController', function($scope, $http) {
    $scope.message = 'Welcome to angular js';
    $http.get("serverScript.php").success(function(response) {
    $scope.names = response;
    });
 });
</script>