<div class="tab-pane fade" id="analysis_credit" role="tabpanel">
    <form class="stepAll" id="step4" enctype="multipart/form-data" method="POST">
        @csrf
     
        <div class="card border mb-g">
            <div class="col-xl-12">
                <!-- notice the additions of utility paddings and display properties on .card-header -->
                <div class="card-body">
                    <div class="panel-hdr">
                        <h2>
                            Business Activities
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-info btn-sm mr-1 "
                                onclick=" return false;" tabindex="0"
                                data-toggle="modal" data-target="#"><span><i
                                        class="fal fa-sync mr-1"></i>Clear</span>
                            </button>
                        </div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-md-12 mb-12">
                            <div class="panel-container show">
                                <div class="panel-content">
                                  
                                    <input type="hidden" name="isBusiness" id="isBusiness"
                                        value="">
                                    <textarea class="js-summernoteAnalysisBusiness" name="analysisBusiness"
                                        id="saveAnalysisBusiness"></textarea>
                                    <div class="mt-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"
                                                id="autoSaveAnalysisBusiness" checked="checked">
                                            <label class="custom-control-label" for="autoSaveAnalysisBusiness">Autosave
                                                changes to LocalStorage <span class="fw-300">(every 3 seconds)</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card border mb-g">
            <div class="col-xl-12">
                <!-- notice the additions of utility paddings and display properties on .card-header -->
                <div class="card-body">
                    <div class="panel-hdr">
                        <h2>
                            Analysis Debtor, Buyer, Supplier, Group
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-info btn-sm mr-1 "
                                onclick="return false;" tabindex="0"
                                data-toggle="modal" data-target="#"><span><i
                                        class="fal fa-sync mr-1"></i>Clear</span>
                            </button>
                        </div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-md-12 mb-12">
                            <div class="panel-container show">
                                <div class="panel-content">
                                    <input type="hidden" name="isDebtorAnalysis" id="isDebtorAnalysis"
                                        value="">
                                    <textarea class="js-summernoteAnalysisDebtor" name="analysisDebtor"
                                        id="saveAnalysisDebtor"></textarea>
                                    <div class="mt-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"
                                                id="autoSaveAnalysisDebtor" checked="checked">
                                            <label class="custom-control-label" for="autoSaveAnalysisDebtor">Autosave
                                                changes to
                                                LocalStorage <span class="fw-300">(every 3 seconds)</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
            <div class="card border mb-g">
                <div class="col-xl-12">
                    <!-- notice the additions of utility paddings and display properties on .card-header -->
                    <div class="card-body">
                        <h5 class="card-title">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" name="withGuarantor" id="withGuarantor"
                                    
                                
                                >
                                <label class="custom-control-label" for="withGuarantor">Guarantor</label>
                            </div>
                        </h5>
                        <div class="form-row form-group" id="edit-guarantor">
                           
                            <div class="col-md-12 mb-12">
                                <div class="panel-content">
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label" for="">Guarantor Name</label>
                                            <input type="text" class="form-control" name="guarantorName" placeholder=""
                                                value=""
                                                required="">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label" for="validationDefault02">Identity ID</label>
                                            <input type="text" class="form-control" name="guarantorIdentityID"
                                                placeholder="" required=""
                                                value="">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label" for="">Birth Date</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="guarantorBirthDate"
                                                    placeholder="" data-date-format="dd/mm/yyyy"
                                                    value=""
                                                    id="datepicker-4-2">
                                                <div class="input-group-append"> <span class="input-group-text fs-xl">
                                                        <i class="fal fa-calendar-exclamation"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label" for="validationDefault02">Job</label>
                                            <select class="custom-select " name="guarantorJob"
                                                id="guarantorJob">
                                               </select>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label" for="validationDefault02">Job Position</label>
                                            <select class="custom-select " name="guarantorPosition"
                                                id="guarantorPosition"></select>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label" for="validationDefault02">Mother Name</label>
                                            <input type="text" class="form-control" name="guarantorMotherName"
                                                value="" placeholder=""
                                                required="">
                                        </div>
                                    </div>
                                    <div class="panel-hdr">
                                        <h2>
                                            Additional Info
                                        </h2>
                                        <div class="panel-toolbar">
                                            <button class="btn btn-info btn-sm mr-1 "
                                                onclick=" return false;" tabindex="0"
                                                data-toggle="modal" data-target="#"><span><i
                                                        class="fal fa-sync mr-1"></i>Clear</span>
                                            </button>
                                        </div>
                                    </div>
                                    <input type="hidden" name="isGuarantor" id="isGuarantor"
                                        value="">
                                    <textarea class="js-summernoteGuarantor" name="analysisGuarantor"
                                        id="saveAnalysisGuarantor"></textarea>
                                    <div class="mt-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"
                                                id="autoSaveAnalysisGuarantor" checked="checked">
                                            <label class="custom-control-label" for="autoSaveAnalysisGuarantor">Autosave
                                                changes
                                                to LocalStorage
                                                <span class="fw-300">(every 3 seconds)</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           

                        </div>
                    </div>
                </div>
            </div>
          
            <div class="card border mb-g">
                <div class="col-xl-12">
                    <div class="card-body">
                        <div class="panel-hdr bg-info-600">
                            <h2>
                                Analysis of Credit Evaluations
                            </h2>
                            <div class="panel-toolbar">

                            </div>
                        </div>
                        <div class="form-row form-group">
                            <div class="col-md-12 mb-12">
                                <div class="panel-container show">
                                    <div class="panel-content">
                                        <textarea class="js-summernoteAnalysisCreditEvaluation"
                                            name="analysisCreditEvaluation"></textarea>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        <div class="panel-content border-faded border-left-0 border-right-0 border-bottom-0 d-flex flex-row align-items-center">
            <button class="btn btn-primary ml-auto btnPrev">Prev</button>
            <button class="btn btn-primary ml-3 btnNext" name="btnSave" type="submit">Next</button>
        </div>
    </form>
</div>
