<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div>
        <!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <a href="<?php echo base_url(); ?>co_admin/total_posts" class="small-box bg-primary">
            <div class="inner">
              <h3><?php echo $total_post; ?></h3>

              <p>Total Posts</p>
            </div>
            <div class="icon">
              <i class="fas fa-wallet"></i>
            </div>
            <div class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></div>
          </a>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <a href="<?php echo base_url(); ?>co_admin/add_post" class="small-box bg-success">
            <div class="inner">
              <h3>Add</h3>

              <p>Add Post</p>
            </div>
            <div class="icon">
              <i class="ion ion-plus"></i>
            </div>
            <div class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></div>
          </a>
        </div>
        <!-- ./col -->

        <!-- ./col -->

        <div class="col-lg-3 col-6">
          <!-- small box -->
          <a href="<?php echo base_url(); ?>co_admin/update_profile" class="small-box bg-secondary">
            <div class="inner">
              <h3>profile</h3>

              <p>Update Profile</p>
            </div>
            <div class="icon">
              <i class="fas fa-user-circle"></i>
            </div>
            <div class="small-box-footer"> More info <i class="fas fa-arrow-circle-right"></i></div>
          </a>
        </div>


        <!-- ./col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->