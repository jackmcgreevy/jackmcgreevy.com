<?php

/*
Setters and getters are used to access information that's
in a private modifier, allowing you more control over
information.
*/

class Cars {


private $door_count = 4;


function get_values(){
	
	echo $this->door_count;

	}

function set_values(){

	$this->door_count = 10;

	}


}

$bmw = new Cars();

/*
The private property, $door_count, can only be accessed
within the class. Echoing it outside of the class would
not work.

However, by using the get_values()
method (which is located within the class), you can call on
the private property.
*/

$bmw->set_values();

$bmw->get_values();

/* 
If you were to JUST call upon the get_values() method, the
browser would return the value, 4, as it is defined.

On the other hand, if you were to call upon the set_values() 
method before the get_values() method, the browser would 
return the value, 10. This is because set_values() redefines
$door_count to 10. 

Since set_values() comes sequentially 
AFTER $door_count is defined, the method changes its value to
10. When get_values() is called, it returns the redefined value
of $door_count.
*/




?>