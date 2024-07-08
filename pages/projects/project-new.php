<div class="page-header">
    <div class="row align-items-center">
        <div class="col-md-4">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a onclick="Route('home')">Ana Sayfa</a></li>
                <li class="breadcrumb-item active"><a onclick="Route('projects')">Projeler</a></li>
                <li class="breadcrumb-item active">Yeni Proje Ekle</li>
            </ul>
        </div>
        <div class="col-md-8 float-end ms-auto">
            <div class="d-flex title-head">
                <div class="view-icons">
                    <a href="javascript:void(0);" class="list-view btn btn-link" id="collapse-header"><i class="las la-expand-arrows-alt"></i></a>
                </div>

                <a class="btn add-btn" onclick="addProject()"><i class="la la-plus-circle"></i> Kaydet</a>
            </div>
        </div>
    </div>
</div>
<!-- /Sayfa Başlığı -->

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-tabs nav-tabs-bottom mb-3 tab-style-4" id="myTab-3" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="general-tab" data-bs-toggle="tab" data-bs-target="#general-tab-pane" type="button" role="tab" aria-controls="products-tab-pane" aria-selected="true">
                            <i class="feather-gift me-1 align-middle d-inline-block"></i>Proje Genel Bilgileri</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="structure-tab" data-bs-toggle="tab" data-bs-target="#structure-tab-pane" type="button" role="tab" aria-controls="sales-tab-pane" aria-selected="false">
                            <i class="feather-file me-1 align-middle d-inline-block"></i>Yapı Tanımları</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="sales-tab" data-bs-toggle="tab" data-bs-target="#sales-tab-pane" type="button" role="tab" aria-controls="sales-tab-pane" aria-selected="false">
                            <i class="feather-file me-1 align-middle d-inline-block"></i>Satın Alma Bilgileri</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="sales-tab" data-bs-toggle="tab" data-bs-target="#sales-tab-pane" type="button" role="tab" aria-controls="sales-tab-pane" aria-selected="false">
                            <i class="feather-file me-1 align-middle d-inline-block"></i>Sözleşme Bilgileri</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="sales-tab" data-bs-toggle="tab" data-bs-target="#sales-tab-pane" type="button" role="tab" aria-controls="sales-tab-pane" aria-selected="false">
                            <i class="feather-file me-1 align-middle d-inline-block"></i>Taşeron Bilgileri</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="sales-tab" data-bs-toggle="tab" data-bs-target="#sales-tab-pane" type="button" role="tab" aria-controls="sales-tab-pane" aria-selected="false">
                            <i class="feather-file me-1 align-middle d-inline-block"></i>Hedefler</button>
                    </li>
                </ul>
                <div class="tab-content pt-0" id="myTabContent2">
                    <div class="tab-pane fade show active p-1 border-bottom-0" id="general-tab-pane" role="tabpanel" aria-labelledby="general-tab" tabindex="0">

                        <form action="" id="myForm">
                            <div class="input-block mb-3 row">
                                <label class="col-lg-2 col-form-label">Proje Kodu <span style="color:red">(*)</span></label>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" required name="projekodu" id="projekodu">
                                </div>
                                <div class="col-lg-1"></div> <!-- Bu satır boşluk eklemek için -->
                                <label class="col-lg-2 col-form-label">Teknik Resim Sorumlusu <span style="color:red">(*)</span></label>
                                <div class="col-lg-4">
                                    <select class="select" required name="tekresim_sorumlusu" id="tekresim_sorumlusu">
                                        <option value="">Seçiniz</option>
                                        <option value="Tanım">Tanım</option>
                                    </select>
                                </div>
                            </div>
                            <div class="input-block mb-3 row">
                                <label class="col-lg-2 col-form-label">Proje Adı <span style="color:red">(*)</span></label>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" required name="projeadi" id="projeadi">
                                </div>
                                <div class="col-lg-1"></div> <!-- Bu satır boşluk eklemek için -->
                                <label class="col-lg-2 col-form-label">İmalat Sorumlusu <span style="color:red">(*)</span></label>
                                <div class="col-lg-4">
                                    <select class="select" required name="imalat_sorumlusu" id="imalat_sorumlusu">
                                        <option>TANIMLAMALARDAN GELECEK</option>
                                    </select>
                                </div>
                            </div>
                            <div class="input-block mb-3 row">
                                <label class="col-lg-2 col-form-label">Proje Kategorisi <span style="color:red">(*)</span></label>
                                <div class="col-lg-3">
                                    <select class="select" required name="kategori" id="kategori">
                                        <option>TANIMLAMALARDAN GELECEK</option>
                                    </select>
                                </div>
                                <div class="col-lg-1"></div> <!-- Bu satır boşluk eklemek için -->
                                <label class="col-lg-2 col-form-label">Kalite Sorumlusu <span style="color:red">(*)</span></label>
                                <div class="col-lg-4">
                                    <select class="select" required name="kalite_sorumlusu" id="kalite_sorumlusu">
                                        <option>TANIMLAMALARDAN GELECEK</option>
                                    </select>
                                </div>
                            </div>

                            <div class="input-block mb-3 row">
                                <label class="col-lg-2 col-form-label">Proje İleten Bilgisi <span style="color:red">(*)</span></label>
                                <div class="col-lg-3">
                                    <select class="select" required name="ileten" id="ileten">
                                        <option>TANIMLAMALARDAN GELECEK</option>
                                    </select>
                                </div>
                                <div class="col-lg-1"></div> <!-- Bu satır boşluk eklemek için -->
                                <label class="col-lg-2 col-form-label">Proje Durumu<span style="color:red">(*)</span></label>
                                <div class="col-lg-4">
                                    <select class="select" required name="projedurumu" id="projedurumu">
                                        <option>TANIMLAMALARDAN GELECEK</option>
                                    </select>
                                </div>
                            </div>
                            <div class="input-block mb-3 row">
                                <label class="col-lg-2 col-form-label">Ral Kodu <span style="color:red">(*)</span></label>
                                <div class="col-lg-3">
                                    <select class="select" required name="ralkodu" id="ralkodu">
                                        <option>TANIMLAMALARDAN GELECEK</option>
                                    </select>
                                </div>
                                <div class="col-lg-1"></div> <!-- Bu satır boşluk eklemek için -->
                                <label class="col-lg-2 col-form-label"> Boya / Galvaniz</label>
                                <div class="col-lg-2">
                                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="boyaliradio" id="boyaliradio1" checked>
                                        <label class="btn btn-outline-primary" for="boyaliradio1">Boyasız</label>

                                        <input type="radio" class="btn-check" name="boyaliradio" id="boyaliradio2">
                                        <label class="btn btn-outline-primary" for="boyaliradio2">Boyalı</label>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="galvanizliradio" id="galvanizliradio1" checked>
                                        <label class="btn btn-outline-primary" for="galvanizliradio1">Galvanizsiz</label>

                                        <input type="radio" class="btn-check" name="galvanizliradio" id="galvanizliradio2">
                                        <label class="btn btn-outline-primary" for="galvanizliradio2">Galvanizli</label>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                    <style>
                        .table {
                            --bs-table-bg: transparent;
                        }

                        .selected {
                            background-color: #E4DEBE !important;

                        }

                        .sct-name {
                            width: 150px;
                            text-align: center;
                        }
                    </style>
                    <div class="tab-pane fade p-1 border-bottom-0" id="structure-tab-pane" role="tabpanel" aria-labelledby="structure-tab" tabindex="0">

                        <div class="table-responsive">
                            <table class="table datatable table-hover m-0" id="sctTable">
                                <thead>
                                    <tr class="m-2">
                                        <div class="btn-list m-2">
                                            <button type="button" id="add_structure_card" class="btn btn-outline-secondary">
                                                <i class="fas fa-plus me-2"></i>Yeni Yapı Kartı Ekle
                                            </button>

                                            <button type="button" class="btn btn-outline-danger" id="delete_structure">
                                                <i class="fas fa-trash me-2"></i>Seçilileri Sil
                                            </button>

                                            <button type="button" class="btn btn-outline-info">
                                                <i class="fa-regular fa-file me-2"></i>Seçili Karta Part List Yükle
                                            </button>

                                        </div>

                                    </tr>
                                    <tr>
                                        <th class="no-sort" style="width:10px !important">Seç</th>
                                        <th style="margin-left:5px">Yapı No</th>
                                        <th>Bölüm No</th>
                                        <th>Açıklama</th>
                                        <th>Ekleyen</th>
                                        <th>Eklenme Zamanı</th>
                                        <th class="no-sort" style="width:30px">islemler</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php

                                    $sql = $con->prepare("SELECT * FROM proje_yapilari");
                                    $sql->execute();
                                    
                                   while ($row = $sql->fetch(PDO::FETCH_OBJ)) { ?>

                                        <tr data-id="<?php echo $row->id?>">
                                            <td class="m-2" >
                                                <label class="custom_check ml-2">
                                                <input type="checkbox" class="checkbox" data-id="<?php echo $row->id?>" >
                                                    <span class="checkmark"></span>
                                                </label>
                                                <span class="m-3"><?php echo $row->id?></span>
                                                
                                            </td>
                                            <td><?php echo $row->yapi_no ;?></td>
                                            <td><?php echo $row->bolum_no ;?></td>
                                            <td><?php echo $row->yapi_adi ;?></td>
                                            <td><?php echo $row->ekleyen ;?></td>
                                            <td><?php echo $row->created_at ;?></td>
                                            <td class="m-0 p-0">
                                                <div class="btn-group m-0">
                                                    <a href="javascript:void(0);" data-id="<?php echo $row->id ?>" class="btn btn-link btn_delete_structure" data-bs-toggle="modal" data-bs-target="#delete_structure_modal"><i class="fa-regular fa-trash-can m-r-5"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-link " data-bs-toggle="modal" data-bs-target="#edit-asset"><i class="fa-regular fa-edit m-r-5"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                    <?php
                                    }; ?>


                                </tbody>

                            </table>
                        </div>
                    </div>

                    <div class="tab-pane fade p-4 border-bottom-0" id="sales-tab-pane" role="tabpanel" aria-labelledby="sales-tab" tabindex="0">

                        <div class="input-block mb-3 row">
                            <label class="col-lg-2 col-form-label">Satın Alma No <span style="color:red">(*)</span></label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" required name="satinalma_no" id="satinalma_no">
                            </div>
                            <div class="col-lg-1"></div> <!-- Bu satır boşluk eklemek için -->
                            <label class="col-lg-1 col-form-label">Sipariş Veren <span style="color:red">(*)</span></label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" required name="siparis_veren" id="siparis_veren">
                            </div>
                        </div>
                        <div class="input-block mb-3 row">
                            <label class="col-lg-2 col-form-label">Proje Geliş Tarihi <span style="color:red">(*)</span></label>
                            <div class="col-lg-4">
                                <input class="form-control datetimepicker" type="text" required name="gelistarihi" id="gelistarihi">
                            </div>
                            <div class="col-lg-1"></div> <!-- Bu satır boşluk eklemek için -->
                            <label class="col-lg-1 col-form-label">Proje Tonajı </label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="tonaj" id="tonaj" placeholder="Pozların toplamından otomatik hesaplanacak">
                            </div>
                        </div>
                        <div class="input-block mb-3 row">
                            <label class="col-lg-2 col-form-label">Proje Termin Süresi <span style="color:red">(*)</span></label>
                            <div class="col-lg-4">
                                <input class="form-control datetimepicker" type="text" required name="termintarihi" id="termintarihi">
                            </div>
                            <div class="col-lg-1"></div> <!-- Bu satır boşluk eklemek için -->
                            <label class="col-lg-1 col-form-label">Kg Birim Fiyat</label>
                            <div class="col-lg-3">
                                <input type="text" class="form-control" name="birimfiyat" id="birimfiyat">
                            </div>
                            <div class="col-lg-1">
                                <input type="text" class="form-control" name="parabirimi" id="parabirimi" placeholder="Firma tanımlanırken girilen para birimi cinsinden gelecek">
                            </div>
                        </div>
                        <div class="input-block mb-3 row">
                            <label class="col-lg-2 col-form-label">Proje Teslim Tarihi<span style="color:red">(*)</span></label>
                            <div class="col-lg-4">
                                <input class="form-control datetimepicker" type="text" required name="teslimtarihi" id="teslimtarihi">
                            </div>
                            <div class="col-lg-1"></div> <!-- Bu satır boşluk eklemek için -->
                            <label class="col-lg-1 col-form-label">Proje Tutarı </label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="proje_tutari" id="proje_tutari" placeholder="Proje tonajı verisi ile proje birim Kg verisinin çarpımı hesaplanacak olup, ilgili para birimi ile gösterilecektir">
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="custom-file-container" data-upload-id="myFirstImage">
                                <label>Upload (Single File) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                <label class="custom-file-container__custom-file">
                                    <input type="file" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760">
                                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                                </label>
                                <div class="custom-file-container__image-preview"></div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- add modal -->
