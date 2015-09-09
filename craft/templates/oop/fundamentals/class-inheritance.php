<?php

class Cars {

var $wheels = 4;


	function greeting(){

		return "hello";

	}
}

$bmw = new Cars();



class Trucks extends Cars {
	/* 
	The class 'Trucks' extends the class 'Cars',
	allowing the object '$tacoma' to extend the
	variable '$wheels'
	 */
	var $wheels = 10;

	/* 
	If the variable '$wheels' is separately defined
	within the 'Trucks' class, the value of '$wheels'
	will be changed to whatever it is redefined as, 
	which is '10' in this instance.
	 */ 

}

$tacoma = new Trucks();

echo $tacoma->wheels;




?>