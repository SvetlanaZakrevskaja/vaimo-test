(function() {
    'use strict';

    /**
     * @desc Adds currency sign where you need to.
     * @example <ANY vaimo-currency="CURRENCY"></ANY>
     */
    angular
        .module('Vaimo')
        .directive('vaimoCurrency', vaimoCurrency);

    function vaimoCurrency() {
        return {
            scope: {
                vaimoCurrency: "@"
            },
            link: function($scope, $element) {
                $element.prepend($scope.vaimoCurrency + " ");
            }
        }
    }


    /**
     * @desc Shows element in "data-cart-dropdown-class" on hover on current element. Hide it on mouseleave from element
     * in "data-cart-parent-class". Used only for cart dropdown.
     * @example <ANY data-cart-dropdown data-cart-dropdown-class=".any-class" data-cart-parent-class=".any-class"></ANY>
     */
    angular
        .module('Vaimo')
        .directive('cartDropdown', cartDropdown);

    cartDropdown.$inject = ['$window'];

    function cartDropdown() {
        return {
            scope: {
                cartDropdownClass: "@",
                cartParentClass: "@"
            },
            link: function(scope, $element) {

                var width = window.innerWidth;
                if (width > 940) {
                    $element.on("mouseenter", function() {
                        angular.element(scope.cartDropdownClass).show();
                    });
                    angular.element(scope.cartParentClass).on("mouseleave", function() {
                        angular.element(scope.cartDropdownClass).hide();
                    });
                } else if (width > 767 && width < 940) {
                    $element.on("click", function() {
                        angular.element(scope.cartDropdownClass).toggleClass("active");
                    });
                }

            }
        }
    }

    /**
     * @desc Shows element in "data-dropdown-class" on click on current element.
     * @example <ANY data-dropdown data-dropdown-class=".any-class"></ANY>
     */
    angular
        .module('Vaimo')
        .directive('dropdown', dropdown);

    function dropdown() {
        return {
            scope: {
                dropdownClass: "@"
            },
            link: function($scope, $element) {
                $element.on("click", function() {
                    angular.element($scope.dropdownClass).toggleClass("active");
                });
                window.addEventListener('resize', function(){
                    angular.element($scope.dropdownClass).removeClass("active");
                });

            }
        }
    }

    /**
     * @desc Adds class "line" to price block if the product has special price
     * @example <ANY price-class="VARIABLE"></ANY>
     */
    angular
        .module('Vaimo')
        .directive('priceClass', priceClass);

    function priceClass() {
        return {
            scope: {
                priceClass: "@"
            },
            link: function($scope, $element) {
               if($scope.priceClass){
                   $element.addClass("line");
               }
            }
        }
    }


})();