<!-- Page Header -->
<div class="page-header">
	<div class="row align-items-center">
		<div class="col-md-4">
			<h3 class="page-title">Projeler</h3>
			<ul class="breadcrumb">
				<li class="breadcrumb-item"><a href="#" onclick="Route(event)" data-page="admin-dashboard">Ana Sayfa</a></li>
				<li class="breadcrumb-item active">Proje Listesi</li>
			</ul>
		</div>
		<div class="col-md-8 float-end ms-auto">
			<div class="d-flex title-head">
				<div class="view-icons">
					<a href="javascript:void(0);" class="grid-view btn btn-link"><i class="las la-redo-alt"></i></a>
					<a href="javascript:void(0);" class="list-view btn btn-link" id="collapse-header"><i class="las la-expand-arrows-alt"></i></a>
					<a href="javascript:void(0);" class="list-view btn btn-link" id="filter_search"><i class="las la-filter"></i></a>
				</div>
				<div class="form-sort">
					<a href="javascript:void(0);" class="list-view btn btn-link" data-bs-toggle="modal" data-bs-target="#export"><i class="las la-file-export"></i>Export</a>
				</div>
				<a href="#"  class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_pipeline"><i class="la la-plus-circle"></i> Yeni Proje</a>
			</div>
		</div>
	</div>
</div>
<!-- /Page Header -->

<!-- Search Filter -->
<div class="filter-filelds" id="filter_inputs">
	<div class="row filter-row custom-filter-row">
		<div class="custom-col">
			<div class="input-block mb-3 form-focus">
				<input type="text" class="form-control floating">
				<label class="focus-label">Pipeline Name</label>
			</div>
		</div>

		<div class="custom-col">
			<div class="input-block mb-3 form-focus">
				<input type="email" class="form-control floating">
				<label class="focus-label">Deal Value</label>
			</div>
		</div>
		<div class="custom-col">
			<div class="input-block mb-3 form-focus">
				<div class="cal-icon">
					<input class="form-control floating datetimepicker" type="text">
				</div>
				<label class="focus-label">Created Date</label>
			</div>
		</div>

		<div class="custom-col">
			<div class="input-block mb-3 form-focus select-focus">
				<select class="select floating">
					<option>--Select--</option>
					<option>Win</option>
					<option>In Pipeline</option>
					<option>Conversation</option>
					<option>Folllow Up</option>
					<option>Lost</option>
				</select>
				<label class="focus-label">Stages</label>
			</div>
		</div>
		<div class="custom-col">
			<a href="#" class="btn btn-success w-100"> Ara </a>
		</div>
	</div>
</div>
<hr>
<!-- /Search Filter -->
<div class="filter-section">
	<ul>
		<li>
			<div class="view-icons">
				<a href="company.html" class="list-view btn btn-link active"><i class="las la-list"></i></a>
				<a href="company-grid.html" class="grid-view btn btn-link"><i class="las la-th"></i></a>
			</div>
		</li>
		<li>
			<div class="form-sort">
				<i class="las la-sort-alpha-up-alt"></i>
				<select class="select">
					<option>Sort By Alphabet</option>
					<option>Ascending</option>
					<option>Descending</option>
					<option>Recently Viewed</option>
					<option>Recently Added</option>
				</select>
			</div>
		</li>
		<li>
			<div class="search-set">
				<div class="search-input">
					<a href="#" class="btn btn-searchset"><i class="las la-search"></i></a>
					<div class="dataTables_filter">
						<label> <input type="search" class="form-control form-control-sm" placeholder="Ara"></label>
					</div>
				</div>
			</div>
		</li>
	</ul>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="table-responsive">
			<table class="table table-striped custom-table datatable contact-table">
				<thead>
					<tr>
						<th>Proje Kodu</th>
						<th>Proje Adı</th>
						<th>Tonajı</th>
						<th>Boya Durumu</th>
						<th>Proje Geliş Tarihi</th>
						<th>Termin Tarihi</th>
						<th>Teslim Tarihi</th>
						<th>Durum</th>
						<th class="no-sort text-end">İşlemler</th>
					</tr>
				</thead>
				<tbody>
					<?php

					for ($i = 0; $i < 9; $i++) {
					?>

						<tr>
							<td>
								<a href="pipeline-details.html">PRK001</a>
							</td>
							<td>
								Design Aqua Park
							</td>
							<td>315</td>
							<td>
								<div class="pipeline-progress d-flex align-items-center">
									<div class="progress">
										<div class="progress-bar progress-bar-success" role="progressbar">
										</div>
									</div>
									<span>Win</span>
								</div>

							</td>
							<td>10 Feb 2024</td>
							<td>10 Feb 2024
								<p style="color:#666 !important; font-weight:200 !important;">deneme</p>
							</td>
							<td>10 Feb 2024</td>
							<td>
								<div class="dropdown action-label">
									<a href="#" class="btn btn-white btn-sm badge-outline-success "> Aktif </a>
								</div>
							</td>
							<td class="text-end">
								<div class="dropdown dropdown-action">
									<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_pipeline"><i class="fa-solid fa-pencil m-r-5"></i> Düzenle</a>
										<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_pipeline"><i class="fa-regular fa-trash-can m-r-5"></i> Sil</a>

										<a class="dropdown-item" onclick="Route('project-details','id=4')" >
											<i class="fa-regular fa-eye"></i> Görüntüle
										</a>
									</div>
								</div>
							</td>
						</tr>
					<?php

					}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<!-- Add Pipeline -->
