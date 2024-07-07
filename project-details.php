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
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-tabs mb-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" role="tab" href="#hometab-dropdown" aria-selected="true">Pozlar</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);" role="button" aria-expanded="false">Kalite Kontrol</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" data-bs-toggle="tab" role="tab" href="#homeabout-dropdown" aria-selected="false">İç Kontrol</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0);">Polin Kontrol</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0);">Kalite Dosyası</a></li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" role="tab" href="#hometab-dropdown" aria-selected="true">Uygunsuz Bildirimleri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" role="tab" href="#homeproducts-dropdown" aria-selected="false">Sevkiyat Bilgileri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Dökümanlar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Proje Notları </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Satın Alma Bilgileri</a>
                    </li>
                </ul>
                <div class="tab-content pt-0">
                    <div class="tab-pane show active text-muted" id="hometab-dropdown" role="tabpanel">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-striped custom-table datatable contact-table">
                                    <thead>
                                        <tr>
                                            <th class="no-sort"></th>
                                            <th>Lead Name</th>
                                            <th>Company Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Lead Status</th>
                                            <th>Created Date</th>
                                            <th>Lead Owner</th>
                                            <th class="no-sort text-end">Action</th>
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
                                                <h2>
                                                    <a href="#" class="profile-split">Collins</a>
                                                </h2>
                                            </td>
                                            <td>
                                                <h2 class="table-avatar d-flex align-items-center">
                                                    <a href="profile.html" class="company-img"><img src="assets/img/icons/company-icon-01.svg" alt="User Image"></a>
                                                    <a href="profile.html" class="profile-split">NovaWaveLLC</a>
                                                </h2>
                                            </td>
                                            <td>+1 875455453</td>
                                            <td>Robertson@example.com</td>
                                            <td><span class="badge badge-soft-success">Closed</span></td>
                                            <td>10 Feb 2024, 09:00 am</td>
                                            <td>Hendry</td>
                                            <td class="text-end">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_leads"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_leads"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                                        <a class="dropdown-item" href="leads-details.html"><i class="fa-regular fa-eye"></i> Preview</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="set-star star-select">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </td>
                                            <td>
                                                <h2>
                                                    <a href="#" class="profile-split">Konopelski</a>
                                                </h2>
                                            </td>
                                            <td>
                                                <h2 class="table-avatar d-flex align-items-center">
                                                    <a href="profile.html" class="company-img"><img src="assets/img/icons/company-icon-02.svg" alt="User Image"></a>
                                                    <a href="profile.html" class="profile-split">BlueSky Industries</a>
                                                </h2>
                                            </td>
                                            <td>+1 989757485</td>
                                            <td>sharon@example.com</td>
                                            <td><span class="badge badge-soft-success">Closed</span></td>
                                            <td>24 Feb 2024, 12:20 pm</td>
                                            <td>Guillory</td>
                                            <td class="text-end">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_leads"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_leads"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                                        <a class="dropdown-item" href="leads-details.html"><i class="fa-regular fa-eye"></i> Preview</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="set-star star-select">
                                                    <i class="fa fa-star filled"></i>
                                                </div>
                                            </td>
                                            <td>
                                                <h2>
                                                    <a href="#" class="profile-split">Adams</a>
                                                </h2>
                                            </td>
                                            <td>
                                                <h2 class="table-avatar d-flex align-items-center">
                                                    <a href="profile.html" class="company-img"><img src="assets/img/icons/company-icon-03.svg" alt="User Image"></a>
                                                    <a href="profile.html" class="profile-split">SilverHawk</a>
                                                </h2>
                                            </td>
                                            <td>+1 546555455</td>
                                            <td>Vaughan12@example.com</td>
                                            <td><span class="badge badge-soft-info">Not Contacted</span></td>
                                            <td>5 Mar 2024, 10:00 am</td>
                                            <td>Jami</td>
                                            <td class="text-end">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_leads"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_leads"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                                        <a class="dropdown-item" href="leads-details.html"><i class="fa-regular fa-eye"></i> Preview</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="set-star star-select">
                                                    <i class="fa fa-star filled"></i>
                                                </div>
                                            </td>
                                            <td>
                                                <h2>
                                                    <a href="#" class="profile-split">Schumm</a>
                                                </h2>
                                            </td>
                                            <td>
                                                <h2 class="table-avatar d-flex align-items-center">
                                                    <a href="profile.html" class="company-img"><img src="assets/img/icons/company-icon-04.svg" alt="User Image"></a>
                                                    <a href="profile.html" class="profile-split">SummitPeak</a>
                                                </h2>
                                            </td>
                                            <td>+1 454478787</td>
                                            <td>Jessica13@example.com</td>
                                            <td><span class="badge badge-soft-warning">Contacted</span></td>
                                            <td>17 Mar 2024, 02:00 pm</td>
                                            <td>Theresa</td>
                                            <td class="text-end">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_leads"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_leads"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                                        <a class="dropdown-item" href="leads-details.html"><i class="fa-regular fa-eye"></i> Preview</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="set-star star-select">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </td>
                                            <td>
                                                <h2>
                                                    <a href="#" class="profile-split">Wisozk</a>
                                                </h2>
                                            </td>
                                            <td>
                                                <h2 class="table-avatar d-flex align-items-center">
                                                    <a href="profile.html" class="company-img"><img src="assets/img/icons/company-icon-05.svg" alt="User Image"></a>
                                                    <a href="profile.html" class="profile-split">RiverStone Ventur</a>
                                                </h2>
                                            </td>
                                            <td>+1 124547845</td>
                                            <td>CarolTho3@example.com</td>
                                            <td><span class="badge badge-soft-success">Closed</span></td>
                                            <td>8 Apr 2024, 11:00 am</td>
                                            <td>Espinosa</td>
                                            <td class="text-end">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_leads"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_leads"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                                        <a class="dropdown-item" href="leads-details.html"><i class="fa-regular fa-eye"></i> Preview</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="set-star star-select">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </td>
                                            <td>
                                                <h2>
                                                    <a href="#" class="profile-split">Heller</a>
                                                </h2>
                                            </td>
                                            <td>
                                                <h2 class="table-avatar d-flex align-items-center">
                                                    <a href="profile.html" class="company-img"><img src="assets/img/icons/company-icon-06.svg" alt="User Image"></a>
                                                    <a href="profile.html" class="profile-split">Bright Bridge Grp</a>
                                                </h2>
                                            </td>
                                            <td>+1 478845447</td>
                                            <td>Dawnmercha@example.com</td>
                                            <td><span class="badge badge-soft-success">Closed</span></td>
                                            <td>20 Apr 2024, 03:15 pm</td>
                                            <td>Martin</td>
                                            <td class="text-end">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_leads"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_leads"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                                        <a class="dropdown-item" href="leads-details.html"><i class="fa-regular fa-eye"></i> Preview</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="set-star star-select">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </td>
                                            <td>
                                                <h2>
                                                    <a href="#" class="profile-split">Gutkowski</a>
                                                </h2>
                                            </td>
                                            <td>
                                                <h2 class="table-avatar d-flex align-items-center">
                                                    <a href="profile.html" class="company-img"><img src="assets/img/icons/company-icon-07.svg" alt="User Image"></a>
                                                    <a href="profile.html" class="profile-split">CoastalStar Co.</a>
                                                </h2>
                                            </td>
                                            <td>+1 215544845</td>
                                            <td>Rachel@example.com</td>
                                            <td><span class="badge badge-soft-success">Closed</span></td>
                                            <td>12 May 2024, 08:30 am</td>
                                            <td>Newell</td>
                                            <td class="text-end">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_leads"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_leads"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                                        <a class="dropdown-item" href="leads-details.html"><i class="fa-regular fa-eye"></i> Preview</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="set-star star-select">
                                                    <i class="fa fa-star filled"></i>
                                                </div>
                                            </td>
                                            <td>
                                                <h2>
                                                    <a href="#" class="profile-split">Walter</a>
                                                </h2>
                                            </td>
                                            <td>
                                                <h2 class="table-avatar d-flex align-items-center">
                                                    <a href="profile.html" class="company-img"><img src="assets/img/icons/company-icon-08.svg" alt="User Image"></a>
                                                    <a href="profile.html" class="profile-split">HarborView</a>
                                                </h2>
                                            </td>
                                            <td>+1 121145471</td>
                                            <td>Jonelle@example.com</td>
                                            <td><span class="badge badge-soft-success">Closed</span></td>
                                            <td>26 May 2024, 04:10 pm</td>
                                            <td>Janet</td>
                                            <td class="text-end">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_leads"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_leads"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                                        <a class="dropdown-item" href="leads-details.html"><i class="fa-regular fa-eye"></i> Preview</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="set-star star-select">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </td>
                                            <td>
                                                <h2>
                                                    <a href="#" class="profile-split">Hansen</a>
                                                </h2>
                                            </td>
                                            <td>
                                                <h2 class="table-avatar d-flex align-items-center">
                                                    <a href="profile.html" class="company-img"><img src="assets/img/icons/company-icon-09.svg" alt="User Image"></a>
                                                    <a href="profile.html" class="profile-split">Golden Gate Ltd</a>
                                                </h2>
                                            </td>
                                            <td>+1 321454789</td>
                                            <td>Jonathan@example.com</td>
                                            <td><span class="badge badge-soft-success">Closed</span></td>
                                            <td>13 June 2024, 10:30 am</td>
                                            <td>Craig</td>
                                            <td class="text-end">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_leads"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_leads"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                                        <a class="dropdown-item" href="leads-details.html"><i class="fa-regular fa-eye"></i> Preview</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="set-star star-select">
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </td>
                                            <td>
                                                <h2>
                                                    <a href="#" class="profile-split">Leuschke</a>
                                                </h2>
                                            </td>
                                            <td>
                                                <h2 class="table-avatar d-flex align-items-center">
                                                    <a href="profile.html" class="company-img"><img src="assets/img/icons/company-icon-10.svg" alt="User Image"></a>
                                                    <a href="profile.html" class="profile-split">Redwood Inc</a>
                                                </h2>
                                            </td>
                                            <td>+1 278907145</td>
                                            <td>brook@example.com</td>
                                            <td><span class="badge badge-soft-danger">Lost</span></td>
                                            <td>28 June 2024, 05:40 pm</td>
                                            <td>Daniel</td>
                                            <td class="text-end">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_leads"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_leads"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                                        <a class="dropdown-item" href="leads-details.html"><i class="fa-regular fa-eye"></i> Preview</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane text-muted" id="homeabout-dropdown" role="tabpanel">
                        How hotel deals can help you live a better life. <b>How celebrity cruises</b> aren't as bad as you think. How cultural solutions can help you predict the future. How to cheat at dog friendly hotels and get away with it.
                    </div>
                    <div class="tab-pane text-muted" id="homeproducts-dropdown" role="tabpanel">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's <b>standard dummy text ever since the 1500s</b>, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- / Tab Style-6 -->