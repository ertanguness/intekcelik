<!-- Page Header -->
<div class="page-header">
    <div class="row align-items-center">
        <div class="col-md-4">
            <h3 class="page-title">Proje Detayı</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" onclick="Route(event)" data-page="admin-dashboard">Ana Sayfa</a></li>
                <li class="breadcrumb-item active"><a href="#" onclick="Route(event)" data-page="projects/list">Proje Listesi</a></li>
                <li class="breadcrumb-item active">Proje Detay </li>
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
<!-- /Page Header -->
<!-- Search Filter -->
<div class="filter-filelds" id="filter_inputs">
    <div class="row filter-row custom-filter-row">
        <div class="custom-col">
            <div class="input-block mb-3 form-focus">
                <input type="text" class="form-control floating">
                <label class="focus-label">Pipeline Name</label>
            </div>
        </div>

        <div class="custom-col">
            <div class="input-block mb-3 form-focus">
                <input type="email" class="form-control floating">
                <label class="focus-label">Deal Value</label>
            </div>
        </div>
        <div class="custom-col">
            <div class="input-block mb-3 form-focus">
                <div class="cal-icon">
                    <input class="form-control floating datetimepicker" type="text">
                </div>
                <label class="focus-label">Created Date</label>
            </div>
        </div>

        <div class="custom-col">
            <div class="input-block mb-3 form-focus select-focus">
                <select class="select floating">
                    <option>--Select--</option>
                    <option>Win</option>
                    <option>In Pipeline</option>
                    <option>Conversation</option>
                    <option>Folllow Up</option>
                    <option>Lost</option>
                </select>
                <label class="focus-label">Stages</label>
            </div>
        </div>
        <div class="custom-col">
            <div class="input-block mb-3 form-focus">
                <div class="cal-icon">
                    <input class="form-control floating datetimepicker" type="text">
                </div>
                <label class="focus-label">Created Date</label>
            </div>
        </div>
    </div>