<div class="modal custom-modal fade custom-modal-two modal-padding" id="add_pipeline" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header header-border justify-content-between p-0">
				<h5 class="modal-title">Add New Pipeline</h5>
				<button type="button" class="btn-close position-static" data-bs-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body p-0">
				<form action="pipeline.html">
					<div class="contact-input-set">
						<div class="row">
							<div class="col-md-12">
								<div class="input-block mb-3">
									<label class="col-form-label">Pipeline Name <span class="text-danger">*</span></label>
									<input class="form-control" type="text">
								</div>
							</div>
							<div class="col-md-12">
								<div class="pipeline-modal-head d-flex justify-content-between mb-3">
									<h4>Pipeline Stages</h4>
									<a href="#" class="add-stage" data-bs-toggle="modal" data-bs-target="#add_stage"><i class="la la-plus-square me-2"></i>Add New</a>
								</div>
								<ul class="pipeline-stages">
									<li>
										<p>
											<i class="la la-grip-vertical"></i>
											Inpipeline
										</p>
										<div class="edit-delete-stage">
											<a href="#" class="edit-stage" data-bs-toggle="modal" data-bs-target="#edit_stage"><i class="la la-edit me-2"></i>Edit</a>
											<a href="#" class="delete-stage" data-bs-toggle="modal" data-bs-target="#delete_stage"><i class="la la-trash-alt me-2"></i>Delete</a>
										</div>
									</li>
									<li>
										<p>
											<i class="la la-grip-vertical"></i>
											Follow Up
										</p>
										<div class="edit-delete-stage">
											<a href="#" class="edit-stage" data-bs-toggle="modal" data-bs-target="#edit_stage"><i class="la la-edit me-2"></i>Edit</a>
											<a href="#" class="delete-stage" data-bs-toggle="modal" data-bs-target="#delete_stage"><i class="la la-trash-alt me-2"></i>Delete</a>
										</div>
									</li>
									<li>
										<p>
											<i class="la la-grip-vertical"></i>
											Schedule service
										</p>
										<div class="edit-delete-stage">
											<a href="#" class="edit-stage" data-bs-toggle="modal" data-bs-target="#edit_stage"><i class="la la-edit me-2"></i>Edit</a>
											<a href="#" class="delete-stage" data-bs-toggle="modal" data-bs-target="#delete_stage"><i class="la la-trash-alt me-2"></i>Delete</a>
										</div>
									</li>
								</ul>
							</div>
							<div class="col-md-12">
								<div class="pipeline-modal-head input-blocks add-products">
									<h4 class="mb-3">Access</h4>
									<div class="access-info-tab">
										<ul class="nav nav-pills" id="pills-tab" role="tablist">
											<li class="nav-item" role="presentation">
												<span class="custom_radio mb-0" id="pills-public-tab" data-bs-toggle="pill" data-bs-target="#pills-public" role="tab" aria-controls="pills-public" aria-selected="true">
													<input type="radio" class="form-control" name="public" checked>
													<span class="checkmark"></span> All</span>
											</li>
											<li class="nav-item" role="presentation">
												<span class="custom_radio mb-0 active" id="pills-select-people-tab" data-bs-toggle="pill" data-bs-target="#pills-select-people" role="tab" aria-controls="pills-select-people" aria-selected="false">
													<input type="radio" class="form-control" name="select-people">
													<span class="checkmark"></span> Select People</span>
											</li>
										</ul>
									</div>
								</div>
								<div class="tab-content" id="pills-tabContent2">
									<div class="tab-pane fade" id="pills-public" role="tabpanel" aria-labelledby="pills-public-tab">

									</div>
									<div class="tab-pane fade show active" id="pills-select-people" role="tabpanel" aria-labelledby="pills-select-people-tab">
										<ul class="person-selected">
											<li>
												<div class="person-profile">
													<a href="#" class="profile-pic">
														<img src="/assets/img/avatar/avatar-21.jpg" alt="Img">
														Vaughan
													</a>

												</div>
												<a href="#" class="remove-person">Remove</a>
											</li>
											<li>
												<div class="person-profile">
													<a href="#" class="profile-pic">
														<img src="/assets/img/avatar/avatar-1.jpg" alt="Img">
														Jessica
													</a>
												</div>
												<a href="#" class="remove-person">Remove</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-12 text-end form-wizard-button">
								<button class="button btn-lights reset-btn" type="reset" data-bs-dismiss="modal">Reset</button>
								<button class="btn btn-primary" type="submit">Save Pipeline</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /Add Pipeline -->

