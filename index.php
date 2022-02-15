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

<section class="main_content dashboard_part large_header_bg p-0" >

    <!-- TOP-HEADER -->
    <?php
        include('layouts/top-header.php');
    ?>
    <!-- END TOP-HEADER -->

    <!-- <div class="row bar m-0" style="display: none;">
        <div class="col-12">
            <div class="page_title_box d-flex p-3 align-items-center justify-content-between">
                <div class="page_title_left">
                    <h3 class="f_s_30 f_w_700 text_white" >Dashboard</h3>
                    <ol class="breadcrumb page_bradcam mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">ABPM </a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item active">Sales</li>
                    </ol>
                </div>
                <a href="login_page.php" class="white_btn3">Sign In</a>
            </div>
        </div>
    </div> -->

    <!-- DASHBOARD CONTANT -->
    <?php
        include('layouts/dashboard.php');
    ?>
    <!-- END DASHBOARD -->
</section>

<!-- FOOTER SCRIPT -->
 <?php
    include('layouts/footer-script.php');
?>
<!-- END FOOTER SCRIPT -->
</body>
</html>