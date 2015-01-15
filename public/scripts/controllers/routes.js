'use strict';

angular.module('transportApp')
    .controller('RoutesCtrl', ['$scope','TabService',function ($scope, TabService) {

        TabService.setTab(3);

    }]);