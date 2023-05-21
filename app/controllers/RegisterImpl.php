<?php
include_once("./UserController.php");

$user = new User();

if (isset($_POST['register'])) {
     $username = $user->escape_string($_POST['username']);
     $fname = $user->escape_string($_POST['fname']);
     $lname = $user->escape_string($_POST['lname']);
     $email = $user->escape_string($_POST['email']);
     $password = $user->escape_string($_POST['password']);
     $confirmPass = $user->escape_string($_POST['confirm-password']);

     if ($password === $confirmPass) {
          $register = $user->addUser($username, $fname, $lname, $email, $password);
          if ($register)
               header('location: ../index.php?success=Account created!!!');
          else
               header('location: ../register.php?error=Something went wrong');

     } else {
          header('location: ../register.php?error=Passwords Doesn`t match');
          exit();
     }
}