<?
/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

//echo "Hello World";
//echo "<br>";
//echo 123;

//print - similar to echo, but a bit slower

//echo '<h1>Hello</h1>';
$fname = 'Mark'; //String can single or double quotes 
$age = 30; //interger
$haskids = False; // Boolean
$cashonhand = 10; // float

// echo "$fname is $age years old;
// echo $haskids;
// var_dump($haskids);
// echo $cashOnhand;
// var_dump($cashonHand);

//This will not work
// echo '$fname is sage years old';

//concatenate strings
// echo "$fname is $age years old";
// echo "<br>";
echo $fname - ' is ' , $age . 'years old';
echo nl2br("\n$fname is $age years old");

//Arithmetic Operators
echo " <br>";

echo '5' + '5';
$x = '5' + '5';
echo "<br>";
echo $x;
echo "<br>";
var_dump($x);
echo "<br>";
echo 5+5;

echo"<br>";
echo 10-6;

echo "<br>";
echo 95 * 95;

echo "<br>";
echo 500 / 25;

//Constant - Cannot be Changed 
echo "<br>";
define('HOST', 'localhost');
define('DB_NAME', 'dev_db');
var_dump(HOST);