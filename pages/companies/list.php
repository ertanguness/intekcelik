<!-- Page Header -->
<div class="page-header">
    <div class="row align-items-center">
        <div class="col-md-4">
            <h3 class="page-title">Companies</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Companies</li>
            </ul>
        </div>
        <div class="col-md-8 float-end ms-auto">
            <div class="d-flex title-head">
                <div class="view-icons">
                    <a href="#" class="grid-view btn btn-link"><i class="las la-redo-alt"></i></a>
                    <a href="#" class="list-view btn btn-link" id="collapse-header"><i class="las la-expand-arrows-alt"></i></a>
                    <a href="javascript:void(0);" class="list-view btn btn-link" id="filter_search"><i class="las la-filter"></i></a>
                </div>
                <div class="form-sort">
                    <a href="javascript:void(0);" class="list-view btn btn-link" data-bs-toggle="modal" data-bs-target="#export"><i class="las la-file-export"></i>Export</a>
                </div>
                <a href="#" class="btn add-btn" data-bs-toggle="modal" data-bs-target="#add_company"><i class="la la-plus-circle"></i> Add Company</a>
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
                <label class="focus-label">Company Name</label>
            </div>
        </div>
        <div class="col-xl-2">
            <div class="input-block mb-3 form-focus">
                <input type="text" class="form-control floating">
                <label class="focus-label">Email</label>
            </div>
        </div>
        <div class="col-xl-2">
            <div class="input-block mb-3 form-focus">
                <input type="text" class="form-control floating">
                <label class="focus-label">Phone Number</label>
            </div>
        </div>
        <div class="col-xl-2">
            <div class="input-block mb-3 form-focus focused">
                <input type="text" class="form-control date-range bookingrange">
                <label class="focus-label">From - To Date</label>
            </div>
        </div>
        <div class="col-xl-2">
            <div class="input-block mb-3 form-focus select-focus">
                <select class="select floating">
                    <option>--Select--</option>
                    <option>Germany</option>
                    <option>USA</option>
                    <option>Canada</option>
                    <option>India</option>
                    <option>China</option>
                </select>
                <label class="focus-label">Location</label>
            </div>
        </div>
        <div class="col-xl-2">
            <a href="#" class="btn btn-success w-100"> Search </a>
        </div>
    </div>
