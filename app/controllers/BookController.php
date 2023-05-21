<?php

// Comment this section if not teting
namespace BookingsInitName;

use mysqli;

// end

class Bookings extends DbConnection
{
     public function __construct()
     {

          parent::__construct();
     }

     public function addBooking($user_id, $from, $to, $dep, $ret, $type)
     {
          $sql = "INSERT INTO bookings(`customer_id`, `b_from`, `b_to`, `dep_date`, `ret_date`, `typet`) VALUES ('$user_id','$from','$to','$dep','$ret','$type')";

          if ($this->connection->query($sql)) {
               return true;
          } else {
               return false;
          }
     }

     public function getBooking($id)
     {
          $sql = "SELECT * FROM `bookings` WHERE `customer_id` = $id";
          $query = $this->connection->query($sql);
          if ($query->num_rows > 0) {
               $data = array();
               while ($row = $query->fetch_assoc()) {
                    $data[] = $row;
               }
               return $data;
          } else {
               return false;
          }
     }

     public function payBooking($id, $amount, $curr_amount, $price, $bookId)
     {
          if (!($curr_amount < $price)) {
               $sql = "UPDATE `bookings` SET `amount_paid` = $amount, `pay_status` = 'paid' WHERE `id` = $bookId";
               $query = $this->connection->query($sql);
               if ($query) {
                    $sql2 = "UPDATE `users` SET `acc_balance` = `acc_balance` - $amount WHERE `id` = $id";
                    $query2 = $this->connection->query($sql2) ? true : false;
                    return $query2;
               }
          } else {
               return false;
          }
     }

     public function getMoneyAmount($id)
     {
          $sql = "SELECT * FROM `users` WHERE `id` = $id";
          $query = $this->connection->query($sql);

          $row = $query->fetch_array();

          return $row;
     }

     public function escape_string($value)
     {

          return $this->connection->real_escape_string($value);

     }
}

class DbConnection
{

     private $host = 'localhost';
     private $username = 'root';
     private $password = 'KmJsYDN)vLSiLzwj';
     private $database = 'flightbook';

     protected $connection;

     public function __construct()
     {

          if (!isset($this->connection)) {

               $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

               if (!$this->connection) {
                    echo 'Cannot connect to database server';
                    exit;
               }
          }

          return $this->connection;
     }
}