<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="utf-8">
    <title>Carrier</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content=">Sea food" name="keywords">
    <meta content="Sea food" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
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
    <link href="css/custom.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="product/css/style.css">
    <link rel="stylesheet" href="product/css/responsive.css">

    <style>
        
    
        h1 {
            margin: 0;
        }
        .job-listings {
            margin-top: 20px;
        }
        .job {
            background-color: white;
            border: 1px solid #ddd;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 5px;
        }
        /* .apply-button {
            background-color: #28a745;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
        } */
    </style>    
</head>

<body>
    <!-- Navbar Start -->
    <?php require_once('layout/navbar.php');?>

    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Carrier</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Carrier</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Service Start -->
    <div class="container-fluid pt-2">
        <div class="container">
            <!-- <div class="section-title">
                <h1 class="display-4">Carrier</h1>
            </div>  -->
            <div class="row">
            <section class="job-listings">
            <h1>Careers at Our Kitchen Seafood Company</h1>
            <p>Join our team and help us bring fresh seafood to the world!</p>
            <div class="job">
                <h3>Seafood Processor</h3>
                <p>Location: Anytown, USA</p>
                <p>Responsibilities include processing seafood, maintaining quality control, and ensuring a safe work environment.</p>
                <a href="apply.html" class="apply-button btn btn-primary">Apply Now</a>
            </div>

            <div class="job">
                <h3>Sales Associate</h3>
                <p>Location: Remote</p>
                <p>We are seeking a motivated sales associate to help expand our customer base and promote our products.</p>
                <a href="apply.html" class="apply-button btn btn-primary">Apply Now</a>
            </div>

            <div class="job">
                <h3>Quality Control Inspector</h3>
                <p>Location: Coastal City, USA</p>
                <p>Responsible for inspecting seafood quality, ensuring compliance with safety regulations, and reporting findings.</p>
                <a href="apply.html" class="apply-button btn btn-primary">Apply Now</a>
            </div>
          </section>
  
            </div>
        </div>
    </div>
    <!-- Service End -->


    <?php require_once('layout/footer.php');?>
