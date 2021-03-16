<?php
echo "<h1>Array exercises</h1>";

$countries = array( 'Belgium', 'France' , 'Germany', 'Netherlands', 'Ukraine' ); 
echo $countries[2];
echo "<br>";

$family = array("Luis", "Marcela", "Marcelo", "Constanza", "Estefanía", "Vicente");
print_r($family);
echo "<br>";

$recipes = array("Recipe1", "Recipe2", "Recipe3");
print_r($recipes);
echo "<br>";

$films = array("Film1", "Film2", "Film3");
print_r($films[0]);
echo "<br>";

echo '<pre>';
print_r($countries);
echo '</pre>';

var_dump($countries);
echo "<br>";

$me = array(
    "firstname" => "Marcelo",
    "lastname" => "Romero",
    "season" => "spring",
    "soccer" => true
);

echo '<pre>';
print_r($me);
echo '</pre>';

$me["hobbies"] = array("soccer", "music", "films");
$father = array(
    "firstname" => "Luis",
    "lastname" => "Romero",
    "season" => "summer",
    "soccer" => true
);
$father["hobbies"] = array("tennis", "travel", "films");
echo '<pre>';
print_r($me);
echo '</pre>';
echo '<pre>';
print_r($father);
echo '</pre>';

$me["father"] = $father;
echo '<pre>';
print_r($me);
echo '</pre>';

$fatherhobbies = count($father["hobbies"]);
$myhobbies = count($me["hobbies"]);
echo "Your father has $fatherhobbies hobbies and you have $myhobbies hobbies. Together you have "  . ($fatherhobbies+$myhobbies) . " hobbies.";

array_push($me["hobbies"], "taxidermy");
$me["hobbies"][] = "chess";
echo '<pre>';
print_r($me);
echo '</pre>';

$me["lastname"] = "Romero-Cors";
echo '<pre>';
print_r($me);
echo '</pre>';

$soulmate = array(
    "firstname" => "Soul",
    "lastname" => "Mate",
    "season" => "spring",
    "soccer" => true
);
$soulmate["hobbies"] = array("videogames", "music", "films", "books", "yoga");
echo '<pre>';
print_r($soulmate);
echo '</pre>';

$possible_hobbies_via_intersection = array_intersect($me["hobbies"], $soulmate["hobbies"]);
$possible_hobbies_via_merge = array_merge($me["hobbies"], $soulmate["hobbies"]);

echo '<pre>';
print_r($possible_hobbies_via_intersection);
print_r($possible_hobbies_via_merge);
echo '</pre>';

$web_development["frontend"] = [];
$web_development["backend"] = [];
echo '<pre>';
print_r($web_development);
echo '</pre>';

// Then, add a line underneath that pushes 'xhtml' in the right array.
array_push($web_development["frontend"], "XHTML");
// Then, add a line underneath that pushes 'Ruby on Rails' in the right array.
array_push($web_development["backend"], "RoR");
// Then, add a line underneath that pushes 'CSS' in the right array.
array_push($web_development["frontend"], "CSS");
// Then, add a line underneath that pushes 'Flash' in the right array.
array_push($web_development["frontend"], "Flash");
// Then, add a line underneath that pushes 'JavaScript' in the right array.
array_push($web_development["frontend"], "JS");
echo '<pre>';
print_r($web_development);
echo '</pre>';

// Then, add a line underneath that replace 'xhtml' by 'html'.
$web_development["frontend"][0] = "HTML";
// Then, add a line underneath that removes 'Flash' from the array.
unset($web_development["frontend"][2]);
$web_development["frontend"] = array_values($web_development["frontend"]); 
echo '<pre>';
print_r($web_development);
echo '</pre>';

?>