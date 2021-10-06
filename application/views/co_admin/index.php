<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Co-Admin | Dashboard</title>


  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>tools/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>tools/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>tools/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
  <!-- fullCalendar -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>tools/plugins/fullcalendar/main.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>tools/plugins/fontawesome-free/css/all.min.css" />
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>tools/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css" />
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>tools/plugins/icheck-bootstrap/icheck-bootstrap.min.css" />
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>tools/plugins/jqvmap/jqvmap.min.css" />
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>tools/dist/css/adminlte.min.css" />
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>tools/plugins/overlayScrollbars/css/OverlayScrollbars.min.css" />
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>tools/plugins/daterangepicker/daterangepicker.css" />
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>tools/plugins/summernote/summernote-bs4.min.css" />

  <!-- For text editor -->
  <!-- CodeMirror -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>tools/plugins/codemirror/codemirror.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>tools/plugins/codemirror/theme/monokai.css">


  <!-- jQuery -->
  <script src="<?php echo base_url(); ?>tools/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?php echo base_url(); ?>tools/plugins/jquery-ui/jquery-ui.min.js"></script>
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

<body class="hold-transition sidebar-mini layout-fixed " id="bod" oncontextmenu="return false;">
  <div class="wrapper">



    <?php include('common/header.php'); ?>
    <?php include('common/sidebar.php'); ?>



    <!-- Content Wrapper. Contains page content -->
    <?php $this->load->view("co_admin/co_admin_index/" . $page . ".php"); ?>

    <!-- /.content-wrapper -->

    <!-- /.footer -->
    <?php include('common/footer.php'); ?>

    <!-- ./wrapper -->

    <?php include('common/script.php') ?>

</body>

</html>