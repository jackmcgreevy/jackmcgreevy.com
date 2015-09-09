<?php


class Cars {

// Properties - Access Control Modifiers
	
	/* Access modifiers are not used for privacy's sake
	but instead to achieve better control of variables
	throughout a document */

/* public property can be used throughout the whole 
program */

	public $wheel_count = 4;

/* private property can be used within the class it's
 defined */	

	private $door_count = 4;

/* protected property is only available inside it's 
class or subclass (extends '...') */

	protected $seat_count = '2';



function car_detail(){

	echo $this->wheel_count;
	echo $this->door_count;
	echo $this->seat_count;

	}


}

$bmw = new Cars();

$bmw->car_detail();



?>