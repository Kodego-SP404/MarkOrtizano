<?php
/* -------- Loops & Iteration ------- */
/* ------------ For Loop ------------ */
/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

// for ($x = 1; $x <= 10; $x++) {
//    echo "Number: $x <br>";
// }

/* ------------ While Loop ------------ */
/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  // code to be executed
  //Increment
  }
*/

$x =1;
// while ($x <=10) {
//     echo "Number : $x <br>";
//     $x++;
// }

/* ---------- Do While Loop --------- */
/*
* Do While Loop Syntax
* do {
* // code to be executed
* } while (condition);
* do...while loop will always execute the block of code once, even if the condition is false.
*/

// do {
//     echo "Number: $x <br>";
//     $x++;
// }   While ($x <= 10);

/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/

// $posts = ['First Post', 'Second Post', 'Third Post'];
// for ($x = 0; $x < count($posts); $X++){
//     echo "$posts[$x] <br>";
// }
// echo "<br>";
// foreach($posts as post) {
//     echo "$post <br>";
// }

//Associative Array
$person =[
    'first_name' => 'Mark',
    'last_name' =>  'Ortizano',
    'email' => 'markjosephortizano@gmail.com'
];

//Get Keys
foreach ($person as $key => $val) {
    echo "$key - $val <br>";
}