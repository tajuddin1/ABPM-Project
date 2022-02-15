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
			<div class="container-fluid p-0">
				<div class="accordion box-design" id="accordionExample">
					<div class="card question_card">
						<div class="card-header bottom_shado collapseBtn p-0 " id="headingOne">
							<a class="btn collapsed w-100 text-left icon_fix py-2" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
								<span class="text-dark f_w_600 f_s_14 ">Emergency Medicine</span>
								<i class="fas fa-chevron-circle-down collapseIcon"></i>
							</a>
						</div>
						<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
							<div class="card-body">
								<ul class="nav nav-pills mb-3 btn-group" id="pills-tab" role="tablist">
									<li class="listStyle">
										<a class="nav-link btn btnColor active" id="pills-F1-tab" data-toggle="pill" href="#pills-F1" role="tab" aria-controls="pills-F1" aria-selected="true">1</a>
									</li>
									<li class="listStyle">
										<a class="nav-link btn btnColor" id="pills-F2-tab" data-toggle="pill" href="#pills-F2" role="tab" aria-controls="pills-F2" aria-selected="false">2</a>
									</li>
									<li class="listStyle">
										<a class="nav-link btn btnColor" id="pills-F3-tab" data-toggle="pill" href="#pills-F3" role="tab" aria-controls="pills-F3" aria-selected="false">3</a>
									</li>
									<li class="listStyle">
										<a class="nav-link btn btnColor" id="pills-F4-tab" data-toggle="pill" href="#pills-F4" role="tab" aria-controls="pills-F4" aria-selected="false">4</a>
									</li>
									<li class="listStyle">
										<a class="nav-link btn btnColor" id="pills-F5-tab" data-toggle="pill" href="#pills-F5" role="tab" aria-controls="pills-F5" aria-selected="false">5</a>
									</li>
								</ul>

								<div class="tab-content" id="pills-tabContent">
									<div class="tab-pane fade show active" id="pills-F1" role="tabpanel" aria-labelledby="pills-F1-tab">
										<div class="card border-none">
											<p>
												A 54-year-old female with the type-1 Dm is seen in the emergency department with the folowing abnormal laboratory values.
											</p>
											<table class="table table-striped table-bordered mt-2">
												<tr>
													<th></th>
													<th>Result</th>
													<th>Reference</th>
												</tr>
												<tr>
													<td>Serum glucose</td>
													<td>450</td>
													<td>65-99mg/dL</td>
												</tr>
												<tr>
													<td>Serum glucose</td>
													<td>450</td>
													<td>65-99mg/dL</td>
												</tr>
												<tr>
													<td>Serum glucose</td>
													<td>450</td>
													<td>65-99mg/dL</td>
												</tr>
											</table>
											<p class="mt-4">
												Which of the following is the most likely explantation
											</p>
											<form class="mt-2">
												<ul class="list-none">
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Underlying renal discase, stress</p>
													</li>
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Overdosage of oral hypoglycemic depression</p>
													</li>
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Electrolyte imbalance, proteinuria </p>
													</li>
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Omissiion of insulin injection, infection</p>
													</li>
												</ul>
											</form>
										</div>
									</div>
									<div class="tab-pane fade" id="pills-F2" role="tabpanel" aria-labelledby="pills-F2-tab">
										<div class="card  border-none">
											<p>
												A 67-year-old is diagnosed in the emergency department with diabetic ketoacidosis.
											</p>
											<p class="mt-4">
												Which of the following IV replenishments us LEAST likely to be needed?
											</p>
											<form class="mt-2">
												<ul class="list-none">
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Sodium</p>
													</li>
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Bicarbonate</p>
													</li>
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Potassium</p>
													</li>
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Phosphate</p>
													</li>
												</ul>
											</form>
										</div>
									</div>
									<div class="tab-pane fade" id="pills-F3" role="tabpanel" aria-labelledby="pills-F3-tab">
										<div class="card  border-none">
											<p>
												An 82-year-old female who appears confused and anxious is seen for worsening leg cramps. She admits worsening palpitations and presthesias. Medications include furosemide (Lasix) and metformin (Glucophage). Examination reveals BP 95/60, decreased muscle strength and decreased DTR.
											</p>
											<p class="mt-4">
												Which of the following test would be LEAST helpful in making the diagnosis?
											</p>
											<form class="mt-2">
												<ul class="list-none">
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Basic metabolic panel</p>
													</li>
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>CBC</p>
													</li>
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Electrocardiogram</p>
													</li>
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Hepatic function panel</p>
													</li>
												</ul>
											</form>
										</div>
									</div>
									<div class="tab-pane fade" id="pills-F4" role="tabpanel" aria-labelledby="pills-F4-tab">
										<div class="card  border-none">
											<p>
												A 45-year-old male presents with sudden difficulty breathing with hoarseness, itching and nausea, immediately after taking his new prescription anti inflammatory medication.
											</p>
											<p class="mt-4">
												In addition to activating the EMS, injection of which of the following is the most appropriate?
											</p>
											<form class="mt-2">
												<ul class="list-none">
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Epinephrine (Adrenalin)</p>
													</li>
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Dexamethasone (Decadron)</p>
													</li>
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Etidocaine (Duranest)</p>
													</li>
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Diphenhydramine (Benadryl)</p>
													</li>
												</ul>
											</form>
										</div>
									</div>
									<div class="tab-pane fade" id="pills-F5" role="tabpanel" aria-labelledby="pills-F5-tab">
										<div class="card  border-none">
											<p>
												A 73-year-old male presents to the ED after treatment for a foot infection complaining of weakness, fatigue and paresthesias. Medications include trimethoprim/sulfamethoxazole (Bactrim) and spironolactone (Aldactone). The electrocardiogram demonstrates peaked T waves and widened QRS.
											</p>
											<p class="mt-4">
												Which of the following is the likely diagnosis?
											</p>
											<form class="mt-2">
												<ul class="list-none">
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Hypokalemia</p>
													</li>
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Acute coronary syndrome</p>
													</li>
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Atrial fibrillation</p>
													</li>
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Hyperkalemia</p>
													</li>
												</ul>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card question_card">
						<div class="card-header bottom_shado collapseBtn p-0" id="headingTwo">
							<a class="btn collapsed w-100 text-left icon_fix py-2" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								<span class="text-dark f_w_600 f_s_14 ">Endocrine</span>
								<i class="fas fa-chevron-circle-down collapseIcon"></i>
							</a>
						</div>
						<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
							<div class="card-body">
								<ul class="nav nav-pills mb-3 btn-group" id="pills-tab" role="tablist">
									<li class="listStyle">
										<a class="nav-link btn btnColor active" id="pills-S1-tab" data-toggle="pill" href="#pills-S1" role="tab" aria-controls="pills-S1" aria-selected="true">1</a>
									</li>
									<li class="listStyle">
										<a class="nav-link btn btnColor" id="pills-S2-tab" data-toggle="pill" href="#pills-S2" role="tab" aria-controls="pills-S2" aria-selected="false">2</a>
									</li>
									<li class="listStyle">
										<a class="nav-link btn btnColor" id="pills-S3-tab" data-toggle="pill" href="#pills-S3" role="tab" aria-controls="pills-S3" aria-selected="false">3</a>
									</li>
									<li class="listStyle">
										<a class="nav-link btn btnColor" id="pills-S4-tab" data-toggle="pill" href="#pills-S4" role="tab" aria-controls="pills-S4" aria-selected="false">4</a>
									</li>
									<li class="listStyle">
										<a class="nav-link btn btnColor" id="pills-S5-tab" data-toggle="pill" href="#pills-S5" role="tab" aria-controls="pills-S5" aria-selected="false">5</a>
									</li>
								</ul>

								<div class="tab-content" id="pills-tabContent">
									<div class="tab-pane fade show active" id="pills-S1" role="tabpanel" aria-labelledby="pills-S1-tab">
										<div class="card border-none">
											<p>
												A 54-year-old female with the type-1 Dm is seen in the emergency department with the folowing abnormal laboratory values.
											</p>
											<table class="table table-striped table-bordered mt-2">
												<tr>
													<th></th>
													<th>Result</th>
													<th>Reference</th>
												</tr>
												<tr>
													<td>Serum glucose</td>
													<td>450</td>
													<td>65-99mg/dL</td>
												</tr>
												<tr>
													<td>Serum glucose</td>
													<td>450</td>
													<td>65-99mg/dL</td>
												</tr>
												<tr>
													<td>Serum glucose</td>
													<td>450</td>
													<td>65-99mg/dL</td>
												</tr>
											</table>
											<p class="mt-4">
												Which of the following is the most likely explantation
											</p>
											<form class="mt-2">
												<ul class="list-none">
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Underlying renal discase, stress</p>
													</li>
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Overdosage of oral hypoglycemic depression</p>
													</li>
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Electrolyte imbalance, proteinuria </p>
													</li>
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Omissiion of insulin injection, infection</p>
													</li>
												</ul>
											</form>
										</div>
									</div>
									<div class="tab-pane fade" id="pills-S2" role="tabpanel" aria-labelledby="pills-S2-tab">
										<div class="card  border-none">
											<p>
												A 67-year-old is diagnosed in the emergency department with diabetic ketoacidosis.
											</p>
											<p class="mt-4">
												Which of the following IV replenishments us LEAST likely to be needed?
											</p>
											<form class="mt-2">
												<ul class="list-none">
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Sodium</p>
													</li>
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Bicarbonate</p>
													</li>
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Potassium</p>
													</li>
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Phosphate</p>
													</li>
												</ul>
											</form>
										</div>
									</div>
									<div class="tab-pane fade" id="pills-S3" role="tabpanel" aria-labelledby="pills-S3-tab">
										<div class="card  border-none">
											<p>
												An 82-year-old female who appears confused and anxious is seen for worsening leg cramps. She admits worsening palpitations and presthesias. Medications include furosemide (Lasix) and metformin (Glucophage). Examination reveals BP 95/60, decreased muscle strength and decreased DTR.
											</p>
											<p class="mt-4">
												Which of the following test would be LEAST helpful in making the diagnosis?
											</p>
											<form class="mt-2">
												<ul class="list-none">
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Basic metabolic panel</p>
													</li>
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>CBC</p>
													</li>
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Electrocardiogram</p>
													</li>
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Hepatic function panel</p>
													</li>
												</ul>
											</form>
										</div>
									</div>
									<div class="tab-pane fade" id="pills-S4" role="tabpanel" aria-labelledby="pills-S4-tab">
										<div class="card  border-none">
											<p>
												A 45-year-old male presents with sudden difficulty breathing with hoarseness, itching and nausea, immediately after taking his new prescription anti inflammatory medication.
											</p>
											<p class="mt-4">
												In addition to activating the EMS, injection of which of the following is the most appropriate?
											</p>
											<form class="mt-2">
												<ul class="list-none">
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Epinephrine (Adrenalin)</p>
													</li>
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Dexamethasone (Decadron)</p>
													</li>
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Etidocaine (Duranest)</p>
													</li>
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Diphenhydramine (Benadryl)</p>
													</li>
												</ul>
											</form>
										</div>
									</div>
									<div class="tab-pane fade" id="pills-S5" role="tabpanel" aria-labelledby="pills-S5-tab">
										<div class="card  border-none">
											<p>
												A 73-year-old male presents to the ED after treatment for a foot infection complaining of weakness, fatigue and paresthesias. Medications include trimethoprim/sulfamethoxazole (Bactrim) and spironolactone (Aldactone). The electrocardiogram demonstrates peaked T waves and widened QRS.
											</p>
											<p class="mt-4">
												Which of the following is the likely diagnosis?
											</p>
											<form class="mt-2">
												<ul class="list-none">
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Hypokalemia</p>
													</li>
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Acute coronary syndrome</p>
													</li>
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Atrial fibrillation</p>
													</li>
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Hyperkalemia</p>
													</li>
												</ul>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card question_card">
						<div class="card-header bottom_shado collapseBtn p-0" id="headingThree">
							<a class="btn collapsed w-100 text-left icon_fix py-2" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								<span class="text-dark f_w_600 f_s_14 ">Gastroenterology</span>
								<i class="fas fa-chevron-circle-down collapseIcon"></i>
							</a>
						</div>
						<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
							<div class="card-body">
								<ul class="nav nav-pills mb-3 btn-group" id="pills-tab" role="tablist">
									<li class="listStyle">
										<a class="nav-link btn btnColor active" id="pills-T1-tab" data-toggle="pill" href="#pills-T1" role="tab" aria-controls="pills-T1" aria-selected="true">1</a>
									</li>
									<li class="listStyle">
										<a class="nav-link btn btnColor" id="pills-T2-tab" data-toggle="pill" href="#pills-T2" role="tab" aria-controls="pills-T2" aria-selected="false">2</a>
									</li>
									<li class="listStyle">
										<a class="nav-link btn btnColor" id="pills-T3-tab" data-toggle="pill" href="#pills-T3" role="tab" aria-controls="pills-T3" aria-selected="false">3</a>
									</li>
									<li class="listStyle">
										<a class="nav-link btn btnColor" id="pills-T4-tab" data-toggle="pill" href="#pills-T4" role="tab" aria-controls="pills-T4" aria-selected="false">4</a>
									</li>
									<li class="listStyle">
										<a class="nav-link btn btnColor" id="pills-T5-tab" data-toggle="pill" href="#pills-T5" role="tab" aria-controls="pills-T5" aria-selected="false">5</a>
									</li>
								</ul>

								<div class="tab-content" id="pills-tabContent">
									<div class="tab-pane fade show active" id="pills-T1" role="tabpanel" aria-labelledby="pills-T1-tab">
										<div class="card border-none">
											<p>
												A 54-year-old female with the type-1 Dm is seen in the emergency department with the folowing abnormal laboratory values.
											</p>
											<table class="table table-striped table-bordered mt-2">
												<tr>
													<th></th>
													<th>Result</th>
													<th>Reference</th>
												</tr>
												<tr>
													<td>Serum glucose</td>
													<td>450</td>
													<td>65-99mg/dL</td>
												</tr>
												<tr>
													<td>Serum glucose</td>
													<td>450</td>
													<td>65-99mg/dL</td>
												</tr>
												<tr>
													<td>Serum glucose</td>
													<td>450</td>
													<td>65-99mg/dL</td>
												</tr>
											</table>
											<p class="mt-4">
												Which of the following is the most likely explantation
											</p>
											<form class="mt-2">
												<ul class="list-none">
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Underlying renal discase, stress</p>
													</li>
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Overdosage of oral hypoglycemic depression</p>
													</li>
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Electrolyte imbalance, proteinuria </p>
													</li>
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Omissiion of insulin injection, infection</p>
													</li>
												</ul>
											</form>
										</div>
									</div>
									<div class="tab-pane fade" id="pills-T2" role="tabpanel" aria-labelledby="pills-T2-tab">
										<div class="card  border-none">
											<p>
												A 67-year-old is diagnosed in the emergency department with diabetic ketoacidosis.
											</p>
											<p class="mt-4">
												Which of the following IV replenishments us LEAST likely to be needed?
											</p>
											<form class="mt-2">
												<ul class="list-none">
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Sodium</p>
													</li>
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Bicarbonate</p>
													</li>
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Potassium</p>
													</li>
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Phosphate</p>
													</li>
												</ul>
											</form>
										</div>
									</div>
									<div class="tab-pane fade" id="pills-T3" role="tabpanel" aria-labelledby="pills-T3-tab">
										<div class="card  border-none">
											<p>
												An 82-year-old female who appears confused and anxious is seen for worsening leg cramps. She admits worsening palpitations and presthesias. Medications include furosemide (Lasix) and metformin (Glucophage). Examination reveals BP 95/60, decreased muscle strength and decreased DTR.
											</p>
											<p class="mt-4">
												Which of the following test would be LEAST helpful in making the diagnosis?
											</p>
											<form class="mt-2">
												<ul class="list-none">
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Basic metabolic panel</p>
													</li>
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>CBC</p>
													</li>
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Electrocardiogram</p>
													</li>
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Hepatic function panel</p>
													</li>
												</ul>
											</form>
										</div>
									</div>
									<div class="tab-pane fade" id="pills-T4" role="tabpanel" aria-labelledby="pills-T4-tab">
										<div class="card  border-none">
											<p>
												A 45-year-old male presents with sudden difficulty breathing with hoarseness, itching and nausea, immediately after taking his new prescription anti inflammatory medication.
											</p>
											<p class="mt-4">
												In addition to activating the EMS, injection of which of the following is the most appropriate?
											</p>
											<form class="mt-2">
												<ul class="list-none">
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Epinephrine (Adrenalin)</p>
													</li>
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Dexamethasone (Decadron)</p>
													</li>
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Etidocaine (Duranest)</p>
													</li>
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Diphenhydramine (Benadryl)</p>
													</li>
												</ul>
											</form>
										</div>
									</div>
									<div class="tab-pane fade" id="pills-T5" role="tabpanel" aria-labelledby="pills-T5-tab">
										<div class="card  border-none">
											<p>
												A 73-year-old male presents to the ED after treatment for a foot infection complaining of weakness, fatigue and paresthesias. Medications include trimethoprim/sulfamethoxazole (Bactrim) and spironolactone (Aldactone). The electrocardiogram demonstrates peaked T waves and widened QRS.
											</p>
											<p class="mt-4">
												Which of the following is the likely diagnosis?
											</p>
											<form class="mt-2">
												<ul class="list-none">
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Hypokalemia</p>
													</li>
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Acute coronary syndrome</p>
													</li>
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Atrial fibrillation</p>
													</li>
													<li class="list-group-item list-group-item-action d-flex align-items-center p-1">
														<i class="fa fa-check-circle" aria-hidden="true"></i>
														<p>Hyperkalemia</p>
													</li>
												</ul>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card question_card">
						<div class="card-header bottom_shado collapseBtn p-0" id="headingFour">
							<a class="btn collapsed w-100 text-left icon_fix py-2" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
								<span class="text-dark f_w_600 f_s_14 ">Hematology & Oncology</span>
								<i class="fas fa-chevron-circle-down collapseIcon"></i>
							</a>
						</div>
						<div id="collapseFour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
							<div class="card-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
								squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
								quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
								squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
								craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
								butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
								nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
					<div class="card question_card">
						<div class="card-header bottom_shado collapseBtn p-0" id="headingFive">
							<a class="btn collapsed w-100 text-left icon_fix py-2" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
								<span class="text-dark f_w_600 f_s_14 ">Medical Imaging</span>
								<i class="fas fa-chevron-circle-down collapseIcon"></i>
							</a>
						</div>
						<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
							<div class="card-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
								squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
								quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
								squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
								craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
								butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
								nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
					<div class="card question_card">
						<div class="card-header bottom_shado collapseBtn p-0" id="headingSix">
							<a class="btn collapsed w-100 text-left icon_fix py-2" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
								<span class="text-dark f_w_600 f_s_14 ">Nephrology & Urology</span>
								<i class="fas fa-chevron-circle-down collapseIcon"></i>
							</a>
						</div>
						<div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
							<div class="card-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
								squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
								quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
								squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
								craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
								butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
								nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
					<div class="card question_card">
						<div class="card-header bottom_shado collapseBtn p-0" id="headingSaven">
							<a class="btn collapsed w-100 text-left icon_fix py-2" type="button" data-toggle="collapse" data-target="#collapseSaven" aria-expanded="false" aria-controls="collapseSaven">
								<span class="text-dark f_w_600 f_s_14 ">Pathomechanics</span>
								<i class="fas fa-chevron-circle-down collapseIcon"></i>
							</a>
						</div>
						<div id="collapseSaven" class="collapse" aria-labelledby="headingSaven" data-parent="#accordionExample">
							<div class="card-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
								squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
								quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
								squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
								craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
								butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
								nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
					<div class="card question_card">
						<div class="card-header bottom_shado collapseBtn p-0" id="headingEight">
							<a class="btn collapsed w-100 text-left icon_fix py-2" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
								<span class="text-dark f_w_600 f_s_14 ">Podiatric Surgery</span>
								<i class="fas fa-chevron-circle-down collapseIcon"></i>
							</a>
						</div>
						<div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
							<div class="card-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
								squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
								quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
								squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
								craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
								butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
								nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
					<div class="card question_card">
						<div class="card-header bottom_shado collapseBtn p-0" id="headingNine">
							<a href="#" class="btn collapsed w-100 text-left icon_fix py-2" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
								<span class="text-dark f_w_600 f_s_14 ">Podopediatrics</span>
								<i class="fas fa-chevron-circle-down collapseIcon"></i>
							</a>
						</div>
						<div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
							<div class="card-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
								squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
								quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
								squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
								craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
								butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
								nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
					</div>
					<div class="card question_card">
						<div class="card-header bottom_shado collapseBtn p-0" id="headingTen">
							<a href="#" class="btn collapsed w-100 text-left icon_fix py-2" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
								<span class="text-dark f_w_600 f_s_14 ">Vascular Diagnostics and Management</span>
								<i class="fas fa-chevron-circle-down collapseIcon"></i>
							</a>
						</div>
						<div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
							<div class="card-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
								squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
								quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
								squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
								craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
								butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
								nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							</div>
						</div>
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