</div>
<hr>
<!-- /Search Filter -->
<dex class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-tabs mb-3 tab-style-6" id="myTab-3" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="products-tab" data-bs-toggle="tab" data-bs-target="#products-tab-pane" type="button" role="tab" aria-controls="products-tab-pane" aria-selected="true"><i class="feather-gift me-1 align-middle d-inline-block"></i>Pozlar</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="sales-tab" data-bs-toggle="tab" data-bs-target="#sales-tab-pane" type="button" role="tab" aria-controls="sales-tab-pane" aria-selected="false"><i class="feather-file me-1 align-middle d-inline-block"></i>İç Kontrol</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profit-tab" data-bs-toggle="tab" data-bs-target="#profit-tab-pane" type="button" role="tab" aria-controls="profit-tab-pane" aria-selected="false"><i class="feather-file-text me-1 align-middle d-inline-block"></i>Polin Kontrol</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="expenses-tab" data-bs-toggle="tab" data-bs-target="#expenses-tab-pane" type="button" role="tab" aria-controls="expenses-tab-pane" aria-selected="false"><i class="feather-file-minus me-1 align-middle d-inline-block"></i>Uygunsuzluk Bildirimleri</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="expenses-tab" data-bs-toggle="tab" data-bs-target="#expenses-tab-pane" type="button" role="tab" aria-controls="expenses-tab-pane" aria-selected="false"><i class="feather-file-minus me-1 align-middle d-inline-block"></i>Sevkiyat Bilgileri</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="expenses-tab" data-bs-toggle="tab" data-bs-target="#expenses-tab-pane" type="button" role="tab" aria-controls="expenses-tab-pane" aria-selected="false"><i class="feather-file-minus me-1 align-middle d-inline-block"></i>Dökümanlar</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="expenses-tab" data-bs-toggle="tab" data-bs-target="#expenses-tab-pane" type="button" role="tab" aria-controls="expenses-tab-pane" aria-selected="false"><i class="feather-file-minus me-1 align-middle d-inline-block"></i>Kalite Dosyası</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="expenses-tab" data-bs-toggle="tab" data-bs-target="#expenses-tab-pane" type="button" role="tab" aria-controls="expenses-tab-pane" aria-selected="false"><i class="feather-file-minus me-1 align-middle d-inline-block"></i>Proje Notları</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="expenses-tab" data-bs-toggle="tab" data-bs-target="#expenses-tab-pane" type="button" role="tab" aria-controls="expenses-tab-pane" aria-selected="false"><i class="feather-file-minus me-1 align-middle d-inline-block"></i>Satın Alma Bilgileri</button>
                    </li>
                </ul>
                <div class="tab-content pt-0" id="myTabContent2">
                    <div class="tab-pane fade show active p-0 border-bottom-0" id="products-tab-pane" role="tabpanel" aria-labelledby="products-tab" tabindex="0">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">Poz No</th>
                                        <th scope="col">Adet</th>
                                        <th scope="col">...</th>
                                        <th scope="col">...</th>
                                        <th scope="col">...</th>
                                        <th scope="col">...</th>
                                        <th scope="col">...</th>
                                        <th scope="col">...</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            <span class="avatar avatar-sm">
                                                <img src="assets/img/img-02.jpg" alt="img">
                                            </span>
                                        </th>
                                        <td>Monitor</td>
                                        <td>Gadgets</td>
                                        <td>$1,299.00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <span class="avatar avatar-sm">
                                                <img src="assets/img/img3.jpg" alt="img">
                                            </span>
                                        </th>
                                        <td>Keyboard</td>
                                        <td>Gadgets</td>
                                        <td>$7,249.29</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <span class="avatar avatar-sm">
                                                <img src="assets/img/media/media-6.jpg" alt="img">
                                            </span>
                                        </th>
                                        <td>Shoes</td>
                                        <td>Footwear</td>
                                        <td>$799.00</td>
                                    </tr>
                                </tbody>

                            </table>
                            <div class="row">
                                <ul class="nav nav-tabs tab-style-2 nav-justified mb-3 d-sm-flex d-block" id="myTab1" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="order-tab" data-bs-toggle="tab" data-bs-target="#order-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true"><i class="fa-solid fa-gift me-1 align-middle"></i>Yeni Poz Ekle</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="confirmed-tab" data-bs-toggle="tab" data-bs-target="#confirm-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false"><i class="fa-solid fa-check me-1 align-middle"></i>Excelden Veri Aktar</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="shipped-tab" data-bs-toggle="tab" data-bs-target="#shipped-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false"><i class="fa-solid fa-bag-shopping me-1 align-middle"></i>Revizyon Ekle</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="delivered-tab" data-bs-toggle="tab" data-bs-target="#delivered-tab-pane" type="button" role="tab" aria-selected="false"><i class="fa-solid fa-truck me-1 align-middle"></i>Uygunsuzluk Bildirimi</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="delivered-tab" data-bs-toggle="tab" data-bs-target="#delivered-tab-pane" type="button" role="tab" aria-selected="false"><i class="fa-solid fa-truck me-1 align-middle"></i>Yetkili Atamaları</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="sales-tab-pane" role="tabpanel" aria-labelledby="sales-tab" tabindex="0">
                        <ul class="list-unstyled mb-1">
                            <li class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        Clothing
                                    </div>
                                    <div class="fs-14 fw-semibold">32,138</div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        Furniture
                                    </div>
                                    <div class="fs-14 fw-semibold">12,123</div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        electronics
                                    </div>
                                    <div class="fs-14 fw-semibold">9,238</div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        food Products
                                    </div>
                                    <div class="fs-14 fw-semibold">14,234</div>
                                </div>
                            </li>
                            <li class="mb-0">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        Home Appliances
                                    </div>
                                    <div class="fs-14 fw-semibold">10,249</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="profit-tab-pane" role="tabpanel" aria-labelledby="profit-tab" tabindex="0">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        Clothing
                                    </div>
                                    <div class="fs-14 fw-semibold text-success"><i class="ri-arrow-up-s-fill me-1 align-middle"></i>22.75%
                                    </div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        electronics
                                    </div>
                                    <div class="fs-14 fw-semibold text-success"><i class="ri-arrow-up-s-fill me-1 align-middle"></i>42.24%
                                    </div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        Furniture
                                    </div>
                                    <div class="fs-14 fw-semibold text-success"><i class="ri-arrow-up-s-fill me-1 align-middle"></i>15.23%
                                    </div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        Home Appliances
                                    </div>
                                    <div class="fs-14 fw-semibold text-success"><i class="ri-arrow-up-s-fill me-1 align-middle"></i>15.14%
                                    </div>
                                </div>
                            </li>
                            <li class="mb-0">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        food Products
                                    </div>
                                    <div class="fs-14 fw-semibold text-success"><i class="ri-arrow-up-s-fill me-1 align-middle"></i>31.64%
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="expenses-tab-pane" role="tabpanel" aria-labelledby="expenses-tab" tabindex="0">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        Clothing
                                    </div>
                                    <div class="fs-14 fw-semibold text-danger">-$31,134</div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        electronics
                                    </div>
                                    <div class="fs-14 fw-semibold text-danger">-$15,256</div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        Furniture
                                    </div>
                                    <div class="fs-14 fw-semibold text-danger">-$24,156</div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        Home Appliances
                                    </div>
                                    <div class="fs-14 fw-semibold text-danger">-$18,245</div>
                                </div>
                            </li>
                            <li class="mb-0">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        food Products
                                    </div>
                                    <div class="fs-14 fw-semibold text-danger">-$18,478</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    <!-- / Tab Style-6 -->

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