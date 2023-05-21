<?php
session_start();
include_once('../controllers/BookController.php');

$res = new Bookings();

$userId = $_SESSION['user_id'];
$amountToPay = 100;
$currAmount = $_SESSION['acc_balance'];
$price = 100;
$bookingId = $_GET['id'];

$result = $res->payBooking($userId, $amountToPay, $currAmount, $price, $bookingId);

if (!$result) {
     header('location: ../pages.php?page=mybooking');
     exit();
} else {
     header('location: ../pages.php?page=mybooking');
     exit();
}