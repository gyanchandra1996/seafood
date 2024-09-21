<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>About Us</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content=">Sea food" name="keywords">
    <meta content="Sea food" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="product/css/style.css">
    <link rel="stylesheet" href="product/css/responsive.css">
    <link href="css/custom.css" rel="stylesheet">

</head>

<body>
    
   <?php require_once('layout/navbar.php');?>


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">About Us</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">About Us</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->



    
    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">About Us</h4>
                <h1 class="display-4">Serving Since 1990</h1>
            </div>
            <div class="row">
                <div class="col-lg-8 py-0 py-lg-5">
                    <h1 class="mb-3">Our Vision</h1>
                    <h5 class="mb-3">Connecting communities to the ocean's bounty through sustainable seafood practices for a brighter future.</h5>
                    <p>
                    At [silveranchorintl], our vision is to redefine the seafood industry by prioritizing sustainability, quality, and community connection. We believe that seafood should not only be delicious but also responsibly sourced. Our commitment to sustainable fishing practices ensures that we protect ocean ecosystems for future generations while providing our customers with the freshest catches available.</p>
                    <p>We envision a world where seafood lovers can enjoy their favorite dishes knowing that every bite supports ethical practices. By collaborating with local fishermen and adhering to fair trade principles, Our goal is to educate consumers about the importance of sustainable choices, empowering them to make informed decisions that benefit both their health and the environment.</p>
                    <p>. Ultimately, we aspire to create a culinary experience that celebrates the richness of the ocean while fostering a deep respect for its resources. Together, we can enjoy the ocean's bounty while preserving it for generations to come.</p>
                    <a href="about.php" class="btn btn-secondary font-weight-bold py-2 px-4 mt-2">Read More</a>
                </div>
                <div class="col-lg-4 py-5 py-lg-0" style="">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="newimages/single.png" style="object-fit: cover;">
                    </div>
                </div>
            
            </div>
        </div>
    </div>
    <!-- About End -->

    <?php require_once('layout/footer.php');?>
