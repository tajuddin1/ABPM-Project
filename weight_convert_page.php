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
                <div class="card mt-3 border-none rounded-0 font-raleway f_w_600">
                    <div class="card-header rounded-0 p-1 text-center bg-gray">Weight in Pounds</div>
                    <div class="card-body f_w_500 f_s_16">
                        <div class="row align-items-center">
                            <div class="col-12 bmi_Cal">
                                <input class="w-100 p-2" type="text">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card m-0 border-none rounded-0 font-raleway f_w_600">
                    <div class="card-header rounded-0 p-1 text-center bg-gray">Weight in Kilograms</div>
                    <div class="card-body f_w_500 f_s_16">
                        <div class="row align-items-center">
                            <div class="col-12 bmi_Cal">
                                <input class="w-100 p-2" type="text">
                            </div>
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