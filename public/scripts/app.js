angular
    .module('transportApp', [
        'ngRoute',
        'ngSanitize',
        'ngAnimate',
        'angularUtils.directives.dirPagination',
        'angularFileUpload'
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
            .when('/data', {
                templateUrl: 'views/data.html',
                controller: 'DataCtrl'
            })
            .when('/trips', {
                templateUrl: 'views/trips.html',
                controller: 'TripsCtrl'
            })
            .otherwise({
                redirectTo: '/'
            });
    });