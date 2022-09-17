<?php require('connect.php');
    $conn = mysqli_connect($servername, $username, "", $database); 
    $sql = "SELECT * FROM product"; $result = mysqli_query($conn, $sql); 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>it-shop</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/owl.carousel.css" rel="stylesheet" />
        <link href="css/owl.theme.default.css" rel="stylesheet"/>
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
            <a href="index.php" class="navbar-brand">เย็นตาโฟก๋วยเตี๋ยวหมูต้มยำ ศิริชัย</a>
                <a href="index.php" class="navbar-brand">About</a>
                <a href="index.php" class="navbar-brand">Contact</a>
                <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button> -->
                <div class="collapse navbar-collapse" id="navbarResponsive">
                </div>
        <form class="d-flex" action="search.php" method="post">
            <input class="form-control me-2 form-control-sm rounded-pill" type="search" placeholder="Search" aria-label="Search" name="search">
            <button class="btn btn-light rounded-circle" type="submit"><i class="fas fa-search" ></i></button>
      </form>
            </div>
        </nav>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('assets/img/home-bg.png')!important">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                        <img src="assets/img/123.jpg" class="img-rounded"  width="400" height="260">
                        </div>
                    </div>
                </div>
            </div> 
        </header>
        <center><h2>เย็นตาโฟก๋วยเตี๋ยวหมูต้มยำ ศิริชัย</center></h2>
        <center>เว็บไซต์ขายอาหาร อร่อย สะอาด ราคาถูก</center>
       <div class="container mb-5 ">
        <div class="row">
        <div class="col-md-10 mx-auto">
        <div class="owl-carousel owl-theme">
        <div class="item">
            <a href="mouse.php">
            <div class="card border-0 rounded shadow-sm">
            <div class="card-body">
                <img src="images/100.jpg"/>
                   
            </div>
            </div>
            </a>
        </div>
        <div class="item">
            <a href="keyboard.php">
        <div class="card border-0 rounded shadow-sm">
        <div class="card-body">
            <img src="images/2.jpg"/>
            
        </div>
        </div>
        </a>
        </div>
        <div class="item">
        <a href="Headphone.php">
        <div class="card border-0 rounded shadow-sm">
            <div class="card-body">
                    <img src="images/3.png"/>
           
        </div>
        </div>
        </a>
        </div>
        </div>
        </div>
      </div>
    </div>

        

        <!-- Footer-->
        <footer class="border-top">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="small text-center text-muted fst-italic">Copyright &copy;<a  href="https://web.facebook.com/ITSERVICES1972/">Information Technology @ PSC</a></a> </div>
                        <div class="small text-center text-muted fst-italic">Copyright &copy;<a   href="https://web.facebook.com/profile.php?id=100011193784684" class="text">Artidon Keaticohnkarn</a> </div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="crossorigin="anonymous"></script>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="js/owl.carousel.js"></script>
        <script>$('.owl-carousel').owlCarousel({
    loop:true,
    margin:20,
    nav:false,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})</script>
    </body>
</html>
