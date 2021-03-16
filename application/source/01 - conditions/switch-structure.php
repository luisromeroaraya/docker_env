<?php
echo "<a href='conditions.php'>Go back</a>";
echo "<h2>8. School sucks! The SWITCH structure</h2>";

echo '<form method="get" action="switch-structure.php">';
echo '<label for="grade">Please type the grade (1-20): </label>';
echo '<input type="text" name="grade"><br>';
echo '<input type="submit" name="submit" value="Submit">';
echo '</form>';

if (isset($_GET['grade'])) {
	$grade = $_GET['grade']; 

    switch ($grade) {
        case 1:
        case 2:
        case 3:    
        case 4:
            $gradetext = "This work is really bad. What a dumb kid!";
            break;
        case 5:
        case 6:
        case 7:
        case 8:
        case 9:
            $gradetext = "This is not sufficient. More studying is required.";
            break;
        case 10:
            $gradetext = "Barely enough!";
            break;
        case 11:
        case 12:
        case 13:
        case 14:
            $gradetext = "Not bad!";
            break;
        case 15:
        case 16:
        case 17:
        case 18:
            $gradetext = "Bravo, bravissimo!";
            break;
        case 19:
        case 20:
            $gradetext = "Too good to be true : confront the cheater!";
            break;
    }
	echo "You had a $grade. $gradetext";
}
?>