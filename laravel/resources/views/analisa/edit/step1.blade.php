<div class="tab-pane fade" id="application_information" role="tabpanel">
    <form class="stepAll" enctype="multipart/form-data" method="POST">
        @csrf
       

        <div class="card border mb-g">
            <div class="col-xl-12">
                <div class="card-body">
                    <h5 class="card-title">
                        Application
                        Information</h5>
                    <div class="form-row">
                        <div class="col-md-6 mb-6">
                            <label class="form-label">Proposal From <span class="text-danger">*</span>
                            </label>
                            <select class="custom-select" name="branch" id="branchKode" readonly="">
                                <option value="">Select Branch</option>

                            </select>
                        </div>
                        <div class="col-md-6 mb-6">
                            <label class="form-label">Application Number / MRK ID <span class="text-danger">*</span>
                            </label>
                            <input type="text" name="noAplikasi" class="form-control" id="noAplikasi"
                                value="" readonly="readonly">
                        </div>
                        <div class="col-md-6 mb-6">
                            <label class="form-label">Latest MRK ID <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" name="noCfrTerakhir" id="noCfrTerakhir" value=""
                                readonly="readonly">
                        </div>
                        <div class="col-md-6 mb-6">
                            <label class="form-label">Debtor Segmentation <span class="text-danger">*</span>
                            </label>
                            <select class="custom-select " name="segmentation" id="segmentation">
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card border mb-g">
            <div class="col-xl-12">
                <!-- notice the additions of utility paddings and display properties on .card-header -->
                <div class="card-body">
                    <h5 class="card-title">Debtor
                        Information</h5>
                    <div class="form-row">
                        <input type="hidden" id="id_debitur" name="id_debitur" value="">
                        <div class="col-md-6 mb-6">
                            <label class="form-label">Debtor Name <span class="text-danger">*</span>
                            </label>
                            <input type="text" name="namaBisnis" class="form-control" placeholder=""
                                value="" readonly="readonly">
                        </div>
                        <div class="col-md-6 mb-6">
                            <label class="form-label" for="validationCustom01">Date Business Established <span
                                    class="text-danger">*</span>
                            </label>
                            <input type="text" name="tanggalPendirian" class="form-control tanggalPendirian"
                                placeholder="" data-inputmask="'mask': '9999'"
                                value="" readonly="readonly">
                            <div class="valid-feedback">Looks good!</div>
                        </div>
                        <div class="col-md-6 mb-6">
                            <label class="form-label">Tax Number / NPWP <span class="text-danger">*</span>
                            </label>
                            <input type="text" name="noNpwp" class="form-control" placeholder=""
                                value="" readonly="readonly">
                        </div>
                        <div class="col-md-6 mb-6">
                            <label class="form-label">CIF Number <span class="text-danger">*</span>
                            </label>
                            <input type="text" name="cif" class="form-control " placeholder=""
                                data-inputmask="'mask': '9999'" readonly="readonly">
                        </div>
                        <div class="col-md-6 mb-6">
                            <label class="form-label">Group Name <span class="text-danger">*</span>
                            </label>
                            <input type="text" name="companyGroup" class="form-control" placeholder=""
                                value="" readonly="readonly">
                        </div>
                        <div class="col-md-6 mb-6">
                            <label class="form-label">Sector of Economy <span class="text-danger">*</span>
                            </label>
                            <input type="text" name="sektor" class="form-control" placeholder="" required
                                value=""
                                readonly="readonly">
                            <div class="valid-feedback">Looks good!</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="card border mb-g">
            <div class="col-xl-12">
                <!-- notice the additions of utility paddings and display properties on .card-header -->
                <div class="card-body">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" name="isTigaPilar" id="isTigaPilar">
                            
                        <label class="custom-control-label" for="isTigaPilar">
                            <h5 class="card-title">Tiga Pilar</h5>
                        </label>
                    </div>
                    <div id="tigaPilar-main">
                        <div class="form-group mb-0" >
                            <div class="row">
                                <div class="col-3">
                                    <div class="form-group">
                                        <label class="form-label" for="input-group-lg-size-avarageProspek">PROSPEK USAHA</label>
                                        <div class="input-group input-group has-length">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                10
                                                </span>
                                                <span class="input-group-text">
                                                <i class="fal fa-percent"></i>
                                                </span>
                                            </div>
                                            <input id="input-group-lg-size-avarageProspek" type="text" class="form-control avarageProspek auto-save" name="avarageProspek" value="" placeholder="0" aria-describedby="input-group-lg-size-avarageProspek" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label class="form-label" for="input-group-lg-size-avarageKemampuan">KEMAMPUAN BAYAR</label>
                                        <div class="input-group input-group has-length">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                60
                                                </span>
                                                <span class="input-group-text">
                                                <i class="fal fa-percent"></i>
                                                </span>
                                            </div>
                                            <input id="input-group-lg-size-avarageKemampuan" type="text" class="form-control avarageKemampuan auto-save" name="avarageKemampuan" value="" placeholder="0" aria-describedby="input-group-lg-size-avarageKemampuan" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label class="form-label" for="input-group-lg-size-avarageKinerja">KINERJA/PERFORMANCE</label>
                                        <div class="input-group input-group has-length">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                30
                                                </span>
                                                <span class="input-group-text">
                                                <i class="fal fa-percent"></i>
                                                </span>
                                            </div>
                                            <input id="input-group-lg-size-avarageKinerja" type="text" class="form-control avarageKinerja auto-save" name="avarageKinerja"  value="" placeholder="0" aria-describedby="input-group-lg-size-avarageKinerja" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label class="form-label" for="input-group-lg-size-sumPeringkat">PERINGKAT</label>
                                        <div class="input-group input-group has-length">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                =
                                                </span>
                                                {{--                                                                                                        <span class="input-group-text">--}}
                                                {{--                                                                                                        </span>--}}
                                            </div>
                                            <input id="input-group-lg-size-sumPeringkat" type="text" class="form-control sumPeringkat auto-save" name="sumPeringkat" value="" placeholder="0" aria-describedby="input-group-lg-size-sumPeringkat" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card border mb-3">
                            <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs">
                                   
                                        <li class="nav-item "> <a class="nav-link" id="" data-toggle="tab" href="#tigaPilar-">text</a> </li>
                                   
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    
                                        <div id="tigaPilar-" role="tabpanel" class="tab-pane fade  p-3  show">
                                            <div class="border-faded border-left-0 border-right-0 border-top-0 pb-2 pt-3">
                                                
                                                    <div class="form-row">
                                                        <div class="col-6">
                                                            <div class="input-group">
                                                                <select class="form-control tiga-pilar-select  auto-save" name="" >
                                                                    {{--                                                                                                                <option value="0" selected readonly="">Please select</option>--}}
                                                                    
                                                                </select>
                                                                <div class="input-group-append">
                                                                    
                                                                    <div class="input-group-text auto-save" id=""></div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                           
                                                                <textarea type="text" class="form-control auto-save" name="" id="" rows="2">-</textarea>
                                                          
                                                        </div>
                                                    </div>
                                                
                                            </div>
                                        </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
{{--        <div class="card border mb-g">--}}
{{--            <div class="col-xl-12">--}}
{{--                <!-- notice the additions of utility paddings and display properties on .card-header -->--}}
{{--                <div class="card-body">--}}
{{--                    <div class="panel-hdr bg-info-600">--}}
{{--                        <h2>--}}
{{--                            Tiga Pilar Evaluations--}}
{{--                        </h2>--}}
{{--                        <div class="panel-toolbar">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-row form-group">--}}
{{--                        <div class="col-md-12 mb-12">--}}
{{--                            <div class="panel-container show">--}}
{{--                                <div class="panel-content">--}}
{{--                                    <textarea class="js-summernotePilarEvaluation" name="pilarEvaluation"--}}
{{--                                        id="savePilarEvaluation"></textarea>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        
        <div class="panel-content border-faded border-left-0 border-right-0 border-bottom-0 d-flex flex-row align-items-center">
            
                <button class="btn btn-dark ml-1 btn-finish-apk" onclick="window.location.href=''" name="btnSave">Back to Tracking</button>
           
            <button class="btn btn-primary ml-auto " name="btnSave"  type="submit">Next</button>
        </div>
    </form>
</div>
