<?php
echo "<h1>Functions</h1>";

echo "<h2>Example: transform a string</h2>";
echo "<p>According to a researcher at Cambridge University, it doesn't matter in what order the letters in a word are, the only important thing is that the first and last letter be at the right place. The rest can be a total mess and you can still read it without problem. This is because the human mind does not read every letter by itself but the word as a whole.</p>";
$text = "According to a researcher at Cambridge University, it doesn't matter in what order the letters in a word are, the only important thing is that the first and last letter be at the right place. The rest can be a total mess and you can still read it without problem. This is because the human mind does not read every letter by itself but the word as a whole.";
$textArray = explode(" ", $text);
foreach ($textArray as $word) {
    $wordArray = explode(",", $word);
    if (count($wordArray) > 1) {
        $wordArray[0] = str_split($wordArray[0]);
        $l = count($wordArray[0]) - 1;
        if ($l == 0) {
            $word = $word;
        }
        else {
            $first = ($wordArray[0][0]);
            $last = ($wordArray[0][$l]);
            array_shift($wordArray[0]);
            array_pop($wordArray[0]);
            $wordArray[0] = implode("", $wordArray[0]);
            $word = $first . str_shuffle($wordArray[0]) . $last . ",";
        }
    }
    else {
        $wordArray = explode(".", $word);
        if (count($wordArray) > 1) {
            $wordArray[0] = str_split($wordArray[0]);
            $l = count($wordArray[0]) - 1;
            if ($l == 0) {
                $word = $word;
            }
            else {
                $first = ($wordArray[0][0]);
                $last = ($wordArray[0][$l]);
                array_shift($wordArray[0]);
                array_pop($wordArray[0]);
                $wordArray[0] = implode("", $wordArray[0]);
                $word = $first . str_shuffle($wordArray[0]) . $last . ".";
            }
        }
        else {
            $wordArray[0] = str_split($wordArray[0]);
            $l = count($wordArray[0]) - 1;
            if ($l == 0) {
                $word = $word;
            }
            else {
                $first = ($wordArray[0][0]);
                $last = ($wordArray[0][$l]);
                array_shift($wordArray[0]);
                array_pop($wordArray[0]);
                $wordArray[0] = implode("", $wordArray[0]);
                $word = $first . str_shuffle($wordArray[0]) . $last;
            }
        }
    }
    echo " $word";
}

//////////////////////////////////////////////////////////////////
echo "<h2>Use a function that capitalizes the first letter of the provided argument. (Example: 'émile' should return 'Émile')</h2>";

echo "<form method='get' action='functions.php'>";
echo "<label for='name'>Name:</label>";
echo "<input type='text' name='name'>";
echo "<input type='submit' value='Submit'>";
echo "</form>";

function up($string) {
    $first = substr($string, 0, 1);
    $rest = substr($string, 1);
    $first = strtoupper($first);
    return $first . $rest;
}

if (isset($_GET['name'])) {
    $name = $_GET['name'];    
    echo up($name);
    echo "<br>";
    echo ucfirst($name);
}


//////////////////////////////////////////////////////////////////
echo "<h2>Use the native function allowing you to display the current year.</h2>";
echo date("Y");
echo "<h2>Now display the date, time, minutes and seconds, using the same function, by playing with the arguments.</h2>";
echo date("Y/m/d G:i:s");

//////////////////////////////////////////////////////////////////
echo "<h2>Create a 'Sum' function that takes 2 numbers and returns their sum.</h2>";
echo "<p>(Improve that function so that it checks whether the argument is indeed a Number. If not, it should display : 'Error: argument is not a number.')</p>";


echo "<form method='get' action='functions.php'>";
echo "<label for='number1'>Number 1:</label>";
echo "<input type='text' name='number1'>";
echo "<label for='number2'>Number 2:</label>";
echo "<input type='text' name='number2'>";
echo "<input type='submit' value='Submit'>";
echo "</form>";

function sum($number1, $number2) {
    if (is_numeric($number1) AND is_numeric($number2)) {
        return $number1 + $number2;
    }
    else {
        return "Error: argument is not a number.";
    }
}

if (isset($_GET['number1']) AND isset($_GET['number2'])) {
    $number1 = $_GET['number1'];
    $number2 = $_GET['number2'];
    $total = sum($number1, $number2);
    echo "Total = $total";
}

//////////////////////////////////////////////////////////////////
echo "<h2>Create a function that takes as argument a string of characters and returns an acronym made of the initials of each word.</h2>";
echo "<p>Example: 'In code we trust!' should return: ICWT).</p>";

echo "<form method='get' action='functions.php'>";
echo "<label for='phrase'>Insert a phrase:</label>";
echo "<input type='text' name='phrase'>";
echo "<input type='submit' value='Submit'>";
echo "</form>";

