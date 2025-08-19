<?php

$firstname = '';
$lastname = '';
$email = '';

// $firstname = $_POST['firstname'];
// $lastname = $_POST['lastname'];
// $email = $_POST['email'];


$errors=[
    'firstnameerror' => '',
    'lastnameerror' => '',
    'emailerror' => '',
];


if (isset($_POST['submit'])) {
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];


    if (empty($firstname)) {
        $errors['firstnameerror'] = 'firstname empty';

    }
    if (empty($lastname)) {
        $errors['lastnameerror'] = 'lastname empty';

    }
    if (empty($email)) {
        $errors['emailerror'] = 'email empty';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['emailerror'] = 'enter a correct email';
    }

    if (!array_filter($errors)) {

        $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
        $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);

        $sql = " INSERT INTO users(firstname, lastname, email) 
        VALUES('$firstname', '$lastname', '$email') ";

        if (mysqli_query($conn, $sql)) {
            header('Location:  '. $_SERVER['PHP_SELF'] );
        } else {
            echo 'Erroor: ' . mysqli_error($conn);
        }
    }

}
?>
