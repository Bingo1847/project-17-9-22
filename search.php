<?php require('connect.php');
    $conn = mysqli_connect($servername, $username, "", $database);
    $search = $_POST['search'] ;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Logitech G</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/owl.carousel.css" rel="stylesheet" />
        <link href="css/owl.theme.default.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
            <a href="index.php" class="navbar-brand">Logitech G</a>
                <a href="index.php" class="navbar-brand">About</a>
                <a href="index.php" class="navbar-brand">Contact</a>
                <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button> -->
                <div class="collapse navbar-collapse" id="navbarResponsive">
                </div>
                <form class="d-flex" action="" method="post">
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
                        </div>
                    </div>
                </div>
            </div> 
        </header>

        <div class="container mb-5 ">
      <div class="row">
      <?php 
            $sql = "SELECT * FROM product WHERE group_product LIKE '%$search%' OR model LIKE '%$search%' ";
            $result = mysqli_query($mysqli, $sql);?>

            <?php while($data = mysqli_fetch_array($result))
            {
            ?>
        <div class="col-md-3 mt-3">
        <a href='product.php?id=<?= $data['id']; ?>'>
            <div class="card border-0 rounded shadow-sm h-100">
            <div class="card-body">
            <img src="images/<?= $data['image']; ?>" width="100%"/>
            <h4 class="card-text text-center fs-5 mt-3"><?= $data['model']; ?></h4>
            <p class="text-center mb-0 mt-0"><?= $data['price']; ?></p>
        </div>
        </div>
            </a>
        </div>
        <?php } ?>
      </div>
    </div>

        

        <!-- Footer-->
        <footer class="border-top">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="small text-center text-muted fst-italic">Copyright &copy;<a href="https://www.facebook.com/profile.php?id=100011309823212">พันกร โสบิน</a> </div>
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
       
    </body>
</html>
