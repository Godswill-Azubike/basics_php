<?php

// $number = 345;

// echo $number;

// echo '<br>';

// $numberlist = array(1, 3, 465, 'name', true, "this is an array");

// echo $numberlist[3];
// echo $numberlist[4];
// echo '<br>';
// echo $numberlist[5];

// $numberlist = [
//     2, 58, 585, 'true'
// ];

// print_r($numberlist);

// associative array

// $user_datails = array(
//     'first_name' => "Godswill",
//     'last_name' => "Azubike",
//     'age' => 19
// );

// echo $user_datails['first_name'];
// echo '<br>';

// echo $user_datails['age'];
// print_r($user_datails);

echo '<hr>';

// multidimessional array

$numberlist = [

    'number0' => 'one',

    'number1' => 'two',

    'number2' => [
        'multi-one',
        'multi-two'
    ],

    'number3' => [
        'multi-one',
        'multi-two',
        'multi-three' => [
            'multi-two.1',
            'multi-two.2'
        ]
    ],

    'number4' => array(
        'multi-one',
        'multi-two'
    )
];

echo $numberlist['number0'];
echo '<br>';
echo $numberlist['number3'][1];
echo '<br>';

echo $numberlist['number3']['multi-three'][1];
