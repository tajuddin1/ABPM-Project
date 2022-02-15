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

    <section class="main_content dashboard_part large_header_bg p-0">

        <!-- TOP-HEADER -->
        <?php
        include('../layouts/top-header-2.php');
        ?>
        <!-- END TOP-HEADER -->

        <div class="home_content">
            <div class="container-fluid mt-3">
                <table class="table table-sm">
                    <tr>
                        <td>
                            <div>
                                <div class="card border-none">
                                    <div class="p-3 box-design rounded mb-3">
                                        <div class="d-flex align-items-center">
                                            <a type="button" data-toggle="modal" data-target="#exampleModalScrollable1" class="a f_s_18 f_w_700"> ABPM Notification</a>
                                        </div>
                                        <div class="mt-1 f_s_12">December 01, 2021 17:27:22 pm</div>
                                        <div class="mt-2"><span class="fw-bold">To:</span> louis@shortgrass.com</div>
                                        <div class="mt-2"><span class="fw-bold">From:</span> abpm@podiatryboard.org</div>
                                        <div class="my-2"><a class="btn py-1 px-2 btn-dn" href="#"> Download PDF</a></div>
                                    </div>
                                </div>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalScrollable1" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header border-none">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body pt-0 pb-5">
                                                <div>
                                                    <h5 class="f_w_500 f_s_16">Dr. Susan Amico,</h5>
                                                    <h5 class="mb-4 f_s_15">Email Test</h5>
                                                    <div class="f_s_15">
                                                        Taz uddin,<br>
                                                        American Board of Podiatric Medicine (ABPM) <br>
                                                        ahmedrash@gmail.com - (310) 375-0700
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div>
                                <div class="card border-none">
                                    <div class="p-3 box-design rounded mb-3">
                                        <div class="d-flex align-items-center">
                                            <a type="button" data-toggle="modal" data-target="#exampleModalScrollable2" class="a f_s_18 f_w_700"> ABPM Notification</a>
                                        </div>
                                        <div class="mt-1 f_s_12">December 01, 2021 17:27:22 pm</div>
                                        <div class="mt-2"><span class="fw-bold">To:</span> louis@shortgrass.com</div>
                                        <div class="mt-2"><span class="fw-bold">From:</span> abpm@podiatryboard.org</div>
                                        <div class="my-2"><a class="btn py-1 px-2 btn-dn" href="#"> Download PDF</a></div>
                                    </div>
                                </div>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalScrollable2" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header border-none">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body pt-0 pb-5">
                                                <div>
                                                    <h5 class="f_w_500 f_s_16">Dr. Susan Amico,</h5>

                                                    <h5 class="mb-4 f_s_15">Alternative Email Test</h5>


                                                    <div class="f_s_15">
                                                        Rashed Ahmad,<br>
                                                        American Board of Podiatric Medicine (ABPM) <br>
                                                        ahmedrash@gmail.com - (310) 375-0700
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
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