<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Blog</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>tools/public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="<?php echo base_url(); ?>tools/public/css/mdb.min.css" rel="stylesheet">

    <!-- Custom css -->
    <link href="<?php echo base_url(); ?>tools/dist/css/custom.css" rel="stylesheet">
    <script>
        document.onkeydown = function(e) {
            if (event.keyCode == 123) {
                return false;
            }
            if (e.ctrlKey && e.shiftKey && (e.keyCode == 'I'.charCodeAt(0) || e.keyCode == 'i'.charCodeAt(0))) {
                return false;
            }
            if (e.ctrlKey && e.shiftKey && (e.keyCode == 'C'.charCodeAt(0) || e.keyCode == 'c'.charCodeAt(0))) {
                return false;
            }
            if (e.ctrlKey && e.shiftKey && (e.keyCode == 'J'.charCodeAt(0) || e.keyCode == 'j'.charCodeAt(0))) {
                return false;
            }
            if (e.ctrlKey && (e.keyCode == 'U'.charCodeAt(0) || e.keyCode == 'u'.charCodeAt(0))) {
                return false;
            }
            if (e.ctrlKey && (e.keyCode == 'S'.charCodeAt(0) || e.keyCode == 's'.charCodeAt(0))) {
                return false;
            }
        }
    </script>
</head>

