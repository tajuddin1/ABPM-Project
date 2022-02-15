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
                <h4 class="f_s_20">Your Licenses History</h4>
                <p>This is a record of your licenses that we currently have on file.</p>

                <div class="border-0 my-3">
                    <a class="ml-0 btn btn-primary waves-effect waves-light" href="../pages/report-license.php">Report a License</a>
                </div>
            </div>
            <div class="container-fluid p-0">
                <table class="table table-striped license">
                    <tr>
                        <th>License Number</th>
                        <th>State</th>
                        <th>Expiration Date</th>
                        <th>Actions</th>
                    </tr>
                    <tr>
                        <td>003694</td>
                        <td>NY</td>
                        <td><a href="#">5/31/2022</a></td>
                        <td>
                            <button name="do" value="delete" class="btn btn-sm btn-danger f_s_12">Delete</button>
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