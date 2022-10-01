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
    <title>Become a teacher</title>
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



                <section class="page-header -type-1 mt-5 bg-light-4">
                    <div class="container">
                        <div class="page-header__content">
                            <div class="row justify-center text-center">
                                <div class="col-auto">
                                    <div data-anim="slide-up delay-1">

                                        <h1 class="page-header__title mt-90 text-green-5">Become a Teacher</h1>

                                    </div>

                                    <div data-anim="slide-up delay-2">

                                        <p class="page-header__text">We’re on a mission to deliver engaging, curated courses at a reasonable price.</p>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </section>
                <section class="layout-pt-md layout-pb-lg bg-light-4">
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

                    <form class="contact-form row y-gap-30 pt-60 lg:pt-40" action="teacher_mail.php" id="form" method="post">
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
                                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Email Address</label>
                                <input type="email" name="email" id="email">
                            </div>
                            <div class="col-lg-6">
                                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Playing Experience (in years)</label>
                                <input type="number" name="experience" min="0">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Enter Video Link of Showcasing Your Skill</label>
                                <input type="text" name="title">
                            </div>
                            <div class="col-lg-6">
                                <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Enter Instruments / Courses You Can Teach</label>
                                <input type="text" name="inst_course">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <button type="submit" name="submit" id="submit" class="button -md -green-5 text-white">
                                    Apply
                                </button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
                 </div>
                </section>



                <section class="layout-pt-lg layout-pb-md">
                    <div data-anim-wrap="" class="container animated">
                        <div class="row y-gap-50 justify-between items-center">
                            <div class="col-lg-7 pr-60">
                                <img src="img/become_teacher.jpg" alt="image">
                            </div>

                            <div class="col-lg-5">
                                <h2 class="text-45 lh-15">Become an Instructor <span class="text-green-5">Today</span></h2>
                                <p class="text-dark-1 mt-25">Use the list below to bring attention to your product’s key<br> differentiator.</p>

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
                    email: {
                        required: true,
                        email: true
                    },
                    experience: "required",
                    inst_course: "required"
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
                    experience: "Please enter your Playing Experience",
                    inst_course: "Please enter Instruments / Courses You Can Teach"
                },
                submitHandler: function (form){
                    form.submit();
                }
            });
        });

    </script>
</body>



</html>