<body class="homepage-v4 hidden-sn animated" oncontextmenu="return false;">
    <!-- <pre><?php //print_r($data); 
                ?></pre> -->

    <!--Navigation-->
    <header>

        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg  navbar-light scrolling-navbar white">
            <div class="container-fluid justify-content-center align-items-center">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent-4">
                    <ul class="navbar-nav">

                        <li class="nav-item dropdown ml-4 mb-0">
                            <a href="<?php echo base_url() ?>" class="nav-link dark-grey-text font-weight-bold " aria-expanded="false"> HOMEPAGE </a>

                        </li>

                        <!-- <li class="nav-item dropdown ml-4  mb-0">
                            <a href="#" class="nav-link dropdown-toggle waves-effect waves-light dark-grey-text font-weight-bold" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ABOUT</a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink-4">
                                <a class="dropdown-item waves-effect waves-light" href="#">V1</a>
                                <a class="dropdown-item waves-effect waves-light" href="#">V2</a>
                                <a class="dropdown-item waves-effect waves-light" href="#">V3</a>
                            </div>
                        </li> -->
                        <?php if ($this->session->userdata('type')) :

                        ?>
                            <li class="nav-item ml-4 mb-0">
                                <a class="nav-link waves-effect waves-light dark-grey-text font-weight-bold" href="<?php echo base_url() . $this->session->userdata('type'); ?>">DASHBOARD
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>

                            <li class="nav-item ml-4 mb-0">
                                <a class="nav-link waves-effect waves-light dark-grey-text font-weight-bold" href="<?php echo base_url() ?>home/logout">LOG-OUT
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                        <?php
                        else :
                        ?>
                            <li class="nav-item ml-4 mb-0">
                                <a class="nav-link waves-effect waves-light dark-grey-text font-weight-bold" href="<?php echo base_url() ?>login">LOGIN
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>

                            <li class="nav-item ml-4 mb-0">
                                <a class="nav-link waves-effect waves-light dark-grey-text font-weight-bold" href="<?php echo base_url() ?>register">SIGNUP
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                        <?php
                        endif;

                        ?>


                    </ul>
                </div>

                <ul class="navbar-nav ml-auto nav-flex-icons">

                    <!-- <li class="nav-item">
                        <a class="nav-link waves-effect waves-light">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </li> -->

                </ul>
            </div>

        </nav>
        <!-- /.Navbar -->

    </header>
    <!-- /.Navigation -->

    <!--Main layout-->
    <main class="pt-4">

        <!--Intro-->
        <section>

            <!--Carousel Wrapper-->
            <div id="carousel-example-1z" class="carousel slide carousel-fade carousel-half" data-ride="carousel">
                <!--Indicators-->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                    <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                </ol>
                <!--/.Indicators-->
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                    <!--First slide-->
                    <div class="carousel-item active">
                        <div class="view h-100">
                            <img style="height: 175%;" class="d-block w-lg-100" src="<?php echo base_url(); ?>tools/image/modi.jpg" alt="First slide">
                            <div class="mask rgba-indigo-light">
                                <!-- Caption -->
                                <div class="full-bg-img flex-center white-text">
                                    <ul class="animated fadeIn col-10 list-unstyled">
                                        <li>
                                            <h1 class="h1-responsive font-weight-bold">“A youthful nation like ours must leave an impact in the entire world.”</h1>
                                        </li>
                                        <li>
                                            <p>- PM Narendra Modi</p>
                                        </li>

                                    </ul>
                                </div>
                                <!-- /.Caption -->
                            </div>
                        </div>
                    </div>
                    <!--/First slide-->
                    <!--Second slide-->
                    <div class="carousel-item h-100">
                        <div class="view h-100">
                            <img class="d-block h-100 w-lg-100" src="<?php echo base_url(); ?>tools/image/kalamsaheb.jpg" alt="Second slide">
                            <div class="mask rgba-stylish-light">
                                <!-- Caption -->
                                <div class="full-bg-img flex-center white-text">
                                    <ul class="animated fadeIn col-10 list-unstyled">
                                        <li>
                                            <h1 class="h1-responsive font-weight-bold">“You have to dream before your dreams can come true.”</h1>
                                        </li>
                                        <li>
                                            <p>- Dr APJ Abdul Kalam</p>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /.Caption -->
                            </div>
                        </div>
                    </div>
                    <!--/Second slide-->
                    <!--Third slide-->
                    <div class="carousel-item">
                        <div class="view h-100">
                            <img style="height : 120%;" class="d-block w-lg-100" src="<?php echo base_url(); ?>tools/image/elonmusk.jpg" alt="Third slide">
                            <div class="mask rgba-black-light">
                                <!-- Caption -->
                                <div class="full-bg-img flex-center white-text">
                                    <ul class="animated fadeIn col-10 list-unstyled">
                                        <li>
                                            <h1 class="h1-responsive font-weight-bold">"I've actually not read any books on time management."</h1>
                                        </li>
                                        <li>
                                            <p>- Elon Musk</p>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /.Caption -->
                            </div>
                        </div>
                    </div>
                    <!--/Third slide-->
                </div>
                <!--/.Slides-->
                <!--Controls-->
                <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->
            </div>
            <!--/.Carousel Wrapper-->

        </section>
        <!--/Intro-->

        <!--Blog section-->
        <section>
            <div class="container">

                <!--Section heading-->
                <h2 class="text-center h2 my-5 pt-4">Recent posts</h2>
                <!--Section description-->
                <p class="text-center dark-grey-text w-responsive mx-auto mb-5">Knowladge is wealth. By the use of proper knolawdge you can do anything that you want. we are trying to share over knowladge for making good skilled social Human.</p>

                <!--Grid row-->
                <div class="row text-center mb-2">

                    <?php foreach ($data['post_data'] as $row) :
                        $img_path = isset($row->img_path) ? base_url() . $row->img_path : "";
                    ?>
                        <!-- custom card -->
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                            <div class="card card-small card-post card-post--1" style="height: 100%;">
                                <a href="<?php echo base_url() . 'home/blogpage/' . $row->post_id; ?>">
                                    <div class="card-post__image" style="background-image: url('<?php echo $img_path ?>');">


                                        <!-- <a href="#" class="card-post__category badge badge-pill badge-info">Travel</a>
                                 <div class="card-post__author d-flex mt-2 mb-2">
                                    <a href="#" class="card-post__author-avatar card-post__author-avatar--small" style="background-image: url('https://designrevision.com/demo/shards-dashboard-lite/images/avatars/1.jpg');">Written by James Jamerson</a>
                                    </div> -->
                                    </div>
                                </a>

                                <div style="overflow: hidden; " class="card-body">
                                    <h5 class="card-title mt-2">
                                        <a class="text-fiord-blue" href="<?php echo base_url() . 'home/blogpage/' . $row->post_id ?>"><?php echo $row->article_title ?></a>
                                    </h5>
                                    <p class="card-text d-inline-block mb-3">
                                        <?php echo $row->short_description ?>
                                    </p>
                                    <div class="text-muted"><?php echo $row->date ?></div>
                                </div>
                                <div class="card-footer text-muted border-top py-3">
                                    <span class="d-inline-block">By
                                        <a class="text-fiord-blue" href="<?php echo base_url() . 'home/userblog/' . $row->creater; ?>">
                                            <?php echo $row->creater ?>
                                        </a>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                    <?php

                    endforeach; ?>


                </div>
                <!--Grid row-->



                <!--Pagination -->
                <nav class="my-4 flex-center">
                    <p id="pagination-here"></p>
                </nav>
                <!--/Pagination -->

            </div>

        </section>
        <!--Blog section-->

        <!--Latest posts-->
        <section>
            <div class="container-fluid grey lighten-3 mb-0 pb-0">
                <div class="container">
                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-lg-4 col-md-12">
                            <h6 class="font-weight-bold mt-5 mb-3">ABOUT</h6>
                            <hr class="mb-5">
                            <img src="<?php echo base_url(); ?>tools/image/img (108).jpg" alt="sample image" class="img-fluid z-depth-1">
                            <p class="mt-4 mb-5">Hey... We have amazing website where you can post your thinking as form of post.<br>We are so happy because you visit this site. <br> I hope you gave valueable information from this site.<br> Thank You</p>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-4 col-md-6">
                            <h6 class="font-weight-bold mt-5 mb-3">LATESTS POSTS</h6>
                            <hr class="mb-5">




                            <?php foreach ($data['new_posts'] as $value) { ?>

                                <!--Grid row-->
                                <div style="overflow: hidden;" class="row">

                                    <!--Grid column-->
                                    <div class="col-4">

                                        <!--Image-->
                                        <div class="view overlay z-depth-1 mb-3">
                                            <a href="<?php echo base_url() . 'home/blogpage/' . $value->post_id ?>">
                                                <img src="<?php echo base_url($value->img_path); ?>" class="img-fluid" alt="Post">
                                                <div class="mask rgba-white-slight"></div>
                                            </a>
                                        </div>

                                    </div>
                                    <!--Grid column-->

                                    <!--Second column-->
                                    <div class="col-7 mb-1">

                                        <!--Post data-->
                                        <div class="">
                                            <p class="mb-1">
                                                <a href="<?php echo base_url() . 'home/blogpage/' . $value->post_id ?>" class="text-hover font-weight-bold"> <?php echo $value->article_title; ?> </a>
                                            </p>
                                            <p class="font-small grey-text">
                                                <em><?php echo $value->date; ?></em>
                                            </p>
                                        </div>

                                    </div>
                                    <!--Second column-->

                                </div>
                                <!--Grid row-->
                            <?php } ?>

                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-4 col-md-6">
                            <h6 class="font-weight-bold mt-5 mb-3">OLDER POSTS</h6>
                            <hr class="mb-5">


                            <?php foreach ($data['old_posts'] as $value) { ?>

                                <!--Grid row-->
                                <div style="overflow: hidden;" class="row">

                                    <!--Grid column-->
                                    <div class="col-4">

                                        <!--Image-->
                                        <div class="view overlay z-depth-1 mb-3">
                                            <a href="<?php echo base_url() . 'home/blogpage/' . $value->post_id ?>">
                                                <img src="<?php echo base_url($value->img_path); ?>" class="img-fluid" alt="Post">
                                                <div class="mask rgba-white-slight"></div>
                                            </a>
                                        </div>

                                    </div>
                                    <!--Grid column-->

                                    <!--Second column-->
                                    <div class="col-7 mb-1">

                                        <!--Post data-->
                                        <div class="">
                                            <p class="mb-1">
                                                <a href="<?php echo base_url() . 'home/blogpage/' . $value->post_id ?>" class="text-hover font-weight-bold"> <?php echo $value->article_title; ?> </a>
                                            </p>
                                            <p class="font-small grey-text">
                                                <em><?php echo $value->date; ?></em>
                                            </p>
                                        </div>

                                    </div>
                                    <!--Second column-->

                                </div>
                                <!--Grid row-->
                            <?php } ?>



                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                </div>
            </div>

        </section>
        <!--/Latest posts-->

    </main>
    <!--Main layout-->

    <!--Footer-->
    <footer class="page-footer stylish-color-dark text-center text-md-left mt-0 pt-4">

        <!--Footer Links-->
        <div class="container">

            <!-- Footer links -->
            <div class="row text-center text-md-left mt-3 pb-3">

                <!--First column-->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">About me</h6>
                    <p style=" text-align: justify;
                    text-justify: inter-word;">Hii... I am Mohit Arvindbhai Mistry.<br> I am Computer Science student. Apart from that I also working as developer and make documents. <br> I am from Navsari-Gujarat.</p>
                </div>
                <!--/.First column-->

                <hr class="w-100 clearfix d-md-none">

                <!--Second column-->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Category</h6>
                    <p>
                        <a href="#!">Windows</a>
                    </p>
                    <p>
                        <a href="#!">Travel</a>
                    </p>
                    <p>
                        <a href="#!">Work</a>
                    </p>
                    <p>
                        <a href="#!">Android</a>
                    </p>
                </div>
                <!--/.Second column-->

                <hr class="w-100 clearfix d-md-none">

                <!--Third column-->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
                    <p>
                        <a href="#!">Codediggers</a>
                    </p>
                    <p>
                        <a href="#!">Media about me</a>
                    </p>
                    <p>
                        <a href="#!">About India</a>
                    </p>
                    <p>
                        <a href="#!">Help</a>
                    </p>
                </div>
                <!--/.Third column-->

                <hr class="w-100 clearfix d-md-none">

                <!--Fourth column-->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                    <p>
                        <i class="fas fa-home mr-3"></i> Navsari, Gujarat, India
                    </p>
                    <p>
                        <i class="fas fa-envelope mr-3"></i> example@example.com
                    </p>
                    <p>
                        <i class="fas fa-phone mr-3"></i> + 1234567890
                    </p>
                    <p>
                        <i class="fas fa-print mr-3"></i> + 1234567890
                    </p>
                </div>
                <!--/.Fourth column-->

            </div>
            <!-- Footer links -->

            <hr>

            <div class="row py-3 d-flex align-items-center">

                <!--Grid column-->
                <div class="col-md-7 col-lg-8">

                    <!--Copyright-->
                    <p class="text-center text-md-left grey-text">
                        © 2021 Copyright: <a href=""> Blog.com </a>
                    </p>
                    <!--/.Copyright-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-5 col-lg-4 ml-lg-0">

                    <!--Social buttons-->
                    <div class="social-section text-center text-md-left">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item mx-0">
                                <a href="https://www.facebook.com/mohit.mistry.148/" target="_blank" class="btn-floating btn-sm rgba-white-slight mr-xl-4">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item mx-0">
                                <a href="https://twitter.com/elonmusk" target="_blank" class="btn-floating btn-sm rgba-white-slight mr-xl-4">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item mx-0">
                                <a href="https://www.instagram.com/code.diggers/" target="_blank" class="btn-floating btn-sm rgba-white-slight mr-xl-4">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li class="list-inline-item mx-0">
                                <a href="https://www.youtube.com/channel/UCcbZ7AmY35Kps985i5UIIKA" target="_blank" class="btn-floating btn-sm rgba-white-slight mr-xl-4">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--/.Social buttons-->

                </div>
                <!--Grid column-->

            </div>

        </div>

    </footer>
    <!--/.Footer-->

    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="<?php echo base_url(); ?>tools/public/js/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="<?php echo base_url(); ?>tools/public/js/popper.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?php echo base_url(); ?>tools/public/js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?php echo base_url(); ?>tools/public/js/mdb.min.js"></script>

    <script type="text/javascript">
        /* WOW.js init */
        new WOW().init();
    </script>

    <script>
        // Material Select Initialization
        $(document).ready(function() {
            $('.mdb-select').material_select();
        });
    </script>
    <script>
        // MDB Lightbox Init
        $(function() {
            $("#mdb-lightbox-ui").load("<?php echo base_url(); ?>tools/public/lightbox/mdb-lightbox-ui.html");
        });
    </script>

    <!-- paging -->
    <script src="<?php echo base_url() ?>tools/dist/js/paging.js"></script>

    <script>
        // $('.demo').bootpag({
        //     total: 50,
        //     page: 2,
        //     maxVisible: 5,
        //     leaps: true,
        //     firstLastUse: true,
        //     first: '←',
        //     last: '→',
        //     wrapClass: 'pagination',
        //     // activeClass: 'active',
        //     activeClass: 'page-item active',
        //     disabledClass: 'disabled',
        //     nextClass: 'next',
        //     prevClass: 'prev',
        //     lastClass: 'last',
        //     firstClass: 'first'
        // }).on("page", function(event, num) {
        //     $(".content4").html("Page " + num); // or some ajax content loading...
        // });

        $('#pagination-here').bootpag({

            total: <?php echo $data['total_pages'] ?>,
            page: <?php echo $data['active_page'] ?>,
            maxVisible: 5,
            leaps: true,
            firstLastUse: true,
            first: '←',
            last: '→',
            wrapClass: 'pagination',
            activeClass: 'active',
            disabledClass: 'disabled',
            nextClass: 'next',
            prevClass: 'prev',
            lastClass: 'last',
            firstClass: 'first'
        }).on("page", function(event, num) {

            window.location.href = `?page=${num}`
            // ... after content load -> change total to 10
            $(this).bootpag({
                maxVisible: 5
            });
        });
    </script>
</body>

</html>