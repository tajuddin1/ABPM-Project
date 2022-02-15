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
                <h4 class="f_s_20">Report CMEs</h4>
                <div class="col-12 box-design-dark p-3 rounded mb-3 mt-3">
                    <form method="post" enctype="multipart/form-data">
                        <div class="row p-0 text-dark">
                            <div class="col-12 mb-2 ">
                                <label for="year" class=" font-weight-bold">Apply to Year</label>
                                <select name="year" class="custom-select border border-light-info">
                                    <option>2022</option>
                                    <option>2021</option>
                                    <option>2020</option>
                                    <option>2019</option>
                                    <option>2018</option>
                                    <option>2017</option>
                                </select>
                            </div>
                            <div class="col-12 mb-2 report-license">
                                <label for="credits" class=" font-weight-bold">Total Number of Credits Being Reported on This Submission</label>
                                <input type="text" name="credits" size="4" class="border border-light-info">
                            </div>
                            <div class="col-12 mb-1">
                                <div class="alert alert-info mb-1 font-weight-bold">
                                    Please indicate the number of credits that may apply to the following CAQs:
                                </div>
                            </div>
                            <div class="col-12 mb-1">
                                <div class="alert border border-light-info d-flex flex-column justify-content-start align-items-stretch mb-1">
                                    <div class="d-flex justify-content-beteween align-items-center mb-2">
                                        <label for="caq_ap" class=" font-weight-bold flex-grow-1 text-black pr-1">I want to apply credits towards my CAQ in Amputation Prevention &amp; Wound Care (CAQ AP)</label>
                                        <input type="checkbox" name="caq_ap" id="caq-ap">
                                    </div>
                                    <div id="show_caq_ap_cr" class="d-flex justify-content-between align-items-center report-license">
                                        <label for="caq_ap_credits" class=" font-weight-bold flex-grow-1 f_s_13">Number of Credits to Apply</label>
                                        <input type="text" name="caq_ap_credits" class="w-25 mb-0 border border-light-info" style="height: 30px !important;">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="alert border border-light-info d-flex flex-column justify-content-start align-items-stretch mb-1">
                                    <div class="d-flex justify-content-beteween align-items-center mb-2">
                                        <label for="caq_sm" class=" font-weight-bold flex-grow-1 text-black pr-1">I want to apply credits towards my CAQ in Sports Medicine (CAQ SM)</label>
                                        <input type="checkbox" name="caq_sm" id="check">
                                    </div>
                                    <div id="show_caq_sm_cr" class="d-flex justify-content-between align-items-center report-license">
                                        <label for="caq_sm_credits" class=" font-weight-bold flex-grow-1 f_s_13">Number of Credits to Apply</label>
                                        <input type="text" name="caq_sm_credits" class="w-25 mb-0 border border-light-info" style="height: 30px !important;">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-2 report-license">
                                <label for="date" class=" font-weight-bold">Completion Date</label>
                                <input type="date" name="completiondate" class="border border-light-info">
                            </div>
                            <div class="col-12 mb-2 report-license">
                                <label for="description" class=" font-weight-bold">Description (Institution Name)</label>
                                <input type="text" name="description" class="mb-0 border border-light-info">
                            </div>
                            <div class="col-12 mb-2 report-license">
                                <label for="attachment" class=" font-weight-bold">Proof of Completion</label>
                                <input type="file" name="attachment" class="border border-none" style="height:44px">
                            </div>
                            <div class="col-12 mb-2 py-0 px-3 d-flex justify-content-between">
                                <span class="waves-input-wrapper waves-effect waves-light"><input type="submit" name="button" value="Cancel" class="btn btn-danger waves waves-dark"></span>
                                <span class="waves-input-wrapper waves-effect waves-light"><input type="submit" name="button" value="Save CME" class="btn btn-success waves waves-dark"></span>
                            </div>
                            <div class="col-12 p-2 d-flex mt-3 flex-column justify-content-between">
                                <a class="btn btn-sm btn-primary waves-effect waves-light m-1 f_s_14 p-2 text-white" data-toggle="modal" data-target="#upload_howto">Uploading on Desktop?</a>
                                <a class="btn btn-sm btn-primary waves-effect waves-light m-1 f_s_14 p-2 text-white" data-toggle="modal" data-target="#upload_howto2">Uploading on Android Mobile?</a>
                                <a class="btn btn-sm btn-primary waves-effect waves-light m-1 f_s_14 p-2 text-white" data-toggle="modal" data-target="#upload_howto3">Uploading on iOS?</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row p-3">
                    <div class="col-12 p-0 d-flex align-items-stretch">
                        <div class="card testimonial-card  w-100 border-success border-top-0 mt-2 mb-3">
                            <div class="card-up" style="background-color:#239118"></div>
                            <div class="avatar mx-auto white">
                                <img src="../image/yes.jpg" class="rounded-circle img-responsive" alt="accepted">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title font-weight-bold">Accepted</h4>
                                <div class="alert alert-success">Podiatry specific lectures, webinars, conferences</div>
                                <div class="alert alert-success">International credits, such as those attained from the Royal College of Physicians and Surgeons</div>
                                <div class="alert alert-success">Non-podiatry specific lectures/conferences/webinars such as human trafficking, opioid training, sexual harassment, and COVID-19</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 p-0 d-flex align-items-stretch">
                        <div class="card testimonial-card w-100 border-top-0 border-danger mt-2 mb-3">
                            <div class="card-up" style="background-color:#c00000"></div>
                            <div class="avatar mx-auto white">
                                <img src="../image/no.jpg?v=1630354022" class="rounded-circle img-responsive" alt="not accepted">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title font-weight-bold">Not Accepted</h4>
                                <div class="alert alert-danger">Practice management, coding, and billing lectures/webinars/conferences</div>
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