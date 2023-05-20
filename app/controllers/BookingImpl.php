<?php
session_start();
include_once('BookController.php');

$bookings = new Bookings();

if(isset($_POST['booktrain'])) {

     $error = false;

     if($_SESSION['user_id'] != null)
     $id = $_SESSION['user_id'];
	

     empty($_POST['from']) || $_POST['from'] != '' 
     ? $from = $bookings->escape_string($_POST['from']) 
     : $error;

     empty($_POST['to']) || $_POST['to'] != '' 
     ? $to = $bookings->escape_string($_POST['to']) 
     : $error;

     empty($_POST['departure']) || $_POST['departure'] != '' 
     ? $dep = $bookings->escape_string($_POST['departure']) 
     : $error;
     
     empty($_POST['return']) || $_POST['return'] != '' 
     ? $ret = $bookings->escape_string($_POST['return']) 
     : $error;

     empty($_POST['trip']) || $_POST['trip'] != '' 
     ? $type = $bookings->escape_string($_POST['trip']) 
     : $error;

     if($error){
          header('location: ../views/home.php?error=all fields are required');
          exit();
     } else {
          $isSucessQuery = $bookings->addBooking($id, $from, $to, $dep, $ret, $type);
          if($isSucessQuery){
               header('location: ../pages.php?pages=?success=Query success');
               exit();
          } else {
               header('location: ../views/home.php?error=Something went wrong');
               exit();
          }
     }
}
