'use strict';

angular.module('transportApp')
    .controller('MainCtrl', ['$scope','TabService',function ($scope, TabService) {

        TabService.setTab(1);

    }]);