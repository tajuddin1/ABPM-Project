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
                <h4 class="f_s_20">Report A License</h4>
                <form method="post">
                    <div class="report-license">
                        <label for="license_number">License Number:</label><br>
                        <input type="text" name="license_number" size="20">
                    </div>
                    <div class="report-license">
                        <label>State:</label><br>
                        <select id="s4kImoUg" name="state" value="NY" title="State/Province" class="p-1">
                            <optgroup label="United States">
                                <option value="AL">Alabama (AL)</option>
                                <option value="AK">Alaska (AK)</option>
                                <option value="AZ">Arizona (AZ)</option>
                                <option value="AR">Arkansas (AR)</option>
                                <option value="CA">California (CA)</option>
                                <option value="CO">Colorado (CO)</option>
                                <option value="CT">Connecticut (CT)</option>
                                <option value="DE">Delaware (DE)</option>
                                <option value="DC">District of Columbia (DC)</option>
                                <option value="FL">Florida (FL)</option>
                                <option value="GA">Georgia (GA)</option>
                                <option value="HI">Hawaii (HI)</option>
                                <option value="ID">Idaho (ID)</option>
                                <option value="IL">Illinois (IL)</option>
                                <option value="IN">Indiana (IN)</option>
                                <option value="IA">Iowa (IA)</option>
                                <option value="KS">Kansas (KS)</option>
                                <option value="KY">Kentucky (KY)</option>
                                <option value="LA">Louisiana (LA)</option>
                                <option value="ME">Maine (ME)</option>
                                <option value="MD">Maryland (MD)</option>
                                <option value="MA">Massachusetts (MA)</option>
                                <option value="MI">Michigan (MI)</option>
                                <option value="MN">Minnesota (MN)</option>
                                <option value="MS">Mississippi (MS)</option>
                                <option value="MO">Missouri (MO)</option>
                                <option value="MT">Montana (MT)</option>
                                <option value="NE">Nebraska (NE)</option>
                                <option value="NV">Nevada (NV)</option>
                                <option value="NH">New Hampshire (NH)</option>
                                <option value="NJ">New Jersey (NJ)</option>
                                <option value="NM">New Mexico (NM)</option>
                                <option value="NY" selected="selected">New York (NY)</option>
                                <option value="NC">North Carolina (NC)</option>
                                <option value="ND">North Dakota (ND)</option>
                                <option value="OH">Ohio (OH)</option>
                                <option value="OK">Oklahoma (OK)</option>
                                <option value="OR">Oregon (OR)</option>
                                <option value="PA">Pennsylvania (PA)</option>
                                <option value="RI">Rhode Island (RI)</option>
                                <option value="SC">South Carolina (SC)</option>
                                <option value="SD">South Dakota (SD)</option>
                                <option value="TN">Tennessee (TN)</option>
                                <option value="TX">Texas (TX)</option>
                                <option value="UT">Utah (UT)</option>
                                <option value="VT">Vermont (VT)</option>
                                <option value="VA">Virginia (VA)</option>
                                <option value="WA">Washington (WA)</option>
                                <option value="WV">West Virginia (WV)</option>
                                <option value="WI">Wisconsin (WI)</option>
                                <option value="WY">Wyoming (WY)</option>
                            </optgroup>
                            <optgroup label="U.S. Territories">
                                <option value="AS">American Samoa (AS)</option>
                                <option value="FM">Federated States of Micronesia (FM)</option>
                                <option value="GU">Guam (GU)</option>
                                <option value="MH">Marshall Islands (MH)</option>
                                <option value="MP">Northern Mariana Islands (MP)</option>
                                <option value="PW">Palau (PW)</option>
                                <option value="PR">Puerto Rico (PR)</option>
                                <option value="VI">Virgin Islands (VI)</option>
                            </optgroup>
                            <optgroup label="Canada">
                                <option value="AB">Alberta (AB)</option>
                                <option value="BC">British Columbia (BC)</option>
                                <option value="MB">Manitoba (MB)</option>
                                <option value="NB">New Brunswick (NB)</option>
                                <option value="NL">Newfoundland and Labrador (NL)</option>
                                <option value="NS">Nova Scotia (NS)</option>
                                <option value="ON">Ontario (ON)</option>
                                <option value="PE">Prince Edward Island (PE)</option>
                                <option value="QC">Quebec (QC)</option>
                                <option value="SK">Saskatchewan (SK)</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="report-license">
                        <label>Expiration Date:</label><br>
                        <input type="text" name="expiration_date_ymd" size="10">
                    </div>
                    <div>
                        <label class="m-0">Documentation:</label><br>
                        <i style="font-size:80%;">No attachments are required.</i>
                    </div>
                    <div class="d-flex justify-content-end mt-2">
                        <div class="mr-3"><input type="submit" name="button" value="Save Changes" class="btn btn-primary rounded-0 f_s_14"></div>
                        <div><input type="submit" name="button" value="Cancel" class="btn btn-danger rounded-0 f_s_14"></div>
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