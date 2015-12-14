define(['app'], function(app) {
    app.controller('indexCtrl',  function ($scope) {
        $scope.birthday = new Date();
        $scope.$watch('birthday', function (oldVal, newVal) {
            console.log("birthday: " + $scope.birthday);
        });
    });
});