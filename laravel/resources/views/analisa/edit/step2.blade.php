<div class="tab-pane fade" id="credit_information" role="tabpanel">
    <form class="stepAll" id="step2" enctype="multipart/form-data" method="POST">
        @csrf
        
        <div class="card border mb-g">
            <div class="col-xl-12" id="col-collaterals">
                <!-- notice the additions of utility paddings and display properties on .card-header -->
                <div class="card-body">
                    <h5 class="card-title">Collateral</h5>
                    <div class="form-row form-group">
                        <div class="col-md-12 mb-12">
                            <div class="panel-content">
                                <table id="dt-collateral" class="table table-bordered table-hover table-striped w-100">
                                </table>
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
                    <div class="panel-hdr bg-info-600">
                        <h2>
                            Collateral Evaluations
                        </h2>
                        <div class="panel-toolbar">
                        </div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-md-12 mb-12">
                            <div class="panel-container show">
                                <div class="panel-content">
                                    <textarea class="js-summernoteCollateralEvaluation" name="collateralEvaluation"
                                        id="saveCollateralEvaluation"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       

        <div class="card border mb-g scroll">
            <div class="col-xl-12 " id="col-facilityCCB">
                <!-- notice the additions of utility paddings and display properties on .card-header -->
                <div class="card-body">
                    <h5 class="card-title">Credit Facility In Bank CCB
                        Indonesia</h5>
                    <div class="form-row form-group">
                        <div class="col-md-12 mb-12">
                            <div class="panel-content">
                                <div class="alert alert-info" role="alert">
                                    <strong>Info!</strong> Total Plafond akhir yang direkomendasikan (Max) Rp. 1111
                                </div>
                                <table id="dt-facilityCCB" class="table table-bordered table-hover table-striped w-100">
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card border mb-g">
            <div class="col-xl-12 ">
                <!-- notice the additions of utility paddings and display properties on .card-header -->
                <div class="card-body">
                    <h5 class="card-title">Credit Facility In Other Bank
                        (IDEB Result)</h5>
                    <div class="form-row form-group">
                        <div class="col-md-12 mb-12">
                            <div class="panel-content" id="ideb-table"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       
        <div class="card border mb-g">
            <div class="col-xl-12">
                <!-- notice the additions of utility paddings and display properties on .card-header -->
                <div class="card-body">
                    <div class="panel-hdr bg-info-600">
                        <h2>
                            Credit Facility Evaluations
                        </h2>
                        <div class="panel-toolbar">
                        </div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-md-12 mb-12">
                            <div class="panel-container show">
                                <div class="panel-content">
                                    <textarea class="js-summernoteFacilityEvaluation" name="facilityEvaluation"
                                        id="saveFacilityEvaluation"></textarea>
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
                            Summary of Credit
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-info btn-sm mr-1 addCollateral"
                                onclick="getsummary(); return false;" tabindex="0"
                                data-toggle="modal" data-target="#"><span><i
                                        class="fal fa-sync mr-1"></i>Clear</span>
                            </button>
                        </div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-md-12 mb-12">
                            <div class="panel-container show">
                                <input type="hidden" name="isSummary" id="isSummary" value="">
                                <div class="panel-content">
                                    <textarea class="js-summernoteSummary" name="summary"
                                        id="saveSummary"><div class="summary"></div></textarea>
                                    <div class="mt-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="autoSaveSummary"
                                                checked="checked">
                                            <label class="custom-control-label" for="autoSaveSummary">Autosave changes
                                                to
                                                LocalStorage
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
        </div>

        <div
            class="panel-content border-faded border-left-0 border-right-0 border-bottom-0 d-flex flex-row align-items-center">
            <button class="btn btn-primary ml-auto btnPrev">Prev</button>
            <button class="btn btn-primary ml-3 " name="btnSave" type="submit">Next</button>
        </div>

    </form>
</div>
