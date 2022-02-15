<!DOCTYPE html>
<html lang="en">
<!-- HEADER SCRIPT -->
<?php
include('layouts/header-script.php');
?>
<!-- END HEADER SCRIPT -->

<body class="crm_body_bg">
    <!-- main content part here -->

    <!-- sidebar  -->
    <?php
    include('layouts/sidebar.php');
    ?>
    <!--/ sidebar  -->

    <section class="main_content dashboard_part large_header_bg p-0">

        <!-- TOP-HEADER -->
        <?php
        include('layouts/top-header-2.php');
        ?>
        <!-- END TOP-HEADER -->
        <div class="home_content">
            <div class="container-fluid p-0">
                <!-- sign_in  -->
                <div class="modal-content cs_modal bg-white border-none p-4 pt-5">
                    <div class="modal-header justify-content-center bg-white">
                        <h5 class="modal-title text-dark">Log in</h5>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Enter your email" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" required>
                            </div>
                            <button type="submit" class="btn btn_1 full_width text-center">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FOOTER SCRIPT -->
    <?php
    include('layouts/footer-script.php');
    ?>
    <!-- END FOOTER SCRIPT -->
</body>

</html>