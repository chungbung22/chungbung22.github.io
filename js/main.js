// If you use jslint, the following line prevents use strict from throwing an error.
/*jslint node: true */
"use strict";

var gauge = require("./modules/gauge.js");

/*
Initializes elements, starts draw cycle
*/
function init() {
	// Settings to provide to element
	var exampleSettings = {
		size: 300,
		clipWidth: 300,
		clipHeight: 200,
		ringWidth: 40,
		maxValue: 100,
		transitionMs: 400,
	};

	// ID of div to add element to
	var targetID = '#power-gauge';
	var powerGauge = gauge(targetID, exampleSettings);
	powerGauge.render();
	
	var powerData = 0;
	setInterval(function(){
		// Different ways to generate data
		powerData = (powerData + 0.5) % 100;  // count from 1 to 100
		powerGauge.update(100 - powerData);
	}, 100);

/*
When window loads run init
*/
window.onload = function() {
	init();
};
