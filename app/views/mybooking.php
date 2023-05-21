<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
include_once('controllers/BookController.php');

$res = new Bookings();

$id = $_SESSION['user_id'];
$my_money = $_SESSION['acc_balance'];

$sample = $res->getBooking($id);
?>
<section class="banner" id="top">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="left-side">
                    <div class="logo">
                        <img src="img/train_logo-removebg-preview.png" alt="Train Template">
                    </div>
                    <div class="tabs-content">
                        <h4>Choose Your Direction:</h4>
                        <ul class="social-links">
                            <li><a href="http://facebook.com">Find us on <em>Facebook</em><i
                                        class="fa fa-facebook"></i></a></li>
                            <li><a href="http://youtube.com">Our <em>YouTube</em> Channel<i
                                        class="fa fa-youtube"></i></a></li>
                            <li><a href="http://instagram.com">Follow our <em>instagram</em><i
                                        class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="page-direction-button">
                        <a href="contact.html"><i class="fa fa-phone"></i>Contact Us Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-md-offset-1">
                <section id="first-tab-group" class="tabgroup">
                    <div id="tab1">
                        <div class="submit-form">
                            <table class="table align-middle mb-0 bg-white">
                                <thead class="bg-light">
                                    <tr>
                                        <th>Id</th>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>Departure</th>
                                        <th>Return</th>
                                        <th>Flight</th>
                                        <th>Payment</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if ($sample)
                                        foreach ($sample as $row) { ?>
                                            <tr>
                                                <td>
                                                    <?php echo $row['id'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['b_from'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['b_to'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['dep_date'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['ret_date'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['typet'] === 'ow' ? 'Oneway' : 'Roundtrip'; ?>
                                                </td>
                                                <td>
                                                    <?php if ($row['pay_status'] === 'paid') { ?>
                                                        <span class="badge text-bg-success rounded-pill d-inline">Paid</span>
                                                    <?php } elseif ($row['pay_status'] === 'unpaid') { ?>
                                                        <a href="controllers/PaymentImpl.php?id=<?php echo $row['id'] ?>"
                                                            type="button" class="btn btn-link btn-sm btn-rounded">
                                                            Pay Now
                                                        </a>
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                        <?php } else { ?>
                                        <tr class="items-center text-center">
                                            <td class="align-middle" colspan="7">No records yet...</td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="primary-button">
                        <a href="#" class="scroll-top">Back To Top</a>
                    </div>
                </div>
                <div class="col-md-12">
                    <ul class="social-icons">
                        <li><a href="https://www.facebook.com/tooplate"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-12">
                    <p>Copyright &copy; 2023 TRAIN TICKET RESERVATION SYSTEM

                        | Design:<em>Cris Angelo Semblante</em></p>
                </div>
            </div>
        </div>



    </footer>


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>

    <script src="js/datepicker.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {



            // navigation click actions 
            $('.scroll-link').on('click', function (event) {
                event.preventDefault();
                var sectionID = $(this).attr("data-id");
                scrollToID('#' + sectionID, 750);
            });
            // scroll to top action
            $('.scroll-top').on('click', function (event) {
                event.preventDefault();
                $('html, body').animate({ scrollTop: 0 }, 'slow');
            });
            // mobile nav toggle
            $('#nav-toggle').on('click', function (event) {
                event.preventDefault();
                $('#main-nav').toggleClass("open");
            });
        });
        // scroll function
        function scrollToID(id, speed) {
            var offSet = 0;
            var targetOffset = $(id).offset().top - offSet;
            var mainNav = $('#main-nav');
            $('html,body').animate({ scrollTop: targetOffset }, speed);
            if (mainNav.hasClass("open")) {
                mainNav.css("height", "1px").removeClass("in").addClass("collapse");
                mainNav.removeClass("open");
            }
        }
        if (typeof console === "undefined") {
            console = {
                log: function () { }
            };
        }
    </script>