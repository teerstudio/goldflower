
var app = angular.module( 'bps', ['ngRoute'] );

app.config(['$routeProvider', function($routeProvider) 
{
	$routeProvider.
    when('/', {templateUrl: 'home.html',   controller: HomeCtrl}).
    //when('/survey/create', {templateUrl: '/resources/app/html/survey/create.html', controller: CreateSurveyCtrl}).
    
    otherwise({redirectTo: '/'});
    
}]);


app.controller('MainCtrl', function($scope, $http, $log, $location, $rootScope) 
{
        
    
});



