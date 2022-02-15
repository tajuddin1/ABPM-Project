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
                 <h4 class="f_s_20">Committee Expense Reports</h4>
             </div>
             <div class="mt-3">
                 <div class="card border-none box-design">
                     <div class="card-body">
                         <a href="#">
                             <span class="f_s_20">CAQ-SM Expense Report</span>
                             <p class="text-grey">Expense report for the <b>CAQ in Sports Medicine Committee</b>.</p>
                         </a>
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