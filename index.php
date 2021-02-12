<?php

$user_name = $_POST['user_name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$age = $_POST['age'];



function details($name, $email,  $gender, $age)
{

    $full_name = $name;
    $email = $email;
    $gender = $gender;
    $age = $age;

    // echo $full_name;

    echo $output = "<p>User name :  {$full_name}</p>

    <P>User email is : {$email}</P>

    <P>User Gender : {$gender}</P>

    <p>User Ages : {$age}</p>";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form Request</title>


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card p-4">
                    <h1 class="text-success">User Details form</h1>
                    <form action="index.php" method="post">
                        <label for="">User Name</label>
                        <input type="text" name="user_name" class="form-control">
                        <br>

                        <label for="">Email</label>
                        <input type="text" name="email" class="form-control">
                        <br>

                        <label for="">Age</label>
                        <input type="text" name="age" class="form-control">
                        <br>

                        <label for="">User Gender</label>
                        <input type="text" name="gender" class="form-control">
                        <br>

                        <button type="submit" class="btn btn-outline-success">save info</button>
                    </form>
                </div>
            </div>

            <div class="col-md-5">
                <div class="card">
                    <?php
                    details($user_name, $email, $gender, $age);
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>