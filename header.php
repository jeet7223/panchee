<?php
    if (basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']) == "index.php" or
basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']) == "panchee" ) {?>
        <header data-anim="fade" data-add-bg="custom-header" class="header -type-1 js-header shadow">
    <?php }
    else {?>
        <header data-anim="fade" class="header -type-1 js-header shadow custom-header">
    <?php } ?>

    <div class="header__container">
        <div class="row justify-between items-center">

            <div class="col-6">
                <div class="header-left">

                    <div class="header__logo ">
                        <a data-barba href="index.php">
                            <img src="img/logo.png" alt="logo">
                        </a>
                    </div>




                </div>
            </div>


            <div class="header-menu js-mobile-menu-toggle ">
                <div class="header-menu__content">
                    <div class="mobile-bg js-mobile-bg"></div>



                    <div class="menu js-navList">
                        <ul class="menu__nav text-white -is-active">
                            <li>
                                <a data-barba href="index.php">
                                    Home <i class=" text-13 ml-10"></i>
                                </a>


                            </li>

                            <li class=" -has-mega-menu">
                                <a data-barba href="about.php">About Us<i class=" text-13 ml-10"></i></a>
                            </li>

                            <li>
                                <a data-barba href="course.php">Courses<i class="text-13 ml-10"></i></a>
                            </li>

                            <li>
                                <a data-barba href="teacher.php">Become a teacher<i class=" text-13 ml-10"></i></a>

                            </li>

                            <li>
                                <a data-barba href="gallery.php">Gallery<i class=" text-13 ml-10"></i></a>

                            </li>


                            <li>
                                <a data-barba href="contact.php">Contact</a>
                            </li>
                        </ul>
                    </div>

                    <div class="mobile-footer px-20 py-20 border-top-light js-mobile-footer">
                        <div class="mobile-footer__number">
                            <div class="text-17 fw-500 text-dark-1">Call us</div>
                            <div class="text-17 fw-500 text-purple-1">800 388 80 90</div>
                        </div>

                        <div class="lh-2 mt-10">
                            <div>329 Queensberry Street,<br> North Melbourne VIC 3051, Australia.</div>
                            <div>hi@panchee.com</div>
                        </div>

                        <div class="mobile-socials mt-10">

                            <a href="#" class="d-flex items-center justify-center rounded-full size-40">
                                <i class="fa fa-facebook"></i>
                            </a>

                            <a href="#" class="d-flex items-center justify-center rounded-full size-40">
                                <i class="fa fa-twitter"></i>
                            </a>

                            <a href="#" class="d-flex items-center justify-center rounded-full size-40">
                                <i class="fa fa-instagram"></i>
                            </a>

                            <a href="#" class="d-flex items-center justify-center rounded-full size-40">
                                <i class="fa fa-linkedin"></i>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="header-menu-close" data-el-toggle=".js-mobile-menu-toggle">
                    <div class="size-40 d-flex items-center justify-center rounded-full bg-white">
                        <div class="icon-close text-dark-1 text-16"></div>
                    </div>
                </div>

                <div class="header-menu-bg"></div>
            </div>


            <div class="col-auto">
                <div class="header-right d-flex items-center">
                    <div class="header-right__icons text-white d-flex items-center">




                        <div class="d-none xl:d-block ml-20">
                            <button class="text-white items-center" data-el-toggle=".js-mobile-menu-toggle">
                                <i class="text-11 icon icon-mobile-menu"></i>
                            </button>
                        </div>

                    </div>


                </div>
            </div>

        </div>
    </div>
</header>
