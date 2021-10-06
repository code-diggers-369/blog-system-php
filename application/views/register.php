<?php
// This is for location fetching.
/* function getVisIpAddr()
{

    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    } else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        return $_SERVER['REMOTE_ADDR'];
    }
} */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>tools/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>tools/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>tools/dist/css/adminlte.min.css">
</head>

<body class="hold-transition register-page">


    <?php
    // PHP code to obtain country, city,  
    // continent, etc using IP Address 

    // $ip = '114.31.148.41';

    // Use JSON encoded string and converts 
    // it into a PHP variable 
    // $ipdat = @json_decode(file_get_contents(
    //     "http://www.geoplugin.net/json.gp?ip=" . $ip
    // ));
    // echo "<pre>";
    // print_r($ipdat);
    // echo "</pre>";

    ?>


    <div class="register-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="" class="h1"><b>Register</b></a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Register a new membership</p>

                <form action="<?php echo base_url(); ?>register/validation" method="post">
                    <div class="input-group mb-3">
                        <input type="text" name="user_name" class="form-control" placeholder="User name">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <small>
                        <span class="text-danger"><?php echo form_error('user_name'); ?></span>
                    </small>
                    <div class="input-group mb-3">
                        <input type="email" name="user_email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <small>
                        <span class="text-danger"><?php echo form_error('user_email'); ?></span>
                    </small>
                    <div class="input-group mb-3">
                        <input type="password" name="user_password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <small>
                        <span class="text-danger"><?php echo form_error('user_password'); ?></span>
                    </small>

                    <!-- Getting Country from ip address -->
                    <!-- <input type="hidden" name="country" id="country" value="<?php // echo $ipdat->geoplugin_countryName; 
                                                                                    ?>"> -->

                    <!-- Google capcha -->

                    <!-- <div class="form-group">
                        <div class="g-recaptcha" data-sitekey="6LdwIl4aAAAAAIEjIIKYPwd7hoRWLunPgAUmrjRI" name="user_capcha"></div>
                    </div>

                    <small>
                        <span class="text-danger"><?php// echo form_error('user_capcha'); ?></span>
                    </small> -->
                    <!-- /Google capcha -->



                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                </form>
                <a href="<?php echo base_url(); ?>login/index" class="text-center">I already have a membership</a>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>tools/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url(); ?>tools/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Admin-->
    <script src="<?php echo base_url(); ?>tools/dist/js/adminlte.min.js"></script>
    <!-- Google Capcha -->
    <!-- <script src='https://www.google.com/recaptcha/api.js'></script> -->
</body>

</html>