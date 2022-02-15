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
            <div class="container-fluid mt-3 p-0">
                <div class="col-12 p-0">
                    <div class="row p-0 m-0">
                        <div class="col-12 mb-1">
                            <h2 class="f-header mb-3 f_s_20">Re-credentialing Overview</h2>
                        </div>
                        <div class="col-12 mb-2">
                            <p>Self Assessment Due: <strong>December 31, 2023</strong></p>
                        </div>
                        <div class="col-12 mb-4 mt-3 p-0">
                            <div class="card testimonial-card">
                                <div class="card-up unique-color d-flex flex-column justify-content-center align-items-center rounded-0" style="height:60px;">
                                    <h6 class="d-block d-md-none w-100 text-center text-white my-0 pr-3 f-header">MOC Checklist</h6>
                                </div>
                                <div class="card-body pt-0 pb-2 unique-color rounded-0">
                                    <div class="d-none d-xl-block">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <a href="pages/my-moc-overview#enrollment" class="do-show-enrollment">
                                                <div class="alert alert-success m-3 text-center">
                                                    <div class="d-flex flex-column justify-content-center align-items-center">
                                                        <div class="bg-success d-flex flex-column justify-content-center align-items-center" style="height:80px;width:80px;border-radius:50%;">
                                                            <i class="fas fa-3x fa-file-invoice text-white" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                    <div class="d-relative" style="margin-top:-30px;height:30px;">
                                                        <div class="d-inline-block text-right" style="width:80px;">
                                                            <i class="fas fa-check-circle bg-white text-" style="font-size:1.5rem;border-radius:50%;" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                    <h4 class="mb-0 font-weight-bold">Enrollment</h4>
                                                </div>
                                            </a>
                                            <a href="pages/my-moc-overview#license" class="">
                                                <div class="alert alert-success m-3 text-center">
                                                    <div class="d-flex flex-column justify-content-center align-items-center">
                                                        <div class="bg-success d-flex flex-column justify-content-center align-items-center" style="height:80px;width:80px;border-radius:50%;">
                                                            <i class="fas fa-3x fa-certificate text-white" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                    <div class="d-relative" style="margin-top:-30px;height:30px;">
                                                        <div class="d-inline-block text-right" style="width:80px;">
                                                            <i class="fas fa-check-circle bg-white text-" style="font-size:1.5rem;border-radius:50%;" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                    <h4 class="mb-0 font-weight-bold">License</h4>
                                                </div>
                                            </a>
                                            <a href="pages/my-moc-overview#credits" class="">
                                                <div class="alert alert-danger m-3 text-center">
                                                    <div class="d-flex flex-column justify-content-center align-items-center">
                                                        <div class="bg-danger d-flex flex-column justify-content-center align-items-center" style="height:80px;width:80px;border-radius:50%;">
                                                            <i class="fas fa-3x fa-th-list text-white" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                    <div class="d-relative" style="margin-top:-30px;height:30px;">
                                                        <div class="d-inline-block text-right" style="width:80px;">
                                                            <i class="fas fa-times-circle bg-white text-" style="font-size:1.5rem;border-radius:50%;" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                    <h4 class="mb-0 font-weight-bold">CMEs</h4>
                                                </div>
                                            </a>
                                            <a href="pages/my-moc-overview#evidence" class="">
                                                <div class="alert alert-danger m-3 text-center">
                                                    <div class="d-flex flex-column justify-content-center align-items-center">
                                                        <div class="bg-danger d-flex flex-column justify-content-center align-items-center" style="height:80px;width:80px;border-radius:50%;">
                                                            <i class="fas fa-3x fa-brain text-white" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                    <div class="d-relative" style="margin-top:-30px;height:30px;">
                                                        <div class="d-inline-block text-right" style="width:80px;">
                                                            <i class="fas fa-times-circle bg-white text-" style="font-size:1.5rem;border-radius:50%;" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                    <h4 class="mb-0 font-weight-bold">Evidence</h4>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="d-block d-xl-none">
                                        <div class="alert alert-success m-3 text-center">
                                            <h4 class="mb-0 text-left"><a href="pages/my-moc-overview#enrollment" class="font-weight-bold text-success do-show-enrollment"><i class="fas fa-check-circle" aria-hidden="true"></i> Enrollment</a></h4>
                                        </div>
                                        <div class="alert alert-success m-3 text-center">
                                            <h4 class="mb-0 text-left"><a href="pages/my-moc-overview#license" class="font-weight-bold text-success"><i class="fas fa-check-circle" aria-hidden="true"></i> License</a></h4>
                                        </div>
                                        <div class="alert alert-danger m-3 text-center">
                                            <h4 class="mb-0 text-left"><a href="pages/my-moc-overview#credits" class="font-weight-bold text-danger"><i class="fas fa-times-circle" aria-hidden="true"></i> Credits</a></h4>
                                        </div>
                                        <div class="alert alert-danger m-3 text-center">
                                            <h4 class="mb-0 text-left"><a href="pages/my-moc-overview#evidence" class="font-weight-bold text-danger"><i class="fas fa-times-circle" aria-hidden="true"></i> Evidence</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-flex flex-column mb-4 p-0">
                            <a id="license"></a>
                            <div class="card testimonial-card flex-1  border-none">
                                <div class="card-up blue-gradient d-flex flex-column align-items-center justify-content-center rounded-0" style="height:60px">
                                    <h6 class="d-block  w-100 text-center text-white my-0 pr-3 f-header">License</h6>
                                </div>
                                <div class="avatar ml-2 mr-auto unique-color d-flex flex-column justify-content-center align-items-center" style="height:80px;width:80px;margin-top:-70px;">
                                    <i class="fas fa-3x fa-certificate text-white" aria-hidden="true"></i>
                                </div>
                                <div class="card-body py-2">
                                    <div class="row h-100 pb-1">
                                        <div class="col-12 d-flex flex-column justify-content-between align-items-start">
                                            <div class="alert alert-success text-center w-100" role="alert">
                                                ✓ Congratulations! You have a current license.
                                            </div>
                                            <table class="table table-sm table-borderless table-striped">
                                                <thead class="unique-color white-text font-weight-bold">
                                                    <tr>
                                                        <th scope="col">Number</th>
                                                        <th scope="col">State</th>
                                                        <th scope="col">Expires</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>005062</td>
                                                        <td>NY</td>
                                                        <td><a href="pages/my-licenses-edit?id=1919" class="text-primary">1/31/2023</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-12 d-flex flex-column justify-content-between align-items-start">
                                            <div class="alert alert-danger text-center w-100" role="alert">
                                                You do not have an active license.
                                            </div>
                                            <div class="w-100 d-flex justify-content-between align-items-center px-2">
                                                <a href="pages/my-licenses" class="mr-3">License History</a>
                                                <a href="pages/my-licenses-add" class="btn btn-primary mr-0 waves-effect waves-light">Report License</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-4 p-0">
                            <a id="credits"></a>
                            <div class="card testimonial-card  border-none">
                                <div class="card-up blue-gradient d-flex flex-column justify-content-center align-items-center rounded-0" style="height:60px">
                                    <h6 class="d-inline-block  text-center text-white my-0 pr-0 f-header ml-5">Continuing Medical Education</h6>
                                </div>
                                <div class="avatar ml-2 mr-auto unique-color d-flex flex-column justify-content-center align-items-center" style="height:80px;width:80px;margin-top:-70px;">
                                    <i class="fas fa-3x fa-th-list text-white" aria-hidden="true"></i>
                                </div>
                                <div class="card-body py-2 p-0">
                                    <div class="row m-0">
                                        <div class="col-xs-12 col-sm-6 ">
                                            <div class="w-100 d-flex justify-content-center align-items-center">
                                                <div class="gauge" data-credits="5">
                                                    <img src="/assets/img/cme-gauge/cme-gauge-mask.png?v=1630354004" alt="Gauge" class="gauge-mask img-fluid">
                                                    <img src="/assets/img/cme-gauge/gauge-mask.png?v=1630354003" alt="Mask" class="gradient-mask img-fluid" style="transform: translateX(-50%) rotate(18deg);">
                                                    <div class="gauge-needle" style="transform: translateX(-50%) rotate(-72deg);">
                                                        <img src="/assets/img/cme-gauge/needle.svg?v=1630354004" alt="Needle" style="height:100%;width:100%;">
                                                    </div>
                                                    <div class="gauge-background" style="background-color:#c20000"></div>
                                                    <div class="gauge-value">5</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="alert alert-danger">
                                                You need <b>80 more</b> in 2022 to maintain the recommended average.
                                            </div>
                                            <div class="alert alert-info text-left">
                                                <ul class="mb-0 ml-3">
                                                    <li>You should maintain an average of 25 per year.</li>
                                                    <li>You must earn <b>105 more</b> by December 31, 2023.</li>
                                                    <li>You may report a maximum of 50 per year.</li>
                                                    <li>This policy is effective starting in 2019.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-100 d-flex flex-column justify-content-between">
                                        <div title="2014" class="card flex-1 ml-0 ml-md-0 ml-sm-0 text-muted rounded mb-2 box-design border-none">
                                            <div class="card-header border-none px-0 pb-1 pt-2 box-design"><span class="font-weight-bold">2014</span></div>
                                            <div class="card-body rounded-bottom grey lighten-4 d-flex justify-content-center align-items-center">
                                                <h2 class="mb-0">&nbsp;</h2>
                                            </div>
                                        </div>
                                        <div title="2015" class="card flex-1  text-muted rounded mb-2 box-design border-none">
                                            <div class="card-header border-none px-0 pb-1 pt-2 box-design"><span class="font-weight-bold">2015</span></div>
                                            <div class="card-body rounded-bottom grey lighten-4 d-flex justify-content-center align-items-center">
                                                <h2 class="mb-0">&nbsp;</h2>
                                            </div>
                                        </div>
                                        <div title="2016" class="card flex-1  text-muted rounded mb-2 box-design border-none">
                                            <div class="card-header border-none px-0 pb-1 pt-2 box-design"><span class="font-weight-bold">2016</span></div>
                                            <div class="card-body rounded-bottom grey lighten-4 d-flex justify-content-center align-items-center">
                                                <h2 class="mb-0">&nbsp;</h2>
                                            </div>
                                        </div>
                                        <div title="2017" class="card flex-1  text-muted rounded mb-2 box-design border-none">
                                            <div class="card-header border-none px-0 pb-1 pt-2 box-design"><span class="font-weight-bold">2017</span></div>
                                            <div class="card-body rounded-bottom grey lighten-4 d-flex justify-content-center align-items-center">
                                                <h2 class="mb-0">&nbsp;</h2>
                                            </div>
                                        </div>
                                        <div title="2018" class="card flex-1  text-muted rounded mb-2 box-design border-none">
                                            <div class="card-header border-none px-0 pb-1 pt-2 box-design"><span class="font-weight-bold">2018</span></div>
                                            <div class="card-body rounded-bottom grey lighten-4 d-flex justify-content-center align-items-center">
                                                <h2 class="mb-0">&nbsp;</h2>
                                            </div>
                                        </div>
                                        <div title="2019" class="card flex-1  text-muted rounded mb-2 box-design border-none">
                                            <div class="card-header border-none px-0 pb-1 pt-2 box-design"><span class="font-weight-bold">2019</span></div>
                                            <div class="card-body rounded-bottom grey lighten-4 d-flex justify-content-center align-items-center">
                                                <h2 class="mb-0">0</h2>
                                            </div>
                                        </div>
                                        <div title="2020" class="card flex-1  text-muted rounded mb-2 box-design border-none">
                                            <div class="card-header border-none px-0 pb-1 pt-2 box-design"><span class="font-weight-bold">2020</span></div>
                                            <div class="card-body rounded-bottom grey lighten-4 d-flex justify-content-center align-items-center">
                                                <h2 class="mb-0">0</h2>
                                            </div>
                                        </div>
                                        <div title="2021" class="card flex-1  text-muted rounded mb-2 box-design border-none">
                                            <div class="card-header border-none px-0 pb-1 pt-2 box-design"><span class="font-weight-bold">2021</span></div>
                                            <div class="card-body rounded-bottom grey lighten-4 d-flex justify-content-center align-items-center">
                                                <h2 class="mb-0">20</h2>
                                            </div>
                                        </div>
                                        <div title="2022" class="card flex-1  text-muted rounded mb-2 box-design border-none">
                                            <div class="card-header border-none px-0 pb-1 pt-2 box-design"><span class="font-weight-bold">2022</span></div>
                                            <div class="card-body rounded-bottom grey lighten-4 d-flex justify-content-center align-items-center">
                                                <h2 class="mb-0">0</h2>
                                            </div>
                                        </div>
                                        <div title="2023" class="card flex-1  text-muted rounded mb-2 box-design border-none">
                                            <div class="card-header border-none px-0 pb-1 pt-2 box-design"><span class="font-weight-bold">2023</span></div>
                                            <div class="card-body rounded-bottom grey lighten-4 d-flex justify-content-center align-items-center">
                                                <h2 class="mb-0">&nbsp;</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-100 text-right pt-2 d-flex justify-content-between align-items-center p-3">
                                        <a href="#" class="mr-3 pl-2">Credits History</a>
                                        <a href="#" class="btn btn-primary mr-0 waves-effect waves-light">Report Credits</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-0 p-0">
                            <a id="evidence"></a>
                            <div class="card testimonial-card border-none">
                                <div class="card-up blue-gradient d-flex flex-row align-items-center justify-content-center rounded-0" style="height:60px">
                                    <h6 class="d-block d-md-none w-100 text-center text-white my-0  f-header flex-grow-1">Evidence of Cognitive <br> Expertise (MOC Evidence)</h6>
                                </div>
                                <div class="avatar ml-2 mr-auto unique-color d-flex flex-column justify-content-center align-items-center" style="height:80px;width:80px;margin-top:-70px;">
                                    <i class="fas fa-3x fa-brain text-white" aria-hidden="true"></i>
                                </div>
                                <div class="card-body text-left pt-2 pb-0 px-0">
                                    <div class="alert alert-info text-center">This is a summary of your approved items. For unapproved or pending evidence, go to the MOC History page.</div>

                                    <div class="d-flex flex-row justify-content-center align-items-center p-2 bg-info text-white">
                                        <h4 class="mb-0 text-white">2021 : </h4>
                                        <h4 class=" mb-0 text-white pl-2">100% Complete</h4>
                                    </div>
                                    <div class="file-item moc-progress">
                                        <!-- nospace
							-->
                                        <div class="moc-progress-approved green" style="width:100%;">&nbsp;</div>
                                        <!-- nospace
							-->
                                        <div class="moc-progress-pending amber darknen-1" style="width:0%;text-align: center;"></div>
                                        <!-- nospace
						-->
                                    </div>
                                    <div class="card border-none border-bottom w-100" data-id="9464">
                                        <div class="card-body p-2  rounded-0">
                                            <h5 class="text-left f_s_18">Complete an ACPM e-Learning POD educational activity</h5>
                                            <p class="text-left">ACPM-POD: Soft Tissue Masses</p>
                                            <div class="row m-0">
                                                <div class="col">
                                                    <div class="card z-depth-0">
                                                        <div class="card-body p-0">
                                                            <div class="d-none d-md-block card-status position-absolute rounded border-success p-2" style="top:50%;transform:translateY(-50%);left:1%;">
                                                                <i class="fas fa-check fa-2x text-success" aria-hidden="true"></i>
                                                            </div>
                                                            <div class="row m-0">
                                                                <div class="col-4 m-0 d-flex justify-content-between flex-column">
                                                                    <p class="mb-0">Status</p>
                                                                    <p class="font-weight-bold">
                                                                        <span class="text-success">Approved</span>
                                                                    </p>
                                                                </div>
                                                                <div class="col-4 m-0 d-flex justify-content-between flex-column">
                                                                    <p class="mb-0">Category</p>
                                                                    <p class="">2</p>
                                                                </div>
                                                                <div class="col-4 m-0 d-flex justify-content-between flex-column">
                                                                    <p class="mb-0">Reported</p>
                                                                    <p class="">July 17, 2021</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card border-none w-100" data-id="9397">
                                        <div class="card-body p-2  rounded-0">
                                            <h5 class="text-left f_s_18">Complete an ACPM e-Learning POD educational activity</h5>
                                            <p class="text-left">ACPM-POD: Amputation Prevention Protocols</p>
                                            <div class="row m-0">
                                                <div class="col">
                                                    <div class="card z-depth-0">
                                                        <div class="card-body p-0">
                                                            <div class="d-none d-md-block card-status position-absolute rounded border-success p-2" style="top:50%;transform:translateY(-50%);left:1%;">
                                                                <i class="fas fa-check fa-2x text-success" aria-hidden="true"></i>
                                                            </div>
                                                            <div class="row m-0">
                                                                <div class="col-4 m-0 d-flex justify-content-between flex-column">
                                                                    <p class="mb-0">Status</p>
                                                                    <p class="font-weight-bold">
                                                                        <span class="text-success">Approved</span>
                                                                    </p>
                                                                </div>
                                                                <div class="col-4 m-0 d-flex justify-content-between flex-column">
                                                                    <p class="mb-0">Category</p>
                                                                    <p class="">2</p>
                                                                </div>
                                                                <div class="col-4 m-0 d-flex justify-content-between flex-column">
                                                                    <p class="mb-0">Reported</p>
                                                                    <p class="">June 29, 2021</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row justify-content-center align-items-center p-2 bg-info">
                                        <h4 class="mb-0 text-white">2022 : </h4>
                                        <h4 class=" mb-0 text-white pl-2">0% Complete</h4>
                                    </div>
                                    <div class="file-item moc-progress d-none">
                                        <!-- nospace-->
                                        <div class="moc-progress-approved green" style="width:0%;">&nbsp;</div>
                                    </div>
                                    <div class="card border-none box-design w-100">
                                        <div class="card-body p-2  rounded-0">
                                            <h5 class="text-left">No Evidence Reported</h5>
                                        </div>
                                    </div>
                                    <div class="row m-0 p-0">
                                        <div class="col-12 d-flex flex-column justify-content-between align-items-start p-0">
                                            <div class="alert alert-info text-center w-100 rounded-0 m-0" role="alert">
                                                <div class="col-12 d-flex flex-column align-items-center justify-content-center border-info border-bottom p-3 mb-3">
                                                    <p class="font-weight-bold f-header d-block">You must report <u>two(2) total points</u> each year from the below categories, and must maintain a total of <u>four(4) total points</u> for any two-year period of your MOC enrollment. This policy was made effective in 2020. Available options may change periodically.</p>
                                                    <div class="alert alert-danger font-weight-bold mt-3 mb-2">Only report items completed in the past 12 months.</div>
                                                    <!--<h4>Report 1 point in Category 1</h4>-->
                                                    <!--<div class="blue rounded-circle text-white d-flex justify-content-center align-items-center mx-3 mb-2" style="min-height: 60px;max-height: 60px;min-width: 60px;max-width: 60px;">-->
                                                    <!--	<h3 class="mb-0 font-weight-bold">OR</h3>-->
                                                    <!--</div>-->
                                                    <!--<h4>Report 2 points in Category 2</h4>-->
                                                </div>
                                                <div class="d-flex justify-content-around align-items-stretch row m-0">
                                                    <div class="col-12">
                                                        <h3 class="mb-0 mt-2 f_s_18">Category 1</h3>
                                                        <div class="d-flex justify-content-center align-items-start">
                                                            <div class="text-left w-100" id="accordion-left">
                                                                <div class="mt-2 mb-1 font-italic subcat-head bg-white rounded-lg p-2 font-weight-bold z-depth-1 w-100 wow fadeInLeft border-white" data-wow-delay="0s" data-subcat="1" data-toggle="collapse" data-target="#collapse_0" aria-expanded="true" aria-controls="collapse_0" id="heading_0" style="visibility: visible; animation-name: fadeInLeft; animation-iteration-count: 1; animation-delay: 0s; cursor: pointer;">Residency Faculty</div>
                                                                <ul id="collapse_0" class="border-top ml-0 pl-0 collapse" aria-labelledby="heading_0" data-parent="#accordion-left" data-subcat="1">
                                                                    <li class="list-group-item px-2 py-1 rgba-white-light border-0 mb-1"><a data-toggle="modal" data-target="#helpModal" title="Supporting Document" data-content="Letter from medical staff"><i class="far fa-question-circle" aria-hidden="true"></i></a> Residency or Assistant Residency Director - (2pts.) </li>
                                                                    <li class="list-group-item px-2 py-1 rgba-white-light border-0 mb-1"><a data-toggle="modal" data-target="#helpModal" title="Supporting Document" data-content="Letter from Residency Director or medical staff"><i class="far fa-question-circle" aria-hidden="true"></i></a> Residency Program Faculty (â‰¥0.5 time) - (2pts.) </li>
                                                                </ul>
                                                                <div class="mt-2 mb-1 font-italic subcat-head bg-white rounded-lg p-2 font-weight-bold z-depth-1 w-100 wow fadeInLeft border-white" data-wow-delay="0.2s" data-subcat="2" data-toggle="collapse" data-target="#collapse_2" aria-expanded="true" aria-controls="collapse_2" id="heading_2" style="visibility: visible; animation-name: fadeInLeft; animation-iteration-count: 1; animation-delay: 0.2s; cursor: pointer;">Fellowship Faculty</div>
                                                                <ul id="collapse_2" class="border-top ml-0 pl-0 collapse" aria-labelledby="heading_2" data-parent="#accordion-left" data-subcat="2">
                                                                    <li class="list-group-item px-2 py-1 rgba-white-light border-0 mb-1"><a data-toggle="modal" data-target="#helpModal" title="Supporting Document" data-content="Letter from medical staff"><i class="far fa-question-circle" aria-hidden="true"></i></a> Fellowship or Assistant Fellowship Director -(2pts.) </li>
                                                                    <li class="list-group-item px-2 py-1 rgba-white-light border-0 mb-1"><a data-toggle="modal" data-target="#helpModal" title="Supporting Document" data-content="Letter from Fellowship Director or medical staff"><i class="far fa-question-circle" aria-hidden="true"></i></a> Fellowship Program Faculty (â‰¥0.5 time) - (2pts.) </li>
                                                                    <li class="list-group-item px-2 py-1 rgba-white-light border-0 mb-1"><a data-toggle="modal" data-target="#helpModal" title="Supporting Document" data-content="Letter from Fellowship Director or medical staff"><i class="far fa-question-circle" aria-hidden="true"></i></a> Fellow in a CPME approved Fellowship - (2pts.) </li>
                                                                </ul>
                                                                <div class="mt-2 mb-1 font-italic subcat-head bg-white rounded-lg p-2 font-weight-bold z-depth-1 w-100 wow fadeInLeft border-white" data-wow-delay="0.5s" data-subcat="3" data-toggle="collapse" data-target="#collapse_5" aria-expanded="true" aria-controls="collapse_5" id="heading_5" style="visibility: visible; animation-name: fadeInLeft; animation-iteration-count: 1; animation-delay: 0.5s; cursor: pointer;">Graduate Level Faculty</div>
                                                                <ul id="collapse_5" class="border-top ml-0 pl-0 collapse" aria-labelledby="heading_5" data-parent="#accordion-left" data-subcat="3">
                                                                    <li class="list-group-item px-2 py-1 rgba-white-light border-0 mb-1"><a data-toggle="modal" data-target="#helpModal" title="Supporting Document" data-content="Letter from Dean of College or Chief of Department"><i class="far fa-question-circle" aria-hidden="true"></i></a> Graduate Level Podiatric Medicine Faculty (â‰¥0.5 time) - (2pts.) </li>
                                                                </ul>
                                                                <div class="mt-2 mb-1 font-italic subcat-head bg-white rounded-lg p-2 font-weight-bold z-depth-1 w-100 wow fadeInLeft border-white collapsed" data-wow-delay="0.6s" data-subcat="4" data-toggle="collapse" data-target="#collapse_6" aria-expanded="false" aria-controls="collapse_6" id="heading_6" style="visibility: visible; animation-name: fadeInLeft; animation-iteration-count: 1; animation-delay: 0.6s; cursor: pointer;">Education</div>
                                                                <ul id="collapse_6" class="border-top ml-0 pl-0 collapse" aria-labelledby="heading_6" data-parent="#accordion-left" data-subcat="4">
                                                                    <li class="list-group-item px-2 py-1 rgba-white-light border-0 mb-1"><a data-toggle="modal" data-target="#helpModal" title="Supporting Document" data-content="Automatically uploaded from ABPM Servers"><i class="far fa-question-circle" aria-hidden="true"></i></a> Pass the Cert Exam for ABPM - (2pts.) </li>
                                                                    <li class="list-group-item px-2 py-1 rgba-white-light border-0 mb-1"><a data-toggle="modal" data-target="#helpModal" title="Supporting Document" data-content="Copy of Certificate"><i class="far fa-question-circle" aria-hidden="true"></i></a> Pass the Cert Exam for CWS - (2pts.) </li>
                                                                    <li class="list-group-item px-2 py-1 rgba-white-light border-0 mb-1"><a data-toggle="modal" data-target="#helpModal" title="Supporting Document" data-content="Copy of Certificate"><i class="far fa-question-circle" aria-hidden="true"></i></a> Complete a UHMS 40-hour HBOT Safety Course - (2pts.) </li>
                                                                    <li class="list-group-item px-2 py-1 rgba-white-light border-0 mb-1"><a data-toggle="modal" data-target="#helpModal" title="Supporting Document" data-content="Automatically uploaded from ABPM Servers"><i class="far fa-question-circle" aria-hidden="true"></i></a> Attempt the ABPM CAQ Examination - (2pts.) </li>
                                                                    <li class="list-group-item px-2 py-1 rgba-white-light border-0 mb-1"><a data-toggle="modal" data-target="#helpModal" title="Supporting Document" data-content="Automatically uploaded from ABPM Servers"><i class="far fa-question-circle" aria-hidden="true"></i></a> Complete the ABPM Competency Assessment - (4pts.) </li>
                                                                    <li class="list-group-item px-2 py-1 rgba-white-light border-0 mb-1"><a data-toggle="modal" data-target="#helpModal" title="Supporting Document" data-content="Letter from HQ"><i class="far fa-question-circle" aria-hidden="true"></i></a> ABPM Exam Committee Member - (2pts.) </li>
                                                                    <li class="list-group-item px-2 py-1 rgba-white-light border-0 mb-1"><a data-toggle="modal" data-target="#helpModal" title="Supporting Document" data-content="Letter from HQ"><i class="far fa-question-circle" aria-hidden="true"></i></a> NBPME Exam Committee Member - (2pts.) </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <h3 class="mb-0 mt-2 f_s_18">Category 2</h3>
                                                        <div class="d-flex justify-content-center align-items-start">
                                                            <div class="text-left w-100" id="accordion-right">
                                                                <div class="mt-2 mb-1 font-italic subcat-head bg-white rounded-lg p-2 font-weight-bold z-depth-1 w-100 wow fadeInRight border-white" data-wow-delay="0s" data-subcat="5" data-toggle="collapse" data-target="#collapse_10" aria-expanded="true" aria-controls="collapse_10" id="heading_10" style="visibility: visible; animation-name: fadeInRight; animation-iteration-count: 1; animation-delay: 0s; cursor: pointer;">Publish</div>
                                                                <ul id="collapse_10" class="border-top ml-0 pl-0 collapse" aria-labelledby="heading_10" data-parent="#accordion-right" data-subcat="5">
                                                                    <li class="list-group-item px-2 py-1 rgba-white-light border-0 mb-1"><a data-toggle="modal" data-target="#helpModal" title="Supporting Document" data-content="Copy or screenshot of author page"><i class="far fa-question-circle" aria-hidden="true"></i></a> Publish a paper in a peer reviewed journal in the specialty of Podiatric Medicine - (1pt.) </li>
                                                                    <li class="list-group-item px-2 py-1 rgba-white-light border-0 mb-1"><a data-toggle="modal" data-target="#helpModal" title="Supporting Document" data-content="Copy or screenshot of author page"><i class="far fa-question-circle" aria-hidden="true"></i></a> Author or Co-Author a chapter in a medical text in the specialty of Podiatric Medicine - (1pt.) </li>
                                                                </ul>
                                                                <div class="mt-2 mb-1 font-italic subcat-head bg-white rounded-lg p-2 font-weight-bold z-depth-1 w-100 wow fadeInRight border-white" data-wow-delay="0.2s" data-subcat="6" data-toggle="collapse" data-target="#collapse_12" aria-expanded="true" aria-controls="collapse_12" id="heading_12" style="visibility: visible; animation-name: fadeInRight; animation-iteration-count: 1; animation-delay: 0.2s; cursor: pointer;">Lecture</div>
                                                                <ul id="collapse_12" class="border-top ml-0 pl-0 collapse" aria-labelledby="heading_12" data-parent="#accordion-right" data-subcat="6">
                                                                    <li class="list-group-item px-2 py-1 rgba-white-light border-0 mb-1"><a data-toggle="modal" data-target="#helpModal" title="Supporting Document" data-content="Copy or screenshot of lecture program"><i class="far fa-question-circle" aria-hidden="true"></i></a> Lecture on the specialty of Podiatric Medicine at a CME approved conference - (1pt.) </li>
                                                                    <li class="list-group-item px-2 py-1 rgba-white-light border-0 mb-1"><a data-toggle="modal" data-target="#helpModal" title="Supporting Information" data-content="Automatically uploaded from ACPM/ABPM Servers"><i class="far fa-question-circle" aria-hidden="true"></i></a> Contribute a lecture in the ACPM e-Learning POD program - (1pt.) </li>
                                                                </ul>
                                                                <div class="mt-2 mb-1 font-italic subcat-head bg-white rounded-lg p-2 font-weight-bold z-depth-1 w-100 wow fadeInRight border-white" data-wow-delay="0.4s" data-subcat="7" data-toggle="collapse" data-target="#collapse_14" aria-expanded="true" aria-controls="collapse_14" id="heading_14" style="visibility: visible; animation-name: fadeInRight; animation-iteration-count: 1; animation-delay: 0.4s; cursor: pointer;">Complete 1 or 2 Approved Learning Resources</div>
                                                                <ul id="collapse_14" class="border-top ml-0 pl-0 collapse" aria-labelledby="heading_14" data-parent="#accordion-right" data-subcat="7">
                                                                    <li class="list-group-item px-2 py-1 rgba-white-light border-0 mb-1"><a data-toggle="modal" data-target="#helpModal" title="Lecture Information" data-content="Upload documentation displaying proof of completion."><i class="far fa-question-circle" aria-hidden="true"></i></a> <a href="https://my.acpmed.org/login" target="_blank">ACPM - Complete an e-Learning POD educational activity on acpmed.org - (1pt.)</a>
                                                                    </li>
                                                                    <li class="list-group-item px-2 py-1 rgba-white-light border-0 mb-1"><a data-toggle="modal" data-target="#helpModal" title="Lecture Information" data-content="Upload documentation displaying proof of completion."><i class="far fa-question-circle" aria-hidden="true"></i></a> <a href="https://my.acpmed.org/login" target="_blank">ACPM - Complete a Mini Module on acpmed.org - (1pt.)</a>
                                                                    </li>
                                                                    <li class="list-group-item px-2 py-1 rgba-white-light border-0 mb-1"><a data-toggle="modal" data-target="#helpModal" title="PRESENT Lecture Information" data-content="Upload documentation displaying proof of completion."><i class="far fa-question-circle" aria-hidden="true"></i></a> <a href="https://podiatry.com/Lecture-Hall/84/ABPM-MOC/" target="_blank">PRESENT - Complete an ABPM-MOC approved lecture hall on podiatry.com - (1pt.)</a>
                                                                    </li>
                                                                    <li class="list-group-item px-2 py-1 rgba-white-light border-0 mb-1"><a data-toggle="modal" data-target="#helpModal" title="PRESENT Conference Information" data-content="Upload documentation displaying proof of completion."><i class="far fa-question-circle" aria-hidden="true"></i></a> <a href="https://podiatry.com/Podiatry-CME-Conferences" target="_blank">PRESENT - Complete an ABPM-MOC approved conference with PRESENT - (2pts.)
                                                                        </a>
                                                                        <div class="rgba-white-light rounded">
                                                                            <p class="font-weight-bold mb-0">2021 Resources Include</p>
                                                                            <ul class="list-unstyled">
                                                                                <li class="mb-2">Online Desert Foot Virtual Conference, December 3-5 &amp; 10-12 2021</li>
                                                                                <li class="mb-2">PRESENT Half Day Telehealth Virtual Conference - Wound Care Without Walls â€¢ November 13, 2021</li>
                                                                                <li class="mb-2">Superbones Superwounds West, October 9-10 2021</li>
                                                                                <li class="mb-2">Podiatric Residency Education Summit East &amp; Midwest, August 14-15 2021</li>
                                                                                <li class="mb-2">Superbones Superwounds East, April 17-18 2021</li>
                                                                                <li class="mb-2">Treasure Hunt, February 20-21 2021</li>
                                                                            </ul>
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-group-item px-2 py-1 rgba-white-light border-0 mb-1"><a data-toggle="modal" data-target="#helpModal" title="CME Online Information" data-content="Upload documentation displaying proof of attendance."><i class="far fa-question-circle" aria-hidden="true"></i></a> <a href="/pages/my-credits-add">CME ONLINE - Complete an ABPM approved event with CME Online - (2pts.)</a>
                                                                        <div class="rgba-white-light rounded">
                                                                            <p class="font-weight-bold mb-0">2021 Resources Include</p>
                                                                            <ul class="list-unstyled">
                                                                                <li class="mb-2">Hallux Limitus; Current Concepts and Treatment Strategies Seminar â€¢ October 17, 2021</li>
                                                                                <li class="mb-2">Imaging of the Foot &amp; Ankle, June 5 2021</li>
                                                                            </ul>
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-group-item px-2 py-1 rgba-white-light border-0 mb-1"><a data-toggle="modal" data-target="#helpModal" title="Supporting Document" data-content="Upload documentation displaying proof of completion."><i class="far fa-question-circle" aria-hidden="true"></i></a> <a href="/pages/my-credits-add">Additional ABPM Approved Learning Resources - (2pts)</a>
                                                                        <p class="font-italic my-2">This subcategory is used for any approved learning resource not featured in the above list.</p>
                                                                        <div class="rgba-white-light rounded">
                                                                            <p class="font-weight-bold mb-0">2021 Resources Include</p>
                                                                            <ul class="list-unstyled">
                                                                                <li class="mb-2">ACPM Presents: Updates in Biomechanics - Practical Pearls â€¢ November 13, 2021</li>
                                                                                <li class="mb-2">The Podiatry Institute â€¢ Hallux Valgus and Related Forefoot Surgery â€¢ The 31st Annual Sanibel Conference â€¢ November 4-7, 2021</li>
                                                                                <li class="mb-2">Kentucky Podiatric Medical Association Annual Scientific Meeting October 23, 2021 DVT Prophylaxis' and 'Pearls, Risks and Complications of Chemical Matrixectomies learning tracks</li>
                                                                                <li class="mb-2">The 2021 Heartland Foot &amp; Ankle Conference â€¢ October 13-15, 2021</li>
                                                                                <li class="mb-2">The Podiatry Institute â€¢ 40th Annual Reconstructive Surgery of the Foot, Ankle and Leg â€¢ San Diego, CA - September 23-25, 2021</li>
                                                                                <li class="mb-2">CSPM Symposium September 11, 2021 Sports Medicine/Biomechanics &amp; Dermatology/Pediatrics Learning Tracks</li>
                                                                                <li class="mb-2">APMA National Meeting Denver, July 29-August 1 2021</li>
                                                                                <li class="mb-2">Foot &amp; Ankle Quarterly</li>
                                                                                <li class="mb-2">Compendium of Podiatric Medicine &amp; Surgery (annual publication)</li>
                                                                                <li class="mb-2">Podiatry Management Services CME Exam (in podiatry management publication)</li>
                                                                                <li class="mb-2">VA Bi-Monthly Lecture Series (Provided free of charge to VA podiatrists)</li>
                                                                            </ul>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!--
											<div class="alert alert-warning border-info shadow mt-3">
												<h5 class="mt-2 mb-3"><a href="https://podiatry.com/" target="_blank">PRESENT Virtual Conferences</a></h5>
												<div>ABPM is collaborating with PRESENT to automatically report credits for members who attended MOC lectures at virtual conferences.</div>
											</div>
-->
                                                        <!--
											<div class="alert alert-warning border-info shadow mt-3">
												<div class="my-2 text-dark">ACPM has their new e-Learning POD (Podiatry on Demand) available for Category 2 fulfillment.  All Fellows of the College have free access to this program which allows both fulfillment in MOC program and CME credits.</div>
												<div><a href="https://www.acpmed.org/education-credentialing/acfaom-live-learning-center/" target="_blank" class="btn btn-sm btn-info">Learn More</a></div>
											</div>
-->
                                                    </div>
                                                    <div class="alert alert-warning font-weight-bold m-3" role="alert">
                                                        Click on the above headings to view the category options. <br>
                                                        If you want to know what documents are required to receive credit, click on the <i class="far fa-question-circle" aria-hidden="true"></i> icon.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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