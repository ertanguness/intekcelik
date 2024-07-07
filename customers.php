<!-- Page Header -->
<div class="page-header">
	<div class="row align-items-center">
		<div class="col-md-4">
			<h3 class="page-title">Firmalar</h3>
			<ul class="breadcrumb">
				<li class="breadcrumb-item"><a href="admin-dashboard.html">Kontrol Paneli</a></li>
				<li class="breadcrumb-item active">Firmalar</li>
			</ul>
		</div>
		<div class="col-md-8 float-end ms-auto">
			<div class="d-flex title-head">
				<div class="view-icons">
					<a href="#" class="list-view btn btn-link" id="collapse-header"><i class="las la-expand-arrows-alt"></i></a>
					<a href="javascript:void(0);" class="list-view btn btn-link" id="filter_search"><i class="las la-filter"></i></a>
				</div>

				<a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_company"><i class="la la-plus-circle"></i> Firma Ekle</a>
			</div>
		</div>
	</div>
</div>

<!-- /Page Header -->

<!-- Search Filter -->
<div class="filter-filelds" id="filter_inputs">
	<div class="row filter-row">
		<div class="col-xl-2">
			<div class="input-block mb-3 form-focus">
				<input type="text" class="form-control floating">
				<label class="focus-label">Firma Adı</label>
			</div>
		</div>
		<div class="col-xl-2">
			<div class="input-block mb-3 form-focus">
				<input type="text" class="form-control floating">
				<label class="focus-label">E-posta</label>
			</div>
		</div>
		<div class="col-xl-2">
			<div class="input-block mb-3 form-focus">
				<input type="text" class="form-control floating">
				<label class="focus-label">Telefon Numarası</label>
			</div>
		</div>
		<div class="col-xl-2">
			<div class="input-block mb-3 form-focus focused">
				<input type="text" class="form-control date-range bookingrange">
				<label class="focus-label">Tarih - Tarih</label>
			</div>
		</div>

		<div class="col-xl-2">
			<a href="#" class="btn btn-success w-100"> Ara </a>
		</div>
	</div>
</div>
<hr>
<!-- /Search Filter -->
<div class="filter-section">
	<ul>

		<li>
			<div class="form-sort">
				<i class="las la-sort-alpha-up-alt"></i>
				<select class="select">
					<option>Alfabetik Sırala</option>
					<option>Artan</option>
					<option>Azalan</option>
					<option>Son Görüntülenen</option>
					<option>Son Eklenen</option>
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
						<th class="no-sort"></th>
						<th>İsim</th>
						<th>Telefon</th>
						<th>Email</th>
						<th>Yetkili</th>
						<th>Kategori</th>
						<th>Durum</th>
						<th class="text-end">Aksiyon</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<div class="set-star star-select">
								<i class="fa fa-star filled"></i>
							</div>
						</td>
						<td>
							<h2 class="table-avatar d-flex align-items-center">
								<a href="profile.html" class="company-img"><img src="/assets/img/icons/company-icon-01.svg" alt="Kullanıcı Görseli"></a>
								<a href="profile.html" class="profile-split">NovaWaveLLC</a>
							</h2>
						</td>
						<td>+1 875455453</td>
						<td>Robertson@example.com</td>
						<td>
							Firma Sorumlusu
						</td>
						<td>
							Ana Firma / Tedarikçi
						</td>
						<td>
							<div class="dropdown action-label">
								<a href="#" class="btn btn-white btn-sm badge-outline-success "> Aktif </a>
							</div>
						</td>
						<td class="text-end">
							<div class="dropdown dropdown-action">
								<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_company"><i class="fa-solid fa-pencil m-r-5"></i> Düzenle</a>
									<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_company"><i class="fa-regular fa-trash-can m-r-5"></i> Sil</a>
									<a class="dropdown-item" href="company-details.html"><i class="fa-regular fa-eye"></i> Önizle</a>
								</div>
							</div>
						</td>
					</tr>

				</tbody>
			</table>
		</div>
	</div>
</div>



<!-- Add Company -->
<div class="modal custom-modal fade custom-modal-two modal-padding" id="add_company" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header header-border justify-content-between p-0">
				<h5 class="modal-title">Yeni Firma Ekle</h5>
				<button type="button" class="btn-close position-static" data-bs-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>

			</div>
			<div class="modal-body p-0">
				<div class="add-details-wizard">
					<ul id="progressbar" class="progress-bar-wizard">
						<li class="active">
							<span><i class="la la-user-tie"></i></span>
							<div class="multi-step-info">
								<h6>Firma Bilgileri</h6>
							</div>
					</ul>
				</div>
				<div class="add-info-fieldset">
					<fieldset id="first-field">
						<form action="company.html">
							<div class="contact-input-set">
								<div class="row">
									<div class="col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label" for="firma_adi">Firma Adı <span class="text-danger">*</span></label>
											<input class="form-control" type="text" id="firma_adi" name="firma_adi">
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label" for="eposta">E-posta <span class="text-danger"> *</span></label>
											<input class="form-control" type="email" id="eposta" name="eposta">
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label" for="telefon1">Telefon Numarası 1<span class="text-danger"> *</span></label>
											<input class="form-control" type="text" id="telefon1" name="telefon1">
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label" for="telefon2">Telefon Numarası 2 </label>
											<input class="form-control" type="text" id="telefon2" name="telefon2">
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label" for="faks">Faks </label>
											<input class="form-control" type="text" id="faks" name="faks">
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label" for="web_sitesi">Web Sitesi</label>
											<input class="form-control" type="text" id="web_sitesi" name="web_sitesi">
										</div>
									</div>

									<div class="col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label" for="kategori">Kategori <span class="text-danger">*</span></label>
											<select class="select" id="kategori" name="kategori">
												<option>Seç</option>
												<option>Ana Firma</option>
												<option>Tedarikçi</option>
											</select>
										</div>
									</div>

									<div class=" col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label" for="sektor">Sektör <span class="text-danger">*</span></label>
											<input class="form-control" type="text" id="sektor" name="sektor">
										</div>
									</div>

									<div class="col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label" for="yetkili">Yetkili <span class="text-danger">*</span></label>
											<select class="select" id="yetkili" name="yetkili">
												<option>TANIMLAMALARDAN GELECEK</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label" for="para_birimi">Para Birimi <span class="text-danger">*</span></label>
											<select class="select" id="para_birimi" name="para_birimi">
												<option>Seç</option>
												<option>₺</option>
												<option>$</option>
												<option>€</option>
											</select>
										</div>
									</div>

									<div class="col-lg-12">
										<div class="input-block mb-3">
											<label class="col-form-label" for="firma_hakkinda">Firma Hakkında<span class="text-danger">*</span></label>
											<textarea class="form-control" id="firma_hakkinda" name="firma_hakkinda"></textarea>
										</div>
									</div>
								</div>
								<div style="text-align: right;">
									<button class="btn btn-primary next" type="button">Kaydet</button>
								</div>
							</div>
						</form>
					</fieldset>
				</div>


			</div>
		</div>
	</div>
