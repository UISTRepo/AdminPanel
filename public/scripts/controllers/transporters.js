/**
 * Created by tunte on 1/14/15.
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
    .controller('TransportersCtrl', ['$scope','TabService',function ($scope, TabService) {
        TabService.setTab(2);
    }]);