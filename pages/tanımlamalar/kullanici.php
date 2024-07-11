            <!-- Sayfa Başlığı -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Kullanıcı Tanımla</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="admin-dashboard.php">Anasayfa</a></li>
                            <li class="breadcrumb-item active">Tanımlamalar</li>
                        </ul>
                    </div>
                    <div class="col-auto float-end ms-auto">
                        <a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_durum"><i class="fa-solid fa-plus"></i> Kullanıcı Tanımla</a>
                    </div>
                </div>
            </div>
            <!-- /Sayfa Başlığı -->

            <div class="row">
                <div class="col-md-12">
                    <div>
                        <table class="table table-striped custom-table mb-0 datatable">
                            <thead>
                                <tr>
                                    <th class="width-thirty">#</th>
                                    <th>Kullanıcı Adı</th>
                                    <th>Yetki Açıklaması</th>
                                    <th class="text-end">İşlem</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Eklenen Veri Gelecek</td>
                                    <td>Eklenen Veri Gelecek</td>
                                    <td class="text-end">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_durum"><i class="fa-solid fa-pencil m-r-5"></i> Düzenle</a>
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_durum"><i class="fa-regular fa-trash-can m-r-5"></i> Sil</a>
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_durum"><i class="fa-solid fa-pencil m-r-5"></i> Yetki Düzenle</a>
                                                   <a class="<?php hasActive("yetki") ?>  " onclick="Route('pages/tanımlamalar/yetki')">Yetkiler</a></li>       
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>
            <!-- /Sayfa İçeriği -->

            <!-- durum Ekle Modal -->
            <div id="add_durum" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Kullanıcı Ekle</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Kullanıcı Adı <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="kullanici_adi" id="kullanici_adi">
                                </div>
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Kullanıcı açıklaması</label>
                                    <input class="form-control" type="text" name="aciklama" id="aciklama">
                                </div>
                                <div class="submit-section">
                                    <button class="btn btn-primary submit-btn">Kaydet</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /durum Ekle Modal -->

            <!-- durum Düzenle Modal -->
            <div id="edit_durum" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Kullanıcı Ekle</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Kullanıcı Adı <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="edit_kullanici_adi" id="edit_kullanici_adi">
                                </div>
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Kullanıcı açıklaması</label>
                                    <input class="form-control" type="text" name="edit_aciklama" id="edit_aciklama">
                                </div>
                                <div class="submit-section">
                                    <button class="btn btn-primary submit-btn">Kaydet</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /durum Düzenle Modal -->

            <!-- durum Sil Modal -->
            <div class="modal custom-modal fade" id="delete_durum" role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="form-header">
                                <h3>Durum Sil</h3>
                                <p>Emin misiniz?</p>
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
            <!-- /durum Sil Modal -->

            </body>

            </html>