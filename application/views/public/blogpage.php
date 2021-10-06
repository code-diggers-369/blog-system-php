<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $post_data[0]->article_title; ?></title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>tools/public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="<?php echo base_url(); ?>tools/public/css/mdb.min.css" rel="stylesheet">
    <!-- This script for block key to open inspect element -->
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
    <!-- This script for cover image style -->
    <style>
        .cover-img-container {
            max-height: 500px;
            overflow: hidden;
        }

        .cover-img {
            width: 100%;
            max-height: 600px;
        }
    </style>
    <style>
        .active-like {
            fill: rgb(61, 166, 255);
        }

        .active-dislike {
            fill: red;
        }

        .unactive-like {
            fill: #909090;
        }

        .unactive-dislike {
            fill: #909090;
        }
    </style>
</head>

<body class="postpage-v3" oncontextmenu="return false;">
    <!-- <pre><?php //print_r($post_data) 
                ?></pre> -->

    <!--Main Navigation-->
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

        <section>
            <div class="cover-img-container">
                <img class="cover-img" src="<?php echo base_url() . $post_data[0]->img_path; ?>">
            </div>
        </section>

    </header>
    <!--Main Navigation-->

    <!--Main Layout-->
    <main>

        <div class="container-fluid mb-5">

            <!--Grid row-->
            <div class="row" style="margin-top: -100px;">

                <!--Grid column-->
                <div class="col-md-12 px-lg-5">
                    <!--Card-->
                    <div class="card pb-5 mx-md-3">
                        <div class="card-body">

                            <div class="container">

                                <!--Section heading-->
                                <h1 class="text-center h1 pt-4 mb-3">

                                    <strong><?php echo $post_data[0]->article_title; ?></strong>
                                </h1>

                                <div class="row">
                                    <div class="col-md-12 col-xl-12 d-flex justify-content-center">
                                        <p class="font-small dark-grey-text mb-1">
                                            <strong>Author:</strong> <?php echo $post_data[0]->creater; ?>
                                        </p>
                                        <p class="font-small grey-text mb-0 ml-3">
                                            <i class="far fa-clock-o dark-grey-text"></i> <?php echo $post_data[0]->date; ?>
                                        </p>
                                    </div>
                                </div>

                                <!--Grid row-->
                                <div class="row pt-lg-5 pt-3">

                                    <!--Grid column-->
                                    <div class="col-md-12 col-xl-12">
                                        <form>

                                            <!--Grid row-->
                                            <div class="row mt-3">
                                                <?php echo $post_data[0]->article; ?>

                                                <!-- <p class="dark-grey-text article">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                                                    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                                    cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                                                    id est laborum.</p>

                                                <h4 class="font-weight-bold mt-3 mb-4">
                                                    <strong>Lorem ipsum dolor sit amet</strong>
                                                </h4>

                                                <p class="dark-grey-text article">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                                    doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                                    veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo
                                                    enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                                                    sed quia consequuntur magni dolores eos qui ratione voluptatem sequi
                                                    nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                                                    amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora
                                                    incidunt ut labore et dolore magnam aliquam quaerat voluptatem. </p>

                                                <blockquote class="blockquote">
                                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                        erat a ante.</p>
                                                    <footer class="blockquote-footer">Someone famous in
                                                        <cite title="Source Title">Source Title</cite>
                                                    </footer>
                                                </blockquote>

                                                <p class="dark-grey-text article"> Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit
                                                    laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel
                                                    eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae
                                                    consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p> -->

                                            </div>
                                            <!--Grid row-->

                                            <!--Grid row-->
                                            <div class="row mt-3 mb-4">

                                                <!--Grid column-->
                                                <!-- <div class="col-md-4 mb-2">
                                                    <div class="view zoom z-depth-1">
                                                        <img src="<?php //echo base_url(); 
                                                                    ?>tools/image/blogpage/img (28).jpg" class="img-fluid rounded-0" alt="sample-image">
                                                        <div class="mask flex-center">

                                                        </div>
                                                    </div>
                                                </div> -->
                                                <!--Grid column-->

                                                <!--Grid column-->
                                                <!-- <div class="col-md-4 mb-2">
                                                    <div class="view zoom z-depth-1">
                                                        <img src="<?php //echo base_url(); 
                                                                    ?>tools/image/blogpage/img (41).jpg" class="img-fluid rounded-0 z-depth-1" alt="sample-image">
                                                        <div class="mask flex-center">

                                                        </div>
                                                    </div>

                                                </div> -->
                                                <!--Grid column-->

                                                <!--Grid column-->
                                                <!-- <div class="col-md-4">
                                                    <div class="view zoom z-depth-1">
                                                        <img src="<?php //echo base_url(); 
                                                                    ?>tools/image/blogpage/13.jpg" class="img-fluid rounded-0 z-depth-1" alt="sample-image">
                                                        <div class="mask flex-center">

                                                        </div>
                                                    </div>

                                                </div> -->
                                                <!--Grid column-->

                                            </div>
                                            <!--Grid row-->

                                            <!--Grid row-->
                                            <div class="row mb-2 mt-4">
                                                <!-- <p class="dark-grey-text article">Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                                    laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis
                                                    et quasi architecto beatae vitae dicta sunt explicabo. Ut enim ad minima
                                                    veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam,
                                                    nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit
                                                    qui in ea voluptate velit esse quam nihil molestiae consequatur, vel
                                                    illum qui dolorem eum fugiat quo voluptas nulla.</p>

                                                <li class="dark-grey-text article list-unstyled">
                                                    <strong>Nulla volutpat aliquam velit:</strong>
                                                    <ul>
                                                        <li>Phasellus iaculis neque</li>
                                                        <li>Purus sodales ultricies</li>
                                                        <li>Vestibulum laoreet porttitor sem</li>
                                                        <li>Ac tristique libero volutpat at</li>
                                                        <li>Vestibulum laoreet porttitor sem</li>
                                                    </ul>
                                                </li> -->

                                                <!--Grid column-->
                                                <!-- <div class="col-md-12 my-4">
                                                    <img src="<?php echo base_url(); ?>tools/image/blogpage/city10.jpg" class="img-fluid z-depth-1 rounded-0" alt="sample image">
                                                </div> -->
                                                <!--Grid column-->

                                                <!-- <p class="dark-grey-text article">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                                    doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                                    veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo
                                                    enim ipsam voluptatem quia voluptas sit aspernatur ut perspiciatis unde
                                                    omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                                                    totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                                    architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem
                                                    quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                                                    magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                                                    quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci
                                                    velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore
                                                    magnam aliquam quaerat voluptatem. -->
                                            </div>
                                            <!--Grid row-->

                                            <!--Grid row-->
                                            <div class="row my-5">

                                                <!--Grid column-->
                                                <!-- <div class="col-md-12 text-center">

                                                    <h4 class="text-center font-weight-bold dark-grey-text mt-3 mb-3">
                                                        <strong>Share this post: </strong>
                                                    </h4>

                                                    <button type="button" class="btn btn-fb btn-sm">
                                                        <i class="fab fa-facebook-f left"></i> Facebook</button> -->
                                                <!--Twitter-->
                                                <!-- <button type="button" class="btn btn-tw btn-sm">
                                                        <i class="fab fa-twitter left"></i> Twitter</button> -->
                                                <!--Google +-->
                                                <!-- <button type="button" class="btn btn-gplus btn-sm">
                                                        <i class="fab fa-google-plus-g left"></i> Google +</button> -->

                                                <!-- </div> -->
                                                <!--Grid column-->

                                            </div>
                                            <script>
                                                var a = <?php
                                                        if ($like_data['status'] == 1) {
                                                            echo 1;
                                                        } else {
                                                            echo 0;
                                                        }
                                                        ?>;
                                                var b = <?php
                                                        if ($like_data['status'] == 0) {
                                                            echo 0;
                                                        } else {
                                                            echo 1;
                                                        }
                                                        ?>;

                                                window.onload = function() {
                                                    if (a == 1) {
                                                        $('#like').addClass('active-like');
                                                        $("#dislike").addClass('unactive-dislike');
                                                    } else if (b == 0) {
                                                        $('#dislike').addClass('active-dislike');
                                                        $("#like").addClass('unactive-like');
                                                    } else {
                                                        $("#like").addClass('unactive-like');
                                                        $("#dislike").addClass('unactive-dislike');
                                                    }

                                                }

                                                function getLikeDislikeData(classList) {
                                                    var user_id = <?php $id = $this->session->userdata('id');
                                                                    if ($id) {
                                                                        echo $id;
                                                                    } else {
                                                                        echo "0";
                                                                    } ?>;
                                                    var post_id = <?php echo $post_id ?>;

                                                    if (user_id == 0) {
                                                        alert("Login First Than Like");
                                                        window.location.href = "<?php echo base_url() ?>login"
                                                        return;
                                                    }

                                                    if (classList[0] == 'active-like') {
                                                        $('#like').removeClass('active-like').addClass('unactive-like');
                                                        $('#dislike').removeClass('active-dislike').addClass('unactive-dislike');

                                                        $.ajax({
                                                            method: "POST",
                                                            url: `<?php echo base_url() ?>/home/removelike/${post_id}/${user_id}`,
                                                            success: function(data) {
                                                                setLikesAndDislikeNumbers(data);
                                                            },
                                                            error: function() {
                                                                alert("Login First Than Like");
                                                                window.location.href = "<?php echo base_url() ?>login"

                                                            }
                                                        })

                                                    } else if (classList[0] == 'unactive-like') {
                                                        $('#like').removeClass('unactive-like').addClass('active-like');
                                                        $('#dislike').removeClass('active-dislike').addClass('unactive-dislike');

                                                        $.ajax({
                                                            method: "POST",
                                                            url: `<?php echo base_url() ?>/home/like/${post_id}/${user_id}`,
                                                            success: function(data) {
                                                                setLikesAndDislikeNumbers(data);
                                                            },
                                                            error: function() {
                                                                alert("Login First Than Like");
                                                                window.location.href = "<?php echo base_url() ?>login"
                                                            }
                                                        })
                                                    }

                                                    if (classList[0] == 'active-dislike') {
                                                        $('#dislike').removeClass('active-dislike').addClass('unactive-dislike');
                                                        $('#like').removeClass('active-like').addClass('unactive-like');

                                                        $.ajax({
                                                            method: "POST",
                                                            url: `<?php echo base_url() ?>/home/removelike/${post_id}/${user_id}`,
                                                            success: function(data) {
                                                                setLikesAndDislikeNumbers(data);
                                                            },
                                                            error: function() {
                                                                alert("Login First Than Like");
                                                                window.location.href = "<?php echo base_url() ?>login"
                                                            }
                                                        })
                                                    } else if (classList[0] == 'unactive-dislike') {
                                                        $('#dislike').removeClass('unactive-dislike').addClass('active-dislike');
                                                        $('#like').removeClass('active-like').addClass('unactive-like');

                                                        $.ajax({
                                                            method: "POST",
                                                            url: `<?php echo base_url() ?>/home/dislike/${post_id}/${user_id}`,
                                                            success: function(data) {
                                                                setLikesAndDislikeNumbers(data);
                                                            },
                                                            error: function() {
                                                                alert("Login First Than Like");
                                                                window.location.href = "<?php echo base_url() ?>login"
                                                            }
                                                        })
                                                    }
                                                }

                                                function setLikesAndDislikeNumbers(data) {
                                                    data = JSON.parse(data)
                                                    document.getElementById('like_count').innerText = data.like;
                                                    document.getElementById('dis_like_count').innerText = data.dislike;

                                                }
                                            </script>
                                            <center>
                                                <div>
                                                    <a>
                                                        <svg id="like" onclick="getLikeDislikeData(this.classList)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="25px" height="25px">
                                                            <path d="M0 0h24v24H0V0z" fill="none" />
                                                            <path d="M1 21h4V9H1v12zm22-11c0-1.1-.9-2-2-2h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 1 7.59 7.59C7.22 7.95 7 8.45 7 9v10c0 1.1.9 2 2 2h9c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73v-2z" />
                                                        </svg>
                                                    </a>
                                                    <span id="like_count"><?php echo $like_data['like']; ?>
                                                    </span>
                                                    &nbsp;&nbsp;

                                                    <a>
                                                        <svg id="dislike" onclick="getLikeDislikeData(this.classList)" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                                                            <path d="M0 0h24v24H0z" fill="none" />
                                                            <path d="M15 3H6c-.83 0-1.54.5-1.84 1.22l-3.02 7.05c-.09.23-.14.47-.14.73v2c0 1.1.9 2 2 2h6.31l-.95 4.57-.03.32c0 .41.17.79.44 1.06L9.83 23l6.59-6.59c.36-.36.58-.86.58-1.41V5c0-1.1-.9-2-2-2zm4 0v12h4V3h-4z" />
                                                        </svg>
                                                    </a>
                                                    <span id="dis_like_count">
                                                        <?php echo $like_data['dislike']; ?>
                                                    </span>
                                                </div>
                                            </center>

                                            <!--Grid row-->
                                            <hr class="mt-5">

                                            <!--Posts-->
                                            <section class="text-left mt-4">

                                                <h4 class="font-weight-bold mt-5 mb-5 text-center">
                                                    <strong>Latest news</strong>
                                                </h4>

                                                <!--Carousel Wrapper-->
                                                <div id="multi-item-example" class="carousel slide carousel-multi-item mx-1" data-ride="carousel">



                                                    <!--Slides-->
                                                    <div class="carousel-inner" role="listbox">

                                                        <!--First slide-->
                                                        <div class="carousel-item active">

                                                            <!--Grid row-->
                                                            <div class="row mb-4 mx-1">

                                                                <?php $loopVar =  count($post_data[1]) > 3 ? 3 :  count($post_data[1]); ?>

                                                                <?php for ($i = 0; $i < $loopVar; $i++) {
                                                                ?>
                                                                    <!--Grid column-->
                                                                    <div class="col-lg-4 my-3">
                                                                        <!--Card-->
                                                                        <div class="card" style="height: 100%;">

                                                                            <!--Card image-->
                                                                            <div class="view overlay">
                                                                                <a href="<?php echo base_url() . 'home/blogpage/' . $post_data[1][$i]->post_id ?>">
                                                                                    <img style=" height:200px" src="<?php echo base_url($post_data[1][$i]->img_path); ?>" class="card-img-top" alt="sample image">
                                                                                    <div class="mask rgba-white-slight"></div>
                                                                                </a>
                                                                            </div>
                                                                            <!--/.Card image-->

                                                                            <!--Card content-->
                                                                            <div class="card-body">
                                                                                <!--Title-->
                                                                                <h4 class="card-title">
                                                                                    <strong><?php echo $post_data[1][$i]->article_title; ?></strong>
                                                                                </h4>
                                                                                <hr>


                                                                                <p class="font-small font-weight-bold dark-grey-text mb-1">
                                                                                    <i class="far fa-clock-o"></i> <?php echo $post_data[1][$i]->date; ?>
                                                                                </p>
                                                                                <p class="font-small grey-text mb-0"><?php echo $post_data[1][$i]->user_name; ?></p>
                                                                                <p class="text-right mb-0 font-small font-weight-bold">
                                                                                    <a href="<?php echo base_url() . 'home/blogpage/' . $post_data[1][$i]->post_id ?>">
                                                                                        read more
                                                                                        <i class="fas fa-angle-right"></i>
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

                                                        </div>
                                                        <!--/.First slide-->





                                                    </div>
                                                    <!--/.Slides-->

                                                </div>
                                                <!--/.Carousel Wrapper-->


                                            </section>
                                            <!--/.Posts-->

                                    </div>
                                    <!--/Grid column-->

                                </div>
                                <!--/Grid row-->

                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                    </div>
                    <!--/Card-->
                </div>
                <!--/Grid column-->
            </div>
            <!--/Grid row-->
        </div>

    </main>
    <!--Main Layout-->

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
                        <a href="https://www.facebook.com/mohit.mistry.148/" target="_blank" class="fb-ic">
                            <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-lg"> </i>
                        </a>
                        <!--Twitter-->
                        <a href="https://twitter.com/elonmusk" class="tw-ic" target="_blank">
                            <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-lg"> </i>
                        </a>
                        <!-- Git-hub -->
                        <a href="https://github.com/code-diggers-369" target="_blank" class="gplus-ic">
                            <i class="fab fa-github fa-lg white-text mr-md-5 mr-3 fa-lg"> </i>
                        </a>
                        <!--Linkedin-->
                        <a href="https://www.linkedin.com/in/haresh-prajapati-76271b1a1" class="li-ic" target="_blank">
                            <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-lg"> </i>
                        </a>
                        <!--Instagram-->
                        <a href="https://www.instagram.com/code.diggers/" target="_blank" class="ins-ic">
                            <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-lg"> </i>
                        </a>
                        <!--Youtube-->
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
                © 2019 Copyright: <a href=""> Blog.com </a>
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



    <script>
        new WOW().init();
    </script>

    <script>
        $(document).ready(function() {
            const allimg = document.getElementsByTagName('img');

            for (i = 0; i < allimg.length; i++) {
                allimg[i].style.width = "100%";
            }
        })
    </script>

</body>

</html>