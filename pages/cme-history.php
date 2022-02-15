<!DOCTYPE html>
<html lang="en">
<!-- HEADER SCRIPT -->
<?php
include('../layouts/header-script.php');
?>
<!-- END HEADER SCRIPT -->

<body class="crm_body_bg">
    <!-- main content part here -->

    <!-- sidebar  -->
    <?php
    include('../layouts/sidebar-2.php');
    ?>
    <!--/ sidebar  -->

    <section class="main_content dashboard_part large_header_bg p-0">

        <!-- TOP-HEADER -->
        <?php
        include('../layouts/top-header-2.php');
        ?>
        <!-- END TOP-HEADER -->

        <div class="home_content">
            <div class="container-fluid mt-3 ">
                <h4 class="f_s_20">Your CME History</h4>
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-warning no-record mt-3">
                            <span>We currently have no record of your CMEs on file.</span><br>
                            <span>Please contact ABPM Headquarters directly if you have questions regarding this information</span>
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <div class="d-flex">
                            <a href="./report-cmes.php" class="btn btn-primary mr-3">REPORT CMES</a>
                            <a href="#" class="btn btn-primary">PRINT PDF</a>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- FOOTER SCRIPT -->
    <?php
    include('../layouts/footer-script.php');
    ?>
    <!-- END FOOTER SCRIPT -->
</body>

</html>