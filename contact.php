<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Contact</title>
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
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="product/css/style.css">
    <link rel="stylesheet" href="product/css/responsive.css">
</head>

<body>

    <?php require_once('layout/navbar.php');?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Contact Us</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Contact Us</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-dark text-uppercase" style="letter-spacing: 5px;">Contact Us</h4>
                <h1 class="display-4">GET IN TOUCH WITH US</h1>
            </div>
            <div class="row px-3 pb-2">
                <div class="col-sm-4 text-center mb-3">
                    <i class="fa fa-2x fa-map-marker-alt mb-3 text-primary"></i>
                    <h4 class="font-weight-bold">Address</h4>
                    <p>M 130-131, Second Floor, M-42, Connaught Cir, Shankar Market, Block M, Connaught Place, New Delhi, Delhi 110001
                    </p>
                </div>
                <div class="col-sm-4 text-center mb-3">
                    <i class="fa fa-2x fa-phone-alt mb-3 text-primary"></i>
                    <h4 class="font-weight-bold">Phone</h4>
                    <p>+012 345 6789</p>
                </div>
                <div class="col-sm-4 text-center mb-3">
                    <i class="far fa-2x fa-envelope mb-3 text-primary"></i>
                    <h4 class="font-weight-bold">Email</h4>
                    <p>fragiseullograu-3894@yopmail.com</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 pb-5">
                <iframe   style="width: 100%; height: 443px;"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.8857070549097!2d77.22002027493085!3d28.63318737566429!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd373002c9cb%3A0xd740f65ca0939219!2sABL%20Workspaces!5e0!3m2!1sen!2sin!4v1726592296954!5m2!1sen!2sin" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
                    
                </div>
                <div class="col-md-6 pb-5">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="control-group">
                                <input type="text" class="form-control bg-transparent p-4" id="name" placeholder="Your Name"
                                    required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control bg-transparent p-4" id="email" placeholder="Your Email"
                                    required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control bg-transparent p-4" id="subject" placeholder="Subject"
                                    required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control bg-transparent py-3 px-4" rows="5" id="message" placeholder="Message"
                                    required="required"
                                    data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-primary font-weight-bold py-3 px-5" type="submit" id="sendMessageButton">Send
                                    Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

  

    <?php require_once('layout/footer.php');?>

     <script> 
        
        $(function () {
        
        $("#contactForm input, #contactForm textarea").jqBootstrapValidation({
            preventSubmit: true,
            submitError: function ($form, event, errors) {
            },
            submitSuccess: function ($form, event) {
                event.preventDefault();
                var name = $("input#name").val();
                var email = $("input#email").val();
                var subject = $("input#subject").val();
                var message = $("textarea#message").val();
        
                $this = $("#sendMessageButton");
                $this.prop("disabled", true);
        
                $.ajax({
                    url: "sendmail.php",
                    type: "POST",
                    data: {
                        name: name,
                        email: email,
                        subject: subject,
                        message: message
                    },
                    cache: false,
                    success: function () {
                        $('#success').html("<div class='alert alert-success'>");
                        $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                                .append("</button>");
                        $('#success > .alert-success')
                                .append("<strong>Your message has been sent. </strong>");
                        $('#success > .alert-success')
                                .append('</div>');
                        $('#contactForm').trigger("reset");
                    },
                    error: function () {
                        $('#success').html("<div class='alert alert-danger'>");
                        $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                                .append("</button>");
                        $('#success > .alert-danger').append($("<strong>").text("Sorry " + name + ", it seems that our mail server is not responding. Please try again later!"));
                        $('#success > .alert-danger').append('</div>');
                        $('#contactForm').trigger("reset");
                    },
                    complete: function () {
                        setTimeout(function () {
                            $this.prop("disabled", false);
                        }, 1000);
                    }
                });
            },
            filter: function () {
                return $(this).is(":visible");
            },
        });
        
        $("a[data-toggle=\"tab\"]").click(function (e) {
            e.preventDefault();
            $(this).tab("show");
        });
        });
        
        $('#name').focus(function () {
        $('#success').html('');
        });
            </script>  