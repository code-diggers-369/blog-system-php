<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Total Posts</h1>
                </div>

                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>co_admin/index">Dashboard</a></li>
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
                            <h3 class="card-title">Your total posts list</h3>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Post_id</th>
                                        <th>Article_title</th>
                                        <th>Date</th>
                                        <th>view</th>
                                        <th>Access</th>
                                        <th>Delete</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($posts)) {
                                        foreach ($posts as $post) { ?>
                                            <tr>
                                                <td scope="row"><?php echo $post['post_id']; ?></td>
                                                <td><?php echo $post['article_title']; ?></td>
                                                <td><?php echo $post['date']; ?></td>
                                                <td><?php echo anchor(base_url('home/blogpage/') . $post['post_id'], 'View', "target = '_blank'");
                                                    ?></td>
                                                <td><?php echo anchor(base_url('co_admin/update_post_view?post_id=') . $post['post_id'], 'Edit');
                                                    ?></td>
                                                <td><?php echo anchor(base_url('co_admin/delete_row?post_id=') . $post['post_id'], 'DELETE'); ?></td>

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
                                        <th>Post_id</th>
                                        <th>Article_title</th>
                                        <th>Date</th>
                                        <th>view</th>
                                        <th>Access</th>
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