</div>
<hr>
<!-- /Search Filter -->
<div class="filter-section">
    <ul>
        <li>
            <div class="view-icons">
                <a href="companies.html" class="list-view btn btn-link active"><i class="las la-list"></i></a>
                <a href="companies-grid.html" class="grid-view btn btn-link"><i class="las la-th"></i></a>
            </div>
        </li>
        <li>
            <div class="form-sort">
                <i class="las la-sort-alpha-up-alt"></i>
                <select class="select">
                    <option>Sort By Alphabet</option>
                    <option>Ascending</option>
                    <option>Descending</option>
                    <option>Recently Viewed</option>
                    <option>Recently Added</option>
                </select>
            </div>
        </li>
        <li>
            <div class="form-sorts dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle" id="table-filter"><i class="las la-filter me-2"></i>Filter</a>
                <div class="filter-dropdown-menu">
                    <div class="filter-set-view">
                        <div class="filter-set-head">
                            <h4>Filter</h4>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="filter-set-content">
                                <div class="filter-set-content-head">
                                    <a href="#" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Rating<i class="las la-angle-right"></i></a>
                                </div>
                                <div class="filter-set-contents accordion-collapse collapse show" id="collapseOne" data-bs-parent="#accordionExample">
                                    <ul>
                                        <li>
                                            <div class="filter-checks">
                                                <label class="checkboxs">
                                                    <input type="checkbox" checked>
                                                    <span class="checkmarks"></span>
                                                </label>
                                            </div>
                                            <div class="rating">
                                                <i class="fa fa-star filled"></i>
                                                <i class="fa fa-star filled"></i>
                                                <i class="fa fa-star filled"></i>
                                                <i class="fa fa-star filled"></i>
                                                <i class="fa fa-star filled"></i>
                                                <span>5.0</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="filter-checks">
                                                <label class="checkboxs">
                                                    <input type="checkbox">
                                                    <span class="checkmarks"></span>
                                                </label>
                                            </div>
                                            <div class="rating">
                                                <i class="fa fa-star filled"></i>
                                                <i class="fa fa-star filled"></i>
                                                <i class="fa fa-star filled"></i>
                                                <i class="fa fa-star filled"></i>
                                                <i class="fa fa-star"></i>
                                                <span>4.0</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="filter-checks">
                                                <label class="checkboxs">
                                                    <input type="checkbox">
                                                    <span class="checkmarks"></span>
                                                </label>
                                            </div>
                                            <div class="rating">
                                                <i class="fa fa-star filled"></i>
                                                <i class="fa fa-star filled"></i>
                                                <i class="fa fa-star filled"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <span>3.0</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="filter-checks">
                                                <label class="checkboxs">
                                                    <input type="checkbox">
                                                    <span class="checkmarks"></span>
                                                </label>
                                            </div>
                                            <div class="rating">
                                                <i class="fa fa-star filled"></i>
                                                <i class="fa fa-star filled"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <span>2.0</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="filter-checks">
                                                <label class="checkboxs">
                                                    <input type="checkbox">
                                                    <span class="checkmarks"></span>
                                                </label>
                                            </div>
                                            <div class="rating">
                                                <i class="fa fa-star filled"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <span>1.0</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="filter-set-content">
                                <div class="filter-set-content-head">
                                    <a href="#" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Owner<i class="las la-angle-right"></i></a>
                                </div>
                                <div class="filter-set-contents accordion-collapse collapse" id="collapseTwo" data-bs-parent="#accordionExample">
                                    <ul>
                                        <li>
                                            <div class="filter-checks">
                                                <label class="checkboxs">
                                                    <input type="checkbox" checked>
                                                    <span class="checkmarks"></span>
                                                </label>
                                            </div>
                                            <div class="collapse-inside-text">
                                                <h5>Hendry</h5>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="filter-checks">
                                                <label class="checkboxs">
                                                    <input type="checkbox">
                                                    <span class="checkmarks"></span>
                                                </label>
                                            </div>
                                            <div class="collapse-inside-text">
                                                <h5>Guillory</h5>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="filter-checks">
                                                <label class="checkboxs">
                                                    <input type="checkbox">
                                                    <span class="checkmarks"></span>
                                                </label>
                                            </div>
                                            <div class="collapse-inside-text">
                                                <h5>Jami</h5>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="filter-checks">
                                                <label class="checkboxs">
                                                    <input type="checkbox">
                                                    <span class="checkmarks"></span>
                                                </label>
                                            </div>
                                            <div class="collapse-inside-text">
                                                <h5>Theresa</h5>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="filter-checks">
                                                <label class="checkboxs">
                                                    <input type="checkbox">
                                                    <span class="checkmarks"></span>
                                                </label>
                                            </div>
                                            <div class="collapse-inside-text">
                                                <h5>Espinosa</h5>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="filter-set-content">
                                <div class="filter-set-content-head">
                                    <a href="#" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Tags<i class="las la-angle-right"></i></a>
                                </div>
                                <div class="filter-set-contents accordion-collapse collapse" id="collapseThree" data-bs-parent="#accordionExample">
                                    <ul>
                                        <li>
                                            <div class="filter-checks">
                                                <label class="checkboxs">
                                                    <input type="checkbox" checked>
                                                    <span class="checkmarks"></span>
                                                </label>
                                            </div>
                                            <div class="collapse-inside-text">
                                                <h5>Promotion</h5>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="filter-checks">
                                                <label class="checkboxs">
                                                    <input type="checkbox">
                                                    <span class="checkmarks"></span>
                                                </label>
                                            </div>
                                            <div class="collapse-inside-text">
                                                <h5>Rated</h5>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="filter-checks">
                                                <label class="checkboxs">
                                                    <input type="checkbox">
                                                    <span class="checkmarks"></span>
                                                </label>
                                            </div>
                                            <div class="collapse-inside-text">
                                                <h5>Rejected</h5>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="filter-checks">
                                                <label class="checkboxs">
                                                    <input type="checkbox">
                                                    <span class="checkmarks"></span>
                                                </label>
                                            </div>
                                            <div class="collapse-inside-text">
                                                <h5>Collab</h5>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="filter-checks">
                                                <label class="checkboxs">
                                                    <input type="checkbox">
                                                    <span class="checkmarks"></span>
                                                </label>
                                            </div>
                                            <div class="collapse-inside-text">
                                                <h5>Calls</h5>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="filter-reset-btns">
                            <a href="#" class="btn btn-light">Reset</a>
                            <a href="#" class="btn btn-primary">Filter</a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="search-set">
                <div class="search-input">
                    <a href="#" class="btn btn-searchset"><i class="las la-search"></i></a>
                    <div class="dataTables_filter">
                        <label> <input type="search" class="form-control form-control-sm" placeholder="Search"></label>
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
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Tags</th>
                        <th>Location</th>
                        <th>Rating</th>
                        <th>Owner</th>
                        <th>Contact </th>
                        <th>Status</th>
                        <th class="text-end">Action</th>
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
                                <a href="profile.html" class="company-img"><img src="/assets/img/icons/company-icon-01.svg" alt="User Image"></a>
                                <a href="profile.html" class="profile-split">NovaWaveLLC</a>
                            </h2>
                        </td>
                        <td>+1 875455453</td>
                        <td>Robertson@example.com</td>
                        <td><span class="badge badge-soft-info">Promotion</span></td>
                        <td>Germany</td>
                        <td>
                            <div class="set-star">
                                <i class="fa fa-star filled me-2"></i>4.2
                            </div>
                        </td>
                        <td>Hendry</td>
                        <td>
                            <ul class="social-links d-flex align-items-center">
                                <li>
                                    <a href="#"><i class="la la-envelope"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-phone-volume"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="lab la-facebook-messenger"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-skype"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-facebook "></i></a>
                                </li>
                            </ul>
                        </td>
                        <td>
                            <div class="dropdown action-label">
                                <a href="#" class="btn btn-white btn-sm badge-outline-success "> Active </a>
                            </div>
                        </td>
                        <td class="text-end">
                            <div class="dropdown dropdown-action">
                                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_company"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_company"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                    <a class="dropdown-item" href="company-details.html"><i class="fa-regular fa-eye"></i> Preview</a>
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
                            <h2 class="table-avatar d-flex align-items-center">
                                <a href="profile.html" class="company-img"><img src="/assets/img/icons/company-icon-02.svg" alt="User Image"></a>
                                <a href="profile.html" class="profile-split">BlueSky Industries</a>
                            </h2>
                        </td>
                        <td>+1 989757485</td>
                        <td>sharon@example.com</td>
                        <td><span class="badge badge-soft-warning">Rated</span></td>
                        <td>USA</td>
                        <td>
                            <div class="set-star">
                                <i class="fa fa-star filled me-2"></i>5.0
                            </div>
                        </td>
                        <td>Guillory</td>
                        <td>
                            <ul class="social-links d-flex align-items-center">
                                <li>
                                    <a href="#"><i class="la la-envelope"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-phone-volume"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="lab la-facebook-messenger"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-skype"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-facebook "></i></a>
                                </li>
                            </ul>
                        </td>
                        <td>
                            <div class="dropdown action-label">
                                <a href="#" class="btn btn-white btn-sm badge-outline-success "> Active </a>
                            </div>
                        </td>
                        <td class="text-end">
                            <div class="dropdown dropdown-action">
                                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_company"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_company"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                    <a class="dropdown-item" href="company-details.html"><i class="fa-regular fa-eye"></i> Preview</a>
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
                            <h2 class="table-avatar d-flex align-items-center">
                                <a href="profile.html" class="company-img"><img src="/assets/img/icons/company-icon-03.svg" alt="User Image"></a>
                                <a href="profile.html" class="profile-split">SilverHawk</a>
                            </h2>
                        </td>
                        <td>+1 546555455</td>
                        <td>Vaughan12@example.com </td>
                        <td><span class="badge badge-soft-info">Promotion</span></td>
                        <td>Canada</td>
                        <td>
                            <div class="set-star">
                                <i class="fa fa-star filled me-2"></i>3.5
                            </div>
                        </td>
                        <td>Jami</td>
                        <td>
                            <ul class="social-links d-flex align-items-center">
                                <li>
                                    <a href="#"><i class="la la-envelope"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-phone-volume"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="lab la-facebook-messenger"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-skype"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-facebook "></i></a>
                                </li>
                            </ul>
                        </td>
                        <td>
                            <div class="dropdown action-label">
                                <a href="#" class="btn btn-white btn-sm badge-outline-danger "> Inactive </a>
                            </div>
                        </td>
                        <td class="text-end">
                            <div class="dropdown dropdown-action">
                                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_company"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_company"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                    <a class="dropdown-item" href="company-details.html"><i class="fa-regular fa-eye"></i> Preview</a>
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
                            <h2 class="table-avatar d-flex align-items-center">
                                <a href="profile.html" class="company-img"><img src="/assets/img/icons/company-icon-04.svg" alt="User Image"></a>
                                <a href="profile.html" class="profile-split">SummitPeak</a>
                            </h2>
                        </td>
                        <td>+1 454478787</td>
                        <td>Jessica13@example.com</td>
                        <td><span class="badge badge-soft-warning">Rated</span></td>
                        <td>India</td>
                        <td>
                            <div class="set-star">
                                <i class="fa fa-star filled me-2"></i>4.5
                            </div>
                        </td>
                        <td>Theresa</td>
                        <td>
                            <ul class="social-links d-flex align-items-center">
                                <li>
                                    <a href="#"><i class="la la-envelope"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-phone-volume"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="lab la-facebook-messenger"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-skype"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-facebook "></i></a>
                                </li>
                            </ul>
                        </td>
                        <td>
                            <div class="dropdown action-label">
                                <a href="#" class="btn btn-white btn-sm badge-outline-success ">Active </a>
                            </div>
                        </td>
                        <td class="text-end">
                            <div class="dropdown dropdown-action">
                                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_company"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_company"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                    <a class="dropdown-item" href="company-details.html"><i class="fa-regular fa-eye"></i> Preview</a>
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
                            <h2 class="table-avatar d-flex align-items-center">
                                <a href="profile.html" class="company-img"><img src="/assets/img/icons/company-icon-05.svg" alt="User Image"></a>
                                <a href="profile.html" class="profile-split">RiverStone Ventur</a>
                            </h2>
                        </td>
                        <td>+1 124547845</td>
                        <td>CarolTho3@example.com</td>
                        <td><span class="badge badge-soft-danger">Rejected</span></td>
                        <td>China</td>
                        <td>
                            <div class="set-star">
                                <i class="fa fa-star filled me-2"></i>4.7
                            </div>
                        </td>
                        <td>Espinosa</td>
                        <td>
                            <ul class="social-links d-flex align-items-center">
                                <li>
                                    <a href="#"><i class="la la-envelope"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-phone-volume"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="lab la-facebook-messenger"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-skype"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-facebook "></i></a>
                                </li>
                            </ul>
                        </td>
                        <td>
                            <div class="dropdown action-label">
                                <a href="#" class="btn btn-white btn-sm badge-outline-success "> Active </a>
                            </div>
                        </td>
                        <td class="text-end">
                            <div class="dropdown dropdown-action">
                                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_company"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_company"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                    <a class="dropdown-item" href="company-details.html"><i class="fa-regular fa-eye"></i> Preview</a>
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
                            <h2 class="table-avatar d-flex align-items-center">
                                <a href="profile.html" class="company-img"><img src="/assets/img/icons/company-icon-06.svg" alt="User Image"></a>
                                <a href="profile.html" class="profile-split">Bright Bridge Grp</a>
                            </h2>
                        </td>
                        <td>+1 478845447</td>
                        <td>Dawnmercha@example.com</td>
                        <td><span class="badge badge-soft-warning">Rated</span></td>
                        <td>Japan</td>
                        <td>
                            <div class="set-star">
                                <i class="fa fa-star filled me-2"></i>5.0
                            </div>
                        </td>
                        <td>Martin</td>
                        <td>
                            <ul class="social-links d-flex align-items-center">
                                <li>
                                    <a href="#"><i class="la la-envelope"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-phone-volume"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="lab la-facebook-messenger"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-skype"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-facebook "></i></a>
                                </li>
                            </ul>
                        </td>
                        <td>
                            <div class="dropdown action-label">
                                <a href="#" class="btn btn-white btn-sm badge-outline-success "> Active </a>
                            </div>
                        </td>
                        <td class="text-end">
                            <div class="dropdown dropdown-action">
                                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_company"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_company"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                    <a class="dropdown-item" href="company-details.html"><i class="fa-regular fa-eye"></i> Preview</a>
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
                            <h2 class="table-avatar d-flex align-items-center">
                                <a href="profile.html" class="company-img"><img src="/assets/img/icons/company-icon-07.svg" alt="User Image"></a>
                                <a href="profile.html" class="profile-split">CoastalStar Co.</a>
                            </h2>
                        </td>
                        <td>+1 215544845</td>
                        <td>Rachel@example.com</td>
                        <td><span class="badge badge-soft-danger">Rejected</span></td>
                        <td>Indonesia</td>
                        <td>
                            <div class="set-star">
                                <i class="fa fa-star filled me-2"></i>3.1
                            </div>
                        </td>
                        <td>Newell</td>
                        <td>
                            <ul class="social-links d-flex align-items-center">
                                <li>
                                    <a href="#"><i class="la la-envelope"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-phone-volume"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="lab la-facebook-messenger"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-skype"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-facebook "></i></a>
                                </li>
                            </ul>
                        </td>
                        <td>
                            <div class="dropdown action-label">
                                <a href="#" class="btn btn-white btn-sm badge-outline-success "> Active </a>
                            </div>
                        </td>
                        <td class="text-end">
                            <div class="dropdown dropdown-action">
                                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_company"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_company"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                    <a class="dropdown-item" href="company-details.html"><i class="fa-regular fa-eye"></i> Preview</a>
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
                            <h2 class="table-avatar d-flex align-items-center">
                                <a href="profile.html" class="company-img"><img src="/assets/img/icons/company-icon-08.svg" alt="User Image"></a>
                                <a href="profile.html" class="profile-split">HarborView</a>
                            </h2>
                        </td>
                        <td>+1 121145471</td>
                        <td>Jonelle@example.com</td>
                        <td><span class="badge badge-soft-danger">Rejected</span></td>
                        <td>Cuba</td>
                        <td>
                            <div class="set-star">
                                <i class="fa fa-star filled me-2"></i>5.0
                            </div>
                        </td>
                        <td>Janet</td>
                        <td>
                            <ul class="social-links d-flex align-items-center">
                                <li>
                                    <a href="#"><i class="la la-envelope"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-phone-volume"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="lab la-facebook-messenger"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-skype"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-facebook "></i></a>
                                </li>
                            </ul>
                        </td>
                        <td>
                            <div class="dropdown action-label">
                                <a href="#" class="btn btn-white btn-sm badge-outline-success "> Active </a>
                            </div>
                        </td>
                        <td class="text-end">
                            <div class="dropdown dropdown-action">
                                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_company"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_company"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                    <a class="dropdown-item" href="company-details.html"><i class="fa-regular fa-eye"></i> Preview</a>
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
                            <h2 class="table-avatar d-flex align-items-center">
                                <a href="profile.html" class="company-img"><img src="/assets/img/icons/company-icon-09.svg" alt="User Image"></a>
                                <a href="profile.html" class="profile-split">Golden Gate Ltd</a>
                            </h2>
                        </td>
                        <td>+1 321454789</td>
                        <td>Jonathan@example.com</td>
                        <td><span class="badge badge-soft-danger me-2">Collab</span><span class="badge badge-soft-purple">Calls</span></td>
                        <td>Isreal</td>
                        <td>
                            <div class="set-star">
                                <i class="fa fa-star filled me-2"></i>2.7
                            </div>
                        </td>
                        <td>Craig</td>
                        <td>
                            <ul class="social-links d-flex align-items-center">
                                <li>
                                    <a href="#"><i class="la la-envelope"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-phone-volume"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="lab la-facebook-messenger"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-skype"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-facebook "></i></a>
                                </li>
                            </ul>
                        </td>
                        <td>
                            <div class="dropdown action-label">
                                <a href="#" class="btn btn-white btn-sm badge-outline-success "> Active </a>
                            </div>
                        </td>
                        <td class="text-end">
                            <div class="dropdown dropdown-action">
                                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_company"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_company"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                    <a class="dropdown-item" href="company-details.html"><i class="fa-regular fa-eye"></i> Preview</a>
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
                            <h2 class="table-avatar d-flex align-items-center">
                                <a href="profile.html" class="company-img"><img src="/assets/img/icons/company-icon-10.svg" alt="User Image"></a>
                                <a href="profile.html" class="profile-split">Redwood Inc</a>
                            </h2>
                        </td>
                        <td>+1 278907145</td>
                        <td>brook@example.com</td>
                        <td><span class="badge badge-soft-purple">Calls</span></td>
                        <td>Colombia</td>
                        <td>
                            <div class="set-star">
                                <i class="fa fa-star filled me-2"></i>3.0
                            </div>
                        </td>
                        <td>Daniel</td>
                        <td>
                            <ul class="social-links d-flex align-items-center">
                                <li>
                                    <a href="#"><i class="la la-envelope"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-phone-volume"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="lab la-facebook-messenger"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-skype"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="la la-facebook "></i></a>
                                </li>
                            </ul>
                        </td>
                        <td>
                            <div class="dropdown action-label">
                                <a href="#" class="btn btn-white btn-sm badge-outline-success"> Active </a>
                            </div>
                        </td>
                        <td class="text-end">
                            <div class="dropdown dropdown-action">
                                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_company"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_company"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                    <a class="dropdown-item" href="company-details.html"><i class="fa-regular fa-eye"></i> Preview</a>
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
                <h5 class="modal-title">Add New Company</h5>
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
                                <h6>Basic Info</h6>
                            </div>
                        </li>
                        <li>
                            <span><i class="la la-map-marker"></i></span>
                            <div class="multi-step-info">
                                <h6>Address</h6>
                            </div>
                        </li>
                        <li>
                            <div class="multi-step-icon">
                                <span><i class="la la-icons"></i></span>
                            </div>
                            <div class="multi-step-info">
                                <h6>Social Profiles</h6>
                            </div>
                        </li>
                        <li>
                            <div class="multi-step-icon">
                                <span><i class="la la-images"></i></span>
                            </div>
                            <div class="multi-step-info">
                                <h6>Access</h6>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="add-info-fieldset">
                    <fieldset id="first-field">
                        <form action="company.html">
                            <div class="form-upload-profile">
                                <h6 class="">Profile Image <span> *</span></h6>
                                <div class="profile-pic-upload">
                                    <div class="profile-pic">
                                        <span><img src="/assets/img/icons/profile-upload-img.svg" alt="Img"></span>
                                    </div>
                                    <div class="employee-field">
                                        <div class="mb-0">
                                            <div class="image-upload mb-0">
                                                <input type="file">
                                                <div class="image-uploads">
                                                    <h4>Upload</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="img-reset-btn">
                                            <a href="#">Reset</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-input-set">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Company Name <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <label class="col-form-label">Email <span class="text-danger"> *</span></label>
                                                <div class="status-toggle small-toggle-btn d-flex align-items-center">
                                                    <span class="me-2 label-text">Option</span>
                                                    <input type="checkbox" id="user2" class="check" checked="">
                                                    <label for="user2" class="checktoggle"></label>
                                                </div>
                                            </div>
                                            <input class="form-control" type="email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Phone Number 1<span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Phone Number 2 <span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Fax <span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Website</label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Reviews <span class="text-danger">*</span></label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>Lowest</option>
                                                <option>Highest</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Owner <span class="text-danger">*</span></label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>Hendry</option>
                                                <option>Guillory</option>
                                                <option>Jami</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Tags <span class="text-danger">*</span></label>
                                            <input class="input-tags form-control" id="inputBox" type="text" data-role="tagsinput" name="Label" value="Label, Label">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <label class="col-form-label">Deals <span class="text-danger">*</span></label>
                                                <a href="#" class="add-new"><i class="la la-plus-circle me-2"></i>Add New</a>
                                            </div>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>Collins</option>
                                                <option>Konopelski</option>
                                                <option>Adams</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Industry <span class="text-danger">*</span></label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>Barry Cuda</option>
                                                <option>Tressa Wexler</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Source <span class="text-danger">*</span></label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>Barry Cuda</option>
                                                <option>Tressa Wexler</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Contact <span class="text-danger">*</span></label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>Email</option>
                                                <option>Call</option>
                                                <option>Skype</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Currency <span class="text-danger">*</span></label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>$</option>
                                                <option>€</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Language <span class="text-danger">*</span></label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>English</option>
                                                <option>French</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">About Company<span class="text-danger">*</span></label>
                                            <textarea class="form-control" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 text-end form-wizard-button">
                                        <button class="button btn-lights reset-btn" type="reset">Reset</button>
                                        <button class="btn btn-primary wizard-next-btn" type="button">Save & Next</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </fieldset>
                    <fieldset>
                        <form action="company.html">
                            <div class="contact-input-set">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Street Address<span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">City <span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">State / Province <span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Country <span class="text-danger">*</span></label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>Germany</option>
                                                <option>USA</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Zipcode <span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 text-end form-wizard-button">
                                        <button class="button btn-lights reset-btn" type="reset">Reset</button>
                                        <button class="btn btn-primary wizard-next-btn" type="button">Save & Next</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </fieldset>
                    <fieldset>
                        <form action="company.html">
                            <div class="contact-input-set">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Facebook</label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Twitter</label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Linkedin</label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Skype</label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Whatsapp</label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Instagram</label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-block mb-3">
                                            <a href="#" class="add-new"><i class="la la-plus-circle me-2"></i>Add New</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 text-end form-wizard-button">
                                        <button class="button btn-lights reset-btn" type="reset">Reset</button>
                                        <button class="btn btn-primary wizard-next-btn" type="button">Save & Next</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </fieldset>
                    <fieldset>
                        <form action="company.html">
                            <div class="contact-input-set">
                                <div class="input-blocks add-products">
                                    <label class="mb-3">Visibility</label>
                                    <div class="access-info-tab">
                                        <ul class="nav nav-pills" id="pills-tab1" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <span class="custom_radio mb-0" id="pills-public-tab" data-bs-toggle="pill" data-bs-target="#pills-public" role="tab" aria-controls="pills-public" aria-selected="true">
                                                    <input type="radio" class="form-control" name="public" checked>
                                                    <span class="checkmark"></span> Public</span>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <span class="custom_radio mb-0" id="pills-private-tab" data-bs-toggle="pill" data-bs-target="#pills-private" role="tab" aria-controls="pills-private" aria-selected="false">
                                                    <input type="radio" class="form-control" name="private">
                                                    <span class="checkmark"></span> Private</span>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <span class="custom_radio mb-0 active" id="pills-select-people-tab" data-bs-toggle="pill" data-bs-target="#pills-select-people" role="tab" aria-controls="pills-select-people" aria-selected="false">
                                                    <input type="radio" class="form-control" name="select-people">
                                                    <span class="checkmark"></span> Select People</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade" id="pills-public" role="tabpanel" aria-labelledby="pills-public-tab">

                                    </div>
                                    <div class="tab-pane fade" id="pills-private" role="tabpanel" aria-labelledby="pills-private-tab">
                                    </div>
                                    <div class="tab-pane fade show active" id="pills-select-people" role="tabpanel" aria-labelledby="pills-select-people-tab">
                                        <div class="people-select-tab">
                                            <h3>Select People</h3>
                                            <div class="select-people-checkbox">
                                                <label class="custom_check">
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                    <span class="people-profile">
                                                        <img src="/assets/img/avatar/avatar-19.jpg" alt="Img">
                                                        <a href="#">Darlee Robertson</a>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="select-people-checkbox">
                                                <label class="custom_check">
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                    <span class="people-profile">
                                                        <img src="/assets/img/avatar/avatar-20.jpg" alt="Img">
                                                        <a href="#">Sharon Roy</a>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="select-people-checkbox">
                                                <label class="custom_check">
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                    <span class="people-profile">
                                                        <img src="/assets/img/avatar/avatar-21.jpg" alt="Img">
                                                        <a href="#">Vaughan</a>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="select-people-checkbox">
                                                <label class="custom_check">
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                    <span class="people-profile">
                                                        <img src="/assets/img/avatar/avatar-1.jpg" alt="Img">
                                                        <a href="#">Jessica</a>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="select-confirm-btn">
                                                <a href="#" class="btn danger-btn">Confirm</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="mb-3">Status</h5>
                                <div class="status-radio-btns d-flex mb-3">
                                    <div class="people-status-radio">
                                        <input type="radio" class="status-radio" id="test1" name="radio-group" checked>
                                        <label for="test1">Active</label>
                                    </div>
                                    <div class="people-status-radio">
                                        <input type="radio" class="status-radio" id="test2" name="radio-group">
                                        <label for="test2">Private</label>
                                    </div>
                                    <div class="people-status-radio">
                                        <input type="radio" class="status-radio" id="test3" name="radio-group">
                                        <label for="test3">Inactive</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 text-end form-wizard-button">
                                    <button class="button btn-lights reset-btn" type="reset">Reset</button>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#success_msg">Save & Next</button>
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
                <h5 class="modal-title">Edit Company</h5>
                <button type="button" class="btn-close position-static" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body p-0">
                <div class="add-details-wizard">
                    <ul id="progressbar2" class="progress-bar-wizard">
                        <li class="active">
                            <span><i class="la la-user-tie"></i></span>
                            <div class="multi-step-info">
                                <h6>Basic Info</h6>
                            </div>
                        </li>
                        <li>
                            <span><i class="la la-map-marker"></i></span>
                            <div class="multi-step-info">
                                <h6>Address</h6>
                            </div>
                        </li>
                        <li>
                            <div class="multi-step-icon">
                                <span><i class="la la-icons"></i></span>
                            </div>
                            <div class="multi-step-info">
                                <h6>Social Profiles</h6>
                            </div>
                        </li>
                        <li>
                            <div class="multi-step-icon">
                                <span><i class="la la-images"></i></span>
                            </div>
                            <div class="multi-step-info">
                                <h6>Access</h6>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="add-info-fieldset">
                    <fieldset id="edit-first-field">
                        <form action="company.html">
                            <div class="form-upload-profile">
                                <h6 class="">Profile Image <span> *</span></h6>
                                <div class="profile-pic-upload">
                                    <div class="profile-pic">
                                        <span><img src="/assets/img/icons/company-icon-01.svg" alt="Img"></span>
                                    </div>
                                    <div class="employee-field">
                                        <div class="mb-0">
                                            <div class="image-upload mb-0">
                                                <input type="file">
                                                <div class="image-uploads">
                                                    <h4>Upload</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="img-reset-btn">
                                            <a href="#">Reset</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-input-set">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Company Name <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" value="NovaWaveLLC">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <label class="col-form-label">Email <span class="text-danger"> *</span></label>
                                                <div class="status-toggle small-toggle-btn d-flex align-items-center">
                                                    <span class="me-2 label-text">Option</span>
                                                    <input type="checkbox" id="user3" class="check" checked="">
                                                    <label for="user3" class="checktoggle"></label>
                                                </div>
                                            </div>
                                            <input class="form-control" type="email" value="Robertson@example.com">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Phone Number 1<span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text" value="+1 875455453">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Phone Number 2 <span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text" value="+1 895455450">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Fax <span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Website</label>
                                            <input class="form-control" type="text" value="Admin Website">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Reviews <span class="text-danger">*</span></label>
                                            <select class="select">
                                                <option>Lowest</option>
                                                <option>Highest</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Owner <span class="text-danger">*</span></label>
                                            <select class="select">
                                                <option>Hendry</option>
                                                <option>Guillory</option>
                                                <option>Jami</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Tags <span class="text-danger">*</span></label>
                                            <input class="input-tags form-control" id="inputBox2" type="text" data-role="tagsinput" name="Label" value="Label, Label">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <label class="col-form-label">Deals <span class="text-danger">*</span></label>
                                                <a href="#" class="add-new"><i class="la la-plus-circle me-2"></i>Add New</a>
                                            </div>
                                            <select class="select">
                                                <option>Collins</option>
                                                <option>Konopelski</option>
                                                <option>Adams</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Industry <span class="text-danger">*</span></label>
                                            <select class="select">
                                                <option>Barry Cuda</option>
                                                <option>Tressa Wexler</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Source <span class="text-danger">*</span></label>
                                            <select class="select">
                                                <option>Barry Cuda</option>
                                                <option>Tressa Wexler</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Contact <span class="text-danger">*</span></label>
                                            <select class="select">
                                                <option>Email</option>
                                                <option>Call</option>
                                                <option>Skype</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Currency <span class="text-danger">*</span></label>
                                            <select class="select">
                                                <option>$</option>
                                                <option>€</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Language <span class="text-danger">*</span></label>
                                            <select class="select">
                                                <option>English</option>
                                                <option>French</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">About Company<span class="text-danger">*</span></label>
                                            <textarea class="form-control" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 text-end form-wizard-button">
                                        <button class="button btn-lights reset-btn" type="reset">Reset</button>
                                        <button class="btn btn-primary wizard-next-btn" type="button">Save & Next</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </fieldset>
                    <fieldset>
                        <form action="company.html">
                            <div class="contact-input-set">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Street Address<span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text" value="38 Simpson Stree">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">City <span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text" value="Rock Island">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">State / Province <span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text" value="USA">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Country <span class="text-danger">*</span></label>
                                            <select class="select">
                                                <option>Germany</option>
                                                <option>USA</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Zipcode <span class="text-danger"> *</span></label>
                                            <input class="form-control" type="text" value="65">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 text-end form-wizard-button">
                                        <button class="button btn-lights reset-btn" type="reset">Reset</button>
                                        <button class="btn btn-primary wizard-next-btn" type="button">Save & Next</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </fieldset>
                    <fieldset>
                        <form action="company.html">
                            <div class="contact-input-set">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Facebook</label>
                                            <input class="form-control" type="text" value="Darlee Robertson">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Twitter</label>
                                            <input class="form-control" type="text" value="Darlee Robertson">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Linkedin</label>
                                            <input class="form-control" type="text" value="Darlee Robertson">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Skype</label>
                                            <input class="form-control" type="text" value="Darlee Robertson">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Whatsapp</label>
                                            <input class="form-control" type="text" value="Darlee Robertson">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Instagram</label>
                                            <input class="form-control" type="text" value="Darlee_Robertson">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-block mb-3">
                                            <a href="#" class="add-new"><i class="la la-plus-circle me-2"></i>Add New</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 text-end form-wizard-button">
                                        <button class="button btn-lights reset-btn" type="reset">Reset</button>
                                        <button class="btn btn-primary wizard-next-btn" type="button">Save & Next</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </fieldset>
                    <fieldset>
                        <form action="company.html">
                            <div class="contact-input-set">
                                <div class="input-blocks add-products">
                                    <label class="mb-3">Visibility</label>
                                    <div class="access-info-tab">
                                        <ul class="nav nav-pills" id="pills-tab2" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <span class="custom_radio mb-0" id="pills-public-tab2" data-bs-toggle="pill" data-bs-target="#pills-public2" role="tab" aria-controls="pills-public2" aria-selected="true">
                                                    <input type="radio" class="form-control" name="public" checked>
                                                    <span class="checkmark"></span> Public</span>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <span class="custom_radio mb-0" id="pills-private-tab2" data-bs-toggle="pill" data-bs-target="#pills-private2" role="tab" aria-controls="pills-private2" aria-selected="false">
                                                    <input type="radio" class="form-control" name="private">
                                                    <span class="checkmark"></span> Private</span>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <span class="custom_radio mb-0 active" id="pills-select-people-tab2" data-bs-toggle="pill" data-bs-target="#pills-select-people2" role="tab" aria-controls="pills-select-people2" aria-selected="false">
                                                    <input type="radio" class="form-control" name="select-people">
                                                    <span class="checkmark"></span> Select People</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-content" id="pills-tabContent2">
                                    <div class="tab-pane fade" id="pills-public2" role="tabpanel" aria-labelledby="pills-public-tab2">

                                    </div>
                                    <div class="tab-pane fade" id="pills-private2" role="tabpanel" aria-labelledby="pills-private-tab2">
                                    </div>
                                    <div class="tab-pane fade show active" id="pills-select-people2" role="tabpanel" aria-labelledby="pills-select-people-tab2">
                                        <div class="people-select-tab">
                                            <h3>Select People</h3>
                                            <div class="select-people-checkbox">
                                                <label class="custom_check">
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                    <span class="people-profile">
                                                        <img src="/assets/img/avatar/avatar-19.jpg" alt="Img">
                                                        <a href="#">Darlee Robertson</a>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="select-people-checkbox">
                                                <label class="custom_check">
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                    <span class="people-profile">
                                                        <img src="/assets/img/avatar/avatar-20.jpg" alt="Img">
                                                        <a href="#">Sharon Roy</a>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="select-people-checkbox">
                                                <label class="custom_check">
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                    <span class="people-profile">
                                                        <img src="/assets/img/avatar/avatar-21.jpg" alt="Img">
                                                        <a href="#">Vaughan</a>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="select-people-checkbox">
                                                <label class="custom_check">
                                                    <input type="checkbox">
                                                    <span class="checkmark"></span>
                                                    <span class="people-profile">
                                                        <img src="/assets/img/avatar/avatar-1.jpg" alt="Img">
                                                        <a href="#">Jessica</a>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="select-confirm-btn">
                                                <a href="#" class="btn danger-btn">Confirm</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="mb-3">Status</h5>
                                <div class="status-radio-btns d-flex mb-3">
                                    <div class="people-status-radio">
                                        <input type="radio" class="status-radio" id="test4" name="radio-group" checked>
                                        <label for="test4">Active</label>
                                    </div>
                                    <div class="people-status-radio">
                                        <input type="radio" class="status-radio" id="test5" name="radio-group">
                                        <label for="test5">Private</label>
                                    </div>
                                    <div class="people-status-radio">
                                        <input type="radio" class="status-radio" id="test6" name="radio-group">
                                        <label for="test6">Inactive</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 text-end form-wizard-button">
                                    <button class="button btn-lights reset-btn" type="reset">Reset</button>
                                    <button class="btn btn-primary" type="submit">Submit</button>
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

