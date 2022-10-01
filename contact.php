<!DOCTYPE html>
<html lang="en">



<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet">
    
  

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/vendors.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <style>
        form .error{
            color: #ff0000;
        }
    </style>
    <title>Contact Us</title>
</head>

<body class="preloader-visible" data-barba="wrapper">

    <!-- preloader start -->
    <div class="preloader js-preloader">
        <div class="preloader__bg"></div>
    </div>
    <!-- preloader end -->

    <!-- barba container start -->
    <div class="barba-container" data-barba="container">


        <main class="main-content  ">

            <!-- Header Section here..-->
            <?php include("header.php") ?>

            <div class="content-wrapper  js-content-wrapper">

                <section class="page-header -type-4 bg-beige-1">
                    <div class="container">
                        <div class="col-lg-12">
                            <?php if (isset($_GET['message'])){?>
                                <?php if ($_GET['message'] == "success"){?>
                                    <div class="alert alert-success mb-80">
                                        Thank you for contacting us . We will contact you in shortly.
                                    </div>
                                <?php }?>
                                <?php if ($_GET['message'] == "error"){?>
                                    <div class="alert alert-danger mb-80">
                                        Something went wrong please try again later.
                                    </div>
                                <?php }?>
                            <?php }?>
                        </div>
                        <div class="page-header__content">
                            <div class="row">
                                <div class="col-auto">
                                    <div data-anim="slide-up delay-1" class="is-in-view">
                                        <h1 class="page-header__title text-green-5">Contact Us</h1>
                                    </div>

                                    <div data-anim="slide-up delay-2" class="is-in-view">
                                        <p class="page-header__text">We’re on a mission to deliver engaging, curated<br> courses at a reasonable price.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="layout-pt-md layout-pb-lg">
                    <div data-anim-wrap="" class="container animated">
                        <div class="row y-gap-50 justify-between">
                            <div class="col-xl-5 col-lg-6">
                                <h3 class="text-24 lh-1 fw-500">Our offices</h3>
                                <div class="row y-gap-30 pt-40">

                                    <div class="col-sm-6">
                                        <div class="text-20 fw-500 text-dark-1">London</div>
                                        <div class="y-gap-10 pt-15">
                                            <a href="#" class="d-block">328 Queensberry Street, North Melbourne VIC 3051, Australia.</a>
                                            <a href="#" class="d-block">+(1) 123 456 7890</a>
                                            <a href="#" class="d-block">hi@panchee.com</a>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="text-20 fw-500 text-dark-1">Paris</div>
                                        <div class="y-gap-10 pt-15">
                                            <a href="#" class="d-block">328 Queensberry Street, North Melbourne VIC 3051, Australia.</a>
                                            <a href="#" class="d-block">+(1) 123 456 7890</a>
                                            <a href="#" class="d-block">hi@panchee.com</a>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="text-20 fw-500 text-dark-1">Los Angeles</div>
                                        <div class="y-gap-10 pt-15">
                                            <a href="#" class="d-block">328 Queensberry Street, North Melbourne VIC 3051, Australia.</a>
                                            <a href="#" class="d-block">+(1) 123 456 7890</a>
                                            <a href="#" class="d-block">hi@panchee.com</a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="px-40 py-40 bg-white border-light shadow-1 rounded-8 contact-form-to-top">
                                    <h3 class="text-24 fw-500">Send a Message</h3>
                                    <p class="mt-25"></p>

                                    <form class="contact-form row y-gap-30 pt-60 lg:pt-40" action="contact_mail.php" id="form" method="post">
                                        <div class="col-12">
                                            <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Name</label>
                                            <input type="text" name="name" placeholder="Name...">
                                        </div>
                                        <div class="col-12">
                                            <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Phone Number</label>
                                            <input type="text" name="phone" id="phone" placeholder="Phone Number...">
                                        </div>
                                        <div class="col-12">
                                            <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Email Address</label>
                                            <input type="text" name="email" placeholder="Email...">
                                        </div>
                                        <div class="col-12">
                                            <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Message...</label>
                                            <textarea name="message" placeholder="Message" rows="8"></textarea>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" name="submit" id="submit" class="button -md -green-5 text-white">
                                    Send Message
                                  </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Footer Section here..-->
                <?php include("footer.php") ?>

            </div>

        </main>
    </div>
    <!-- barba container end -->

    <!-- JavaScript -->
    
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src="js/vendors.js"></script>
    <script src="js/main.js"></script>
    <script>
        $(document).ready(function (){
            $("#form").validate({
                rules:{
                    name: "required",
                    phone:{
                        required: true,
                        number: true,
                        minlength: 10,
                        maxlength: 10
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    message: "required"
                },
                messages:{
                    name:  "Please enter your name",
                    phone: {
                        required: "Please enter Phone Number",
                        number: "Please Enter Valid Phone Number",
                        minlength: "Please Enter Valid Phone Number",
                        maxlength: "Please Enter Valid Phone Number"
                    },
                    email:  {
                        required: "Please enter your Email address",
                        email: "Please enter a valid email address"
                    },
                    message: "Please enter Message"
                },
                submitHandler: function (form){
                    form.submit();
                }
            });
        });

    </script>
</body>
</html>