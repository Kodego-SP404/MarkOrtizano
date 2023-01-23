<?php
/* ------------ Arrays ------------*/

/* Array hold multiple values. Each value in an array is called "element" */

//Simple array of numbers
$numbers = [1,2,3,4,5];

// echo $ number[0];
// var_dump($numbers);
// echo $fruits[1];
echo $numbers[2] + $numbers[3];

//Associate Arrays
/*
  Associate arrays allows us to use named keys to identify values 
  */

 // $colors = [
 //   1 => 'red',
 //   2 => 'green',
 //   3 => 'blue',
 //   4 => 'yellow',
 // ];

 // echo $colors[3];


 // Strings as keys
 $hex = [
    'red' => '#f00',
    'green' => '#0f0',
    'blue' => '#00f',
 ];

 // echo $hex['red'];
 // var_dump($hex);

// multi-dimensional arrays are often used to store data in table format.

// Single Person
$person =[
    'first_name' => 'Mark',
    'last_name' =>  'Ortizano',
    'email' => 'markjosephortizano@gmail.com'
];

echo $person['first_name'];

//multidimensional array
$people = [
    [
        'first_name' => 'Mark',
        'last_name' =>  'Ortizano',
        'email' => 'markjosephortizano@gmail.com'  
    ],
    [
        'first_name' => 'Mark',
        'last_name' =>  'Ortizano',
        'email' => 'markjosephortizano@gmail.com'
    ],
    [
        'first_name' => 'Mark',
        'last_name' =>  'Ortizano',
        'email' => 'markjosephortizano@gmail.com'
    ],
];
echo $people[2]['last_name'];

//Encode to JSON
var_dump(json_encode($people));

//Decode to JSON
$jsonon = '{"first_name":"Mark",
"last_name":"Ortizano",
" email":" markjosephortizano@gmail.com " }';  
var_dump(json_decode($jsonobj));