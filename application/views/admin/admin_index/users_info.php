<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Users List</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/index">Dashboard</a></li>
                        <li class="breadcrumb-item active">User List</li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <!-- /.card -->

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">All users information.</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>User Id</th>
                                        <th>User Name</th>
                                        <th>Email</th>
                                        <th>Total Posts</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($users)) {
                                        foreach ($users as $user) { ?>
                                            <tr>
                                                <td scope="row"><?php echo $user['user_id']; ?></td>
                                                <td><?php echo $user['user_name']; ?></td>
                                                <td><?php echo $user['email']; ?></td>
                                                <td><?php echo $user['total_post']; ?></td>
                                                <td><?php echo anchor(base_url('admin/delete_user?reg_id=') . $user['reg_id'], 'DELETE'); ?></td>

                                            </tr>
                                        <?php }
                                    } else {  ?>
                                        <tr>
                                            <td colspan="5">Records Not found...</td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>User Id</th>
                                        <th>User Name</th>
                                        <th>Email</th>
                                        <th>Total Posts</th>
                                        <th>Delete</th>
                                    </tr>
                                </tfoot>
                            </table>


                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

</div>
<!-- ./wrapper -->