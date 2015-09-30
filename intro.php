<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
<div ng-app="myApp" ng-controller="myController" style="margin: 0 auto; width: 500px; border: 1px solid activeborder; padding: 10px; margin-top: 50px">
    <div style="color: blue">{{message}}</div>    
    <br/><span style="color: #003956">Search here </span><input type="text" ng-model="test"/> <a id="search" href="javascript:void(0);" ng-click="toggle();">Show all</a>
    <ul ng-hide="listingData">
        <li style="color: green" ng-repeat="x in names |filter:test| orderBy:'roll'">
            {{x.name | uppercase}}
        </li>
    </ul>
</div>

<script>
 var app = angular.module("myApp", []);
 app.controller('myController', function($scope, $http) {
    $scope.message = 'Welcome to angular js. I am gonna make it or break it based on skill that no one ever provide';
    $scope.listingData = true;
    $http.get("serverScript.php").success(function(response) {
    $scope.names = response;
    },
    $scope.toggle = function(){
       $scope.listingData = !$scope.listingData;
    });
 });
</script>