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
    <link rel="stylesheet" href="css/main.css"><link rel="stylesheet" href="css/custom.css">

    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <title>Book a Free Trial</title>
    <style>
        form .error{
            color: #ff0000;
        }
    </style>

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



            <section class="page-header -type-1 mt-5">
                <div class="container">
                    <div class="page-header__content">
                        <div class="row justify-center text-center">
                            <div class="col-auto">
                                <div data-anim="slide-up delay-1">

                                    <h1 class="page-header__title mt-90 text-green-5">Book a Free Trial</h1>

                                </div>

                                <div data-anim="slide-up delay-2">

                                    <p class="page-header__text">We’re on a mission to deliver engaging, curated courses at a reasonable price.</p>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </section>
            <section class="layout-pt-md layout-pb-lg">
                <div data-anim-wrap="" class="container animated">
                    <div class="col-lg-12">
                        <?php if (isset($_GET['message'])){?>
                            <?php if ($_GET['message'] == "success"){?>
                                <div class="alert alert-success">
                                    Your request has been sent successfully. Our team will contact you soon.
                                </div>
                            <?php }?>
                            <?php if ($_GET['message'] == "error"){?>
                                <div class="alert alert-danger">
                                    Something went wrong please try again later.
                                </div>
                            <?php }?>
                        <?php }?>
                        <div class="px-40 py-40 bg-white border-light shadow-1 rounded-8">

                            <form class="contact-form row y-gap-30 pt-60 lg:pt-40" action="book_mail.php" id="form" method="post">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Name</label>
                                        <input type="text" name="name" id="name">
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Phone Number</label>
                                        <input type="text" name="phone" id="phone">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Preferred Day and Slot</label>
                                        <br>
                                        <input type="date" name="day_slot" id="day_slot">
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Choose Your Category</label>
                                        <select name="category">
                                            <option selected disabled>---- Select Any One ----</option>
                                            <option>Keyboard/Piano</option>
                                            <option>Guitar</option>
                                            <option>Ukulele</option>
                                            <option>Vocals</option>
                                            <option>Flute</option>
                                            <option>Saxophone</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <button type="submit" name="submit" id="submit" class="button -md -green-5 text-white">
                                                Book Free Trial
                                        </button>
                                    </div>
                                </div>
                            </form>
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

<script src="js/vendors.js"></script>
<script src="js/main.js"></script>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
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
                day_slot: "required",
                category: "required"
            },
            messages:{
                name:  "Please enter your name",
                phone: {
                    required: "Please enter Phone Number",
                    number: "Please Enter Valid Phone Number",
                    minlength: "Please Enter Valid Phone Number",
                    maxlength: "Please Enter Valid Phone Number"
                },
                day_slot: "Please enter Day and slot",
                category: "Please Select Your Category"
            },
            submitHandler: function (form){
                form.submit();
            }
        });
    });

</script>
</body>



</html>