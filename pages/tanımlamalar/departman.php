            
                <!-- Sayfa Başlığı -->
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Departman Tanımla</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="admin-dashboard.php">Anasayfa</a></li>
                                <li class="breadcrumb-item active">Tanımlamalar</li>
                            </ul>
                        </div>
                        <div class="col-auto float-end ms-auto">
                            <a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_department"><i class="fa-solid fa-plus"></i> Departman Ekle</a>
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
                                        <th>Departman Adı</th>
                                        <th class="text-end">İşlem</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Web Geliştirme</td>
                                        <td class="text-end">
                                        <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_department"><i class="fa-solid fa-pencil m-r-5"></i> Düzenle</a>
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_department"><i class="fa-regular fa-trash-can m-r-5"></i> Sil</a>
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
            
            <!-- Departman Ekle Modal -->
            <div id="add_department" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Departman Ekle</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Departman Adı <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="departman_adi" id="departman_adi">
                                </div>
                                <div class="submit-section">
                                    <button class="btn btn-primary submit-btn">Gönder</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Departman Ekle Modal -->
            
            <!-- Departman Düzenle Modal -->
            <div id="edit_department" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Departman Düzenle</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Departman Adı <span class="text-danger">*</span></label>
                                    <input class="form-control"  type="text" name="edit_departman_adi" id="edit_departman_adi">
                                </div>
                                <div class="submit-section">
                                    <button class="btn btn-primary submit-btn">Kaydet</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Departman Düzenle Modal -->

            <!-- Departman Sil Modal -->
            <div class="modal custom-modal fade" id="delete_department" role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="form-header">
                                <h3>Departman Sil</h3>
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
            <!-- /Departman Sil Modal -->

</body>

</html>