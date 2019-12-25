<?php
$name = $lastname = $email = $subject = " ";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = text_input($_POST["name"]);
    $lastname = text_input($_POST["lastname"])
    $email = text_input($_POST["email"]);
    $subject = text_input($_POST["subject"]);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
}
?>