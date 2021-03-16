<?php
echo "<a href='ternary.php'>Go back</a>";
echo "<h2>10.2 Ternary exercises UNICORN</h2>";

echo '<form method="get" action="unicorn.php">';
echo '<label for="human">What are you?: Human</label>';
echo '<input type="radio" name="gender" value="human">';
echo '<label for="cat">Cat</label>';
echo '<input type="radio" name="gender" value="cat">';
echo '<label for="unicorn">Unicorn</label>';
echo '<input type="radio" name="gender" value="unicorn"><br>';
echo '<input type="submit" name="submit" value="Submit">';
echo '</form>';

if (isset($_GET['gender'])) {
    $gender = $_GET['gender'];
    $gif = ($gender == "human") ? "https://media.giphy.com/media/4VEAg0IWR7gNa/giphy.gif" : 
        (($gender == "cat") ? "https://media.giphy.com/media/BzyTuYCmvSORqs1ABM/giphy.gif" : "https://media.giphy.com/media/wxZVenBE9msRq/giphy.gif");
    echo "<img src=$gif>";
}
?>