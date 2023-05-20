<?php
//./vendor/bin/phpunit --testdox 
use PHPUnit\Framework\TestCase;
require __DIR__ . "/../app/sma/Calc.php";
require __DIR__ . "/../app/Calcu.php";
require __DIR__ . "/../app/controllers/BookController.php";
// require __DIR__ . "/../app/model/DBConn.php";

class SampleTest extends TestCase{
     public function testAdd(){
          $calc = new App\Calc;
          $res = $calc->addd(1,1);

          $this->assertEquals(2, $res);
     }

     public function testAddd(){
          $calc = new Appp\Calcu;
          $res = $calc->addd(1,3);

          $this->assertEquals(4, $res);
     }

     public function testAddBooking(){
          $bookingController = new BookingsInitName\Bookings;
          $res = $bookingController->addBooking(1, 'test-from', 'test-to', 'test-depdate', 'test-retdate', 'test-type');

          $this->assertEquals(true, $res);
     }
}