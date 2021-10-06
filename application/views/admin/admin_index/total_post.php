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
                             <h3 class="card-title">All posts in this website.</h3>
                         </div>
                         <!-- /.card-header -->
                         <div class="card-body">
                             <table id="example1" class="table table-bordered table-striped">
                                 <thead>
                                     <tr>
                                         <th>ID</th>
                                         <th>Blog Title</th>
                                         <th>Creater</th>
                                         <th>Date</th>
                                         <th>Delete</th>
                                     </tr>
                                 </thead>
                                 <tbody>

                                     <?php if (!empty($posts)) {
                                            foreach ($posts as $post) { ?>
                                             <tr>
                                                 <td scope="row"><?php echo $post['post_id']; ?></td>
                                                 <td><?php echo $post['article_title']; ?></td>
                                                 <td><?php echo $post['user_name']; ?></td>
                                                 <td><?php echo $post['date']; ?></td>
                                                 <td><?php echo anchor(base_url('admin/delete_post_by_admin?post_id=') . $post['post_id'], 'Delete'); ?></td>

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
                                         <th>ID</th>
                                         <th>Blog Title</th>
                                         <th>Creater</th>
                                         <th>Date</th>
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
 <!-- /.content-wrapper -->