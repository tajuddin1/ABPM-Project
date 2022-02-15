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
                <h4 class="f_s_20">Change your password</h4>
                <div>
                    <ul class="list-unstyled alert alert-warning rounded-0 f_s_12 mt-3">
                        <span>Passwords must be 9 or more characters long and contain</span>
                        <li>A lowercase letters,</li>
                        <li>A percase letters,</li>
                        <li>A gits, and</li>
                        <li>A aracters that are not letters or digits.</li>
                    </ul>
                </div>
                <form>
                    <div class="passInputWrapper d-flex flex-column">
                        <input type="password" class="mt-3 passType" name="oldPass" id="oldPass" placeholder="Enter your old password">
                        <div class="alert alert-danger mt-3 mb-0 p-2" role="alert">
                            Did not match your old password.
                        </div>
                        <input type="password" class="mt-3 passType" name="newPass" id="newPass" placeholder="Create a new password">
                        <input type="password" class="mt-3 passType" name="confirmNewPass" id="confirmNewPass" placeholder="Confirm your new password">
                        <div id="confirmPassAlert" class="alert alert-danger mt-3 mb-0 p-2" role="alert" style="display: none;">
                            Please confirm your new password.
                        </div>
                    </div>
                    <div class="d-flex align-items-center m-0 py-3">
                        <input type="checkbox" class="" name="PassViewer" id="PassViewer" onclick="typeChange()">
                        <label for="PassViewer" class="mb-0 ml-2 f_s_16" style="color: gray;">Show Password</label>
                    </div>
                    <div class="d-flex flex-row justify-content-between align-items-center">
                        <input type="reset" class="btn btn-sm btn-danger" value="Cancel">
                        <input type="button" class="btn btn-sm btn-success" id="passUpdate" value="Update Password" onclick="passvalidate()">
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