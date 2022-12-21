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

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

// $age =20;
// if($age>=18){
//     echo 'You can drive';
// } else{
//     echo 'Sorry u cant';
// }
// $t = date('H');
// if($t<12){
//     echo 'Good morning';
// } elseif($t<17){
//     echo 'Good afternoon';
// } else{
//     echo 'Good evening';
// }

// $posts = ['First post'];
// if(!empty($posts)){
//     echo $posts[0];
// } else{
//     echo 'No posts';
// }

/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/

// $first_post =  !empty($posts) ? $posts[0] : 'No posts';
// $first_post =  !empty($posts) ? $posts[0] : null;
// $first_post = $posts[0 ?? null];
// echo $first_post;

$fav_color = 'red';
switch($fav_color){
    case 'red' :
        echo 'red is your fav color';
        break;
    case 'green' :
        echo 'green is your fav color';
        break;
    default :
    echo 'no fav color';        
}