<!-- Export -->
<div class="modal custom-modal fade modal-padding" id="export" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header header-border justify-content-between p-0">
                <h5 class="modal-title">Export</h5>
                <button type="button" class="btn-close position-static" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body p-0">
                <form action="companies.html">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-block mb-3">
                                <h5 class="mb-3">Export</h5>
                                <div class="status-radio-btns d-flex">
                                    <div class="people-status-radio">
                                        <input type="radio" class="status-radio" id="pdf" name="export-type" checked>
                                        <label for="pdf">Person</label>
                                    </div>
                                    <div class="people-status-radio">
                                        <input type="radio" class="status-radio" id="excel" name="export-type">
                                        <label for="excel">Organization</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h4 class="mb-3">Filters</h4>
                            <div class="input-block mb-3">
                                <label class="col-form-label">Fields <span class="text-danger">*</span></label>
                                <select class="select">
                                    <option>All Fields</option>
                                    <option>contact</option>
                                    <option>Company</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">From Date <span class="text-danger">*</span></label>
                                <div class="cal-icon">
                                    <input class="form-control floating datetimepicker" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-block mb-3">
                                <label class="col-form-label">To Date <span class="text-danger">*</span></label>
                                <div class="cal-icon">
                                    <input class="form-control floating datetimepicker" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 text-end form-wizard-button">
                            <button class="button btn-lights reset-btn" type="reset" data-bs-dismiss="modal">Reset</button>
                            <button class="btn btn-primary" type="submit">Export Now</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<!-- /Export -->

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