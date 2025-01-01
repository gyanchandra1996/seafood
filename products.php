<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Products</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content=">Sea food" name="keywords">
    <meta content="Sea food" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="product/css/style.css">
      <link rel="stylesheet" href="product/css/responsive.css">

      <style>
     
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

.row {
    display: flex;
    flex-wrap: wrap;
    margin: -10px;
}

.col-lg-3, .col-md-6 {
    padding: 10px;
    box-sizing: border-box;
}

.card {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: transform 0.3s;
}

.card:hover {
    transform: scale(1.05);
}

.coffee_img {
    text-align: center;
}

.p-image {
    width: 100%;
    height: auto;
}



.looking_text {
    text-align: center;
    color: #777;
}


.types_text {
    font-size: 1.5em;
    text-align: justify;
    margin: 10px 0;
    color:black;
}


      </style>    
</head>

<body>
    <!-- Navbar Start -->
    <?php require_once('layout/navbar.php');?>

    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Products</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Products</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

 
    <!-- product Start -->


  <div class="container-fluid py-5">  
      <div class="container">
            <div class="row">
               <h1 class="coffee_taital"> PRODUCTS</h1>
        
            </div>
         </div>

               <div class="container-fluid">
                        <div class="row mb-4">
                           <div class="col-lg-4 col-md-6">
                                 <div class="coffee_img">
                                  <img src="newimages/products/fillet.jpg">
                                 </div>
                               
                                    <h3 class="types_text text-dark mb-3" data-toggle="collapse" data-target="#demo">
                                    <span class="collapse-icon" onclick="toggleIcon(this)"><i class="fa fa-caret-right"></i></span> Fillets

                                    </h3>
                                    <div id="demo" class="collapse">
                                     <h5>Basa</h5>
                                     <h5>Cream Dory</h5>
                                    </div>
                                    <hr>
                         
                           </div>
                    
                           <div class="col-lg-4 col-md-6">
                              <div class="coffee_img"><img src="newimages/products/Fresh.jpg"></div>

                                    <h3 class="types_text text-dark" data-toggle="collapse" data-target="#demo2">
                                    <span class="collapse-icon" onclick="toggleIcon(this)"><i class="fa fa-caret-right"></i></span> Fishes

                                    </h3>
                                    <div id="demo2" class="collapse">
                                    <h5>Fish Egg</h5>
                                    <h5>Kalibaus</h5>
                                    <h5>Kangla</h5>
                                    <h5>Karfu</h5>

                                    </div>
                                    <hr>
                             
                           </div>
                           <div class="col-lg-4 col-md-6">
                              <div class="coffee_img"><img src="newimages/products/seawater.jpg"></div>

                            <h3 class="types_text text-dark" data-toggle="collapse" data-target="#demo3">
                                                        <span class="collapse-icon" onclick="toggleIcon(this)"><i class="fa fa-caret-right"></i></span> Shell Fishes

                            </h3>

                             <div id="demo3" class="collapse">
                                    <h5>Crab</h5>
                                    <h5>Kalibaus</h5>
                             </div>

                                <hr>
                           </div>
                        
                        </div>


                         <div class="row">
                           <div class="col-lg-4 col-md-6">
                                 <div class="coffee_img">
                                  <img src="newimages/products/sea.jpg">
                                 </div>
                               
                                    <h3 class="types_text text-dark" data-toggle="collapse" data-target="#demo4">
                                    <span class="collapse-icon" onclick="toggleIcon(this)"><i class="fa fa-caret-right"></i></span> Sea Water Fishes

                                    </h3>
                                    <div id="demo4" class="collapse">
                                     <h5>Basa</h5>
                                     <h5>Cream Dory</h5>
                                    </div>
                                    <hr>
                         
                           </div>
                    
                           <div class="col-lg-4 col-md-6">
                              <div class="coffee_img"><img src="newimages/products/Shrimps.jpg"></div>

                                    <h3 class="types_text text-dark" data-toggle="collapse" data-target="#demo5">
                                    <span class="collapse-icon" onclick="toggleIcon(this)"><i class="fa fa-caret-right"></i></span> Shrimps

                                    </h3>
                                    <div id="demo5" class="collapse">
                                    <h5>Fish Egg</h5>
                                    <h5>Kalibaus</h5>
                                    <h5>Kangla</h5>
                                    <h5>Karfu</h5>

                                    </div>

                                      <hr>
                         
                             
                           </div>
                           <div class="col-lg-4 col-md-6">
                              <div class="coffee_img"><img src="newimages/products/crab.webp"></div>

                            <h3 class="types_text text-dark" data-toggle="collapse" data-target="#demo6">
                                                        <span class="collapse-icon" onclick="toggleIcon(this)"><i class="fa fa-caret-right"></i></span> Crab Fishes

                            </h3>

                             <div id="demo6" class="collapse">
                                    <h5>Crab</h5>
                                    <h5>Kalibaus</h5>
                             </div>
                             <hr>
                              
                           </div>
                        
                        </div>



                             


          </div>
         

         </div>

      </div>


    <!-- products End -->


    <?php require_once('layout/footer.php');?>
