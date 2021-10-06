<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <script>
            var a = 0;

            function change() {
                var screenSize = window.innerWidth;
                if (a == 0) {
                    a = 1;
                    console.log(a);
                } else {
                    a = 0;
                    console.log(a);
                }
                if (a == 1) {
                    document.getElementById("bod").classList.add('sidebar-collapse');
                    if (screenSize <= 991) {
                        document.getElementById("bod").classList.add('sidebar-closed');
                    }
                    if (screenSize <= 767) {
                        document.getElementById("bod").classList.remove('sidebar-closed');
                        document.getElementById("bod").classList.add('sidebar-open');
                    }
                }
                if (a == 0) {
                    document.getElementById("bod").classList.remove('sidebar-collapse');
                }
            }

            window.onload = function(s) {
                on_load_side_bar_size();
            }
            window.onresize = function(s) {
                on_load_side_bar_size();
            }

            function moblie_sidebar_view() {
                var screenSize = window.innerWidth;
                if (screenSize <= 767) {
                    document.getElementById("bod").classList.add('sidebar-closed');
                    document.getElementById("bod").classList.remove('sidebar-open');
                }

            }

            function on_load_side_bar_size() {
                var screenSize = window.innerWidth;

                // console.log(screenSize);
                if (screenSize <= 991) {
                    document.getElementById("bod").classList.add('sidebar-collapse');
                    document.getElementById("bod").classList.add('sidebar-closed');
                }
                if (screenSize <= 767) {
                    document.getElementById("bod").classList.remove('sidebar-closed');
                }
                if (screenSize <= 991) {
                    document.getElementById("sideBarCloseButton").style.display = "inline-block";
                } else {
                    document.getElementById("sideBarCloseButton").style.display = "none";
                }
            }
        </script>

        <button style=" border: none;" class="btn btn-link" onclick="change()"><i style="color:black;" class="fas fa-bars"></i></button>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?php echo base_url(); ?>" class="nav-link">Home</a>
        </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>admin/logout" role="button">
                    <i class="fas fa-sign-out-alt"></i>
                </a>
            </li>

        </ul>



    </ul>
</nav>
<!-- /.navbar -->