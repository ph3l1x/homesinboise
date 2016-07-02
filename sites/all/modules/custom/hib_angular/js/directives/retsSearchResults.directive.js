function retsSearchResultsDirective(retsAPI) {
    return {
        restrict: 'A',
        templateUrl: '/sites/all/modules/custom/hib_angular/themes/search_results.html',
        replace: false,
        link: function(scope, element) {

            scope.listingID = 'yyyyy';
            
            scope.retsFormChange = function() {
                console.log("SCOPE.FORM: ", scope.form);
                retsAPI
                    .get(scope.form)
                    .then(function(result) {
                        scope.results = result;
                        console.log("RESULTS: ", result);
                    })
            }
        }

        // scope: {}
        // controller: function($scope) {
        //
        //     console.log($scope);
        //     $scope.retsFormChange = function() {
        //         retsAPI
        //             .get($scope.form)
        //             .then(function(result) {
        //                 $scope.results = result;
        //                 console.log("Result: ", result);
        //             })
        //     }
        // }
    //    controller: RetsSearchCtrl,
    //     link: function(scope, element, attr) {
    //
    //         console.log("Search Results Link: ", scope);
    //     }
    }
}