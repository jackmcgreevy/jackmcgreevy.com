<?php




class forLoops {

	var $wheel_count;

}

$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$i = 0;
$fundamentals = array(
	'localhost/oop/fundamentals/definition.php',
	'localhost/oop/fundamentals/method.php',
	'localhost/oop/fundamentals/instances.php',
	'localhost/oop/fundamentals/instances.php',
	'localhost/oop/fundamentals/inheritance.php',
	'localhost/oop/fundamentals/access.php',
	'localhost/oop/fundamentals/static_modifier.php',
	'localhost/oop/fundamentals/setters_getters.php',
	'localhost/oop/fundamentals/static_reference.php',
	'localhost/oop/fundamentals/constructor_destructor.php'
);

foreach (array_keys($fundamentals) as $index=>$key) {
	if ($key){
		if ($i != 10) {
			$i++;
		}	
	}

$link = $fundamentals[$i];
echo $link; 




 

/*function getPage($fundamentals) {

	if(is_array($fundamentals)) {

		foreach (array_keys($fundamentals) as $index=>$key) {

			if ($key){

				if ($i != 10) {

					$i++;

				}	

				echo "Good.";

			}

			$link = $fundamentals[$i];

			echo $link . '<br>';

		}

	}

}*/



 

/*function getPage($fundamentals) {

	if(is_array($fundamentals)) {

		foreach (array_keys($fundamentals) as $index=>$key) {

			if ($key){

				if ($i != 10) {

					$i++;

				}	

				echo "Good.";

			}

			$link = $fundamentals[$i];

			echo $link . '<br>';

		}

	}

}*/

	/*foreach (array_keys($fundamentals) as $index=>$key) {

	if ($key){
		$i++;
	}

	$link = $fundamentals[$i];

	echo $link . '<br>';

}*/


/*

	// 1

	foreach (array_keys($fundamentals) as $index=>$key) {

		$link = $actual_link . $fundamentals[$key];
		echo $link;
		echo '<br>';

	}


	// 2

	function getIndex() {

		foreach ($fundamentals as $key) {
			if ($i === 0) {
				// first index
			}
			// curent index is $i
			$i++;
			echo $i;
		}

		return $actual_link;
	}

	// 3

	class Items {

		function getPage() {

			foreach ($fundamentals as $key) {
				if ($i === 0) {
					// first index
				}
				// curent index is $i
				$i++;
			}

			return $actual_link;
		}

	}
	*/

	// Best

	/*
	foreach (array_keys($fundamentals) as $index=>$key) {

	// $link = $actual_link . $fundamentals[$key];
	// echo $index . "&nbsp;" . ":" . "&nbsp;" . $link . '<br>';

	if ($key){
		$i++;
	}

	$link = $fundamentals[$i];

	echo $link . '<br>';

	foreach (array_keys($fundamentals) as $index=>$key) {

		if ($key){

			if ($i != 10) {

				$i++;

			}	

		}

		$link = $fundamentals[$i];

		echo $link . '<br>';

	}
*/




	


function greeting(){



	}


function greeting2(){



	}

}


$the_methods = get_class_methods('Cars');

foreach ($the_methods as $method) {
	
	echo $method . "<br>";
}


/*
Function arguments: an argument/argument list is a 
comma-delimited list of expressions that are listed
in the parentheses after defining a function's name.
*/

function Hello($array){
	if(is_array($array)){
		foreach($array as $names){
			echo "Hello, $names", "</br>";
		}
	}	
	else {
		echo 'Hello, friends!';
	}	
}

$names = array('Jack', 'Steve', 'David');

Hello($names);

/*
Return functions: for storing a functions value and ending a 
function's exectution so that it can be called upon later.

Function's default arguments: defining an arguments value within
the confines of the parentheses, removing the need to define the
variable later e.g. $trife.
*/

function hi($dude, $trife = 'trouble'){
	return "Sup $dude, I see you got into some $trife.";
}


$poo = hi('Eric');

echo $poo, "</br>";

function add_up($a, $b){
	return $a + $b;
}

$value = add_up(2, 4);
echo $value, "</br>";

/*
Variable functions: Using a variable's value, in this case a
string to call a function of the same name.
*/

$func = 'add_up';
echo $func(2, 5), "</br>";

/*
Closure (anonymous functions): Closures are anonymous 
functions, which are functions with no name, that are
capable of accessing variables outside of the function 
scope e.g. accessing $pet variable with the 'use' 
keyword.
*/

$pet = 'Stella';

$swag = function() use($pet){
	return "I have a wonderful cat named $pet";
};

echo $swag();

/*
Built in Functions 
*/

echo "</br>";

$string = "Hello, is it me you're looking for?";
echo strlen($string); /* Echoes the value, 35 */

echo "</br>";

$example = substr ("Apple", 2, 2);
echo $example; /* Echoes the value, 'pl'. This is because it
starts from the 2nd value and returns a substring with a length
of 2. Ap"pl"e. */

echo "</br>";


$mystring = 'abc';
$findme   = 'a';
$pos = strpos($mystring, $findme);

// Note our use of ===.  Simply == would not work as expected
// because the position of 'a' was the 0th (first) character.
if ($pos === false) {
    echo "The string '$findme' was not found in the string '$mystring'";
} else {
    echo "The string '$findme' was found in the string '$mystring'";
    echo " and exists at position $pos"; 
}

/*
Array Functions
*/

echo "</br>";

$namess = array(
	'Jack' => 'The Dude',
	'Eric' => 'The Snitch',
	'Hampton' => 'Le Chode'
);

var_dump(array_keys($namess));
/* Echoes: array(3) { [0]=> string(4) "Jack" [1]=> string(4) 
"Eric" [2]=> string(7) "Hampton"}
*/

echo "</br>";

foreach(array_keys($names) as $figgit){
	echo 'Sup'; // Echoes the value, 'SupSupSup'.
}

echo "</br>";

function array_walk_function($value, $key){
	echo "$key is $value", "</br>";
}

array_walk($names, 'array_walk_function');

/* Echoes: "Jack is The Dude *break* Eric is The Snitch 
*break* Hampton is Le Chode *break*" */












?>