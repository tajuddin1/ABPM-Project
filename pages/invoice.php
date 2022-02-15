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
            <div class="container-fluid mt-3">
                <h4 class="f_s_20">Invoices</h4>
                <div class="card border-none mb-3" style="background-color: #b2caca78!important;">
                    <div class="p-3 box-design rounded d-flex align-items-center">
                        <div class="LEFT mr-4" style="width: 25px; height:25px">
                            <div class="d-flex w-100 h-100 flex-row justify-content-start align-items-center position-relative"><input class="form-check-input d-none" id="pro-check" type="checkbox" name="i[]" value="165512185" checked=""><label class="font-weight-bold mb-1" for="pro-check"></label></div>
                        </div>

                        <div class="RIGHT">
                            <div><span class="fw-bold"># 165520397 </span> <span class="mt-2 f_w_800">- ACPM 2021 Dues (College)</span></div>
                            <div class="mt-2 d-flex align-items-center justify-content-between"><span class="text-danger f_s_16 f_w_700">$75.00</span> <span class="f_s_12">Tuesday, January 19th 2021</span></div>
                        </div>
                    </div>
                </div>
                <div class="p-3 box-design rounded mb-3">
                    <div class="alert p-0 m-0">
                        <input class="form-check-input d-none" type="checkbox" name="profile" id="profile_check" value="1">
                        <label class="f_s_13 ml-5 mb-0" for="profile_check">
                            I have reviewed my profile and found the information to be complete and accurate.</label>
                    </div>
                </div>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Susan Amico!</strong> A check mark is required here..
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <a href="../pages/invoice.php" class="btn btn-success f_s_14">PAY MY INVOICE</a>
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