angular
    .module('transportApp', [
        'ngRoute',
        'ngSanitize'
    ], function($interpolateProvider){
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    })
    .config(function ($routeProvider) {
        $routeProvider
            .when('/', {
                templateUrl: 'views/main.html',
                controller: 'MainCtrl'
            })
            .when('/transporters', {
                templateUrl: 'views/transporters.html',
                controller: 'TransportersCtrl'
            })
            .when('/destinations', {
                templateUrl: 'views/destinations.html',
                controller: 'DestinationsCtrl'
            })
            .otherwise({
                redirectTo: '/'
            });
    });