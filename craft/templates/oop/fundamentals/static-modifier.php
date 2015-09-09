<?php

/*
The difference between a regular modifier property and
a static property is that a regular property is attached
to an instance; you always need to utilize an instance
to access that property. 

A static modifier property is attached to
the class instead of being attached to the instance.
*/

class Cars {

// property

	static $wheel_count = 4;
	static $door_count = 4;	


// methods

static function car_detail(){

	/*
	With a static function, you do not use the "$this"
	pseudo-variable because you are not using an
	instance. You format the properties the same way
	you would with a static property.
	*/

	echo Cars::$wheel_count;
	echo Cars::$door_count;

	}


}

$bmw = new Cars();

/*
echo $bmw->door_count;
echo $bmw->wheel_count;
*/

// Browser sees these static properties as undefined
// because they're being called with an instance.


echo Cars::$door_count;

/* To call a static property, use the class name
followed by two colons ( : ) and the property name, after
a dollar sign ( $ ). */


Cars::car_detail();

/* To call a static function, use the class name followed
by two colons and the function name WITHOUT a dollar sign.
*/



?>