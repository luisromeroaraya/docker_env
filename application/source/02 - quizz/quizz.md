# QUIZZ / PHP

Try to answer these questions. Some might require you to investigate. Here is a great tool for that : [http://phptester.net](http://phptester.net). Use it also to check whether you got it right. 

- PHP code must sit inside specific tags. Which one(s) ?
	- [ ]  `<?php>...</?>`  
	- [ ]  `<script>...</script> ` 
	- [ ] `<&>...</&> ` 
	- [x] `<?php...?>`

- Which of the following variables **do not** have a valid name ?   
	- [x] `myvar`
	- [ ] `$myvar`
	- [ ] `$var5`
	- [ ] `$_myvar`
	- [ ] `$_5var`
	- [ ] `$__élément1`
	- [ ] `$hotel4*`


- In which variable is stored the data sent via an html form using the GET method ? 
 **$_GET**
- When submitting a form using the POST method, the variables values appear in the URL. True or False? **False**
- What is the difference between `$a=$b` and `$a==$b` ? **In the first statement you are assigning a value but in the second you are comparing two values.**
- What character must be at the end of each line of php code ? **The character ";"**
- What will return this line: `echo "Hello" + " World";` ? Why ? **Hello World, because you are concatenating the two strings**
- What is the right syntax :  
	- [ ] `<?php echo Hello World; ?>`  
	- [ ] `<?php echo("Hello world"); ?>`  
	- [x] `<?php echo "Hello World"; ?>`  
	- [ ] `<?php echo 'Hello World'; ?>`  
	- [ ] `<?= "Hello World"; ?>` 
 
- What is the result of this script ? Why ? **not correct, because the statement ($hour == $Hour) is false. (3 == 15) is false.**

```php  
$Hour = 15;
$hour = 3;
echo ($hour == $Hour) ? "yes": "not correct";
```

- What is the correct way to write comments in PHP ?
- [x] `// This is a comment `
- [x] `/* This is a comment */ `  
- [ ] `*/ This is a comment /* `  
- [x] `# This is a comment`  

- What is the result of this script ? Why ? **yes, because the statement ($hour == $hour) is true. (3 == 3) is true.**

```php  
$Hour = 15;
$hour = 3;
echo ($hour == $hour) ? "yes": "not correct";
```

-  What is the name of this type of operator in the following example ? **Ternary operator**

```php  
echo ( $season == 'summer' ) ? "Go to the beach.": "Go skying.";
```
- If the condition in the previous statement is true, where will we go ? **To the beach**

- What is the difference between :  **The first variable is an integer, the second one is a string and the last one is an array**
		- `$a = 10;`  
		- `$a = "10";`  
		- `$a = array(10); `   

	**Tip**: use the `var_dump($a);` function to check each of these expressions.

- What will the following return ? **12**

```php  
$a = 10;  
$b = 2;  
echo $a + $b;  
```

- And this one ?  **20**

```php  
$a = 10;  
$b = 2;  
echo $a * $b;  
```

- And this one ? **8**

```php  
$a = 10;  
$b = 2;  
echo $a - $b;  
```

- And this one ? Why ? **102, because "." is the string operator for concatenating**

```php  
$a = 10;  
$b = 2;  
echo $a . $b;  
```

- What will this script return at 10h23 AM ? **Hello!**

```php  
$hour = date('H');
if ($hour > 17){
	echo "Good evening!";
} elseif ($hour > 13){
	echo "Good afternoon!";
} else{
	echo "Hello!";
}
```

- ... And what will it return at 15h02 AM ? **Good afternoon**
- Assume `$a = 4`. What instruction will return : `4 = four` ? Why ? **Variable-substitution isn't done when using single quotes**

	- [ ] `echo '$a = four';`
	- [ ] `echo '$a = 2+2';`
	- [x] `echo "$a = four";`

- In the case of a form to collect sensitive data, which method will we rather use to send the data :  
- [ ] GET
- [ ] mailto
- [x] POST

 -----=== End of the quizz ===-----

![Giphy](http://media0.giphy.com/media/ByJey854EnFZe/giphy.gif)