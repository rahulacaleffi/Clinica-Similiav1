var app = angular.module('similiaRegs', ["ui.utils.masks", "idf.br-filters"], function($interpolateProvider) {
	$interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>'); 
}).constant('API_URL', 'http://clinicasimilia.com.br/api/v1/');

app.run(["$locale", function ($locale) {
    $locale.NUMBER_FORMATS.GROUP_SEP = ".";
    $locale.NUMBER_FORMATS.DECIMAL_SEP = ",";
    $locale.NUMBER_FORMATS.CURRENCY_SYM = "R$"
}]);