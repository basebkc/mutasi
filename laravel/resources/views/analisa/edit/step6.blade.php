<div class="tab-pane fade" id="risk_analysis" role="tabpanel">
    <form class="stepAll" id="step6" enctype="multipart/form-data" method="POST">
        @csrf
       
        <div class="card border mb-g">
            <div class="col-xl-12">
                <!-- notice the additions of utility paddings and display properties on .card-header -->
                <div class="card-body">
                    <h5 class="card-title">RAC</h5>
                    <div class="form-row form-group">
                        <div class="col-md-12 mb-12">
                            <br>
                            <label class="form-label" for="validationCustom02">Category Of Industry<span
                                    class="text-danger">*</span>
                            </label>
                            <select class="custom-select" id="categoryIndustry" name="rac" required="">
                                @if(env('APP_SEGMENT_CODE') == "CMX")
                                <option value="5" selected>Commercial Express</option>
                                @else
                                <option value="" disabled selected="">Select Category</option>
                                <option value="1">Manufacturing</option>
                                <option value="2">Land Transportation</option>
                                <option value="3">General Trading</option>
                                <option value="4">Developer</option>
                                @endif
                            </select>
                            <div class="invalid-feedback">Please provide a valid state.</div>
                            <div class="valid-feedback">Looks</div>
                            <input type="hidden" name="racData" id="racData"
                                value="@if(isset($getApp->data->riskAnalysis->rac)){{json_encode($getApp->data->riskAnalysis->rac)}}@endif">
                            <div id="rac"></div>
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
                        <h2> Risk Analysis</h2>
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
{{--                                    @if(isset($getApp->data->riskAnalysis->note))--}}
                                    <input type="hidden" name="isAnalysisRisk" id="isAnalysisRisk" value="">
{{--                                    @endif--}}
                                    <textarea class="js-summernoteAnalysisRisk" name="analysisRisk"
                                        id="saveAnalysisRisk"></textarea>
                                    <div class="mt-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="riskAnalysis" class="custom-control-input"
                                                id="autoSaveAnalysisRisk" checked="checked">
                                            <label class="custom-control-label" for="autoSaveAnalysisRisk">Autosave
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
        @php($flow = 7)
        @if($flow == 7)
        <div class="card border mb-g">
            <div class="col-xl-12">
                <!-- notice the additions of utility paddings and display properties on .card-header -->
                <div class="card-body">
                    <div class="panel-hdr bg-info-600">
                        <h2>
                            Analysis of Risk Evaluations
                        </h2>
                        <div class="panel-toolbar">
                            </button>--}}
                        </div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-md-12 mb-12">
                            <div class="panel-container show">
                                <div class="panel-content">
                                    <textarea class="js-summernoteRiskCreditEvaluation"
                                        name="riskCreditEvaluation"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <div class="panel-content border-faded border-left-0 border-right-0 border-bottom-0 d-flex flex-row align-items-center">
            <button class="btn btn-primary ml-auto btnPrev">Prev</button>
            <button class="btn btn-primary ml-3 btnNext" name="btnSave" type="submit">Next</button>
        </div>
    </form>
</div>
