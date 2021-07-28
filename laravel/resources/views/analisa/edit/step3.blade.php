<div class="tab-pane fade" id="term_condition" role="tabpanel">
    <form class="stepAll" id="step3" enctype="multipart/form-data" method="POST">
        @csrf
      

        <div class="card border mb-g">
            <div class="col-xl-12">
                <!-- notice the additions of utility paddings and display properties on .card-header -->
                <div class="card-body">
                    <h5 class="card-title"> List of Terms and Conditionn new proposal</h5>
                    <div class="row mb-3">
                        <div class="col-sm-12 col-md-6 d-flex align-items-center justify-content-start"></div>
                        <div class="col-sm-12 col-md-6 d-flex align-items-center justify-content-end">
                            <div class="dt-buttons">
                                <button class="btn btn-success btn-sm mr-1" tabindex="0" data-toggle="modal" data-target="#addTermsModal">
                                    <span><i class="fal fa-plus mr-1"></i> Add Data</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-md-12 mb-12">
                            <div class="panel-content">
                                <!-- datatable start -->
                                {{-- <div class="accordion accordion-hover"> --}}
                                <div class="card">
                                    <div class="card-header">
                                        {{-- <a href="javascript:void(0);" class="card-title collapsed" data-toggle="collapse" data-target="#card_sebelum_akad" aria-expanded="false"> --}}
                                        <div class="card-title">
                                            <i class="fal fa-cog width-2 fs-xl"></i> Syarat Sebelum Akad
                                        </div>
                                        {{--   <span class="ml-auto">
                                              <span class="collapsed-reveal">
                                                  <i class="fal fa-chevron-up fs-xl"></i>
                                              </span>
                                              <span class="collapsed-hidden">
                                                  <i class="fal fa-chevron-down fs-xl"></i>
                                              </span>
                                          </span> --}}
                                        {{-- </a> --}}
                                    </div>
                                    {{-- <div id="card_sebelum_akad" class="collapse show" data-parent="#card_sebelum_akad"> --}}
                                    <div class="card-body">
                                        <div class="table-responsive-lg">
                                            <table class="table table-sm table-bordered table-hover table-striped w-100 " id="tbl_sebelum_akad">
                                                <thead>
                                                <tr>
                                                    <th>Nama Dokumen</th>
                                                    <th>Due Date</th>
                                                    <th>file upload</th>
                                                    <th>Deskripsi</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    {{-- </div> --}}
                                </div>
                                {{-- </div> --}}
                                {{-- <div class="accordion accordion-hover"> --}}
                                <div class="card">
                                    <div class="card-header">
                                        {{-- <a href="javascript:void(0);" class="card-title collapsed" data-toggle="collapse" data-target="#card_saat_akad" aria-expanded="false"> --}}
                                        <div class="card-title">
                                            <i class="fal fa-cog width-2 fs-xl"></i> Syarat Saat Akad
                                        </div>
                                        {{--  <span class="ml-auto">
                                             <span class="collapsed-reveal">
                                                 <i class="fal fa-chevron-up fs-xl"></i>
                                             </span>
                                             <span class="collapsed-hidden">
                                                 <i class="fal fa-chevron-down fs-xl"></i>
                                             </span>
                                         </span> --}}
                                        {{-- </a> --}}
                                    </div>
                                    {{-- <div id="card_saat_akad" class="collapse" data-parent="#card_saat_akad"> --}}
                                    <div class="card-body">
                                        <div class="table-responsive-lg">
                                            <table class="table table-sm table-bordered table-hover table-striped w-100 " id="tbl_saat_akad">
                                                <thead>
                                                <tr>
                                                    <th>Nama Dokumen</th>
                                                    <th>Due Date</th>
                                                    <th>file upload</th>
                                                    <th>Deskripsi</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    {{-- </div> --}}
                                </div>
                                {{-- </div> --}}
                                {{-- <div class="accordion accordion-hover"> --}}
                                <div class="card">
                                    <div class="card-header">
                                        {{-- <a href="javascript:void(0);" class="card-title collapsed" data-toggle="collapse" data-target="#card_setelah_akad" aria-expanded="false"> --}}
                                        <div class="card-title">
                                            <i class="fal fa-cog width-2 fs-xl"></i> Syarat Setelah Akad
                                        </div>
                                        {{-- <span class="ml-auto">
                                            <span class="collapsed-reveal">
                                                <i class="fal fa-chevron-up fs-xl"></i>
                                            </span>
                                            <span class="collapsed-hidden">
                                                <i class="fal fa-chevron-down fs-xl"></i>
                                            </span>
                                        </span> --}}
                                        {{-- </a> --}}
                                    </div>
                                    {{-- <div id="card_setelah_akad" class="collapse" data-parent="#card_setelah_akad"> --}}
                                    <div class="card-body">
                                        <div class="table-responsive-lg">
                                            <table class="table table-sm table-bordered table-hover table-striped w-100 " id="tbl_setelah_akad">
                                                <thead>
                                                <tr>
                                                    <th>Nama Dokumen</th>
                                                    <th>Due Date</th>
                                                    <th>file upload</th>
                                                    <th>Deskripsi</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    {{-- </div> --}}
                                </div>
                                {{-- </div> --}}
                                {{-- <div class="accordion accordion-hover"> --}}
                                <div class="card">
                                    <div class="card-header">
                                        {{-- <a href="javascript:void(0);" class="card-title collapsed" data-toggle="collapse" data-target="#card_pencairan" aria-expanded="false"> --}}
                                        <div class="card-title">
                                            <i class="fal fa-cog width-2 fs-xl"></i> Syarat Pencairan
                                        </div>
                                        {{-- <span class="ml-auto">
                                            <span class="collapsed-reveal">
                                                <i class="fal fa-chevron-up fs-xl"></i>
                                            </span>
                                            <span class="collapsed-hidden">
                                                <i class="fal fa-chevron-down fs-xl"></i>
                                            </span>
                                        </span> --}}
                                        {{-- </a> --}}
                                    </div>
                                    {{-- <div id="card_pencairan" class="collapse" data-parent="#card_pencairan"> --}}
                                    <div class="card-body">
                                        <div class="table-responsive-lg">
                                            <table class="table table-sm table-bordered table-hover table-striped w-100 " id="tbl_pencairan">
                                                <thead>
                                                <tr>
                                                    <th>Nama Dokumen</th>
                                                    <th>Due Date</th>
                                                    <th>file upload</th>
                                                    <th>Deskripsi</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    {{-- </div> --}}
                                </div>
                            {{-- </div> --}}
                            <!-- datatable end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @php($flow = 7)
        @if($flow == 7)
            <div class="card border mb-g">
                <div class="col-xl-12">
                    <!-- notice the additions of utility paddings and display properties on .card-header -->
                    <div class="card-body">
                        <div class="panel-hdr bg-info-600">
                            <h2>
                                Terms and Condition Evaluations
                            </h2>
                            <div class="panel-toolbar">
                            </div>
                        </div>
                        <div class="form-row form-group">
                            <div class="col-md-12 mb-12">
                                <div class="panel-container show">
                                    <div class="panel-content">
                                    <textarea class="js-summernoteTermsEvaluation" name="termsEvaluation"
                                              id="saveTermsEvaluation"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        {{--  <div id="generaldocument"></div> --}}
        <div class="panel-content border-faded border-left-0 border-right-0 border-bottom-0 d-flex flex-row align-items-center">
            <button class="btn btn-primary ml-auto btnPrev">Prev</button>
            <button class="btn btn-primary ml-3 btnNext" name="btnSave" type="submit">Next</button>
        </div>
    </form>
</div>
