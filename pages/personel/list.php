<!-- Sayfa Başlığı -->
<div class="page-header">
    <div class="row align-items-center">
        <div class="col">
            <h3 class="page-title">Personel</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="admin-dashboard.php">Anasayfa</a></li>
                <li class="breadcrumb-item active">Personel Yönetimi</li>
            </ul>
        </div>
        <div class="col-auto float-end ms-auto">
            <a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_employee"><i class="fa-solid fa-plus"></i> Personel Ekle</a>
            
        </div>
    </div>
</div>
<!-- /Sayfa Başlığı -->

<!-- Arama Filtresi -->
<div class="row filter-row">
    <div class="col-sm-6 col-md-3">
        <div class="input-block mb-3 form-focus">
            <input type="text" class="form-control floating" name="calisan_id" id="calisan_id">
            <label class="focus-label">Personel ID</label>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="input-block mb-3 form-focus">
            <input type="text" class="form-control floating" name="calisan_adi" id="calisan_adi">
            <label class="focus-label">Personel Adı</label>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="input-block mb-3 form-focus select-focus">
            <select class="select floating" name="arama_departman" id="arama_departman">
                <option>Departman Seçin</option>
                <option>Web Geliştirici</option>
                <option>Web Tasarımcısı</option>
                <option>Android Geliştirici</option>
                <option>IOS Geliştirici</option>
            </select>
            <label class="focus-label">Departman</label>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <a href="#" class="btn btn-success w-100"> Ara </a>
    </div>
</div>
<!-- /Arama Filtresi -->

<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-striped custom-table datatable">
                <thead>
                    <tr>
                        <th>Ad</th>
                        <th>Personel ID</th>
                        <th>E-posta</th>
                        <th>Telefon</th>
                        <th class="text-nowrap">Katılma Tarihi</th>
                        <th>Rol</th>
                        <th class="text-end no-sort">İşlem</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <h2 class="table-avatar">
                                <a href="profile.php" class="avatar"><img src="assets/img/profiles/avatar-02.jpg" alt="Kullanıcı Resmi"></a>
                                <a href="profile.php">John Doe <span>Web Tasarımcısı</span></a>
                            </h2>
                        </td>
                        <td>FT-0001</td>
                        <td>johndoe@example.com</td>
                        <td>9876543210</td>
                        <td>1 Ocak 2013</td>
                        <td>
                            Teknik Resim Uzmanı
                        </td>
                        <td class="text-end">
                            <div class="dropdown dropdown-action">
                                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_employee"><i class="fa-solid fa-pencil m-r-5"></i> Düzenle</a>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_employee"><i class="fa-regular fa-trash-can m-r-5"></i> Sil</a>
                                </div>
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- /Sayfa İçeriği -->

<!-- Personel Ekleme Modalı -->
<div id="add_employee" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Personel Ekle</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Adı <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="adi" id="adi">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Soyadı</label>
                                <input class="form-control" type="text" name="soyadi" id="soyadi">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Kullanıcı Adı <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="kullanici_adi" id="kullanici_adi">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">E-posta <span class="text-danger">*</span></label>
                                <input class="form-control" type="email" name="eposta" id="eposta">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Şifre</label>
                                <input class="form-control" type="password" name="sifre" id="sifre">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Şifre Tekrar</label>
                                <input class="form-control" type="password" name="sifre_tekrar" id="sifre_tekrar">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Personel ID <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="calisan_id" id="calisan_id">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Katılma Tarihi <span class="text-danger">*</span></label>
                                <div class="cal-icon"><input class="form-control datetimepicker" type="text" name="katilma_tarihi" id="katilma_tarihi"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Telefon </label>
                                <input class="form-control" type="text" name="telefon" id="telefon">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Şirket</label>
                                <select class="select" name="sirket" id="sirket">
                                <option value="">Global Technologies</option>
                                <option value="1">Delta Infotech</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Departman <span class="text-danger">*</span></label>
                                <select class="select" name="departman" id="departman">
                                <option>TANIMLAMALARDAN GELECEK</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Yetki <span class="text-danger">*</span></label>
                                <select class="select" name="yetki" id="yetki">
                                <option>Yetkilendirmeden gelecek</option>

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive m-t-15">

                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn">Kaydet</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Personel Ekleme Modalı -->

<!-- Personel Düzenleme Modalı -->
<div id="edit_employee" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Personel Düzenle</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Adı <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="edit_adi" id="edit_adi">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Soyadı</label>
                                <input class="form-control" type="text" name="edit_soyadi" id="edit_soyadi">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Kullanıcı Adı <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="edit_kullanici_adi" id="edit_kullanici_adi">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">E-posta <span class="text-danger">*</span></label>
                                <input class="form-control" type="email" name="edit_eposta" id="edit_eposta">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Şifre</label>
                                <input class="form-control" type="password" name="edit_sifre" id="edit_sifre">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Şifre Tekrar</label>
                                <input class="form-control" type="password" name="edit_sifre_tekrar" id="edit_sifre_tekrar">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Personel ID <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="edit_calisan_id" id="edit_calisan_id">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Katılma Tarihi <span class="text-danger">*</span></label>
                                <div class="cal-icon"><input class="form-control datetimepicker" type="text" name="edit_katilma_tarihi" id="edit_katilma_tarihi"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Telefon </label>
                                <input class="form-control" type="text" name="edit_telefon" id="edit_telefon">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Şirket</label>
                                <select class="select" name="edit_sirket" id="edit_sirket">
                                <option value="">Global Technologies</option>
                                <option value="1">Delta Infotech</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Departman <span class="text-danger">*</span></label>
                                <select class="select" name="edit_departman" id="edit_departman">
                                <option>TANIMLAMALARDAN GELECEK</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">Yetki <span class="text-danger">*</span></label>
                                <select class="select" name="edit_yetki" id="edit_yetki">
                                <option>Yetkilendirmeden gelecek</option>

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive m-t-15">

                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn">Kaydet</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Personel Düzenleme Modalı -->

<!-- Personel Silme Modalı -->
<div class="modal custom-modal fade" id="delete_employee" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="form-header">
                    <h3>Personelı Sil</h3>
                    <p>Silmek istediğinizden emin misiniz?</p>
                </div>
                <div class="modal-btn delete-action">
                    <div class="row">
                        <div class="col-6">
                            <a href="javascript:void(0);" class="btn btn-primary continue-btn">Sil</a>
                        </div>
                        <div class="col-6">
                            <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">İptal</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Personel Silme Modalı -->



<!-- JAVASCRIPT -->
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