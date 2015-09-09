
<?php

$i = 0;
$a = "<a href='localhost/oop/fundamentals/'>";
$z = "</a>";

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

$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";


foreach (array_keys($fundamentals) as $index=>$key) {
	if ($key){
		if ($i != 10) {
			$i++;
		}	
	}
	$link = $fundamentals[$i];
	echo $link . '<br>';
}


?>