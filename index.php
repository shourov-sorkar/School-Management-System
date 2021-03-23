<?php
    include 'db/session.php';
    Session::checkSession();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <!-- Link stylesheet -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
</head>
<body>
    <div class="container-fluid">
        <nav>
            <ul class="nav-menu">
                <li class="nav-item"><a href="index.html">Home</a></li>
                <li class="nav-item"><a href="result.html" target="="_BLANK>Result</a></li>
                <li class="nav-item"><a href="course_login/my_courses/index.html" target="="_BLANK>Course</a></li>
                <li class="nav-item"><a href="http://cse.iubat.edu/faculty/" target="=" _BLANK>Faculty list</a>
                    <li class="nav-item"><a href="others.html" target="="_BLANK>Others</a>
                </li>
            </ul>
        </nav>
        <header>
            <div class="owl-carousel">
                <div>
                    <img src="img/home-slider-iubat.jpg">
                </div>
                <div>
                    <img src="img/IUBAT-VC.jpg">
                </div>
            </div>
        </header>
    </div>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items:1,
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:2000,
        autoplayHoverPause:true
    });
    $('.play').on('click',function(){
        owl.trigger('play.owl.autoplay',[1000])
    })
    $('.stop').on('click',function(){
        owl.trigger('stop.owl.autoplay')
    })
});
</script>
</body>
</html>