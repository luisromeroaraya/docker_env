<?php

echo "<h1>PHP Loops</h1>";
echo "<h2>1. Foreach</h2>";
echo "<p>Conjugate the verb 'to code' in the present tense.</p>";
$pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');
foreach ($pronouns as $pronoun) {
    if ($pronoun == "He/She") {
        echo "$pronoun codes <br>";
    }
    else {
        echo "$pronoun code <br>";
    }
}
echo "<p>Create an array containing the firstname of everyone in your startup. Display each firstname using a loop.</p>";
$names = array ("Firstname1", "Firstname2", "Firstname3", "Firstname4", "Firstname5");
foreach ($names as $name) {
    echo "$name<br>";
}

echo "<p>Create an array containing at least 10 countries. Then, generate the html that will render a select box inside an html form</p>";
$countries = array ("AR"=>"Argentina", "BO"=>"Bolivia", "BR"=>"Brasil", "CL"=>"Chile","CO"=>"Colombia", "EC"=>"Ecuador", "GY"=>"Guyana", "GF"=>"Guyana Francesa", "PY"=>"Paraguay", "PE"=>"Peru", "SR"=>"Surinam", "VE"=>"Venezuela");
echo "<select name='countries'>";
echo "<option value=''>Select a Country</option>";
foreach ($countries as $code => $country) {
    echo "<option value='$code'>$country</option>";
}
echo "</select>";

echo "<h2>2. While</h2>";
$i = 1;
while ($i <= 120) {
    echo "$i<br>";
    $i++;
}

echo "<h2>3. For</h2>";
for ($i = 1; $i <= 120; $i++) {
    echo "$i<br>";
}


?>