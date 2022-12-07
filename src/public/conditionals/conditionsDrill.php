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
	echo "<br>Nothing to do, room is neat.<br>",PHP_EOL;
}


// 2. "Different greetings according to time" Exercise
date_default_timezone_set('Europe/Berlin');//set timezone
$now = date('H'); //date('h:m:s',time()); // time() gets time in ms date converts How to get the current time in PHP ? Google is your friend ;-)

// Test the value of $now and display the right message according to the specifications.
// if( condition){
// }
echo ($now);
if( $now > 21 and $now < 5)
{
	echo "Good night";
}
else if ($now < 9)
{
	echo "Good Morning";
}
else if ($now < 12)
{
	echo "Good Day";
}
else if ($now < 16)
{
	echo "Good afternoon";
}
else if ($now < 21)
{
	echo "Good evening";
}
// aparently doing if{return} is more usable than if else if

// 3. "Different greetings according to age" Exercise
if (isset($_GET['age'])){
	// Form processing
	// TODO Gender Input
	$age =(int)$_GET['age'];
	echo gettype($age);
	echo $age;

	switch($age){
	
		case ($age <= 12):
			$greet = "Hello kiddo";
			break;
		case ($age <= 18):
			$greet = "Hello Teenager";
			break;
		case ($age <= 115):
				$greet = "Hello Adult";
				break;
		default: $greet = "Wow still alive";

	}
}


?>
<form method="get" action="conditionsDrill.php">
	<label for="age">...</label>
	<input type="number" name="age">
	<input type= "radio" name="gender" value="M">
	<input type= "radio" name="gender" value="F">
	<input type="submit" name="submit" value="Greet me now">
</form>
<p><?php echo $greet?></p>


