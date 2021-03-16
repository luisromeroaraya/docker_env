<?php
echo "<h1>Series of exercises on PHP conditional structures</h1>";

///////////////////////////////////////////////////////
echo "<h2>1.1 Clean your room Exercise</h2>";

$room_is_filthy = true;

if($room_is_filthy){
	echo "<p>Yuk, your room is dirty! Let's clean it up!</p>";
	//cleanup_room();
    echo "<p>[--- CLEANING ROOM ---]</p>";
	echo "<p>Your room is clean now!</p>";
	$room_is_filthy = false;
} else {
	echo "<p>Nothing to do, your room is neat.</p>";
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

if($room_filthiness == $possible_states[0] OR $room_filthiness == $possible_states[1] OR $room_filthiness == $possible_states[2]) {
	echo "Yuk, your room is $room_filthiness! Let's clean it up !";
} else {
	echo "Hey, what a miracle! Your room is $room_filthiness. Nothing to do.";
}

///////////////////////////////////////////////////////
echo "<h2>2. Different greetings according to time</h2>";

$time = date("Gi");
//$time = 359;
//$time = 1059;
//$time = 1459;
//$time = 1859;
//$time = 2259;
echo "$time<br>";

if ($time >= 500 AND $time <= 900) {
	echo "Good morning!";
}
else if ($time >= 901 AND $time <= 1200) {
	echo "Good day!";
}
else if ($time >= 1201 AND $time <= 1600) {
	echo "Good afternoon!";
}
else if ($time >= 1601 AND $time <= 2100) {
	echo "Good evening!";
}
else if ($time >= 2101 OR $time <= 459) {
	echo "Good night!";
}

///////////////////////////////////////////////////////
echo "<h2>3.1 Different greetings according to age</h2>";

echo '<form method="get" action="conditions.php">';
echo '<label for="age">Please type your age: </label>';
echo '<input type="text" name="age"><br>';
echo '<input type="submit" name="submit" value="Greet me now">';
echo '</form>';

if (isset($_GET['age'])) {
	$age = $_GET['age'];

	if ($age <= 12) {
		$agetext = "Hello kiddo!<br>";
	}
	else if ($age > 12 AND $age < 18) {
		$agetext = "Hello teenager!<br>";
	}
	else if ($age >= 18 AND $age < 115) {
		$agetext = "Hello adult!<br>";
	}
	else if ($age >= 115) {
		$agetext = "Wow! Still alive? Are you a robot, like me? Hello, can I hug you?<br>";
	}
	echo "You are $age years old. ";
	echo "$agetext";
}

///////////////////////////////////////////////////////
echo "<h2>3.2 Different greetings according to age and gender</h2>";

echo '<form method="get" action="conditions.php">';
echo '<label for="age">Please type your age: </label>';
echo '<input type="text" name="age"><br>';
echo '<label for="male">Please choose your gender: Male</label>';
echo '<input type="radio" name="gender" value="male">';
echo '<label for="female">Female</label>';
echo '<input type="radio" name="gender" value="female"><br>';
echo '<input type="submit" name="submit" value="Greet me now">';
echo '</form>';

if (isset($_GET['age']) AND isset($_GET['gender'])) {
	$age = $_GET['age'];
	$gender = $_GET['gender'];

	if ($gender == "male") {
		$gendertext = "Mister";
	}
	else if ($gender == "female") {
		$gendertext = "Miss";
	}

	if ($age <= 12) {
		$agetext = "Hello $gendertext kiddo!";
	}
	else if ($age > 12 AND $age < 18) {
		$agetext = "Hello $gendertext teenager!";
	}
	else if ($age >= 18 AND $age < 115) {
		$agetext = "Hello $gendertext adult!";
	}
	else if ($age >= 115) {
		$agetext = "Wow! Still alive? Are you a $gendertext robot, like me? Hello, can I hug you?";
	}

	echo "You are $age years old. ";
	echo "$agetext";
}

///////////////////////////////////////////////////////
echo "<h2>4. Different greetings according to age and gender and mothertongue</h2>";

echo '<form method="get" action="conditions.php">';
echo '<label for="age">Please type your age: </label>';
echo '<input type="text" name="age"><br>';
echo '<label for="male">Please choose your gender: Male</label>';
echo '<input type="radio" name="gender" value="male">';
echo '<label for="female">Female</label>';
echo '<input type="radio" name="gender" value="female"><br>';
echo '<label for="yes">Do you speak English?: Yes</label>';
echo '<input type="radio" name="english" value="yes">';
echo '<label for="no">No</label>';
echo '<input type="radio" name="english" value="no"><br>';
echo '<input type="submit" name="submit" value="Greet me now">';
echo '</form>';

if (isset($_GET['age']) AND isset($_GET['gender']) AND isset($_GET['english'])) {
	$age = $_GET['age'];
	$gender = $_GET['gender'];
	$english = $_GET['english'];

	if ($gender == "male") {
		$gendertext = "Mister";
	}
	else if ($gender == "female") {
		$gendertext = "Miss";
	}

	if ($english == "yes") {
		$englishtext = "Hello";
	}
	else if ($english == "no") {
		$englishtext = "Aloha";
	}

	if ($age <= 12) {
		$agetext = "$englishtext $gendertext kiddo!";
	}
	else if ($age > 12 AND $age < 18) {
		$agetext = "$englishtext $gendertext teenager!";
	}
	else if ($age >= 18 AND $age < 115) {
		$agetext = "$englishtext $gendertext adult!";
	}
	else if ($age >= 115) {
		$agetext = "Wow! Still alive? Are you a $gendertext robot, like me? $englishtext, can I hug you?";
	}

	echo "You are $age years old. ";
	echo "$agetext";
}

///////////////////////////////////////////////////////
echo "<h2>5. The Girl Soccer team</h2>";

echo '<form method="get" action="conditions.php">';
echo '<label for="name">Please type your name: </label>';
echo '<input type="text" name="name"><br>';
echo '<label for="age">Please type your age: </label>';
echo '<input type="text" name="age"><br>';
echo '<label for="male">Please choose your gender: Male</label>';
echo '<input type="radio" name="gender" value="male">';
echo '<label for="female">Female</label>';
echo '<input type="radio" name="gender" value="female"><br>';
echo '<input type="submit" name="submit" value="Submit">';
echo '</form>';

if (isset($_GET['name']) AND isset($_GET['age']) AND isset($_GET['gender'])) {
	$name = $_GET['name']; 
	$age = $_GET['age'];
	$gender = $_GET['gender'];

	if ($gender == "female") {
		$genderok = true;
	}
	else if ($gender == "male") {
		$genderok = false;
	}

	if ($age >= 21 AND $age <=40) {
		$ageok = true;
	}
	else if ($age < 21 OR $age > 40) {
		$ageok = false;
	}

	if ($genderok AND $ageok) {
		echo "Welcome to the team $name!";
	}
	else {
		echo "Sorry $name, you don't fit the criteria.";
	}
}

///////////////////////////////////////////////////////
echo "<h2>5. The Girl Soccer team. Achieve the same, without the ELSE</h2>";

echo '<form method="get" action="conditions.php">';
echo '<label for="name">Please type your name: </label>';
echo '<input type="text" name="name"><br>';
echo '<label for="age">Please type your age: </label>';
echo '<input type="text" name="age"><br>';
echo '<label for="male">Please choose your gender: Male</label>';
echo '<input type="radio" name="gender" value="male">';
echo '<label for="female">Female</label>';
echo '<input type="radio" name="gender" value="female"><br>';
echo '<input type="submit" name="submit" value="Submit">';
echo '</form>';

if (isset($_GET['name']) AND isset($_GET['age']) AND isset($_GET['gender'])) {
	$name = $_GET['name']; 
	$age = $_GET['age'];
	$gender = $_GET['gender'];

	$ageok = false;
	$genderok = false;

	if ($gender == "female") {
		$genderok = true;
	}

	if ($age >= 21 AND $age <=40) {
		$ageok = true;
	}

	if ($genderok AND $ageok) {
		echo "Welcome to the team $name!";
	}
	if (!$genderok OR !$ageok) {
		echo "Sorry $name, you don't fit the criteria.";
	}
}

///////////////////////////////////////////////////////
echo "<h2>7. School sucks!</h2>";

echo '<form method="get" action="conditions.php">';
echo '<label for="grade">Please type the grade (1-20): </label>';
echo '<input type="text" name="grade"><br>';
echo '<input type="submit" name="submit" value="Submit">';
echo '</form>';

if (isset($_GET['grade'])) {
	$grade = $_GET['grade']; 

	if ($grade <= 4) {
		$gradetext = "This work is really bad. What a dumb kid!";
	}
	if ($grade >= 5 AND $grade <= 9) {
		$gradetext = "This is not sufficient. More studying is required.";
	}
	if ($grade == 10 ) {
		$gradetext = "Barely enough!";
	}
	if ($grade == 11 OR $grade == 12 OR $grade == 13 OR $grade == 14) {
		$gradetext = "Not bad!";
	}
	if ($grade == 15 OR $grade == 16 OR $grade == 17 OR $grade == 18) {
		$gradetext = "Bravo, bravissimo!";
	}
	if ($grade == 19 OR $grade == 20) {
		$gradetext = "Too good to be true : confront the cheater!";
	}

	echo "You had a $grade. $gradetext";
}

///////////////////////////////////////////////////////
echo "<h2>8. School sucks! The SWITCH structure</h2>";
echo "<a href='switch-structure.php'>Go to Exercise 8</a>";

///////////////////////////////////////////////////////
echo "<h2>9. Ternary operators</h2>";

echo "This weird term simply refers to a more terse way to write conditions. A bit like a shortcut notation. Its syntax goes like this:<br>";
echo "<code>condition ? value_if_true : value_if_false ;</code>";

///////////////////////////////////////////////////////
echo "<h2>10. Ternary exercises</h2>";
echo "<a href='ternary.php'>Go to Exercise 10</a>";

?>