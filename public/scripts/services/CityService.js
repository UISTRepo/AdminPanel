/**
 * Created by tunte on 1/14/15.
 */
'use strict';

angular.module('transportApp').service('CityService', ['$http',function($http){
    return {

        addNew: function(input){

            return $http.post('api/city', input).then(function(result) {
                return result.data;
            });

        },

        getCities: function(){
            return $http.get('api/city').then(function(result) {
                return result.data;
            });
        },

        deleteCity: function (id) {
            return $http.delete('api/city/' + id).error(function(data, status) {
                console.log(status);
            });
        }

    }
}]);