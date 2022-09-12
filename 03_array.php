<?php
// Simple Array
$numbers = [1,44,55,22];
$fruits = array ('apple', 'orange', 'pear');

//print_r($fruits);
//echo $fruits[1];
 // Associative Array
 $colors = [
    1 => 'red',
    4 => 'blue',
    6 => 'green',
 ];
 //echo $colors[4];

 $hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f',
 ];
 //echo $hex['blue'];
 
 $people = [
    'first_name' => 'Brad',
    'last_name' =>  'Traversy',
    'email' => 'brad@gmail.com',
 ];

  //echo $people ['first_name'];

  $people=[
    [
        'first_name' => 'Brad',
        'last_name' =>  'Traversy',
        'email' => 'brad@gmail.com',
    ],
    [
        'first_name' => 'John',
        'last_name' =>  'Travolta',
        'email' => 'volta@gmail.com',
    ],
    [
        'first_name' => 'Billy',
        'last_name' =>  'Kid',
        'email' => 'thekid@gmail.com',
    ],
  ];

  //echo $people[1]['email'];

 // var_dump(json_encode($people));