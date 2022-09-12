<?php
/*--------- PHP Data Types ---------*/
/*
- String         Series of characters surrounded by quotes
- Integer        Whole Numbers
- Float          Decimal numbers
- Boolean        True or False
- Array          Special Variables, which can hold more than one
 value
- Object         A class
- Null           Empty variable
- Resource       Special variable that holds a Variable
*/

/*--------- Variable Rules ---------*/
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore
 character
- Variables can't start with a number
- Variables can only contain alpha-numeric characters and
underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two
different variables)
*/
$name = 'Brad'; // String
$age = 40; // Int
$have_he = false; // Boolean
$cash_on_me = 99.99;  //Float

// var_dump($cash_on_me);

//echo $name. ' is ' .$age.  ' years old and has '  .$cash_on_me. ' to his name ';
//echo "$name is $age years old and has $cash_on_me to his name ";
$x = '5'+'5';
//var_dump($x);
//echo 10-5;
//echo 5*6;
//echo 10/2;
//echo 10%3;

define('HOST','localhost');
define('DB_NAME', 'dev_db');

echo HOST;