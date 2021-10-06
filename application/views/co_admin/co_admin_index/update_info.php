<section class="content-wrapper pt-3">
    <div class="row m-0 p-0">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Update your profile</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body" style="display: block;">

                    <form id="upload_form" action="<?php echo base_url() ?>co_admin/upload_profile_pic" method="post" enctype="multipart/form-data">
                        <center>
                            <div class="image">
                                <?php
                                if (!empty($profile[0]->profile_pic)) {
                                    $img_path =   base_url() . $profile[0]->profile_pic;
                                } else {
                                    $img_path =  base_url() ."uploads\users\avtar.jpg";
                                }
                                ?>
                                <img height="200px" width="200px" onclick="$('#upload').click()" src="<?php echo $img_path; ?>" class="img-circle elevation-2" alt="User Image">
                            </div>
                        </center>

                        <input name="profile_img" accept="image/x-png,image/jpeg" type="file" id="upload" hidden onchange="$('#upload_form').submit()" />
                    </form>

                    <form action="<?php echo base_url(); ?>co_admin/update_profile_user" method="post" class="mt-3">

                        <div class="form-group">
                            <label for="inputName">User Name</label>
                            <input type="text" name="inputName" id="inputName" class="form-control" value="<?php echo $profile[0]->user_name ?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="<?php echo $profile[0]->email ?>">
                        </div>
                        <div class="form-group">
                            <label for="profession">Profession</label>
                            <input type="text" name="profession" id="profession" class="form-control" value="<?php echo $profile[0]->profession ?>">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" name="address" id="address" class="form-control" value="<?php echo $profile[0]->address ?>">
                        </div>
                        <div class="form-group">
                            <label for="website">Website</label>
                            <input type="text" name="website" id="website" class="form-control" value="<?php echo $profile[0]->website ?>">
                        </div>
                        <div class="form-group">
                            <label for="github">Github</label>
                            <input type="text" name="github" id="github" class="form-control" value="<?php echo $profile[0]->github ?>">
                        </div>
                        <div class="form-group">
                            <label for="twitter">Twitter</label>
                            <input type="text" name="twitter" id="twitter" class="form-control" value="<?php echo $profile[0]->twitter ?>">
                        </div>
                        <div class="form-group">
                            <label for="instagram">Instagram</label>
                            <input type="text" name="instagram" id="instagram" class="form-control" value="<?php echo $profile[0]->instagram ?>">
                        </div>
                        <div class="form-group">
                            <label for="facebook">Facebook</label>
                            <input type="text" name="facebook" id="facebook" class="form-control" value="<?php echo $profile[0]->facebook ?>">
                        </div>
                        <div class="form-group">
                            <label for="moblie">Moblie</label>
                            <input type="text" name="moblie" id="moblie" class="form-control" value="<?php echo $profile[0]->moblie ?>">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" id="phone" class="form-control" value="<?php echo $profile[0]->phone ?>">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
                    </form>

                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <div class="col-md-3"></div>

    </div>


</section>