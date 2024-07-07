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
                        <th>Firma Adı </th>
                        <th>Firma Yetkilisi</th>
                        <th>Firma Adresi</th>
                        <th>Telefon</th>
                        <th>Email Adresi</th>
                        <th>Durum</th>
                        <th class="text-end">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = $con->prepare("SELECT * FROM tedarikci_firmalar");
                    $sql->execute();
                    while ($row = $sql->fetch(PDO::FETCH_OBJ)) {

                    ?>
                        <tr>
                            <td><?php echo $row->id; ?></td>
                            <td><?php echo $row->firma_adi; ?></td>
                            <td><?php echo $row->firma_yetkilisi; ?></td>
                            <td><?php echo $row->firma_adresi; ?></td>
                            <td><?php echo $row->telefon; ?></td>
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
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            
                            <label class="col-form-label">Firma Adı <span class="text-danger">*</span></label>
                            <input class="form-control floating" name="firma_adi" id="firma_adi" type="text">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="col-form-label">Firma Yetkilisi</label>
                            <input class="form-control" name="firma_yetkilisi" id="firma_yetkilisi" type="text">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="col-form-label">Firma Telefon <span class="text-danger">*</span></label>
                            <input class="form-control" name="telefon" id="telefon" type="text">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="col-form-label">Email Adresi</label>
                            <input class="form-control" name="email_adresi" id="email_adresi" type="text">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="col-form-label">Durum </label>
                            <select class="select" name="status" id="status">
                                <option value="1">Aktif</option>
                                <option value="0">Pasif</option>
                            </select>

                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-12 mb-3">
                            <label class="col-form-label">Firma Adresi </label>
                            <textarea class="form-control" name="firma_adresi"></textarea>
                        </div>
                    </div>
                    <div class="submit-section">
                        <style>
                            .btn-modal {
                                padding: 8px 60px;
                            }
                        </style>
                        <button type="button" onclick="customReset()" class="btn btn-outline-secondary rounded-pill btn-modal">Reset</button>
                        <button class="btn btn-primary rounded-pill btn-modal" id="saveSuppliers">Kaydet</button>
                        <input type="hidden" value="0" id="supplier_id" name="supplier_id" class="form-control">
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