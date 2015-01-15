'use strict';

angular.module('transportApp')
    .controller('MainCtrl', ['$scope','TabService',function ($scope, TabService) {

        var that = this;
        this.theData = null;
        TabService.setTab(1);

        $scope.doSomething = function(){
            TabService.testFunction().then(function(result){
                that.theData = result;
            });
        };

    }]);