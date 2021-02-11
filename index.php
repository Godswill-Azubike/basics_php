<?php

$users = [
    [
        'name' => "john deo",
        'gender' => "Male",
        'age' => "67"
    ],
    [
        'name' => "peter oke",
        'gender' => "Male",
        'age' => "50"
    ],
    [
        'name' => "kate john",
        'gender' => "Female",
        'age' => "20"
    ],

    [
        'name' => "Godswill Azubike",
        'gender' => "Male",
        'age' => "27"
    ]

];
function details($name,  $gender, $age)
{

    $full_name = $name;
    $gender = $gender;
    $age = $age;

    // echo $full_name;

    echo $output = "<p>User name :  {$full_name}</p>

    <P>User Gender : {$gender}</P>

    <p>User Ages : {$age}</p>";
}

?>


<?php

$num_1 = 4;

$num_2 = 6;

function Add_numbers($n_1, $num_2)
{


    $sum = $n_1 + $num_2;

    return $sum;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>functions</title>
</head>

<body>
    <h1>Add number function call </h1>

    <?php

    $first_sum = Add_numbers($num_1, $num_2);

    echo $first_sum;

    echo "<br>";
    $second_sum = Add_numbers(9, Add_numbers($num_1, $num_2));

    echo $second_sum;
    ?>

    <h1>Users Registration Details</h1>

    <?php

    foreach ($users as $key => $user) {

        details($user['name'], $user['gender'], $user['age']);

        echo "<hr>";
    }

    // print_r($users);

    ?>


</body>

</html>