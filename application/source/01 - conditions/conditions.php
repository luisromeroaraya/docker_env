<?php
echo "<h1>Series of exercises on PHP conditional structures.</h1>";

///////////////////////////////////////////////////////
echo "<h2>1.1 Clean your room Exercise</h2>";

$room_is_filthy = true;

if($room_is_filthy){
	echo "<p>Yuk, your room is dirty! Let's clean it up!</p><br>";
	//cleanup_room();
    echo "<p>[--- CLEANING ROOM ---]</p><br>";
	echo "<p>Your room is clean now!</p><br>";
	$room_is_filthy = false;
} else {
	echo "<p>Nothing to do, your room is neat.</p><br>";
}

///////////////////////////////////////////////////////
echo "<h2>1.2 Clean your room Exercise, improved</h2>";
// Create the array of possible states
$possible_states = array(
    0 => "a health hazard",
    1 => "filthy",
    2 => "dirty",
    3 => "clean",
    4 => "immaculate"
);

// When testing, change the index value to navigate to the possible array values
$random = rand(0,4);
$room_filthiness = $possible_states[$random];

if($room_filthiness == "health hazard" OR $room_filthiness == "filthy" OR $room_filthiness == "dirty") {
	echo "Yuk, your room is $room_filthiness! Let's clean it up !";
} else {
	echo "Hey, what a miracle, your room is $room_filthiness. Nothing to do.";
}

?>