<div id="add_asset" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title">Add New Asset</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Asset Name</label>
                                <input class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Asset Id</label>
                                <input class="form-control" type="text" value="AST-235" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-block mb-3 selectnew">
                                <label class="col-form-label">Category</label>
                                <select class="select">
                                    <option>Category 1</option>
                                    <option>Category 2</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Warranty</label>
                                <div class="cal-icon">
                                    <input class="form-control datetimepicker" type="text" placeholder="Start Date">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="input-block mb-3">
                                <label class="col-form-label">&nbsp;</label>
                                <div class="cal-icon">
                                    <input class="form-control datetimepicker" type="text" placeholder="End Date">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Type</label>
                                <input class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Brand</label>
                                <input class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Model</label>
                                <input class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Serial Number</label>
                                <input class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Vendor</label>
                                <input class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Cost</label>
                                <input class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Location</label>
                                <input class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Asset Pictures</label>
                                <div class="file-upload-popup">
                                    <input type="text" class="form-control">
                                    <div class="file-upload-popupcontent">
                                        <input type="file">
                                        <span>Browse</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary submit-btns">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- edit modal -->
<div id="edit-asset" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title">Edit Asset</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Asset Name</label>
                                <input class="form-control" type="text" value="Laptop">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Asset Id</label>
                                <input class="form-control" type="text" value="AST-235" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-block mb-3 selectnew">
                                <label class="col-form-label">Category</label>
                                <select class="select">
                                    <option>Laptop</option>
                                    <option>Keyboard</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Warranty</label>
                                <div class="cal-icon">
                                    <input class="form-control datetimepicker" type="text" value="23-12-2022">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="input-block mb-3">
                                <label class="col-form-label">&nbsp;</label>
                                <div class="cal-icon">
                                    <input class="form-control datetimepicker" type="text" value="23-12-2022">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Type</label>
                                <input class="form-control" type="text" value="computer">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Brand</label>
                                <input class="form-control" type="text" value="brand">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Model</label>
                                <input class="form-control" type="text" value="samsung">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Serial Number</label>
                                <input class="form-control" type="text" value="123456789">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Vendor</label>
                                <input class="form-control" type="text" value="name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Cost</label>
                                <input class="form-control" type="text" value="250">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Location</label>
                                <input class="form-control" type="text" value="usa">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Asset Pictures</label>
                                <div class="file-upload-popup">
                                    <input type="text" class="form-control">
                                    <div class="file-upload-popupcontent">
                                        <input type="file">
                                        <span>Browse</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary submit-btns">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete Estimate Modal -->
<div class="modal custom-modal fade" id="delete_structure_modal" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="form-header">
                    <h3>Delete Asset</h3>
                    <p>Are you sure want to delete?</p>
                </div>
                <div class="modal-btn delete-action">
                    <div class="row">
                        <div class="col-6">
                            <a href="javascript:void(0);" data-id="" data-row="" data-bs-dismiss="modal" class="btn btn-primary continue-btn delete-structure-modal">Delete</a>
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
<!-- /Delete Estimate Modal -->


<!-- assign  Modal -->
<div class="modal custom-modal fade" id="add-assigns" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title">Assign Asset</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-12 selectnew">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Department</label>
                                <select class="select">
                                    <option>Department 1</option>
                                    <option>Department 2</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12 selectnew">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Assign to</label>
                                <select class="select">
                                    <option>Customer</option>
                                    <option>Client</option>
                                </select>
                            </div>
                        </div>
                        <div class="submit-section mt-3">
                            <button class="btn btn-primary submit-btns w-100">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>