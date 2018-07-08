'use strict';

// TODO: write service if here be more than two requests

var app = angular.module("Vaimo", []);


    app.controller("cartCtrl", function($scope, $http) {

        var lifetime = new Date();
        lifetime.setMinutes(lifetime.getMinutes() + 1);

        $http({
            method: "get",
            url: "cart/get",
            cache: true,
            headers: {
                'Cache-Control': 'private, max-age=600',
                'Expires': lifetime
            }
        })
            .success(function (response) {
                $scope.totalItems = response.totalItems;
                $scope.totalPrice = response.totalPrice;
                $scope.cartItems = response.items;
            })
            .error(function (data, status) {
                console.log(status)
            })

    });


    app.controller('newsletterCtrl', function($scope, $http) {

        $scope.loading = true;

        $scope.formData = {};
        $scope.processForm = function() {

        $http({
            method: 'post',
            url: 'newsletter/subscribe',
            data: $.param($scope.formData),
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
        })
            .success(function(response){
                $scope.newsletterSent = true;
            })
            .error(function(data, status, headers, config){
                if (status == 422) {
                    $scope.newsletterSent = false;
                }
            })
            .finally(function () {
                $scope.loading = false;
            });
        };


    });