<!-- Edit Pipeline -->
<div class="modal custom-modal fade custom-modal-two modal-padding" id="edit_pipeline" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header header-border justify-content-between p-0">
				<h5 class="modal-title">Edit Pipeline</h5>
				<button type="button" class="btn-close position-static" data-bs-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body p-0">
				<form action="pipeline.html">
					<div class="contact-input-set">
						<div class="row">
							<div class="col-md-12">
								<div class="input-block mb-3">
									<label class="col-form-label">Pipeline Name <span class="text-danger">*</span></label>
									<input class="form-control" type="text" value="Sales">
								</div>
							</div>
							<div class="col-md-12">
								<div class="pipeline-modal-head d-flex justify-content-between mb-3">
									<h4>Pipeline Stages</h4>
									<a href="#" class="add-stage" data-bs-toggle="modal" data-bs-target="#add_stage"><i class="la la-plus-square me-2"></i>Add New</a>
								</div>
								<ul class="pipeline-stages">
									<li>
										<p>
											<i class="la la-grip-vertical"></i>
											Inpipeline
										</p>
										<div class="edit-delete-stage">
											<a href="#" class="edit-stage" data-bs-toggle="modal" data-bs-target="#edit_stage"><i class="la la-edit me-2"></i>Edit</a>
											<a href="#" class="delete-stage" data-bs-toggle="modal" data-bs-target="#delete_stage"><i class="la la-trash-alt me-2"></i>Delete</a>
										</div>
									</li>
									<li>
										<p>
											<i class="la la-grip-vertical"></i>
											Follow Up
										</p>
										<div class="edit-delete-stage">
											<a href="#" class="edit-stage" data-bs-toggle="modal" data-bs-target="#edit_stage"><i class="la la-edit me-2"></i>Edit</a>
											<a href="#" class="delete-stage" data-bs-toggle="modal" data-bs-target="#delete_stage"><i class="la la-trash-alt me-2"></i>Delete</a>
										</div>
									</li>
									<li>
										<p>
											<i class="la la-grip-vertical"></i>
											Schedule service
										</p>
										<div class="edit-delete-stage">
											<a href="#" class="edit-stage" data-bs-toggle="modal" data-bs-target="#edit_stage"><i class="la la-edit me-2"></i>Edit</a>
											<a href="#" class="delete-stage" data-bs-toggle="modal" data-bs-target="#delete_stage"><i class="la la-trash-alt me-2"></i>Delete</a>
										</div>
									</li>
								</ul>
							</div>
							<div class="col-md-12">
								<div class="pipeline-modal-head input-blocks add-products">
									<h4 class="mb-3">Access</h4>
									<div class="access-info-tab">
										<ul class="nav nav-pills" id="pills-tab2" role="tablist">
											<li class="nav-item" role="presentation">
												<span class="custom_radio mb-0" id="pills-public-tab2" data-bs-toggle="pill" data-bs-target="#pills-public2" role="tab" aria-controls="pills-public2" aria-selected="true">
													<input type="radio" class="form-control" name="public" checked>
													<span class="checkmark"></span> All</span>
											</li>
											<li class="nav-item" role="presentation">
												<span class="custom_radio mb-0 active" id="pills-select-people-tab2" data-bs-toggle="pill" data-bs-target="#pills-select-people2" role="tab" aria-controls="pills-select-people2" aria-selected="false">
													<input type="radio" class="form-control" name="select-people">
													<span class="checkmark"></span> Select People</span>
											</li>
										</ul>
									</div>
								</div>
								<div class="tab-content" id="pills-tabContent3">
									<div class="tab-pane fade" id="pills-public2" role="tabpanel" aria-labelledby="pills-public-tab2">

									</div>
									<div class="tab-pane fade show active" id="pills-select-people2" role="tabpanel" aria-labelledby="pills-select-people-tab2">
										<ul class="person-selected">
											<li>
												<div class="person-profile">
													<a href="#" class="profile-pic">
														<img src="/assets/img/avatar/avatar-21.jpg" alt="Img">
														Vaughan
													</a>

												</div>
												<a href="#" class="remove-person">Remove</a>
											</li>
											<li>
												<div class="person-profile">
													<a href="#" class="profile-pic">
														<img src="/assets/img/avatar/avatar-1.jpg" alt="Img">
														Jessica
													</a>
												</div>
												<a href="#" class="remove-person">Remove</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-12 text-end form-wizard-button">
								<button class="button btn-lights reset-btn" type="reset" data-bs-dismiss="modal">Reset</button>
								<button class="btn btn-primary" type="submit">Save Pipeline</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /Edit Pipeline -->

