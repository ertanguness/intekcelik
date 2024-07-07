  <!-- Page Header -->

  <div class="page-header mb-3">
      <div class="row align-items-center">
          <div class="col-md-4">
              <h3 class="page-title">Ana Sayfa</h3>
          </div>
          <div class="col-md-8 float-end ms-auto">
              <div class="d-flex title-head">
                  <div class="view-icons">
                      <a href="javascript:void(0);" class="grid-view btn btn-link"><i class="las la-redo-alt"></i></a>
                      <a href="javascript:void(0);" class="list-view btn btn-link" id="collapse-header"><i class="las la-expand-arrows-alt"></i></a>
                  </div>
                  <div class="form-sort">
                      <a href="javascript:void(0);" class="list-view btn btn-link" data-bs-toggle="modal" data-bs-target="#export"><i class="las la-file-export"></i>Export</a>
                  </div>
                  <div class="daterange-picker d-flex">
                      <div class="form-sort">
                          <i class="las la-calendar"></i>
                          <input type="text" class="form-control  date-range bookingrange">
                      </div>
                      <div class="form-sort">
                          <i class="las la-cubes"></i>
                          <select class="select">
                              <option>Leads Dashboard</option>
                              <option>Deals Dashboard</option>
                          </select>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <hr>
  <!-- /Page Header -->

  <div class="row">
      <div class="col-md-6">
          <div class="card">
              <div class="card-body">
                  <div class="statistic-header">
                      <h4>Lost Deals Stage</h4>
                      <div class="dropdown statistic-dropdown">
                          <div class="card-select">
                              <ul>
                                  <li>
                                      <a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
                                          Marketing Pipeline
                                      </a>
                                      <div class="dropdown-menu dropdown-menu-end">

                                          <a href="javascript:void(0);" class="dropdown-item">
                                              Marketing Pipeline
                                          </a>
                                          <a href="javascript:void(0);" class="dropdown-item">
                                              Sales Pipeline
                                          </a>
                                          <a href="javascript:void(0);" class="dropdown-item">
                                              Email
                                          </a>
                                          <a href="javascript:void(0);" class="dropdown-item">
                                              Chats
                                          </a>
                                          <a href="javascript:void(0);" class="dropdown-item">
                                              Operational
                                          </a>
                                      </div>
                                  </li>
                                  <li>
                                      <a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
                                          Last 3 months
                                      </a>
                                      <div class="dropdown-menu dropdown-menu-end">

                                          <a href="javascript:void(0);" class="dropdown-item">
                                              Last 3 months
                                          </a>
                                          <a href="javascript:void(0);" class="dropdown-item">
                                              Last 6 months
                                          </a>
                                          <a href="javascript:void(0);" class="dropdown-item">
                                              Last 12 months
                                          </a>
                                      </div>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
                  <div id="last-chart"></div>
              </div>
          </div>
      </div>
      <div class="col-md-6">
          <div class="card">
              <div class="card-body ">
                  <div class="statistic-header">
                      <h4>Won Deals Stage</h4>
                      <div class="dropdown statistic-dropdown">
                          <div class="card-select">
                              <ul>
                                  <li>
                                      <a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
                                          Marketing Pipeline
                                      </a>
                                      <div class="dropdown-menu dropdown-menu-end">

                                          <a href="javascript:void(0);" class="dropdown-item">
                                              Marketing Pipeline
                                          </a>
                                          <a href="javascript:void(0);" class="dropdown-item">
                                              Sales Pipeline
                                          </a>
                                          <a href="javascript:void(0);" class="dropdown-item">
                                              Email
                                          </a>
                                          <a href="javascript:void(0);" class="dropdown-item">
                                              Chats
                                          </a>
                                          <a href="javascript:void(0);" class="dropdown-item">
                                              Operational
                                          </a>
                                      </div>
                                  </li>
                                  <li>
                                      <a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
                                          Last 3 months
                                      </a>
                                      <div class="dropdown-menu dropdown-menu-end">

                                          <a href="javascript:void(0);" class="dropdown-item">
                                              Last 3 months
                                          </a>
                                          <a href="javascript:void(0);" class="dropdown-item">
                                              Last 6 months
                                          </a>
                                          <a href="javascript:void(0);" class="dropdown-item">
                                              Last 12 months
                                          </a>
                                      </div>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
                  <div id="won-chart"></div>
              </div>
          </div>
      </div>
      <div class="col-md-12">
          <div class="card">
              <div class="card-body">
                  <div class="statistic-header">
                      <h4>Deals by Year</h4>
                      <div class="dropdown statistic-dropdown">
                          <div class="card-select">
                              <ul>
                                  <li>
                                      <a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
                                          Last 3 months
                                      </a>
                                      <div class="dropdown-menu dropdown-menu-end">

                                          <a href="javascript:void(0);" class="dropdown-item">
                                              Last 3 months
                                          </a>
                                          <a href="javascript:void(0);" class="dropdown-item">
                                              Last 6 months
                                          </a>
                                          <a href="javascript:void(0);" class="dropdown-item">
                                              Last 12 months
                                          </a>
                                      </div>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
                  <div id="leadchart"></div>
              </div>
          </div>
      </div>
      <div class="col-md-6">
          <div class="card">
              <div class="card-body">
                  <div class="statistic-header">
                      <h4>Leads By Stage</h4>
                      <div class="dropdown statistic-dropdown">
                          <div class="card-select">
                              <ul>
                                  <li>
                                      <a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
                                          Marketing Pipeline
                                      </a>
                                      <div class="dropdown-menu dropdown-menu-end">

                                          <a href="javascript:void(0);" class="dropdown-item">
                                              Marketing Pipeline
                                          </a>
                                          <a href="javascript:void(0);" class="dropdown-item">
                                              Sales Pipeline
                                          </a>
                                          <a href="javascript:void(0);" class="dropdown-item">
                                              Email
                                          </a>
                                          <a href="javascript:void(0);" class="dropdown-item">
                                              Chats
                                          </a>
                                          <a href="javascript:void(0);" class="dropdown-item">
                                              Operational
                                          </a>
                                      </div>
                                  </li>
                                  <li>
                                      <a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
                                          Last 3 months
                                      </a>
                                      <div class="dropdown-menu dropdown-menu-end">

                                          <a href="javascript:void(0);" class="dropdown-item">
                                              Last 3 months
                                          </a>
                                          <a href="javascript:void(0);" class="dropdown-item">
                                              Last 6 months
                                          </a>
                                          <a href="javascript:void(0);" class="dropdown-item">
                                              Last 12 months
                                          </a>
                                      </div>
                                  </li>
                              </ul>
                          </div>

                      </div>
                  </div>
                  <div id="leadpiechart"></div>
              </div>
          </div>
      </div>
      <div class="col-md-6 d-flex">
          <div class="card analytics-card w-100">
              <div class="card-body">
                  <div class="statistic-header">
                      <h4>Recently Created Leads</h4>
                      <div class="dropdown statistic-dropdown">
                          <div class="card-select">
                              <ul>
                                  <li>
                                      <a class="dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);">
                                          Last 3 months
                                      </a>
                                      <div class="dropdown-menu dropdown-menu-end">

                                          <a href="javascript:void(0);" class="dropdown-item">
                                              Last 3 months
                                          </a>
                                          <a href="javascript:void(0);" class="dropdown-item">
                                              Last 6 months
                                          </a>
                                          <a href="javascript:void(0);" class="dropdown-item">
                                              Last 12 months
                                          </a>
                                      </div>
                                  </li>
                              </ul>
                          </div>

                      </div>
                  </div>
                  <div class="table-responsive">
                      <table class="table custom-table table-nowrap mb-0">
                          <thead>
                              <tr>
                                  <th>Deal Name</th>
                                  <th>Company Name</th>
                                  <th>Deal Value</th>
                                  <th>Lead Status</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td><a href="deals-details.php">Collins</a></td>
                                  <td>
                                      <h2 class="table-avatar d-flex">
                                          <a href="company-details.php" class="company-img"><img src="assets/img/company/company-01.svg" alt="User Image"></a>
                                          <a href="company-details.php" class="profile-split d-flex flex-column">NovaWave LLC<span>Newyork, USA</span></a>
                                      </h2>
                                  </td>
                                  <td>+1 989757485</td>
                                  <td><span class="badge bg-inverse-danger">Closed</span></td>
                              </tr>
                              <tr>
                                  <td><a href="deals-details.php">BlueSky Industries</a></td>
                                  <td>
                                      <h2 class="table-avatar d-flex">
                                          <a href="company-details.php" class="company-img"><img src="assets/img/company/company-02.svg" alt="User Image"></a>
                                          <a href="company-details.php" class="profile-split d-flex flex-column">BlueSky Industries<span>Winchester, KY</span></a>
                                      </h2>
                                  </td>
                                  <td>+1 989757485</td>
                                  <td><span class="badge bg-inverse-info">Not Contacted</span></td>
                              </tr>
                              <tr>
                                  <td><a href="deals-details.php">Adams</a></td>
                                  <td>
                                      <h2 class="table-avatar d-flex">
                                          <a href="company-details.php" class="company-img"><img src="assets/img/company/company-03.svg" alt="User Image"></a>
                                          <a href="company-details.php" class="profile-split d-flex flex-column">SilverHawk<span>Jametown, NY</span></a>
                                      </h2>
                                  </td>
                                  <td>+1 546555455</td>
                                  <td><span class="badge bg-inverse-danger">Closed</span></td>
                              </tr>
                              <tr>
                                  <td><a href="deals-details.php">Schumm</a></td>
                                  <td>
                                      <h2 class="table-avatar d-flex">
                                          <a href="company-details.php" class="company-img"><img src="assets/img/company/company-04.svg" alt="User Image"></a>
                                          <a href="company-details.php" class="profile-split d-flex flex-column">SummitPeak<span>Compton, RI</span></a>
                                      </h2>
                                  </td>
                                  <td>+1 454478787</td>
                                  <td><span class="badge bg-inverse-warning">Contacted</span></td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
  </div>

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
                  <form action="contact-grid.php">
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