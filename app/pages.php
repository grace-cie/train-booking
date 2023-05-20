<?php
session_start();
if(isset($_SESSION['user'])) {
     $page = (isset($_GET['page']) && !empty($_GET['page']) ? $_GET['page'] : '');
     $file = "";
     if ($page === 'mybooking'){
          $file = "views/mybooking.php";
     } else {
          $file = "views/home.php";
     }

     include "templates/content.php";
} else {
     header("Location: ./index.php");
     exit();
}