<?php
$first_name = "Marcelo";
$years = 40;
$eyes = "green";
$family = array(
    0 => "Luis",
    1 => "Marcela",
    2 => "Marcelo",
    3 => "Constanza",
    4 => "Estefanía",
    5 => "Vicente"
);
$am_i_hungry = true;

echo "<p>Hi! My name is $first_name.</p>";
echo "<p>I am $years years old.</p>";
echo "<p>My eyes are $eyes.</p>";
echo "<p>The first person in my family is $family[0].</p>";
if ($am_i_hungry) echo "<p>I am hungry.</p>";


?>
