<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>tools/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>tools/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>tools/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="" class="h1"><b>Admin</b></a>
            </div>
            <?php echo $this->session->userdata('name'); ;?>

            <div class="card-body">

                <div class="panel-body">
                    <?php
                    if ($this->session->flashdata('message')) {
                        echo '
                    <div class="alert alert-danger">
                        ' . $this->session->flashdata("message") . '
                    </div>
                    ';
                    }
                    ?>
                    <form action="<?php echo base_url(); ?>login/validation" method="post">
                        <div class="input-group mb-3">
                            <input type="text" name="user_email" class="form-control" value="<?php echo set_value('user_email'); ?>" placeholder="Email" />
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <span class="text-danger"><?php echo form_error('user_email'); ?></span>
                        <div class="input-group mb-3">
                            <input type="password" name="user_password" class="form-control" value="<?php echo set_value('user_password'); ?>" placeholder="Password" />
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <span class="text-danger"><?php echo form_error('user_password'); ?></span>


                        <!-- <div class="form-group">
                            <div class="g-recaptcha" data-sitekey="6LdwIl4aAAAAAIEjIIKYPwd7hoRWLunPgAUmrjRI"></div>
                        </div> -->
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>



                    </form>
                </div>

                <!-- /.social-auth-links -->

                <!-- <p class="mb-1">
                    <a href="">I forgot my password</a>
                </p> -->
                <p class="mb-0">
                    <a href="<?php echo base_url(); ?>register/index" class="text-center">Register a new membership</a>
                </p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>tools/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url(); ?>tools/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Admin -->
    <script src="<?php echo base_url(); ?>tools/dist/js/adminlte.min.js"></script>
    <!-- Google Capcha -->
    <!-- <script src='https://www.google.com/recaptcha/api.js'></script> -->
</body>

</html>