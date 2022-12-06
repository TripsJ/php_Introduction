<?php
/**
 * Series of exercises on PHP conditional structures.
*/  

// 1.1 Clean your room Exercise 

$room_is_filthy = false;
$possible_states = ["health hazard", "filthy", "dirty", "clean", "immaculate"];
$room_filthiness = $possible_states[1];
if ( $room_filthiness == "health hazard" ){
	echo "<br>Burn it Down";

}else if ($room_filthiness == "filthy"){
	echo "<br> Time to clean up",PHP_EOL;
}
else if ($room_filthiness == "dirty"){
	echo "<br> Take up the dust",PHP_EOL;
}
else if ($room_filthiness == "clean"){
	echo "<br> nice",PHP_EOL;
}
 else {
	echo "<br>Nothing to do, room is neat.",PHP_EOL;
}


// 2. "Different greetings according to time" Exercise
date_default_timezone_set('Europe/Berlin');//set timezone
$now = date('h:m:s',time()); // time() gets time in ms date converts How to get the current time in PHP ? Google is your friend ;-)

// Test the value of $now and display the right message according to the specifications.
// if( condition){
// }
echo ($now );
if ($now < "05:00:00" and $now<"13:00:00"){
	echo "Good Morning";
}else{
	echo "G`Day";
}


?>