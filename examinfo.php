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
            <div class="container-fluid">
                <h5 class="text-left my-3">Examination information</h5>
                <h4 class="mb-3">Exam Dates to Remember:</h4>
                <div class="card border-none">
                    <div class="p-3 box-design rounded">
                        <span>2022 Spring Examinations</span>
                        <p class="mt-3"><span class="fw-bold">Application Available:</span> November 1, 2021</p>
                        <p class="mt-2"><span class="fw-bold">Application Deadline:</span> March 15, 2022</p>
                        <p class="mt-2"><span class="fw-bold">Exam Date:</span> May 15, 2022</p>
                    </div>
                </div>
                <div class="card border-none mt-5">
                    <div class="p-3 box-design rounded">
                        <span>2022 Certificate Exam</span>
                        <p class="mt-3"><span class="fw-bold">Application Available:</span> November 1, 2021</p>
                        <p class="mt-2"><span class="fw-bold">Application Deadline:</span> July 31, 2022</p>
                        <p class="mt-2"><span class="fw-bold">Exam Date:</span> October 1, 2022</p>
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