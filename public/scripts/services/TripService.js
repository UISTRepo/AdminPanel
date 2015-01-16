/**
 * Created by tunte on 1/16/15.
 */
'use strict';

angular.module('transportApp').service('TripService', ['$http',function($http){
    return {

        addNewTrip: function(input){

            return $http.post('api/trip', input).then(function(result) {
                return result.data;
            });

        },

        getTrips: function(input){
            return $http.get('api/trip').then(function (result) {
                return result.data;
            })
        }

    }
}]);