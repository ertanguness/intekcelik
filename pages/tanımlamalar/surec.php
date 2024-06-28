            
                <!-- Sayfa Başlığı -->
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Proje Süreç Tanımla</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="admin-dashboard.php">Anasayfa</a></li>
                                <li class="breadcrumb-item active">Tanımlamalar</li>
                            </ul>
                        </div>
                        <div class="col-auto float-end ms-auto">
                            <a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_surec"><i class="fa-solid fa-plus"></i> Süreç Ekle</a>
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
                                        <th>Süreç Adı</th>
                                        <th class="text-end">İşlem</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Eklenen Veri Gelecek</td>
                                        <td class="text-end">
                                        <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_surec"><i class="fa-solid fa-pencil m-r-5"></i> Düzenle</a>
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_surec"><i class="fa-regular fa-trash-can m-r-5"></i> Sil</a>
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
            
            <!-- surec Ekle Modal -->
            <div id="add_surec" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Proje Süreci Ekle</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Süreç Adı <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="surec_adi" id="surec_adi">
                                </div>
                                
                                <div class="submit-section">
                                    <button class="btn btn-primary submit-btn">Kaydet</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /surec Ekle Modal -->
            
            <!-- surec Düzenle Modal -->
            <div id="edit_surec" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Proje Süreç Düzenle</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Süreç Adı <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="edit_surec_adi" id="edit_surec_adi">
                                </div>
                                
                                <div class="submit-section">
                                    <button class="btn btn-primary submit-btn">Kaydet</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /surec Düzenle Modal -->

            <!-- surec Sil Modal -->
            <div class="modal custom-modal fade" id="delete_surec" role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="form-header">
                                <h3>Süreç Sil</h3>
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
            <!-- /surec Sil Modal -->

</body>

</html>