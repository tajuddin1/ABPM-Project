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
        include('layouts/top-header.php');
        ?>
        <!-- END TOP-HEADER -->
        <div class="home_content">
            <div class="container-fluid p-0">
                <div class="card mt-3 border-none font-raleway f_w_600">
                    <div class="card-header rounded-0 p-1 text-center bg-gray">Height</div>
                    <div class="card-body f_w_500 f_s_16">
                        <div class="row align-items-center">
                            <div class="col-6 text-center">
                                <span>Feet</span>
                            </div>
                            <div class="col-6 bmi_Cal">
                                <input class="w-100 p-2" type="text">
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-6 text-center">
                                <span>Inches</span>
                            </div>
                            <div class="col-6 bmi_Cal">
                                <input class="w-100 p-2" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="card-header rounded-0 p-1 text-center card-header-top-border f_w_600 bg-gray">Weight</div>
                    <div class="card-body f_w_500 f_s_16">
                        <div class="row align-items-center">
                            <div class="col-6 text-center">
                                <span>Pounds</span>
                            </div>
                            <div class="col-6 bmi_Cal">
                                <input class="w-100 p-2" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="card-header rounded-0 p-1 text-center card-header-top-border bg-gray">Body Mass Index</div>
                    <div class="card-body f_w_500">
                        <div class="row align-items-center justify-content-center" style="height: 60px;">
                            <h3 class="font-raleway f_w_700">
                                0.5
                            </h3>
                        </div>
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