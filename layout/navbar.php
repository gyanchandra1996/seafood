   
      <style>
      .product{
        width: 100% !important;
       height: 110px !important;
      }
      .p-service{
        height: 200px !important;
      }
      .carousel-caption {
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgb(51 33 29 / 55%) !important;
    z-index: 1;
}

.p-image{
    min-height: 158px !important;
    max-height: 158px !important;
    
    width: 100%;
    
}
.navbar-expand-lg .navbar-nav .nav-link {
    padding: 3px 10px;
    font-size: 17px;
    color: white;
    border-radius: 5px;
    text-transform: uppercase;
}

.fixed-top {
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1030;
    background-color: black !important;
}

.whatsapp-button {
    position: fixed;
    bottom: 20px; /* Distance from the bottom */
    right: 85px; /* Distance from the right */
    background-color: #25D366; /* WhatsApp color */
    color: white; /* Icon color */
    border-radius: 50%; /* Circular button */
    padding: 15px; /* Button size */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3); /* Shadow for depth */
    font-size: 24px; /* Icon size */
    z-index: 1000; /* Ensure it's above other elements */
    text-align: center; /* Center icon */
}

.whatsapp-button:hover {
    background-color: #128C7E; /* Darker shade on hover */
}

    </style>  
   
    <!-- Navbar Start -->
    <div class="container-fluid p-0 nav-bar">
    <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3 fixed-top">
        <a href="index.php" class="navbar-brand px-lg-4 m-0">
           <!-- <img width= src="newimages/products/logo.webp">  -->
           <h1 class="m-0 display-4 text-uppercase text-white">silveranchor</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto p-4">
                <a href="index.php" class="nav-item nav-link">Home</a>
                <a href="products.php" class="nav-item nav-link">Products</a>
                <a href="about.php" class="nav-item nav-link">About Us</a>
                <!-- <a href="carrier.php" class="nav-item nav-link ">Carrier</a> -->
                <a href="contact.php" class="nav-item nav-link active">Contact Us</a>
            </div>
        </div>
    </nav>
</div>

    <!-- Navbar End -->
