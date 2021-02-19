<?php
// connnet
require 'conn.php';


function details($name, $email,  $gender, $age, $id)
{

    $full_name = $name;
    $email = $email;
    $gender = $gender;
    $age = $age;

    // echo $full_name;

    echo $output = "<p>User name :  {$full_name}</p>

    <P>User email is : {$email}</P>

    <P>User Gender : {$gender}</P>

    <p>User Ages : {$age}</p>

    <p><a href='singleuser.php'>user_id : {$id}</a></p>";
}

$user_id = $_GET['q'];

$read_sql = "SELECT * FROM user_details WHERE id=$user_id";
$result = $conn->query($read_sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>

<body>



    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-5">
                <?php
                while ($row = $result->fetch_assoc()) {
                ?>
                    <div class="card p-4 mt-3 bg-info">
                        <?php

                        details($row['user_name'], $row['email'], $row['gender'], $row['age'], $row['id']);

                        // details($user_name, $email, $gender, $age);

                        // print_r($result->fetch_assoc());
                        ?>
                    </div>

                <?php
                }
                ?>

            </div>
        </div>
    </div>

</body>

</html>