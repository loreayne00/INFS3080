<?php
//Connection to database
$mysqli = new mysqli('localhost', 'infs3080', 'webclass', 'infs3080') or
die(mysqli_error($mysqli));
//Determine if data has been entered into form
if (isset($_POST["Submit"])){
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $mail = $_POST['email'];
    $country = $_POST['country'];
    $comments = $_POST['comment'];
$mysqli->query("INSERT INTO contacts (fname, lname, email, country, comment) VALUES
('$firstname', '$lastname', '$mail', '$country', '$comments')") or
die($mysqli->error);
// echo "Thank you for your information";
// Redirects to a URL
header("Location: http://localhost/index.html");
}
