<?php


class Dynamic {



}

$file = array (
	'1' => 'playground/',
	'2' => 'fundamentals/',
	'3' => 'project/',
	'4' => 'database/',
	'5' => 'user/',
	'6' => 'session/'
	);

$fundamentals = array (
	'1' => 'class_definition.php',
	'2' => 'class_methods.php',
	'3' => 'class_instances.php',
	'4' => 'class_inheritance.php',
	'5' => 'class_inheritance.php',
	'6' => 'class_access.php',
	'7' => 'static_modifier.php',
	'8' => 'setters_getters.php',
	'9' => 'static_reference.php',
	'10' => 'constructor_destructor.php'
	);

$filename = 'localhost/oop/';

if (file_exists($filename)) {
    echo "$filename was last modified: " . date ("F d Y H:i:s.", filemtime($filename));
} else {
	echo 'Hello, friends!';
}

echo "</br>";

echo $filename;

echo "</br>";

echo "$filename was last modified: " . date ("F d Y H:i:s.", filemtime($filename));



?>