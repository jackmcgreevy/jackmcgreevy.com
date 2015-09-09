<?php


class Cars {


	static $wheel_count = 4;	



/* The static method, car_detail(), returns the value of the 
static property, $wheel_count. */

static function car_detail(){


/* The 'self' keyword is the same as using the '$this' pseudo-
property in order to reference a property within the confines
of the class it resides in. */

	return self::$wheel_count;

	}

}

class Trucks extends Cars {

	static function display() {

		/* The 'parent' keyword references the class that 
		the current class is extending. It can be used to 
		call upon a parent class's methods or properties. */

		echo parent::car_detail();

	}

}

Trucks::display();




?>