function acronym($string) {
    $array = explode(" ", $string);
    foreach($array as $word) {
        $first = substr($word, 0, 1);
        echo strtoupper($first);
    }
}

if (isset($_GET['phrase'])) {
    $phrase = $_GET['phrase'];
    echo "Original phrase: $phrase<br>";
    echo "Acronym: ";
    acronym($phrase);
}

//////////////////////////////////////////////////////////////////
echo "<h2>Create a function that replaces the letters 'a' and 'e' with 'æ'.</h2>";
echo "<p>Example: 'caecotrophie', 'chaenichthys','microsphaera', 'sphaerotheca' should respectively return 'cæcotrophie', 'chænichthys','microsphæra', 'sphærotheca'.</p>";

echo "<form method='get' action='functions.php'>";
echo "<label for='aeword'>Insert a word:</label>";
echo "<input type='text' name='aeword'>";
echo "<input type='submit' value='Submit'>";
echo "</form>";

function ae($string) {
    return str_replace("ae", "æ", $string);
}

if (isset($_GET['aeword'])) {
    $aeword = $_GET['aeword'];
    echo "Original word: $aeword<br>";
    echo "Fixed word: ";
    echo ae($aeword);
}

//////////////////////////////////////////////////////////////////
echo "<h2>Create the opposite function, which replaces 'æ' by 'ae'.</h2>";
echo "<p>Example: 'cæcotrophie', 'chænichthys','microsphæra', 'sphærotheca' should respectively return 'caecotrophie', 'chaenichthys','microsphaera', 'sphaerotheca'.</p>";

echo "<form method='get' action='functions.php'>";
echo "<label for='æword'>Insert a word:</label>";
echo "<input type='text' name='æword'>";
echo "<input type='submit' value='Submit'>";
echo "</form>";

function æ($string) {
    return str_replace("æ", "ae", $string);
}

if (isset($_GET['æword'])) {
    $æword = $_GET['æword'];
    echo "Original word: $æword<br>";
    echo "Fixed word: ";
    echo æ($æword);
}

//////////////////////////////////////////////////////////////////
echo "<h2>Create a function to return 'notice', 'warning' and 'error' messages to a user,which takes 2 arguments : the 'message', and the 'css class' (values: 'info', 'error', 'warning').</h2>";
echo "<p>(Improve that function by giving the default class the value of 'info')</p>";

function feedback($message, $class = 'info') {
    return "<div class='$class'>Error: $message.</div>";
}

echo feedback("Incorrect email address", "error");
echo feedback("Info test");

//////////////////////////////////////////////////////////////////
echo "<h2>Create a random words generator, that generates 2 words: one whose length is between 1 to 5 letters, the other between 7 and 15 letters.</h2>";

echo "<form method='get' action='functions.php'>";
echo "<input type='submit' name='submit' value='Generate new words'>";
echo "</form>";

function randomWord($minlength, $maxlength) {
    $randomWord = "";
    $vowels = array("a","e","i","o","u");  
    $consonants = array(
        'b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 
        'n', 'p', 'r', 's', 't', 'v', 'w', 'x', 'y', 'z'
    );
    $length = rand($minlength, $maxlength);
    for ($i = 0; $i < $length; $i++) {
        if (($i%2) == 0) {
            $randomWord = $randomWord . $consonants[rand(0,19)];
        }
        else {
            $randomWord = $randomWord . $vowels[rand(0,4)];
        }
    }
    return $randomWord;
}

if (isset($_GET['submit'])) {
    echo randomWord(1,5);
    echo "<br>";
    echo randomWord(7,15);
}

//////////////////////////////////////////////////////////////////
echo "<h2>De-capitalize the string : 'STOP YELLING I CAN'T HEAR MYSELF THINKING!!'</h2>";

$yelling = "STOP YELLING I CAN'T HEAR MYSELF THINKING!!";
function decapitalize($string) {
    return strtolower($string);
}

echo decapitalize($yelling);

//////////////////////////////////////////////////////////////////
echo "<h2>In your new job, you have to maintain the code of a former developer. Make it DRY by creating a custom function calculate_cone_volume</h2>";

// Volume of a cone which ray is 5 and height is 2 
$volume = 5 * 5 * 3.14 * 2 * (1/3);  
echo "The volume of a cone which ray is 5 and height is 2 = " . $volume . " cm<sup>3</sup><br />";  
// Volume of a cone which ray is 3 and height is 4  
$volume = 3 * 3 * 3.14 * 4 * (1/3);  
echo "The volume of a cone which ray is 3 and height is 4 = " . $volume . " cm<sup>3</sup><br />";  

function calculate_cone_volume($ray, $height) {
    $volume = $ray * $ray * 3.14 * $height * (1/3);
    return "The volume of a cone which ray is $ray and height is $height = " . $volume . " cm<sup>3</sup><br />";
}

echo calculate_cone_volume(5,2);
echo calculate_cone_volume(3,4);

?>