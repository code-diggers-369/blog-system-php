<!-- Main content -->
<section class="content-wrapper">
    <div class="row p-0 m-0">
        <div class="col-md-12">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <h3 class="card-title">
                        Add Post
                    </h3>
                </div>
                <!-- <form action="#" method="post"> -->
                <div class="form-group mx-4 mt-3">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="title">
                </div>

                <div class="form-group mx-4 mt-3">
                    <label for="short_description">Short Description</label>
                    <input type="text" class="form-control" name="short_description" id="short_description" placeholder="Short Description">
                </div>

                <div class="form-group mx-4 mt-3">
                    <label for="title">Poster Image</label>
                    <input type="file" class="form-control" id="poster" accept="image/x-png,image/jpeg" required>
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                    <textarea id="summernote">

                        </textarea>
                </div>

                <button class="btn btn-success mb-2  btn-lg mx-auto d-block px-4" id="save">Save</button>
                <!-- </form> -->
            </div>
        </div>
        <!-- /.col-->
    </div>

    <!-- ./row -->
</section>

<script>
    // /

    $(function() {
        // Summernote
        $("#summernote").summernote({
            height: 180,

        });

        // CodeMirror
        CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
            mode: "htmlmixed",
            theme: "monokai",
        });
    });

    //
    $("#save").click(function() {
        // console.log($("#summernote").val());
        if ($("#title").val().trim().length <= 10 || $("#title").val().trim().length >= 80) {
            alert("enter title more then 10 character... and less then 50");
            return;
        } else if ($("#short_description").val().trim().length <= 50 || $("#short_description").val().trim().length >= 100) {
            alert("enter short discription more then 50 character... and less then 100");
            return;
        } else if (!$("#poster")[0].files[0]) {
            alert("Please upload poster image please");
            return;
        } else if ($("#summernote").val().trim().length <= 150) {
            alert("Enter proper blog length >150");
            return;
        }

        var fd = new FormData();
        var files = $("#poster")[0].files[0];
        fd.append('poster_img', files);

        fd.append('title', $("#title").val().trim());
        fd.append('short_description', $("#short_description").val().trim());
        fd.append('data', $("#summernote").val());

        $.ajax({
            url: "<?php echo base_url() ?>api/add_post_api",
            type: "POST",
            data: fd,
            processData: false,
            contentType: false,
            // data: {
            //     title: $("#title").val(),
            //     data: $("#summernote").val().trim(),
            // },
            success: function(data) {
                alert("Post added successfully");

                location.href = "<?php echo base_url() ?>co_admin";
            }
        });
    });

    $(document).ready(function() {
        $(".note-group-select-from-files").css('display', 'none');
    })
</script>