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



<script>
    $(document).ready(function() {

        $('.select').select2();
        $(".datatable").DataTable({
            bFilter: false,
            language: {
                paginate: {
                    next: ' <i class=" fa fa-angle-double-right"></i>',
                    previous: '<i class="fa fa-angle-double-left"></i> ',
                },
            },
        });
        
    });
</script>
<script src="/assets/js/daterangepicker.js"></script>