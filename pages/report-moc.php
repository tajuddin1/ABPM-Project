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
                <h4 class="f_s_20">Report MOC Evidence </h4>
                <form method="post" enctype="multipart/form-data" id="FormReportEvi" class="mt-3 mb-3" novalidate="novalidate">
                    <div class="alert alert-success mb-0 p-2 f_s_12" role="alert">You must report <u>two(2) total points</u> each year from the below categories, and must maintain a total of <u>four(4) total points</u> for any two-year period of your MOC enrollment. This policy was made effective in 2020. Available options may change periodically.</div>
                    <div class="mt-3">
                        <h3 class="f_s_16">Category 1</h3>
                        <div class="mt-2 mb-1 font-italic">Residency Faculty</div>
                        <div class="form-check" data-toggle="tooltip" title="" data-original-title="Supporting Document: Letter from medical staff"><input type="radio" class="form-check-input" name="type" value="32" id="type-32" data-title="Supporting Document" data-content="Letter from medical staff"><label for="type-32" class="form-check-label">Residency or Assistant Residency Director - (2pts.)</label></div>
                        <div class="form-check" data-toggle="tooltip" title="" data-original-title="Supporting Document: Letter from Residency Director or medical staff"><input type="radio" class="form-check-input" name="type" value="54" id="type-54" data-title="Supporting Document" data-content="Letter from Residency Director or medical staff"><label for="type-54" class="form-check-label">Residency Program Faculty (â‰¥0.5 time) - (2pts.)</label></div>
                        <div class="mt-2 mb-1 font-italic">Fellowship Faculty</div>
                        <div class="form-check" data-toggle="tooltip" title="" data-original-title="Supporting Document: Letter from medical staff"><input type="radio" class="form-check-input" name="type" value="34" id="type-34" data-title="Supporting Document" data-content="Letter from medical staff"><label for="type-34" class="form-check-label">Fellowship or Assistant Fellowship Director -(2pts.)</label></div>
                        <div class="form-check" data-toggle="tooltip" title="" data-original-title="Supporting Document: Letter from Fellowship Director or medical staff"><input type="radio" class="form-check-input" name="type" value="55" id="type-55" data-title="Supporting Document" data-content="Letter from Fellowship Director or medical staff"><label for="type-55" class="form-check-label">Fellowship Program Faculty (â‰¥0.5 time) - (2pts.)</label></div>
                        <div class="form-check" data-toggle="tooltip" title="" data-original-title="Supporting Document: Letter from Fellowship Director or medical staff"><input type="radio" class="form-check-input" name="type" value="36" id="type-36" data-title="Supporting Document" data-content="Letter from Fellowship Director or medical staff"><label for="type-36" class="form-check-label">Fellow in a CPME approved Fellowship - (2pts.)</label></div>
                        <div class="mt-2 mb-1 font-italic">Graduate Level Faculty</div>
                        <div class="form-check" data-toggle="tooltip" title="" data-original-title="Supporting Document: Letter from Dean of College or Chief of Department"><input type="radio" class="form-check-input" name="type" value="56" id="type-56" data-title="Supporting Document" data-content="Letter from Dean of College or Chief of Department"><label for="type-56" class="form-check-label">Graduate Level Podiatric Medicine Faculty (â‰¥0.5 time) - (2pts.)</label></div>
                        <div class="mt-2 mb-1 font-italic">Education</div>
                        <div class="form-check" data-toggle="tooltip" title="" data-original-title="Supporting Document: Automatically uploaded from ABPM Servers"><input type="radio" class="form-check-input" name="type" value="38" id="type-38" data-title="Supporting Document" data-content="Automatically uploaded from ABPM Servers"><label for="type-38" class="form-check-label">Pass the Cert Exam for ABPM - (2pts.)</label></div>
                        <div class="form-check" data-toggle="tooltip" title="" data-original-title="Supporting Document: Copy of Certificate"><input type="radio" class="form-check-input" name="type" value="39" id="type-39" data-title="Supporting Document" data-content="Copy of Certificate"><label for="type-39" class="form-check-label">Pass the Cert Exam for CWS - (2pts.)</label></div>
                        <div class="form-check" data-toggle="tooltip" title="" data-original-title="Supporting Document: Copy of Certificate"><input type="radio" class="form-check-input" name="type" value="53" id="type-53" data-title="Supporting Document" data-content="Copy of Certificate"><label for="type-53" class="form-check-label">Complete a UHMS 40-hour HBOT Safety Course - (2pts.)</label></div>
                        <div class="form-check" data-toggle="tooltip" title="" data-original-title="Supporting Document: Automatically uploaded from ABPM Servers"><input type="radio" class="form-check-input" name="type" value="42" id="type-42" data-title="Supporting Document" data-content="Automatically uploaded from ABPM Servers"><label for="type-42" class="form-check-label">Attempt the ABPM CAQ Examination - (2pts.)</label></div>
                        <div class="form-check" data-toggle="tooltip" title="" data-original-title="Supporting Document: Automatically uploaded from ABPM Servers"><input type="radio" class="form-check-input" name="type" value="43" id="type-43" data-title="Supporting Document" data-content="Automatically uploaded from ABPM Servers"><label for="type-43" class="form-check-label">Complete the ABPM Competency Assessment - (4pts.)</label></div>
                        <div class="form-check" data-toggle="tooltip" title="" data-original-title="Supporting Document: Letter from HQ"><input type="radio" class="form-check-input" name="type" value="44" id="type-44" data-title="Supporting Document" data-content="Letter from HQ"><label for="type-44" class="form-check-label">ABPM Exam Committee Member - (2pts.)</label></div>
                        <div class="form-check" data-toggle="tooltip" title="" data-original-title="Supporting Document: Letter from HQ"><input type="radio" class="form-check-input" name="type" value="45" id="type-45" data-title="Supporting Document" data-content="Letter from HQ"><label for="type-45" class="form-check-label">NBPME Exam Committee Member - (2pts.)</label></div>
                    </div>
                    <div class="mt-5">
                        <h3 class="f_s_16">Category 2</h3>
                        <div class="mt-2 mb-1 font-italic">Publish</div>
                        <div class="form-check" data-toggle="tooltip" title="" data-original-title="Supporting Document: Copy or screenshot of author page"><input type="radio" class="form-check-input" name="type" value="46" id="type-46" data-title="Supporting Document" data-content="Copy or screenshot of author page"><label for="type-46" class="form-check-label">Publish a paper in a peer reviewed journal in the specialty of Podiatric Medicine - (1pt.)</label></div>
                        <div class="form-check" data-toggle="tooltip" title="" data-original-title="Supporting Document: Copy or screenshot of author page"><input type="radio" class="form-check-input" name="type" value="47" id="type-47" data-title="Supporting Document" data-content="Copy or screenshot of author page"><label for="type-47" class="form-check-label">Author or Co-Author a chapter in a medical text in the specialty of Podiatric Medicine - (1pt.)</label></div>
                        <div class="mt-2 mb-1 font-italic">Lecture</div>
                        <div class="form-check" data-toggle="tooltip" title="" data-original-title="Supporting Document: Copy or screenshot of lecture program"><input type="radio" class="form-check-input" name="type" value="48" id="type-48" data-title="Supporting Document" data-content="Copy or screenshot of lecture program"><label for="type-48" class="form-check-label">Lecture on the specialty of Podiatric Medicine at a CME approved conference - (1pt.)</label></div>
                        <div class="form-check" data-toggle="tooltip" title="" data-original-title="Supporting Information: Automatically uploaded from ACPM/ABPM Servers"><input type="radio" class="form-check-input" name="type" value="49" id="type-49" data-title="Supporting Information" data-content="Automatically uploaded from ACPM/ABPM Servers"><label for="type-49" class="form-check-label">Contribute a lecture in the ACPM e-Learning POD program - (1pt.)</label></div>
                        <div class="mt-2 mb-1 font-italic">Complete 1 or 2 Approved Learning Resources</div>
                        <div class="form-check" data-toggle="tooltip" title="" data-original-title="Lecture Information: Upload documentation displaying proof of completion."><input type="radio" class="form-check-input" name="type" value="58" id="type-58" data-title="Lecture Information" data-content="Upload documentation displaying proof of completion."><label for="type-58" class="form-check-label">ACPM - Complete an e-Learning POD educational activity on acpmed.org - (1pt.)</label></div>
                        <div class="form-check" data-toggle="tooltip" title="" data-original-title="Lecture Information: Upload documentation displaying proof of completion."><input type="radio" class="form-check-input" name="type" value="63" id="type-63" data-title="Lecture Information" data-content="Upload documentation displaying proof of completion."><label for="type-63" class="form-check-label">ACPM - Complete a Mini Module on acpmed.org - (1pt.)</label></div>
                        <div class="form-check" data-toggle="tooltip" title="" data-original-title="PRESENT Lecture Information: Upload documentation displaying proof of completion."><input type="radio" class="form-check-input" name="type" value="57" id="type-57" data-title="PRESENT Lecture Information" data-content="Upload documentation displaying proof of completion."><label for="type-57" class="form-check-label">PRESENT - Complete an ABPM-MOC approved lecture hall on podiatry.com - (1pt.)</label></div>
                        <div class="form-check" data-toggle="tooltip" title="" data-original-title="PRESENT Conference Information: Upload documentation displaying proof of completion."><input type="radio" class="form-check-input" name="type" value="61" id="type-61" data-title="PRESENT Conference Information" data-content="Upload documentation displaying proof of completion."><label for="type-61" class="form-check-label">PRESENT - Complete an ABPM-MOC approved conference with PRESENT - (2pts.)
                            </label></div>
                        <div class="ml-5 p-1" style="font-size:0.75rem">
                            <div class="rgba-white-light rounded">
                                <p class="font-weight-bold mb-0">2021 Resources Include</p>
                                <ul>
                                    <li>Online Desert Foot Virtual Conference, December 3-5 &amp; 10-12 2021</li>
                                    <li>PRESENT Half Day Telehealth Virtual Conference - Wound Care Without Walls â€¢ November 13, 2021</li>
                                    <li>Superbones Superwounds West, October 9-10 2021</li>
                                    <li>Podiatric Residency Education Summit East &amp; Midwest, August 14-15 2021</li>
                                    <li>Superbones Superwounds East, April 17-18 2021</li>
                                    <li>Treasure Hunt, February 20-21 2021</li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-check" data-toggle="tooltip" title="" data-original-title="CME Online Information: Upload documentation displaying proof of attendance."><input type="radio" class="form-check-input" name="type" value="62" id="type-62" data-title="CME Online Information" data-content="Upload documentation displaying proof of attendance."><label for="type-62" class="form-check-label">CME ONLINE - Complete an ABPM approved event with CME Online - (2pts.)</label></div>
                        <div class="ml-5 p-1" style="font-size:0.75rem">
                            <div class="rgba-white-light rounded">
                                <p class="font-weight-bold mb-0">2021 Resources Include</p>
                                <ul>
                                    <li>Hallux Limitus; Current Concepts and Treatment Strategies Seminar â€¢ October 17, 2021</li>
                                    <li>Imaging of the Foot &amp; Ankle, June 5 2021</li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-check" data-toggle="tooltip" title="" data-original-title="Supporting Document: Upload documentation displaying proof of completion."><input type="radio" class="form-check-input" name="type" value="59" id="type-59" data-title="Supporting Document" data-content="Upload documentation displaying proof of completion."><label for="type-59" class="form-check-label">Additional ABPM Approved Learning Resources - (2pts)</label></div>
                        <div class="ml-5 p-1" style="font-size:0.75rem">
                            <p class="font-italic my-2">This subcategory is used for any approved learning resource not featured in the above list.</p>
                            <div class="rgba-white-light rounded">
                                <p class="font-weight-bold mb-0">2021 Resources Include</p>
                                <ul>
                                    <li>ACPM Presents: Updates in Biomechanics - Practical Pearls â€¢ November 13, 2021</li>
                                    <li>The Podiatry Institute â€¢ Hallux Valgus and Related Forefoot Surgery â€¢ The 31st Annual Sanibel Conference â€¢ November 4-7, 2021</li>
                                    <li>Kentucky Podiatric Medical Association Annual Scientific Meeting October 23, 2021 DVT Prophylaxis' and 'Pearls, Risks and Complications of Chemical Matrixectomies learning tracks</li>
                                    <li>The 2021 Heartland Foot &amp; Ankle Conference â€¢ October 13-15, 2021</li>
                                    <li>The Podiatry Institute â€¢ 40th Annual Reconstructive Surgery of the Foot, Ankle and Leg â€¢ San Diego, CA - September 23-25, 2021</li>
                                    <li>CSPM Symposium September 11, 2021 Sports Medicine/Biomechanics &amp; Dermatology/Pediatrics Learning Tracks</li>
                                    <li>APMA National Meeting Denver, July 29-August 1 2021</li>
                                    <li>Foot &amp; Ankle Quarterly</li>
                                    <li>Compendium of Podiatric Medicine &amp; Surgery (annual publication)</li>
                                    <li>Podiatry Management Services CME Exam (in podiatry management publication)</li>
                                    <li>VA Bi-Monthly Lecture Series (Provided free of charge to VA podiatrists)</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3 report-license">
                        <div class="mb-1"><b>Apply to Year.</b> (Optional)</div>
                        <select name="apply_year" class="form-control">
                            <option value="2022" selected="selected">2022</option>
                            <option value="2021">2021</option>
                        </select>
                    </div>

                    <div class="mt-3 report-license">
                        <div class="mb-1"><b>Provide details by commenting here.</b> (Optional)</div>
                        <textarea name="declaration" class="form-control"></textarea>
                    </div>

                    <div class="mt-3" id="helpAlert">
                        <div class="alert alert-info f_s_12 p-2" role="alert">
                            <h4 id="helpTitle" class="f_s_14">Required Supporting Document</h4>
                            <span id="helpContent">Copy or screenshot of author page</span>
                        </div>
                    </div>
                    <div class="mt-3 report-license">
                        <div class="mb-1"><b>Upload a supporting document.</b> <span class="text-danger">(Required)</span></div>
                        <div><input type="file" name="attachment" class="form-control p-1" style="min-height: 40px;"></div>
                    </div>
                    <div class="order-md-last mt-3">
                        <div class="alert alert-info font-weight-bold f_s_12 p-2">Tip: On a mobile device, you can take a picture with your cam button.</div>
                    </div>
                    <div class="alert alert-danger font-weight-bold mt-3 f_s_12 p-2">
                        Only report items completed in the past 12 months.
                    </div>

                    <div class=" mt-3 d-flex justify-content-between align-items-center">
                        <button type="submit" name="button" value="Cancel" class="btn btn-danger  waves-effect waves-light">Cancel</button>
                        <button type="submit" name="button" value="Submit" id="FormReportEviSubmit" class="btn btn-success  waves-effect waves-light">Submit</button>
                    </div>
                </form>
            </div>
    </section>
    <!-- FOOTER SCRIPT -->
    <?php
    include('../layouts/footer-script.php');
    ?>
    <!-- END FOOTER SCRIPT -->
</body>

</html>