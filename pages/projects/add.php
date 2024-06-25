

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
                              <input type="checkbox" name="boyali" id="boyali" > Boyalı
                          </div>
                          <div class="col-lg-2">
                              <input type="checkbox" name="galvanizli" id="galvanizli" > Galvanizli
                          </div>
                      </div>
                  </div>
                  <div class="input-block mb-3 row">
                      <label class="col-lg-3 col-form-label">İmalat Sorumlusu <span style="color:red">(*)</span></label>
                      <div class="col-lg-9">
                          <select class="select" required name="imalat_sorumlusu" id="imalat_sorumlusu">
                              <option>TANIMALAMALARDAN GELECEK</option>
                          </select>
                      </div>
                  </div>
                  <div class="input-block mb-3 row">
                      <label class="col-lg-3 col-form-label">Kalite Sorumlusu <span style="color:red">(*)</span></label>
                      <div class="col-lg-9">
                          <select class="select" required name="kalite_sorumlusu" id="kalite_sorumlusu">
                              <option>TANIMALAMALARDAN GELECEK</option>
                          </select>
                      </div>
                  </div>
                  <div class="input-block mb-3 row">
                      <label class="col-lg-3 col-form-label">Proje Tonajı </label>
                      <div class="col-lg-9">
                          <input type="text" class="form-control" name="tonaj" id="tonaj" placeholder="Pozların toplamından otomatik hesaplanacak">
                      </div>
                  </div>
                  <div class=" input-block mb-3 row">
                      <label class="col-lg-3 col-form-label">Kg Birim Fiyat</label>
                      <div class="col-lg-5">
                          <input type="text" class="form-control" name="birimfiyat" id="birimfiyat">
                      </div>
                      <div class="col-lg-4">
                          <input type="text" class="form-control" name="parabirimi" id="parabirimi" placeholder="Firma tanımlanırken girilen para birimi cinsinden gelecek">
                      </div>
                  </div>
                  <div class="input-block mb-3 row">
                      <label class="col-lg-3 col-form-label">Proje Tutarı </label>
                      <div class="col-lg-9">
                          <input type="text" class="form-control" name="tonaj" id="tonaj" placeholder="Proje tonajı verisi ile proje birim Kg verisinin çarpımı hesaplanacak olup, ilgili para birimi ile gösterilecektir">
                      </div>
                  </div>
                  <div class="text-end">
                      <button type="submit" class="btn btn-primary" name="kaydet" id="kaydet">Kaydet</button>
                  </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
  <div class="row">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title mb-0">Proje Poz Detay Verileri Girişi
                  </h4>
              </div>
              <div class="card-body">
                  <h4 class="card-title">Proje Poz Bilgileri</h4>
                  <form action="#">

                      <div class="text-end">
                          <button type="submit" class="btn btn-primary">Poz Ekle</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
  <script>
    $(".select").select2();
  </script>