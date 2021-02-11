<?php


$user_details = [
    'name' => 'Godswill Azubike',
    'dob' => '1997',
    'gender' => 'male',
    'coupaton' => [
        'developer',
        'ict'
    ]
];

// foreach ($user_details as $user) {
//     echo $user['name'];
// }
// echo ['name'];

echo $user_details['name'];
echo $user_details['coupaton'][0];
