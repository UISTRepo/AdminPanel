/**
 * Created by tunte on 1/14/15.
 */
'use strict';

angular.module('transportApp').service('TransporterService', ['$http',function($http){
    return {

        addTransporter: function(input){

            return $http.post('api/transporter', input).then(function(result) {
                return result.data;
            });

        },

        getTransporters: function(){
            return $http.get('api/transporter').then(function(result) {
                return result.data;
            });
        },

        deleteTransporter: function (id) {
            return $http.delete('api/transporter/' + id).error(function(data, status) {
                console.log(status);
            });
        }

    }
}]);