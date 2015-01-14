/**
 * Created by tunte on 1/14/15.
 */
'use strict';

angular.module('transportApp').service('TabService', ['$http',function($http){
    return {
        setTab: function(id){
            var currentActiveTab = $('#tabs').find('.active');
            currentActiveTab.removeClass();
            $('#ng-tab' + id).addClass('active');
        },

        testFunction: function(){

            var input = {
                'id': 1,
                'name': 'tunte'
            };

            return $http.post('api/destination', input).then(function(result) {
                return result.data;
            });

        }

    }
}]);