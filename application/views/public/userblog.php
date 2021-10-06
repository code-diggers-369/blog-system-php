<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title><?php echo $data['user_data']->user_name ?> blog</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>tools/public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="<?php echo base_url(); ?>tools/public/css/mdb.min.css" rel="stylesheet">
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

<body class="homepage-v1 hidden-sn animated" oncontextmenu="return false;">
    <!-- <pre><?php// print_r($data); ?> 
</pre>-->
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

                <!-- <ul class="navbar-nav ml-auto nav-flex-icons">
                    <li class="nav-item ">
                        <a class="nav-link waves-effect waves-light">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light">
                            <i class="fab fa-google-plus-g"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-effect waves-light">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
</ul> -->
            </div>

        </nav>
        <!-- /.Navbar -->

    </header>
    <!-- /.Navigation -->

    <!--Main layout-->
    <main>

        <!--Intro-->
        <section>
            <div class="container-fluid">

                <!--Excerpt-->
                <br>
                <h1 style="font-size: xx-large;" class="text-center dark-grey-text pb-3">
                    <strong><?php echo $data['user_data']->user_name; ?>'S</strong> BLOG
                </h1>

                <p class="grey-text text-center mb-4 text-uppercase spacing">Welcome on my blog. </p>



            </div>
        </section>
        <!--/Intro-->

        <!--Blog section-->
        <section style="width: 100%;">
            <div class="container-fluid grey lighten-4">
                <hr class="my-5">
                <div class="container">

                    <!--Blog-->
                    <div class="row mt-5 pt-3">

                        <!--Main listing-->
                        <div class="col-lg-8 col-12 mt-1 mx-lg-4">

                            <!--Section: Blog v.3-->
                            <section class="section extra-margins pb-3 text-center text-lg-left">

                                <!--Grid row-->
                                <div class="row mb-4">

                                    <?php foreach ($data['post_data'] as $post_value) {
                                    ?>
                                        <!--Grid column-->
                                        <div class="col-md-12 mb-5">
                                            <!--Card-->
                                            <div class="card">

                                                <!--Card image-->
                                                <div class="view overlay">
                                                    <a href="<?php echo base_url() . 'home/blogpage/' . $post_value->post_id ?>">
                                                        <img src="<?php echo base_url() . $post_value->img_path; ?>" class="card-img-top" alt="">
                                                        <div class="mask rgba-white-slight"></div>
                                                    </a>
                                                </div>
                                                <!--/.Card image-->

                                                <!--Card content-->
                                                <div class="card-body mx-4">
                                                    <!--Title-->
                                                    <h4 class="card-title">
                                                        <strong><?php echo $post_value->article_title; ?></strong>
                                                    </h4>
                                                    <hr>
                                                    <!--Text-->
                                                    <p class="dark-grey-text mb-3"><?php echo $post_value->short_description; ?>
                                                    </p>
                                                    <p class="font-small font-weight-bold blue-grey-text mb-1">
                                                        <i class="far fa-clock-o"></i> <?php echo $post_value->date; ?>
                                                    </p>
                                                    <p class="text-right mb-0 text-uppercase dark-grey-text font-weight-bold">
                                                        <a href="<?php echo base_url() . 'home/blogpage/' . $post_value->post_id ?>">read more
                                                            <i class="fas fa-chevron-right" aria-hidden="true"></i>
                                                        </a>
                                                    </p>
                                                </div>
                                                <!--/.Card content-->

                                            </div>
                                            <!--/.Card-->

                                        </div>
                                        <!--Grid column-->
                                    <?php } ?>

                                </div>
                                <!--/Grid row-->



                            </section>
                            <!--Section: Blog v.3-->

                            <!--Pagination dark grey-->
                            <nav class="mb-5 pb-2">
                                <!--Pagination -->
                                <nav class="my-4 flex-center">
                                    <p id="pagination-here"></p>
                                </nav>
                                <!--/Pagination -->
                            </nav>
                            <!--Pagination dark grey-->

                        </div>
                        <!--Main listing-->

                        <!--Sidebar-->
                        <div class="col-lg-3 col-12 mt-1">

                            <!--Card-->
                            <div class="card">

                                <!--Card image-->
                                <div class="view overlay">
                                    <?php if (!empty($data['user_data']->profile_pic)) { ?>
                                        <img src="<?php echo base_url() . $data['user_data']->profile_pic; ?>" class="card-img-top" alt="">
                                    <?php } else { ?>
                                        <img src="<?php echo base_url("uploads\users\avtar.jpg"); ?>" class="card-img-top" alt="">
                                    <?php } ?>
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <!--/.Card image-->

                                <!--Card content-->
                                <div class="card-body">
                                    <!--Title-->
                                    <h5 class="card-title dark-grey-text text-center grey lighten-4 py-2">
                                        <strong> <?php echo $data['user_data']->user_name; ?> </strong>
                                    </h5>

                                    <!--Description-->
                                    <p class="mt-3 dark-grey-text font-small ">
                                        Profession :<em> <?php echo $data['user_data']->profession; ?> </em><br>
                                        Moblie : <em><?php echo $data['user_data']->moblie; ?> </em> <br>
                                        Website : <a href="<?php echo $data['user_data']->website; ?>" target="_blank"><?php echo $data['user_data']->website; ?></a>

                                    </p>

                                    <ul class="list-unstyled list-inline-item circle-icons d-flex justify-content-around">
                                        <!--Facebook-->
                                        <li>
                                            <a href="https://www.facebook.com/<?php echo $data['user_data']->facebook; ?>" target="_blank">
                                                <i class="fab fa-facebook-f"> </i>
                                            </a>
                                        </li>
                                        <!--Twitter-->
                                        <li>
                                            <a href="https://twitter.com/<?php echo $data['user_data']->twitter; ?>" target="_blank">
                                                <i class="fab fa-twitter"> </i>
                                            </a>
                                        </li>
                                        <!--Github-->
                                        <li>
                                            <a class="" href="https://github.com/<?php echo $data['user_data']->github; ?>" target="_blank">
                                                <i class="fab fa-github"> </i>
                                            </a>
                                        </li>

                                        <!--Instagram-->
                                        <li>
                                            <a class="" href="https://www.instagram.com/<?php echo $data['user_data']->instagram; ?>" target="_blank">
                                                <i class="fab fa-instagram"> </i>
                                            </a>
                                        </li>

                                    </ul>

                                </div>
                                <!--/.Card content-->

                            </div>
                            <!--/.Card-->

                        </div>
                        <!--Sidebar-->

                    </div>
                    <!--Blog-->

                </div>

            </div>

        </section>
        <!--Blog section-->

        <!--Latest posts-->
        <section>
            <div class="container-fluid white mb-0 pb-0">
                <hr class="mt-0">
                <div class="container">
                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-lg-4 col-md-12">
                            <h6 class="font-weight-bold mt-5 mb-3">ABOUT</h6>
                            <hr class="mb-5">
                            <img src="<?php echo base_url(); ?>tools/image/userblog/img (37).jpg" alt="sample image" class="img-fluid z-depth-1">
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
    <footer class="page-footer stylish-color mt-0 pt-0 text-center text-md-left">

        <!--Footer Links-->
        <div class="container">

            <!--First row-->
            <div class="row">

                <!--First column-->
                <div class="col-md-12 py-4">

                    <div class="footer-socials mb-5 flex-center">

                        <!--Facebook-->
                        <a href="https://www.facebook.com/mohit.mistry.148/" class="fb-ic" target="_blank">
                            <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-lg"> </i>
                        </a>
                        <!--Twitter-->
                        <a href="https://twitter.com/elonmusk" class="tw-ic" target="_blank">
                            <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-lg"> </i>
                        </a>
                        <!--Github +-->
                        <a href="https://github.com/code-diggers-369" class="gplus-ic" target="_blank">
                            <i class="fab fa-github fa-lg white-text mr-md-5 mr-3 fa-lg"> </i>
                        </a>
                        <!--Linkedin-->
                        <a href="https://www.linkedin.com/in/haresh-prajapati-76271b1a1" class="li-ic" target="_blank">
                            <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-lg"> </i>
                        </a>
                        <!--Instagram-->
                        <a href="https://www.instagram.com/code.diggers/" class="ins-ic" target="_blank">
                            <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-lg"> </i>
                        </a>
                        <!--Pinterest-->
                        <a href="https://www.youtube.com/channel/UCcbZ7AmY35Kps985i5UIIKA" target="_blank" class="pin-ic">
                            <i class="fab fa-youtube fa-lg white-text fa-lg"> </i>
                        </a>
                    </div>
                </div>
                <!--/First column-->
            </div>
            <!--/First row-->
        </div>
        <!--/Footer Links-->

        <!--Copyright-->
        <div class="footer-copyright text-center py-3">
            <div class="container-fluid">
                © 2021 Copyright: <a href=""> Blog.com </a>
            </div>
        </div>
        <!--/Copyright-->

    </footer>
    <!--/Footer-->

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
    <!-- Paging file -->
    <script src="<?php echo base_url() ?>tools/dist/js/paging.js"></script>
    <script>
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