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
                <li class="nav-item"><a href="#">Home</a></li>
                <li class="nav-item"><a href="Students_info.php" target="="_BLANK>Student Information</a></li>
                <li class="nav-item"><a href="#" target="="_BLANK> My Course</a></li>
                <li class="nav-item"><a href="#" target="=" _BLANK>Results</a>
                    <li class="nav-item"><a href="#" target="="_BLANK>Others</a>
                </li>
            </ul>
        </nav>
        <header>
            <div class="owl-carousel">
                <div>
                    <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1009&q=80">
                </div>
                <div>
                    <img src="https://images.unsplash.com/photo-1576267421707-b255b46fc4fb?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1050&q=80">
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