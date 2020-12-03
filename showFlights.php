<?php
    include("connection.php");
    require("searchFlight.php");
    $fQuery = "SELECT airport_id,city FROM `airport` WHERE country = 'canada' order by city";
    $q = mysqli_query($conn,$fQuery);
    $cities = null;
    while($row = mysqli_fetch_array($q)){
        $cities[] = $row;
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!--

Template 2093 Flight

http://www.tooplate.com/view/2093-flight

-->
    	<title>Flight - Travel and Tour</title>
    
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/datepicker.css">
        <link rel="stylesheet" href="css/tooplate-style.css">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>

    
   
  

    <section class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Your Searched Flights Details Are as Follows</h2>
                    </div>
                </div>
                <div class="col-md-12">
                <div class="" style="text-align: left;padding: 30px 20px;">
                    <div class="container">
                    <?php
                           
                        if (isset($data)){
                        foreach($data as $flight){
                            // var_dump($flight);
                            echo "<div class='row service-item' style='margin-bottom: 10px;'>
                                <div class='col-md-2'>
                                    <i class='fa fa-plane' aria-hidden='true'></i>
                                    <b>".$flight->airline_name."</b>
                                    <hr>
                                    <div>
                                    </div>
                                </div>
                                <div class='col-md-2'>
                                    <div>
                                        <p style='font-size: 25px;text-align: center;'>".$flight->start_time."</p>
                                        <p style='font-size: 12px;text-align: center;'>".$flight->stcity."</p>
                                    </div>
                                </div>

                                <div class='col-md-2'>
                                    <div style='text-align: center;'>
                                        <p style='font-size: 20px;'>".$flight->duration." Hours</p>
                                        <hr style='margin-top: -5px;margin-bottom: 5px;' align='center'>
                                        <p style='font-size: 10px;text-align: center;'>Non-Stop</p>
                                    </div>
                                </div>
                                <div class='col-md-2'>
                                    <div>
                                        <p style='font-size: 25px;text-align: center;'>".$flight->end_time."</p>
                                        <p style='font-size: 12px;text-align: center;'>".$flight->encity."</p>
                                    </div>
                                </div>

                                <div class='col-md-4'>
                                    <div style='text-align:left;'>";
                                foreach($flight->details as $details){
                                    echo "<b><p>".strtoupper($details->name)." - $.".$details->price." <a class='btn btn-sm btn-primary' href='book.php?flight=".$flight->id."&type=".$details->name."'>Book Now</a></p></b>";
                                }
                            
                                        echo"  </div>
                                </div>
                            </div>";
                        }
                        }
                        else{
                            echo "<div class='service-item' style='margin-bottom: 10px;padding-top:30px;'>
                            <h1 align='center'>No Flights Found !!!</h1>
                            <h1 align='center'><a href='index.php' class='btn btn-lg btn-primary'>GO BACK</a></h1>
                            </div>";

                        }
                    ?>
                    <!-- <div class='row service-item' style='margin-bottom: 10px;'>
                        <div class="col-md-2">
                            <i class="fa fa-plane" aria-hidden="true"></i>
                            <b>Air India Airlines</b>
                            <hr>
                            <div>
                            <a href="" class="btn btn-success btn-block">Book</a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div>
                                <p style="font-size: 25px;text-align: center;">19:00</p>
                                <p style="font-size: 12px;text-align: center;">Delhi gyyhg gghgft</p>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div style="text-align: center;">
                                <p style="font-size: 20px;">2 hours</p>
                                <hr style="margin-top: -5px;margin-bottom: 5px;" align="center">
                                <p style="font-size: 10px;text-align: center;">Non-Stop</p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div>
                                <p style="font-size: 25px;text-align: center;">19:00</p>
                                <p style="font-size: 12px;text-align: center;">Delhi</p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div>
                                <b><p>Economy - 500</p></b>
                                <p>Economy - 500</p>
                                <p>Economy - 500</p>
                                <p>Economy - 500</p>
                            </div>
                        </div>
                          
                          

                    </div> -->
                    
                    </div>
                </div>
                    <!-- <div class="service-item first-service">
                        <div class="service-icon"></div>
                        <h4>Easy Tooplate</h4>
                        <p>Donec varius porttitor iaculis. Integer sollicitudin erat et ligula viverra vulputate. In in quam efficitur, pulvinar justo ut, tempor nunc. Phasellus pharetra quis odio.</p>
                        </a>
                    </div> -->
                </div>
            </div>
        </div>
    </section>


     <section class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                </div>
            </div>
        </div>
    </section>
    
  




  


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
                    <p>Copyright &copy; 2018 Flight Tour and Travel Company
                
                | Design: <a href="http://www.tooplate.com/view/2093-flight" target="_parent"><em>Flight</em></a></p>
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


        $('#return').attr('disabled', true);

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

    function checkId(){
        var dd1 = $('#dd1').val();
        var dd2 = $('#dd2').val();
       
        if (dd1 === "" || dd2 === ""){
            return false;
        }
        if (dd1 === dd2){
            alert('Both Place cannot be same.');
            $('#button1').hide();

        }
        else{
            $('#button1').show();
        }
    }

    function checkPastDate(){
      
        var selectedText = $('#deparure').val();
        var selectedDate = new Date(selectedText);
        var now = new Date();
        if (selectedDate < now) {
            alert("Date must be in the future");
            $('#button1').hide();
        } else {
            $('#button1').show();
        }
    }


    function checkDeptDate(){
        var dDate = $('#deparure').val();
        var rDate = $('#return').val();
        if (rDate < dDate) {
            alert("Selected date is in the past");
            $('#button1').hide();

        } else {
            $('#button1').show();
        }
    }

    function checkTrip(){
        var trip = $("#oneway").is(":checked");
        console.log(trip);
        if (trip == true) {
            $('#return').attr('disabled', true);


        } else {
            $('#return').attr('disabled', false);

        }
    }
    </script>
</body>
</html>