  <!-- Page Header -->
  <div class="page-header">
      <div class="row">
          <div class="col">
              <h3 class="page-title">Yeni Proje Oluştur</h3>
              <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a href="admin-dashboard.php">Projeler</a></li>
                  <li class="breadcrumb-item active">Yeni Proje</li>
              </ul>
          </div>
      </div>
  </div>
  <!-- /Page Header -->

  <div class="row">
      <div class="col-xl-6 d-flex">
          <div class="card flex-fill">
              <div class="card-header">
                  <h4 clajess="card-title mb-0">Proje Genel Bilgileri</h4>
              </div>
              <div class="card-body">
                  <form action="#">
                      <div class="input-block mb-3 row">
                          <label class="col-lg-3 col-form-label">Proje Kodu <span style="color:red">(*)</span></label>
                          <div class="col-lg-9">
                              <input type="text" class="form-control" required name="projekodu" id="projekodu">
                          </div>
                      </div>
                      <div class="input-block mb-3 row">
                          <label class="col-lg-3 col-form-label">Proje Adı <span style="color:red">(*)</span></label>
                          <div class="col-lg-9">
                              <input type="text" class="form-control" required name="projeadi" id="projeadi">
                          </div>
                      </div>
                      <div class="input-block mb-3 row">
                          <label class="col-lg-3 col-form-label">Proje Kategorisi <span style="color:red">(*)</span></label>
                          <div class="col-lg-9">
                              <select class="select" required name="kategori" id="kategori">
                                  <option>TANIMALAMALARDAN GELECEK</option>
                              </select>
                          </div>
                      </div>
                      <div class="input-block mb-3 row">
                          <label class="col-lg-3 col-form-label">Proje Geliş Tarihi <span style="color:red">(*)</span></span></label>
                          <div class="col-lg-9">
                              <input class="form-control datetimepicker" type="text" required name="gelistarihi" id="gelistarihi">
                          </div>
                      </div>
                      <div class="input-block mb-3 row">
                          <label class="col-lg-3 col-form-label">Proje Termin Süresi <span style="color:red">(*)</span></label>
                          <div class="col-lg-9">
                              <input class="form-control datetimepicker" type="text" required name="termintarihi" id="termintarihi">
                          </div>
                      </div>
                      <div class="input-block mb-3 row">
                          <label class="col-lg-3 col-form-label">Proje İleten Bilgisi <span style="color:red">(*)</span></label>
                          <div class="col-lg-9">
                              <select class="select" required name="ileten" id="ileten">
                                  <option>TANIMALAMALARDAN GELECEK</option>
                              </select>
                          </div>
                      </div>
                      <div class="input-block mb-3 row">
                          <label class="col-lg-3 col-form-label">Proje Durumu<span style="color:red">(*)</span></label>
                          <div class="col-lg-9">
                              <select class="select" required name="projedurumu" id="projedurumu">
                                  <option>TANIMALAMALARDAN GELECEK</option>
                              </select>
                          </div>
                      </div>

              </div>
          </div>
      </div>
      <div class="col-xl-6 d-flex">
          <div class="card flex-fill">
              <div class="card-header">
                  <h4 class="card-title mb-0">Proje Teknik Bilgileri</h4>
              </div>
              <div class="card-body">

                  <div class="input-block mb-3 row">
                      <label class="col-lg-3 col-form-label">Ral Kodu <span style="color:red">(*)</span></label>
                      <div class="col-lg-9">
                          <select class="select" required name="ralkodu" id="ralkodu">
                              <option>TANIMALAMALARDAN GELECEK</option>
                          </select>
                      </div>
                  </div>
                  <div class="input-block mb-3 row">
                      <label class="col-lg-3 col-form-label">Teknik Resim Sorumlusu <span style="color:red">(*)</span></label>
                      <div class="col-lg-9">
                          <select class="select" required name="tekresim_sorumlusu" id="tekresim_sorumlusu">
                              <option>TANIMALAMALARDAN GELECEK</option>
                          </select>
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