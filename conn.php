<?php

$SERVER_NAME = "localhost";
$USER_NAME = "root";
$PASSWORD = "";
$DB_NAME = "block_cms";


$conn = new mysqli($SERVER_NAME, $USER_NAME, $PASSWORD, $DB_NAME);

// if ($conn->connect_error) {
//     die("there was an error in connection :" . $conn->connect_error);
// } else {
//     echo "database connection was successful";
// }
