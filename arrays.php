<?php
$numbers = [1,2,3];
$fruits = array('apple','pear');
//var_dump($numbers);
//echo $fruits[1];

$colors = [
    1 => 'red',
    4 => 'green'
];
//echo $colors[4];

$hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#f00'
];
//echo $hex['blue'];

$person = [
    'name' => 'Raj',
    'age' => 15
];

$people = [
    [
        'name' => 'Raj',
        'age' => 15
    ],

    [
        'name' => 'Pushkar',
        'age' => 20
    ],

    [
        'name' => 'Anu',
        'age' => 40
    ],
];
//echo $people[0]['age'];

var_dump(json_encode($people));