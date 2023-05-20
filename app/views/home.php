
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
                            <li><a href="http://facebook.com">Find us on <em>Facebook</em><i class="fa fa-facebook"></i></a></li>
                            <li><a href="http://youtube.com">Our <em>YouTube</em> Channel<i class="fa fa-youtube"></i></a></li>
                            <li><a href="http://instagram.com">Follow our <em>instagram</em><i class="fa fa-instagram"></i></a></li>
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
                            <h4>Check availability for <em>direction</em>:</h4>
                            <form id="form-submit" action="controllers/BookingImpl.php" method="POST">
                                <div class="row">
                                    <div class="col-md-6">
                                        <fieldset>
                                            <label for="from">From:</label>
                                            <select required name='from' onchange='this.form.()'>
                                                <option value="">Select a location...</option>
                                                <option value="Danao">Danao</option>
                                                <option value="Compostela">Compostela</option>
                                                <option value="Li-loan">Li-loan</option>
                                                <option value="Consolacion">Consolacion</option>
                                                <option value="Mandaue">Mandaue</option>
                                                <option value="Cebu City">Cebu City</option>
                                                <option value="Lahug">Lahug</option>
                                                <option value="Carcar">Carcar</option>
                                                <option value="Alcoy">Alcoy</option>
                                                <option value="Oslob">Oslob</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset>
                                            <label for="to">To:</label>
                                            <select required name='to' onchange='this.form.()'>
                                                <option value="">Select a location...</option>
                                                <option value="Danao">Danao</option>
                                                <option value="Compostela">Compostela</option>
                                                <option value="Li-loan">Li-loan</option>
                                                <option value="Consolacion">Consolacion</option>
                                                <option value="Mandaue">Mandaue</option>
                                                <option value="Cebu City">Cebu City</option>
                                                <option value="Lahug">Lahug</option>
                                                <option value="Carcar">Carcar</option>
                                                <option value="Alcoy">Alcoy</option>
                                                <option value="Oslob">Oslob</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset>
                                            <label for="departure">Departure date:</label>
                                            <input name="departure" type="text" class="form-control date" id="departure" placeholder="Select date..." required="" onchange='this.form.()'>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset>
                                            <label for="return">Return date:</label>
                                            <input name="return" type="text" class="form-control date" id="return" placeholder="Select date..." required="" onchange='this.form.()'>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="radio-select">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <label for="round">Round</label>
                                                    <input type="radio" name="trip" id="round" value="rt" required="required"onchange='this.form.()'>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                    <label for="oneway">Oneway</label>
                                                    <input type="radio" name="trip" id="oneway" value="ow" required="required"onchange='this.form.()'>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset>
                                            <button type="submit" name="booktrain" id="form-submit" class="btn">Order Ticket Now</button>
                                            
                                        </fieldset>
                                        <?php if(isset($_GET['error'])) { ?>
                                            <div class="ml-3 text-sm">
                                                <p class="text-gray-500 dark:text-red-300"><?php echo $_GET['error']; ?></p>
                                            </div>
                                        <?php } ?>
                                        <?php if(isset($_GET['pages'])) { ?>
                                            <div class="ml-3 text-sm">
                                                <?php
                                                    $page = $_GET['pages'];
                                                    $splitted = explode("=", $page);
                                                ?>
                                                <p class="text-gray-500 dark:text-green-300"><?php echo $splitted[1] ?></p>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </form>
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
$(document).ready(function() {

    

    // navigation click actions 
    $('.scroll-link').on('click', function(event){
        event.preventDefault();
        var sectionID = $(this).attr("data-id");
        scrollToID('#' + sectionID, 750);
    });
    // scroll to top action
    $('.scroll-top').on('click', function(event) {
        event.preventDefault();
        $('html, body').animate({scrollTop:0}, 'slow');         
    });
    // mobile nav toggle
    $('#nav-toggle').on('click', function (event) {
        event.preventDefault();
        $('#main-nav').toggleClass("open");
    });
});
// scroll function
function scrollToID(id, speed){
    var offSet = 0;
    var targetOffset = $(id).offset().top - offSet;
    var mainNav = $('#main-nav');
    $('html,body').animate({scrollTop:targetOffset}, speed);
    if (mainNav.hasClass("open")) {
        mainNav.css("height", "1px").removeClass("in").addClass("collapse");
        mainNav.removeClass("open");
    }
}
if (typeof console === "undefined") {
    console = {
        log: function() { }
    };
}
</script>