<?php
/* ---- Conditionals & Operators ---- */
/* ------------ Operators ----------- */
/*
< Less than
> Greater than
<= Less than or equal to
>= Greater than or equal to
== Equal to
=== Identical to
!= Not equal to
!== Not identical to
*/

/* ---------- If & If-Else Statements --------- */
/*** If Statement Syntax
 * if (condition) {
 * //  code to be executed if condition is true
 * }
* */
//age = 20, lets check if he is old enough to vote(18)
// $age = 20;
// if ($age >= 18) {
//     echo 'You are old enough to vote!';
//  } else {  
//        echo 'Sorry, you are not eligible to vote!';
//  }

//1-12: morning; 13-17 afternoon; 18 evening
// $t = 18;
// echo $t;

// if ($t <= 12) {
//     echo 'Have a great morning!';
// } elseif ($t <= 17){
//     echo 'Have a great afternoon';
// }else{
//     echo 'Have a great evening';
// }

$posts = [ ];

// if(!empty($posts)){
//     echo 123;
// }else {
//     echo 'There are no posts';
// }

// Ternary Operator

/* The ternary operator is a shorthand if statement 
 Ternary Syntax:
    condition ? true : false;
*/

// $firstPost = !empty($posts) ? $post[0] : 'No post';
// echo $firstPost;

//Switch Statements
$favcolor = 'red';

switch ($favcolor) {
    case 'red':
        echo 'Your favorite color is  red!';
        break;
    case  'green':
        echo 'Your favorite color is  green!';
    case 'blue':
        break;  
    case 'blue':
        echo 'Your favorite color is blue!';
        break;
     default:
        echo 'Your favorite colors is neither red ,green nor blue';          
}