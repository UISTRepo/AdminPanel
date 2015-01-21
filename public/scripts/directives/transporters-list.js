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
    .directive('transportersList', ['TransporterService', '$sanitize',
        function(TransporterService, $sanitize){
        return {
            restrict: 'E',
            scope: {},
            templateUrl: 'views/transporter/transporters.html',
            link: function(scope, element, attrs) {

                scope.visible = false;
                scope.currentPage = 1;
                scope.pageSize = 10;

                scope.query = "";

                TransporterService.getTransporters().then(function (data) {
                    scope.transporters = data;
                });

                scope.newTransporter = function(){

                    var transporter = {
                        'name' : $sanitize(scope.data.name),
                        'phone' : $sanitize(scope.data.phone)
                    };
                    TransporterService.addTransporter(transporter).then(function(data){
                        transporter.id = data;
                    });
                    scope.transporters.unshift(transporter);
                    scope.data.name = "";
                    scope.data.phone = "";
                };

                scope.deleteTransporter = function (id) {

                    TransporterService.deleteTransporter(id);

                    scope.transporters = scope.transporters.filter(function(jsonObject) {
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