<!-- Add Stage -->
<div class="modal custom-modal fade modal-padding" id="add_stage" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header header-border justify-content-between p-0">
				<h5 class="modal-title">Add New Stage</h5>
				<button type="button" class="btn-close position-static" data-bs-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body p-0">
				<form action="pipeline.html">
					<div class="row">
						<div class="col-md-12">
							<div class="input-block mb-3">
								<label class="col-form-label">Stage Name <span class="text-danger">*</span></label>
								<input class="form-control" type="text">
							</div>
						</div>
						<div class="col-lg-12 text-end form-wizard-button">
							<button class="button btn-lights reset-btn" type="reset" data-bs-dismiss="modal">Reset</button>
							<button class="btn btn-primary" type="submit">Save Stage</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /Add Stage -->

<!-- Edit Stage -->
<div class="modal custom-modal fade modal-padding" id="edit_stage" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header header-border justify-content-between p-0">
				<h5 class="modal-title">Edit Stage</h5>
				<button type="button" class="btn-close position-static" data-bs-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body p-0">
				<form action="pipeline.html">
					<div class="row">
						<div class="col-md-12">
							<div class="input-block mb-3">
								<label class="col-form-label">Stage Name <span class="text-danger">*</span></label>
								<input class="form-control" type="text" value="Win">
							</div>
						</div>
						<div class="col-lg-12 text-end form-wizard-button">
							<button class="button btn-lights reset-btn" type="reset" data-bs-dismiss="modal">Reset</button>
							<button class="btn btn-primary" type="submit">Save Stage</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /Edit Stage -->

