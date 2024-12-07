<?php

define("USERNAME", "admin");
define("PASSWORD", "password123");


$user_input_username = $_POST['username'];  // Get username from form input
$user_input_password = $_POST['password'];  // Get password from form input


if ($user_input_username === USERNAME && $user_input_password === PASSWORD) {
    echo "Login successful! Welcome, $user_input_username.";
} else {
    echo "Login failed! Invalid username or password.";
}
?>
