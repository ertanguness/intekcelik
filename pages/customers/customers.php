<!-- Page Header -->
<div class="page-header">
    <div class="row align-items-center">
        <div class="col">
            <h3 class="page-title">Tedarikçi Firmalar</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a onclick="Route('home')">Ana Sayfa</a></li>
                <li class="breadcrumb-item active">Tedarikçi Firmalar</li>
            </ul>
        </div>
        <div class="col-auto float-end ms-auto">
            <a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#supplier-modal"><i class="fa-solid fa-plus"></i> Yeni Ekle</a>
        </div>
    </div>
</div>
<!-- /Page Header -->

<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table datatable table-striped custom-table mb-0" id="suppliersTable">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Firma Türü </th>
                        <th>Firma Adı </th>
                        <th>Firma Yetkilisi</th>
                        <th>Firma Adresi</th>
                        <th>Telefon</th>
                        <th>Email Adresi</th>
                        <th>Durum</th>
                        <th class="text-end">İşlem</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = $con->prepare("SELECT * FROM firmalar");
                    $sql->execute();
                    while ($row = $sql->fetch(PDO::FETCH_OBJ)) {

                    ?>
                        <tr>
                            <td><?php echo $row->id; ?></td>
                            <td>firma türü gelecek</td>
                            <td><?php echo $row->firma_adi; ?></td>
                            <td><?php echo $row->firma_yetkilisi; ?></td>
                            <td><?php echo $row->firma_adresi; ?></td>
                            <td><?php echo $row->telefon1; ?></td>
                            <td><?php echo $row->email_adresi; ?></td>

                            <td>
                                <?php
                                if ($row->durum == 1) {
                                    $state = "Aktif";
                                    $color = "success";
                                } else {
                                    $state = "Pasif";
                                    $color = "danger";
                                };
                                ?>
                                <div class="dropdown action-label">
                                    <a class="btn btn-white btn-sm btn-rounded">
                                        <i class="fa-regular fa-circle-dot text-<?php echo $color; ?>"></i> <?php echo $state; ?>
                                    </a>

                                </div>
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item edit-supplier" data-id="<?php echo $row->id; ?>" href="#" data-bs-toggle="modal" data-bs-target="#supplier-modal"><i class="fa-solid fa-pencil m-r-5"></i> Düzenle</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_tax"><i class="fa-regular fa-trash-can m-r-5"></i> Sil</a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /Page Content -->

<!-- Add Tax Modal -->
<div id="supplier-modal" class="modal custom-modal custom-modal-two fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Yeni Firma Ekle</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <div class="modal-body">
                <form id="suppliersForm" action="">
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
											<label class="col-form-label" for="firma_yetkilisi">Firma Yetkilisi <span class="text-danger">*</span></label>
											<input class="form-control" name="firma_yetkilisi" id="firma_yetkilisi" type="text">
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
											<label class="col-form-label" for="email_adresi">E-posta <span class="text-danger"> *</span></label>
											<input class="form-control" type="email" id="email_adresi" name="email_adresi">
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
											<label class="col-form-label" for="kategori">Firma Kategorisi <span class="text-danger">*</span></label>
											<select class="select" id="kategori" name="kategori">
                                                <option>Firma Türü Seçiniz</option>
                                                <option>Ana Firma </option>
                                                <option>Tedarikçi </option>
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
											<label class="col-form-label" for="para_birimi">Para Birimi <span class="text-danger">*</span></label>
											<select class="select" id="para_birimi" name="para_birimi">
												<option>Seç</option>
												<option>₺</option>
												<option>$</option>
												<option>€</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
									<div class="input-block mb-3">
										<label class="col-form-label">Durum </label>
											<select class="select" name="status" id="status">
												<option value="1">Aktif</option>
												<option value="0">Pasif</option>
											</select>

										</div>
									</div>
									<div class="col-lg-12">
										<div class="input-block mb-3">
											<label class="col-form-label" for="firma_adresi">Firma Hakkında<span class="text-danger">*</span></label>
											<textarea class="form-control" name="firma_adresi"></textarea>
										</div>
									</div>
								</div>                    
                                <div class="submit-section">
                                    <style>
                                        .btn-modal {
                                            padding: 8px 60px;
                                        }
                                    </style>
                                    <button type="button" onclick="customReset()" class="btn btn-outline-secondary rounded-pill btn-modal">İptal</button>
                                    <button class="btn btn-primary rounded-pill btn-modal" id="saveSuppliers">Kaydet</button>
                                    <input type="hidden" value="0" id="firma_id" name="firma_id" class="form-control">
                                </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Add Tax Modal -->


<!-- Delete Tax Modal -->
<div class="modal custom-modal fade" id="delete_tax" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="form-header">
                    <h3>Delete Tax</h3>
                    <p>Are you sure want to delete?</p>
                </div>
                <div class="modal-btn delete-action">
                    <div class="row">
                        <div class="col-6">
                            <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                        </div>
                        <div class="col-6">
                            <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Delete Tax Modal -->