<!DOCTYPE html>
<html lang="en">
<!-- HEADER SCRIPT -->
<?php

// echo "<pre>";
// print_r($_SERVER);
// exit;
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

    <section class="main_content dashboard_part large_header_bg">

        <!-- TOP-HEADER -->
        <?php
        include('../layouts/top-header-2.php');
        ?>
        <!-- END TOP-HEADER -->

        <div class="home_content">
            <div class="d-flex pl-2 py-2 pr-0 bg-success justify-content-end">
                <div class="pl-2 bg-white rounded-left-pill">
                    <div class="d-flex align-items-center p-0">
                        <h3 class="m-0 f_s_16 mr-1">Susan Amico</h3>
                        <div class="bg-gray text_primary f_s_14 f_w_600 p-1">100049</div>
                    </div>
                </div>
            </div>
            <div class="w-lg-50 w-75 text-center mx-auto mb-3 fw-normal">
                <h3 class="text-uppercase f_s_20 mt-4">The American Board of poriatric medicine</h3>
            </div>
            <div class="container-fluid">
                <div>
                    <div class="row">
                        <div class=" col-4 px-2 col-md-4 text-center mb-3">
                            <a href="view-profile.php">
                                <div class="py-1 rounded-sm bg-success sm-device">
                                    <div class="f_s_28"><i class="fas fa-user-tie"></i></div>
                                    <span class="f_s_12 font-raleway">View Profile</span>
                                </div>
                            </a>
                        </div>
                        <div class=" col-4 px-2 col-md-4 text-center mb-3">
                            <a href="email-massage.php">
                                <div class="py-1 rounded-sm bg-success sm-device">
                                    <div class="f_s_28"><i class="fas fa-envelope"></i></div>
                                    <span class="f_s_12 font-raleway">Email Messages</span>
                                </div>
                            </a>
                        </div>
                        <div class=" col-4 px-2 col-md-4 text-center mb-3">
                            <a href="payment-history.php">
                                <div class="py-1 rounded-sm bg-success sm-device">
                                    <div class="f_s_28"><i class="fas fa-file-invoice-dollar"></i></div>
                                    <span class="f_s_12 font-raleway">Payment History</span>
                                </div>
                            </a>
                        </div>
                        <div class=" col-4 px-2 col-md-4 text-center mb-3">
                            <a href="make-payment.php">
                                <div class="py-1 rounded-sm bg-success sm-device">
                                    <div class="f_s_28"><i class="fas fa-dollar-sign"></i></i></div>
                                    <span class="f_s_12 font-raleway">Make a Payment</span>
                                </div>
                            </a>
                        </div>
                        <div class=" col-4 px-2 col-md-4 text-center mb-3">
                            <a href="overview.php">
                                <div class="py-1 rounded-sm bg-success sm-device">
                                    <div class="f_s_28"><i class="far fa-eye"></i></div>
                                    <span class="f_s_12 font-raleway">Overview</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-4 px-2 col-md-4 text-center mb-3">
                            <a href="license-history.php">
                                <div class="py-1 rounded-sm bg-success sm-device">
                                    <div class="f_s_28"><i class="far fa-id-card"></i></div>
                                    <span class="f_s_12 font-raleway">License History</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-4 px-2 col-md-4 text-center mb-3">
                            <a href="report-license.php">
                                <div class="py-1 rounded-sm bg-success sm-device">
                                    <div class="f_s_28"><i class="far fa-id-badge"></i></i></div>
                                    <span class="f_s_12 font-raleway">Report a License</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-4 px-2 col-md-4 text-center mb-3">
                            <a href="cme-history.php">
                                <div class="py-1 rounded-sm bg-success sm-device">
                                    <div class="f_s_28"><i class="fas fa-history"></i></div>
                                    <span class="f_s_12 font-raleway">CME History</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-4 px-2 col-md-4 text-center mb-3">
                            <a href="report-cmes.php">
                                <div class="py-1 rounded-sm bg-success sm-device">
                                    <div class="f_s_28"><i class="far fa-calendar-plus"></i></div>
                                    <span class="f_s_12 font-raleway">Report CMEs</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-4 px-2 col-md-4 text-center mb-3">
                            <a href="exam-result.php">
                                <div class="py-1 rounded-sm bg-success sm-device">
                                    <div class="f_s_28"><i class="far fa-file-alt"></i></div>
                                    <span class="f_s_12 font-raleway">Exam Results</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-4 px-2 col-md-4 text-center mb-3">
                            <a href="#">
                                <div class="py-1 rounded-sm bg-success sm-device">
                                    <div class="f_s_28"><i class="fab fa-500px"></i></div>
                                    <span class="f_s_12 font-raleway">MOC FAQ</span>
                                </div>
                            </a>
                        </div>
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