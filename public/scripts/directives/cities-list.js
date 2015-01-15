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
    .directive('citiesList', ['CityService', '$sanitize',function(CityService, $sanitize){
        return {
            restrict: 'E',
            scope: {},
            templateUrl: 'views/city/cities.html',
            link: function(scope, element, attrs) {

                scope.visible = false;
                scope.currentPage = 1;
                scope.pageSize = 10;

                scope.query = "";

                CityService.getCities().then(function (data) {
                    scope.cities = data;
                });

                scope.newCity = function(){

                    var city = {'name' : $sanitize(scope.data.name)};
                    CityService.addNew(city).then(function(data){
                       city.id = data;
                    });
                    scope.cities.unshift(city);
                    scope.data.name = "";
                };

                scope.deleteCity = function (id) {

                    CityService.deleteCity(id);

                    scope.cities = scope.cities.filter(function(jsonObject) {
                        return jsonObject.id != id;
                    });
                    scope.$apply();

                }

                scope.pageChangeHandler = function(num) {
                    //console.log('page changed to ' + num);
                };
            }
        }
    }]);