</div>

<!-- /Add Company -->

<!-- Edit Company -->
<div class="modal custom-modal fade custom-modal-two modal-padding" id="edit_company" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header header-border justify-content-between p-0">
				<h5 class="modal-title">Yeni Firma Ekle</h5>
				<button type="button" class="btn-close position-static" data-bs-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>

			</div>
			<div class="modal-body p-0">
				<div class="add-details-wizard">
					<ul id="progressbar" class="progress-bar-wizard">
						<li class="active">
							<span><i class="la la-user-tie"></i></span>
							<div class="multi-step-info">
								<h6>Firma Bilgileri</h6>
							</div>
					</ul>
				</div>
				<div class="add-info-fieldset">
					<fieldset id="first-field">
						<form action="company.html">
							<div class="contact-input-set">
								<div class="row">
									<div class="col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label">Firma Adı <span class="text-danger">*</span></label>
											<input class="form-control" type="text" id="edit_firma_adi" name="edit_firma_adi">
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label">E-posta <span class="text-danger"> *</span></label>
											<input class="form-control" type="email" id="edit_eposta" name="edit_eposta">
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label">Telefon Numarası 1<span class="text-danger"> *</span></label>
											<input class="form-control" type="text" id="edit_telefon_1" name="edit_telefon_1">
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label">Telefon Numarası 2 </label>
											<input class="form-control" type="text" id="edit_telefon_2" name="edit_telefon_2">
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label">Faks </label>
											<input class="form-control" type="text" id="edit_faks" name="edit_faks">
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label">Web Sitesi</label>
											<input class="form-control" type="text" id="edit_web_sitesi" name="edit_web_sitesi">
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label">Kategori <span class="text-danger">*</span></label>
											<select class="select" id="edit_kategori" name="edit_kategori">
												<option>Seç</option>
												<option>Ana Firma</option>
												<option>Tedarikçi</option>

											</select>
										</div>
									</div>


									<div class=" col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label">Sektör <span class="text-danger">*</span></label>
											<input class="form-control" type="text" id="edit_sektor" name="edit_sektor">
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label">Yetkili <span class="text-danger">*</span></label>
											<select class="select" id="edit_yetkili" name="edit_yetkili">
												<option>TANIMLAMALARDAN GELECEK</option>
											</select>
										</div>
									</div>

									<div class="col-md-6">
										<div class="input-block mb-3">
											<label class="col-form-label">Para Birimi <span class="text-danger">*</span></label>
											<select class="select" id="edit_para_birimi" name="edit_para_birimi">
												<option>Seç</option>
												<option>₺</option>
												<option>$</option>
												<option>€</option>
											</select>
										</div>
									</div>

									<div class="col-lg-12">
										<div class="input-block mb-3">
											<label class="col-form-label">Firma Hakkında<span class="text-danger">*</span></label>
											<textarea class="form-control" id="edit_firma_hakkinda" name="edit_firma_hakkinda"></textarea>
										</div>
									</div>
								</div>
								<div style="text-align: right;">
									<button class="btn btn-primary next" type="button">Kaydet</button>
								</div>
							</div>
						</form>
					</fieldset>
				</div>



			</div>
		</div>
	</div>
</div>
<!-- /Edit Company -->

<!-- Success Company -->
<div class="modal custom-modal fade" id="success_msg" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div class="success-message text-center">
					<div class="success-popup-icon">
						<i class="la la-building"></i>
					</div>
					<h3>Company Created Successfully!!!</h3>
					<p>View the details of Company</p>
					<div class="col-lg-12 text-center form-wizard-button">
						<a href="#" class="button btn-lights" data-bs-dismiss="modal">Close</a>
						<a href="company-details.html" class="btn btn-primary">View Details</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /Success Company -->

<!-- Delete Company -->
<div class="modal custom-modal fade" id="delete_company" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<div class="success-message text-center">
					<div class="success-popup-icon bg-danger">
						<i class="la la-trash-restore"></i>
					</div>
					<h3>Are you sure, You want to delete</h3>
					<p>Company ”NovaWaveLLC” from your Account</p>
					<div class="col-lg-12 text-center form-wizard-button">
						<a href="#" class="button btn-lights" data-bs-dismiss="modal">Not Now</a>
						<a href="company.html" class="btn btn-primary">Okay</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /Delete Company -->


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
