<?php

/* The construct method initializes something while the
destruct method de-initializes something.
*/

class Cars {


	public $wheel_count = 4;

	static $door_count = 4;



/*
Unlike a normal method, using '__construct' will output the
method automatically WITHOUT requiring you to call upon it,
so long as an object of that class exists ($bmw in this case).
*/


function __construct() {

	//echo $this->wheel_count;
	echo self::$door_count++;

	}


/* The '__destruct' method is used a lot less than the 
construct method. */

function __destruct() {

	echo self::$door_count--;

}

function details(){

	echo $this->wheel_count;

	}

}


$bmw = new Cars();

$bmw->details();
/*
A regular method requires you to call upon it. A __construct
method only requires an instance of that class to exist ($bmw).
*/

$mercedes = new Cars();

$mercedes_2 = new Cars();


?>