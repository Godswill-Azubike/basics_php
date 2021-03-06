<?php

// connnet
require 'conn.php';

$user_name = "";
$email = "";
$gender = "";
$age = "";

$name_err = "";
$email_err = "";
$gender_err = "";
$age_err = "";

if (isset($_POST['submit'])) {


    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];

    // validating user_name
    if (empty($user_name)) {
        $name_err = "please the user name is required";
    } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $user_name)) {

        $name_err = "special charaters not allowed";
    }

    // validating email
    elseif (empty($email)) {
        $email_err = "please your email is required";
    }

    // validating gender
    elseif (empty($gender)) {
        $gender_err = "please tell us your gender";
    }

    // validating age
    elseif (empty($age)) {
        $age_err = "please tell us your age";
    } else {
        $sql_query = "INSERT INTO user_details (user_name, email, age, gender) 
                    VALUES ('{$user_name}', '{$email}', '{$age}', '{$gender}')";

        $conn->query($sql_query);
    }
}




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

    <p><a href='singleuser.php?q={$id}'>user_id : {$id}</a></p>";
}


?>

<?php

$read_sql = "SELECT * FROM user_details ORDER BY id DESC";
$result = $conn->query($read_sql);

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
                        <span><?php echo $name_err ?></span>
                        <br>

                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control">
                        <span><?php echo $email_err ?></span>
                        <br>

                        <label for="">Age</label>
                        <input type="text" name="age" class="form-control">
                        <span><?php echo $age_err ?></span>
                        <br>

                        <label for="">User Gender</label>
                        <input type="text" name="gender" class="form-control">
                        <span><?php echo $gender_err ?></span>
                        <br>

                        <button type="submit" name="submit" class="btn btn-outline-success">save info</button>
                    </form>
                </div>
            </div>

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