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
            <div class="container-fluid">
                <form class="mb-5" id="profile-edit">
                    <div class="card-body p-1">
                        <h3 class="inputhint" style="color:red; font-size:16px;">Required Fields : <span class="f_s_28 f_w_600">*</span></h3>
                        <div class="f_s_20 my-2 ">ABPM Member ID : <span class="f_w_600">100049</span></div>
                        <label class="hasRequired">Login Name</label>
                        <input type="text" name="username" value="Amico">
                        <label>Company</label>
                        <input type="text" name="company" value="">
                        <label class="hasRequired">Last Name</label>
                        <input type="text" name="last_name" value="Amico">
                        <label class="hasRequired">First Name</label>
                        <input type="text" name="first_name" value="Susan">
                        <label>Middle Name</label>
                        <input type="text" name="middle_name" value="">
                        <label>Suffix</label>
                        <input type="text" name="name_suffix" value="">
                        <span class="inputhint">Public address is displayed on the <a href="pages/find-a-doctor" target="_blank">Find a Doctor</a> page.</span>
                        <br>
                        <label class="hasRequired">Public Address Line 1</label>
                        <input type="text" name="address_1" value="9731 Fourth Avenue">
                        <label>Public Address Line 2</label>
                        <input type="text" name="address_2" value="">
                        <label class="hasRequired">Public City</label>
                        <input type="text" name="city" value="Brooklyn">
                        <label>Public County</label>
                        <input type="text" name="county" value="Richmond">
                        <label class="hasRequired">Public State/Province</label>
                        <input type="text" name="state" value="NY">
                        <label class="hasRequired">Public Postal Code</label>
                        <input type="text" name="postal_code" value="11209">
                        <label>Public Coundivy</label>
                        <input type="text" name="counlabely" value="US">
                        <span class="inputhint">Mail address is used for correspondence from ABPM.</span>
                        <br>
                        <label class="hasRequired">Mail Address Line 1</label>
                        <input type="text" name="mail_address_1" value="9731 Fourth Avenue">
                        <label>Mail Address Line 2</label>
                        <input type="text" name="mail_address_2" value="">
                        <label class="hasRequired">Mail City</label>
                        <input type="text" name="mail_city" value="Brooklyn">
                        <label>Mail County</label>
                        <input type="text" name="mail_county" value="Richmond">
                        <label class="hasRequired">Mail State/Province</label>
                        <input type="text" name="mail_state" value="NY">
                        <label class="hasRequired">Mail Postal Code</label>
                        <input type="text" name="mail_postal_code" value="11209">
                        <label>Mail Coundivy</label>
                        <input type="text" name="mail_counlabely" value="US">
                        <span class="inputhint">For all phone numbers, include the area code.<br>To indicate an extension number for a business phone, prefix the extension with a plus sign (+000).</span>
                        <br>
                        <label class="hasRequired">Business Phone</label>
                        <input type="text" name="business_phone" value="(718) 836-1800">
                        <label>Evening Phone</label>
                        <input type="text" name="evening_phone" value="(718) 966-7479">
                        <label>Fax</label>
                        <input type="text" name="fax_phone" value="(718) 836-7531">
                        <label class="hasRequired">Cell Phone</label>
                        <input type="text" name="cell_phone" value="">
                        <label>Pager</label>
                        <input type="text" name="pager_phone" value="(917) 699-0485">
                        <label>Websit</label>
                        <input type="text" name="website" value="">
                        <label class="hasRequired">Email</label>
                        <input type="text" name="email" value="louis@shortgrass.com">
                        <label>Secondary Email</label>
                        <input type="text" name="email_alt" value="louis@shortgrass.com">
                        <label class="hasRequired">Date Of Birth</label>
                        <input type="text" name="birth_date" value="6/15/1954">
                        <div class="d-flex align-items-center justify-content-between">
                            <button type="button" class="btn input-btn btn-success" name="button">Save Change</button>
                            <button type="button" class="btn input-btn btn-danger" name="button" value="Cancel">Cancel</button>
                        </div>
                    </div>
                </form>
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