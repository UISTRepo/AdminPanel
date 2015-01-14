'use strict';

/**
 * @ngdoc function
 * @name testApp.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the testApp
 */
angular.module('transportApp')
    .controller('MainCtrl', ['$scope','TabService',function ($scope, TabService) {
        TabService.setTab(1);

        $scope.doSomething = function(){
            console.log(TabService.testFunction());
        }
    }]);