<!-- Delete Pipeline -->
<div class="modal custom-modal fade" id="delete_pipeline" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div class="success-message text-center">
					<div class="success-popup-icon bg-danger">
						<i class="la la-trash-restore"></i>
					</div>
					<h3>Are you sure, You want to delete</h3>
					<p>Pipeline ”Sales” from your Account</p>
					<div class="col-lg-12 text-center form-wizard-button">
						<a href="#" class="button btn-lights" data-bs-dismiss="modal">Not Now</a>
						<a href="pipeline.html" class="btn btn-primary">Okay</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /Delete Pipeline -->

<!-- Delete Pipeline -->
<div class="modal custom-modal fade" id="delete_stage" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div class="success-message text-center">
					<div class="success-popup-icon bg-danger">
						<i class="la la-trash-restore"></i>
					</div>
					<h3>Are you sure, You want to delete</h3>
					<p>Stage ”Inpipeline” from your Account</p>
					<div class="col-lg-12 text-center form-wizard-button">
						<a href="#" class="button btn-lights" data-bs-dismiss="modal">Not Now</a>
						<a href="pipeline.html" class="btn btn-primary">Okay</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /Delete Pipeline -->

<!-- Export -->
<div class="modal custom-modal fade modal-padding" id="export" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header header-border justify-content-between p-0">
				<h5 class="modal-title">Export</h5>
				<button type="button" class="btn-close position-static" data-bs-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body p-0">
				<form action="pipeline.html">
					<div class="row">
						<div class="col-md-12">
							<div class="input-block mb-3">
								<h5 class="mb-3">Export</h5>
								<div class="status-radio-btns d-flex">
									<div class="people-status-radio">
										<input type="radio" class="status-radio" id="pdf" name="export-type" checked>
										<label for="pdf">Person</label>
									</div>
									<div class="people-status-radio">
										<input type="radio" class="status-radio" id="excel" name="export-type">
										<label for="excel">Organization</label>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<h4 class="mb-3">Filters</h4>
							<div class="input-block mb-3">
								<label class="col-form-label">Fields <span class="text-danger">*</span></label>
								<select class="select">
									<option>All Fields</option>
									<option>contact</option>
									<option>Company</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="input-block mb-3">
								<label class="col-form-label">From Date <span class="text-danger">*</span></label>
								<div class="cal-icon">
									<input class="form-control floating datetimepicker" type="text">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="input-block mb-3">
								<label class="col-form-label">To Date <span class="text-danger">*</span></label>
								<div class="cal-icon">
									<input class="form-control floating datetimepicker" type="text">
								</div>
							</div>
						</div>
						<div class="col-lg-12 text-end form-wizard-button">
							<button class="button btn-lights reset-btn" type="reset" data-bs-dismiss="modal">Reset</button>
							<button class="btn btn-primary" type="submit">Export Now</button>
						</div>
					</div>
				</form>

			</div>
		</div>
	</div>
</div>
<!-- /Export -->


</div>
</div>
<!-- /Page Content -->


<!-- /Page Wrapper -->

