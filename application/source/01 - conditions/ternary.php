<?php
echo "<a href='conditions.php'>Go back</a>";
echo "<h2>10.1 Ternary exercises</h2>";

echo '<form method="get" action="ternary.php">';
echo '<label for="male">Please choose your gender: Male</label>';
echo '<input type="radio" name="gender" value="male">';
echo '<label for="female">Female</label>';
echo '<input type="radio" name="gender" value="female"><br>';
echo '<input type="submit" name="submit" value="Submit">';
echo '</form>';

if (isset($_GET['gender'])) {
    $gender = $_GET['gender'];
    $hello = ($gender == "male") ? "Mister" : "Miss";
    echo "Hello $hello!";
}

echo "<h2>10.2 Ternary exercises</h2>";
echo "<a href='unicorn.php'>Go to Exercise 10.2</a>";
?>