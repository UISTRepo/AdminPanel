angular
    .module('transportApp', [
        'ngRoute',
        'ngSanitize',
        'angularUtils.directives.dirPagination'
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
            .when('/routes', {
                templateUrl: 'views/routes.html',
                controller: 'RoutesCtrl'
            })
            .otherwise({
                redirectTo: '/'
            });
    });