</div>
<!-- end main wrapper-->
<!-- Add Leads -->
<div class="modal custom-modal fade custom-modal-two modal-padding" id="add_leads" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header header-border justify-content-between p-0">
				<h5 class="modal-title">Add New Lead</h5>
				<button type="button" class="btn-close position-static" data-bs-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body p-0">
				<form action="leads.php">
					<div class="contact-input-set">
						<div class="row">
							<div class="col-md-12">
								<div class="input-block mb-3">
									<label class="col-form-label">Lead Name <span class="text-danger">*</span></label>
									<input class="form-control" type="text">
								</div>
							</div>
							<div class="col-md-12">
								<div class="input-block mb-3">
									<h5 class="mb-3">Lead Type</h5>
									<div class="status-radio-btns d-flex">
										<div class="people-status-radio">
											<input type="radio" class="status-radio" id="test1" name="radio-group" checked>
											<label for="test1">Person</label>
										</div>
										<div class="people-status-radio">
											<input type="radio" class="status-radio" id="test2" name="radio-group">
											<label for="test2">Organization</label>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 company-add-col">
								<div class="input-block mb-3">
									<div class="d-flex justify-content-between align-items-center">
										<label class="col-form-label">Company <span class="text-danger">*</span></label>
										<a href="#" class="add-new add-new-company"><i class="la la-plus-circle me-2"></i>Add New</a>
									</div>
									<select class="select">
										<option>Select</option>
										<option>NovaWaveLLC</option>
										<option>SilverHawk</option>
										<option>SummitPeak</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-block mb-3">
									<label class="col-form-label">Value<span class="text-danger"> *</span></label>
									<input class="form-control" type="text">
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-block mb-3">
									<label class="col-form-label">Currency <span class="text-danger">*</span></label>
									<select class="select">
										<option>Select</option>
										<option>$</option>
										<option>€</option>
									</select>
								</div>
							</div>
							<div class="col-md-12 lead-phno-col del-phno-col">
								<div class="row">
									<div class="col-lg-8">
										<div class="input-block mb-3">
											<label class="col-form-label">Phone Number <span class="text-danger">*</span></label>
											<input class="form-control" type="text">
										</div>
									</div>
									<div class="col-lg-4 d-flex align-items-end">
										<div class="input-block mb-3 d-flex align-items-center">
											<div class="w-100">
												<select class="select">
													<option>Work</option>
													<option>Home</option>
												</select>
											</div>
											<a href="#" class="add-modal-row add-lead-phno"><i class="la la-plus-circle"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 lead-email-col del-email-col">
								<div class="row">
									<div class="col-lg-8">
										<div class="input-block mb-3">
											<label class="col-form-label">Email <span class="text-danger">*</span></label>
											<input class="form-control" type="email">
										</div>
									</div>
									<div class="col-lg-4 d-flex align-items-end">
										<div class="input-block mb-3 d-flex align-items-center">
											<div class="w-100">
												<select class="select">
													<option>Work</option>
													<option>Home</option>
												</select>
											</div>
											<a href="#" class="add-modal-row add-lead-email"><i class="la la-plus-circle"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-block mb-3">
									<label class="col-form-label">Source <span class="text-danger">*</span></label>
									<input class="form-control" type="text">
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-block mb-3">
									<label class="col-form-label">Industry <span class="text-danger">*</span></label>
									<select class="select">
										<option>Select</option>
										<option>Highy</option>
										<option>Low</option>
										<option>Medium</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-block tag-with-img mb-3">
									<label class="col-form-label">Owner <span class="text-danger">*</span></label>
									<input class="input-tags form-control" id="inputBox3" type="text" data-role="tagsinput" name="Label" value="James">
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-block mb-3">
									<label class="col-form-label">Tags <span class="text-danger">*</span></label>
									<input class="input-tags form-control" id="inputBox4" type="text" data-role="tagsinput" name="Label" value="Promotion, Rated">
								</div>
							</div>
							<div class="col-lg-12">
								<div class="input-block mb-3">
									<label class="col-form-label">Description <span class="text-danger">*</span></label>
									<textarea class="form-control" rows="5"></textarea>
								</div>
							</div>
							<div class="col-md-12">
								<div class="input-block mb-3">
									<h5 class="mb-3">Visibility</h5>
									<div class="status-radio-btns d-flex">
										<div class="people-status-radio">
											<input type="radio" class="status-radio" id="test3" name="radio-group2" checked>
											<label for="test3">Pubilc</label>
										</div>
										<div class="people-status-radio">
											<input type="radio" class="status-radio" id="test4" name="radio-group2">
											<label for="test4">Private</label>
										</div>
										<div class="people-status-radio">
											<input type="radio" class="status-radio" id="test5" name="radio-group2">
											<label for="test5">Select People</label>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="input-block mb-3">
									<h5 class="mb-3">Status</h5>
									<div class="status-radio-btns d-flex">
										<div class="people-status-radio">
											<input type="radio" class="status-radio" id="test6" name="radio-group3" checked>
											<label for="test6">Active</label>
										</div>
										<div class="people-status-radio">
											<input type="radio" class="status-radio" id="test7" name="radio-group3">
											<label for="test7">Inactive</label>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 text-end form-wizard-button">
								<button class="button btn-lights reset-btn" type="reset" data-bs-dismiss="modal">Reset</button>
								<button class="btn btn-primary" type="submit">Save Lead</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /Add Leads -->

