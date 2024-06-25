<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yeni Proje</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
</head>
<body>
    <!-- Sayfa Başlığı -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col-md-4">
                <h3 class="page-title">Yeni Proje</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" onclick="Route(event)" data-page="admin-dashboard">Ana Sayfa</a></li>
                    <li class="breadcrumb-item active"><a href="#" onclick="Route(event)" data-page="projects/list">Projeler</a></li>
                    <li class="breadcrumb-item active">Yeni Proje Ekle</li>
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
                    <a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_pipeline"><i class="la la-plus-circle"></i> Kaydet</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /Sayfa Başlığı -->

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs mb-3 tab-style-6" id="myTab-3" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="products-tab" data-bs-toggle="tab" data-bs-target="#products-tab-pane" type="button" role="tab" aria-controls="products-tab-pane" aria-selected="true"><i class="feather-gift me-1 align-middle d-inline-block"></i>Proje Genel Bilgileri</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="sales-tab" data-bs-toggle="tab" data-bs-target="#sales-tab-pane" type="button" role="tab" aria-controls="sales-tab-pane" aria-selected="false"><i class="feather-file me-1 align-middle d-inline-block"></i>Satın Alma Bilgileri</button>
                        </li>         
                    </ul>
                    <div class="tab-content pt-0" id="myTabContent2">
                        <div class="tab-pane fade show active p-0 border-bottom-0" id="products-tab-pane" role="tabpanel" aria-labelledby="products-tab" tabindex="0">
                            
                            <div class="input-block mb-4 row">
                              <label class="col-lg-2 col-form-label">Proje Kodu <span style="color:red">(*)</span></label>
                              <div class="col-lg-3">
                                  <input type="text" class="form-control" required name="projekodu" id="projekodu">
                              </div>
                              <div class="col-lg-1"></div> <!-- Bu satır boşluk eklemek için -->
                              <label class="col-lg-2 col-form-label">Teknik Resim Sorumlusu <span style="color:red">(*)</span></label>
                            <div class="col-lg-3">
                                <select class="select" required name="tekresim_sorumlusu" id="tekresim_sorumlusu">
                                    <option>TANIMLAMALARDAN GELECEK</option>
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
                          <div class="col-lg-3">
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
                          <div class="col-lg-3">
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
                              <div class="col-lg-3">
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
                          <label class="col-lg-2 col-form-label"></label>
                              <div class="col-lg-2">
                                  <input type="checkbox" name="boyali" id="boyali" class="check" data-toggle="toggle" data-on="Aktif" data-off="Pasif" data-onstyle="success" data-offstyle="danger"> Boyalı
                              </div>
                              <div class="col-lg-2">
                                  <input type="checkbox" name="galvanizli" id="galvanizli" class="check" data-toggle="toggle" data-on="Aktif" data-off="Pasif" data-onstyle="success" data-offstyle="danger"> Galvanizli
                                 
                              </div>
                          </div>
                          <div class="custom-file-container" data-upload-id="myFirstImage">
                                            <label>Birden Fazla Dosya Seçebilirsiniz. <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image"></a></label>
                                            <label class="custom-file-container__custom-file" >
                                                <input name ="genel_dosya" id="genel_dosya" type="file" class="custom-file-container__custom-file__custom-file-input" multiple>
                                                <input type="hidden" name="MAX_FILE_SIZE" value="10485760">
                                                <span class="custom-file-container__custom-file__custom-file-control"></span>
                                            </label>
                                            <div class="custom-file-container__image-preview"></div>
                            </div>
                        </div>
                         
                        <div class="tab-pane fade" id="sales-tab-pane" role="tabpanel" aria-labelledby="sales-tab" tabindex="0">
                        
                            <div class="input-block mb-3 row">
                                  <label class="col-lg-2 col-form-label">Satın Alma No <span style="color:red">(*)</span></label>
                                  <div class="col-lg-3">
                                      <input type="text" class="form-control" required name="satinalma_no" id="satinalma_no">
                                  </div>
                                  <div class="col-lg-1"></div> <!-- Bu satır boşluk eklemek için -->
                                  <label class="col-lg-2 col-form-label">Sipariş Veren <span style="color:red">(*)</span></label>
                                  <div class="col-lg-3">
                                      <input type="text" class="form-control" required name="siparis_veren" id="siparis_veren">
                                  </div>
                            </div>
                            <div class="input-block mb-3 row">
                                  <label class="col-lg-2 col-form-label">Proje Geliş Tarihi <span style="color:red">(*)</span></label>
                                  <div class="col-lg-3">
                                      <input class="form-control datetimepicker" type="text" required name="gelistarihi" id="gelistarihi">
                                  </div>
                                  <div class="col-lg-1"></div> <!-- Bu satır boşluk eklemek için -->
                                  <label class="col-lg-2 col-form-label">Proje Tonajı </label>
                                  <div class="col-lg-3">
                                      <input type="text" class="form-control" name="tonaj" id="tonaj" placeholder="Pozların toplamından otomatik hesaplanacak">
                                  </div>
                            </div>
                            <div class="input-block mb-3 row">
                                  <label class="col-lg-2 col-form-label">Proje Termin Süresi <span style="color:red">(*)</span></label>
                                  <div class="col-lg-3">
                                      <input class="form-control datetimepicker" type="text" required name="termintarihi" id="termintarihi">
                                  </div>
                                  <div class="col-lg-1"></div> <!-- Bu satır boşluk eklemek için -->
                                  <label class="col-lg-2 col-form-label">Kg Birim Fiyat</label>
                                  <div class="col-lg-2">
                                      <input type="text" class="form-control" name="birimfiyat" id="birimfiyat">
                                  </div>
                                  <div class="col-lg-1">
                                      <input type="text" class="form-control" name="parabirimi" id="parabirimi" placeholder="Firma tanımlanırken girilen para birimi cinsinden gelecek">
                                  </div>
                            </div>
                            <div class="input-block mb-3 row">
                                  <label class="col-lg-2 col-form-label">Proje Teslim Tarihi<span style="color:red">(*)</span></label>
                                  <div class="col-lg-3">
                                      <input class="form-control datetimepicker" type="text" required name="teslimtarihi" id="teslimtarihi">
                                  </div>
                                  <div class="col-lg-1"></div> <!-- Bu satır boşluk eklemek için -->
                                  <label class="col-lg-2 col-form-label">Proje Tutarı </label>
                                  <div class="col-lg-3">
                                      <input type="text" class="form-control" name="proje_tutari" id="proje_tutari" placeholder="Proje tonajı verisi ile proje birim Kg verisinin çarpımı hesaplanacak olup, ilgili para birimi ile gösterilecektir">
                                  </div>
                            </div>
                            <div class="custom-file-container" data-upload-id="myFirstImage">
                                            <label>Birden Fazla Dosya Seçebilirsiniz. <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image"></a></label>
                                            <label class="custom-file-container__custom-file" >
                                                <input name ="servis_dosya" id="servis_dosya" type="file" class="custom-file-container__custom-file__custom-file-input" multiple>
                                                <input type="hidden" name="MAX_FILE_SIZE" value="10485760">
                                                <span class="custom-file-container__custom-file__custom-file-control"></span>
                                            </label>
                                            <div class="custom-file-container__image-preview"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script src="/assets/plugins/fileupload/fileupload.min.js"></script>
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

            $('.check').bootstrapToggle({
                onstyle: "info",
                offstyle: "danger",
                size: "xs",
            });
        });
    </script>
</body>
</html>
