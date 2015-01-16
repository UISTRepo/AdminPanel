'use strict';

angular.module('transportApp')
    .controller('TripsCtrl', ['$scope','TabService','TripService','CityService','TransporterService',
        function ($scope, TabService, TripService, CityService, TransporterService) {

            TabService.setTab(3);

            $scope.visible = false;
            $scope.currentPage = 1;
            $scope.pageSize = 5;

            CityService.getCities().then(function (data) {
                $scope.cities = data;
            });

            TransporterService.getTransporters().then(function (data) {
                $scope.transporters = data;
            });

            TripService.getTrips().then(function(data){
                $scope.trips = data;
            });

            $scope.newTrip = function(){

                var input = {};

                input.city_id = $scope.cityId;
                input.transporter_id = $scope.transporterId;
                input.time = $scope.time;
                input.price = $scope.price;
                input.seats = $scope.seats;

                TripService.addNewTrip(input).then(function (data) {
                    input.id = data.id;
                    input.city = {};
                    input.transporter = {};
                    input.city.name = data.city.name;
                    input.transporter.name = data.transporter.name;

                    $scope.trips.unshift(input);

                    $scope.cityId = "";
                    $scope.transporterId = "";
                    $scope.time = "";
                    $scope.price = "";
                    $scope.seats = "";
                });
            };

            $scope.deleteTrip = function(id){

                TripService.deleteTrip(id);

                $scope.trips = $scope.trips.filter(function(jsonObject) {
                    return jsonObject.id != id;
                });
                $scope.$apply();
            }

        }]);