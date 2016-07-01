var app = angular.module('hib_angular', ['node', 'nodes']).
config(function($routeProvider) {
    $routeProvider.
    when('/', {controller:CalenderCtrl, templateUrl: Drupal.settings.angularjsApp.basePath + '/ng_node/calender/display'}).
    otherwise({redirectTo:'/'});
});