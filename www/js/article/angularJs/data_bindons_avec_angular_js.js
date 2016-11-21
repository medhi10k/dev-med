var app = angular.module('experimentation', []);


app.controller('ctrl-timer', function($scope, $interval) {
    $scope.timerClock = new Date().toLocaleTimeString();
    $interval(function () {
        $scope.timerClock = new Date().toLocaleTimeString();
    }, 1000);
});

app.controller('ctrl-listing', ['$scope', 'orderByFilter', function($scope, orderBy) {
    $scope.frameworks = [
        {name:'Symfony',language:'Php'},
        {name:'Hibernate',language:'Java'},
        {name:'Django',language:'Python'},
        {name:'Pyramid',language:'Python'},
        {name:'Hibernate',language:'Java'},
        {name:'Laravel',language:'Php'},
    ];

   $scope.reverse = false;

   $scope.orderByCustom = function(propertyName) {
    $scope.reverse = (propertyName !== null) ? !$scope.reverse : false;
    $scope.frameworks = orderBy($scope.frameworks, propertyName, $scope.reverse);
   };
}]);

app.controller('ctrl-game', function($scope, $interval) {

	var pointByBubble = 10;
	var intervalMilisecondBubble = 1000;

	$scope.score = 0;
	$scope.bubbles = [];
	$scope.bubbles.push(createBubble());

	 $scope.removeItem = function(index){
	    var bubbleRemoved = $scope.bubbles.splice(index, 1);
	    console.log(bubbleRemoved);
	    $scope.score += pointByBubble;
	  }

    var intervalBubble = $interval(function () {
    	var newItem = {size:'small',color:'blue'};
    	$scope.bubbles.push(createBubble());
    }, intervalMilisecondBubble);
});

function createBubble() {
	var left = Math.floor((Math.random() * 400) + 50);
	if(luck(30) === true) {
		var classBubble = 'yellow kill';
	} else {
		var classBubble = 'green normal';
	}

	if(luck(3) === true) {
		var classBubble = 'blue more';
	} else if(luck(1) === true) {
		var classBubble = 'red zero';
	}

	return {leftNumber:left,class:classBubble};
}

function luck(number) {
	var luck = Math.floor((Math.random() * 100));

	if(luck <= number) {
		return true;
	} else {
		return false;
	}
}