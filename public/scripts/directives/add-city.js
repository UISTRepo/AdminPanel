/**
 * Created by tunte on 1/15/15.
 */
'use strict';

/**
 * @ngdoc function
 * @name testApp.controller:MainCtrl
 * @description
 * # MainCtrl
 * Controller of the testApp
 */
angular.module('transportApp')
    .directive('addCity', ['CityService', function(CityService){
        return {
            restrict: 'E',
            templateUrl: 'views/city/add-city.html',
            link: function(scope, element, attrs) {
                scope.newCity = function(){
                    console.log(scope.data.name);
                    scope.data.name = "";
                }
            }
        }
    }]);