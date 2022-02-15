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
                <h4 class="f_s_20">Unpaid Invoices</h4>
                <div class="table table-sm">
                    <tr>
                        <td>
                            <div class="card border-none mb-3">
                                <div class="p-3 box-design rounded">
                                    <div class=" f_w_600 f_s_16">ACPM 2021 Dues (College)</div>
                                    <div class="mt-2 f_s_12">10/13/2021</div>
                                    <div class="mt-2"><span class="fw-bold">Invoice Id:</span>165520397</div>
                                    <div class="mt-2"><span class="fw-bold">Amount Due:</span> <span class="text-danger f_s_16 f_w_600">$75.00</span></div>
                                    <div class="my-2"><a class="btn py-1 px-2 btn-dn" href="#"> Download PDF</a></div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </div>
                <a href="../pages/invoice.php" class="btn btn-success f_s_14">PAY ALL INVOICE</a>
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