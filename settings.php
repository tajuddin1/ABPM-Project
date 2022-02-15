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
                    <div class="card-header rounded-0 p-1 pl-3 bg-gray">Do you know?</div>
                    <div class="card-body f_w_500 f_s_16 pl-4">
                        <p>You can open the menu panel by swiping from the left edge of your screen</p>
                    </div>
                </div>
                <div class="card m-0 border-none rounded-0 font-raleway f_w_600">
                    <div class="card-header rounded-0 p-1 pl-3 bg-gray">Push Notifications</div>
                    <div class="card-body f_w_500 f_s_16 pl-4 d-flex flex-column">
                        <p>Get notified of app updates and other news.</p>
                        <button class="btn btn_1 mx-auto mt-3 py-2 px-3" type="button">Allow Notifications</button>
                    </div>
                </div>
                <div class="card m-0 border-none rounded-0 font-raleway f_w_600">
                    <div class="card-header rounded-0 p-1 pl-3 bg-gray">local Storage</div>
                    <div class="card-body f_w_500 f_s_16 pl-4 d-flex flex-column">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum, ab accusantium ex debitis eveniet deserunt rem inventore dolor est autem?</p>
                        <button class="btn btn_1 mx-auto mt-3 py-2 px-3" type="button">Purge Cache</button>
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