<!-- Edit Leads -->
<div class="modal custom-modal fade custom-modal-two modal-padding" id="edit_leads" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header header-border justify-content-between p-0">
				<h5 class="modal-title">Edit Lead</h5>
				<button type="button" class="btn-close position-static" data-bs-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body p-0">
				<form action="leads.php">
					<div class="contact-input-set">
						<div class="row">
							<div class="col-md-12">
								<div class="input-block mb-3">
									<label class="col-form-label">Lead Name <span class="text-danger">*</span></label>
									<input class="form-control" type="text" value="Adams">
								</div>
							</div>
							<div class="col-md-12">
								<div class="input-block mb-3">
									<h5 class="mb-3">Lead Type</h5>
									<div class="status-radio-btns d-flex">
										<div class="people-status-radio">
											<input type="radio" class="status-radio" id="test8" name="radio-group" checked>
											<label for="test8">Person</label>
										</div>
										<div class="people-status-radio">
											<input type="radio" class="status-radio" id="test9" name="radio-group">
											<label for="test9">Organization</label>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 company-add-col">
								<div class="input-block mb-3">
									<div class="d-flex justify-content-between align-items-center">
										<label class="col-form-label">Company <span class="text-danger">*</span></label>
										<a href="#" class="add-new add-new-company"><i class="la la-plus-circle me-2"></i>Add New</a>
									</div>
									<select class="select">
										<option>NovaWaveLLC</option>
										<option>SilverHawk</option>
										<option>SummitPeak</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-block mb-3">
									<label class="col-form-label">Value<span class="text-danger"> *</span></label>
									<input class="form-control" type="text" value="10">
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-block mb-3">
									<label class="col-form-label">Currency <span class="text-danger">*</span></label>
									<select class="select">
										<option>$</option>
										<option>€</option>
									</select>
								</div>
							</div>
							<div class="col-md-12 lead-phno-col del-phno-col">
								<div class="row">
									<div class="col-lg-8">
										<div class="input-block mb-3">
											<label class="col-form-label">Phone Number <span class="text-danger">*</span></label>
											<input class="form-control" type="text" value="+1 546555455">
										</div>
									</div>
									<div class="col-lg-4 d-flex align-items-end">
										<div class="input-block mb-3 d-flex align-items-center">
											<div class="w-100">
												<select class="select">
													<option>Work</option>
													<option>Home</option>
												</select>
											</div>
											<a href="#" class="add-modal-row add-lead-phno"><i class="la la-plus-circle"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 lead-email-col del-email-col">
								<div class="row">
									<div class="col-lg-8">
										<div class="input-block mb-3">
											<label class="col-form-label">Email <span class="text-danger">*</span></label>
											<input class="form-control" type="email" value="Vaughan12@example.com">
										</div>
									</div>
									<div class="col-lg-4 d-flex align-items-end">
										<div class="input-block mb-3 d-flex align-items-center">
											<div class="w-100">
												<select class="select">
													<option>Work</option>
													<option>Home</option>
												</select>
											</div>
											<a href="#" class="add-modal-row add-lead-email"><i class="la la-plus-circle"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-block mb-3">
									<label class="col-form-label">Source <span class="text-danger">*</span></label>
									<input class="form-control" type="text" value="Lost">
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-block mb-3">
									<label class="col-form-label">Industry <span class="text-danger">*</span></label>
									<select class="select">
										<option>Highy</option>
										<option>Low</option>
										<option>Medium</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-block tag-with-img mb-3">
									<label class="col-form-label">Owner <span class="text-danger">*</span></label>
									<input class="input-tags form-control" id="inputBox1" type="text" data-role="tagsinput" name="Label" value="James">
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-block mb-3">
									<label class="col-form-label">Tags <span class="text-danger">*</span></label>
									<input class="input-tags form-control" id="inputBox2" type="text" data-role="tagsinput" name="Label" value="Promotion, Rated">
								</div>
							</div>
							<div class="col-lg-12">
								<div class="input-block mb-3">
									<label class="col-form-label">Description <span class="text-danger">*</span></label>
									<textarea class="form-control" rows="5"></textarea>
								</div>
							</div>
							<div class="col-md-12">
								<div class="input-block mb-3">
									<h5 class="mb-3">Visibility</h5>
									<div class="status-radio-btns d-flex">
										<div class="people-status-radio">
											<input type="radio" class="status-radio" id="tests3" name="radio-group2" checked>
											<label for="tests3">Pubilc</label>
										</div>
										<div class="people-status-radio">
											<input type="radio" class="status-radio" id="tests4" name="radio-group2">
											<label for="tests4">Private</label>
										</div>
										<div class="people-status-radio">
											<input type="radio" class="status-radio" id="tests5" name="radio-group2">
											<label for="tests5">Select People</label>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="input-block mb-3">
									<h5 class="mb-3">Status</h5>
									<div class="status-radio-btns d-flex">
										<div class="people-status-radio">
											<input type="radio" class="status-radio" id="tests6" name="radio-group3" checked>
											<label for="tests6">Active</label>
										</div>
										<div class="people-status-radio">
											<input type="radio" class="status-radio" id="tests7" name="radio-group3">
											<label for="tests7">Inactive</label>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 text-end form-wizard-button">
								<button class="button btn-lights reset-btn" type="reset" data-bs-dismiss="modal">Reset</button>
								<button class="btn btn-primary" type="submit">Save Lead</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /Edit Leads -->

