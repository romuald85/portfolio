<?php

$errors = [];

if (!array_key_exists('name', $_POST) || $_POST['name'] == '') {
    $errors['name'] = "Vous n'avez pas renseigné votre nom";
}

if (!array_key_exists('email', $_POST) || $_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = "Vous n'avez pas renseigné votre email";
}

if (!array_key_exists('message', $_POST) || $_POST['message'] == '') {
    $errors['message'] = "Vous n'avez pas renseigné votre message";
}

session_start();

if (!empty($errors)) {
    $_SESSION['inputs'] = $_POST;
    $_SESSION['errors'] = $errors;
    header('Location:index.php#sec4');
} else {
    $_SESSION['success'] = 1;
    $nom = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    header('Location:index.php#sec4');

    require 'phpmailer.php';
}