<!-- Delete Leads -->
<div class="modal custom-modal fade" id="delete_leads" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div class="success-message text-center">
					<div class="success-popup-icon bg-danger">
						<i class="la la-trash-restore"></i>
					</div>
					<h3>Are you sure, You want to delete</h3>
					<p>Lead ”Collins” from your Account</p>
					<div class="col-lg-12 text-center form-wizard-button">
						<a href="#" class="button btn-lights" data-bs-dismiss="modal">Not Now</a>
						<a href="leads.php" class="btn btn-primary">Okay</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /Delete Leads -->

<!-- Export -->
<div class="modal custom-modal fade modal-padding" id="export" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header header-border justify-content-between p-0">
				<h5 class="modal-title">Export</h5>
				<button type="button" class="btn-close position-static" data-bs-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body p-0">
				<form action="leads.php">
					<div class="row">
						<div class="col-md-12">
							<div class="input-block mb-3">
								<h5 class="mb-3">Export</h5>
								<div class="status-radio-btns d-flex">
									<div class="people-status-radio">
										<input type="radio" class="status-radio" id="pdf" name="export-type" checked>
										<label for="pdf">Person</label>
									</div>
									<div class="people-status-radio">
										<input type="radio" class="status-radio" id="excel" name="export-type">
										<label for="excel">Organization</label>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<h4 class="mb-3">Filters</h4>
							<div class="input-block mb-3">
								<label class="col-form-label">Fields <span class="text-danger">*</span></label>
								<select class="select">
									<option>All Fields</option>
									<option>contact</option>
									<option>Company</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="input-block mb-3">
								<label class="col-form-label">From Date <span class="text-danger">*</span></label>
								<div class="cal-icon">
									<input class="form-control floating datetimepicker" type="text">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="input-block mb-3">
								<label class="col-form-label">To Date <span class="text-danger">*</span></label>
								<div class="cal-icon">
									<input class="form-control floating datetimepicker" type="text">
								</div>
							</div>
						</div>
						<div class="col-lg-12 text-end form-wizard-button">
							<button class="button btn-lights reset-btn" type="reset" data-bs-dismiss="modal">Reset</button>
							<button class="btn btn-primary" type="submit">Export Now</button>
						</div>
					</div>
				</form>

			</div>
		</div>
	</div>
</div>
<!-- /Export -->