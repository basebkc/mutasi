<div class="tab-pane fade" id="financial_analysis" role="tabpanel">
    <form class="stepAll" id="step5" enctype="multipart/form-data" method="POST">
        @csrf
       
        <div id="financialDocument"></div>
        <div id="financialOutput"></div>
        <div class="card border mb-g">
            <div class="col-xl-12">
                <!-- notice the additions of utility paddings and display properties on .card-header -->
                <div class="card-body">
                    <div class="panel-hdr">
                        <h2>
                            Financial Analysis
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
                        <input type="hidden" name="isFinancial" id="isFinancial" value="">
                        <textarea class="js-summernoteAnalysisFinancial" id="saveAnalysisFinancial"
                            name="analysisFinancial"></textarea>
                        <div class="mt-3">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="autoSaveAnalysisFinancial"
                                    checked="checked">
                                <label class="custom-control-label" for="autoSaveAnalysisFinancial">Autosave changes
                                    to LocalStorage <span class="fw-300">(every 3 seconds)</span>
                                </label>
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
                            Analysis of Financial Evaluations
                        </h2>
                        <div class="panel-toolbar">
                            {{--                                                                                <button class="btn btn-info btn-sm mr-1 addCollateral" onclick="getsummary({{$typeApplication->id}});
                            return false;" tabindex="0" data-toggle="modal" data-target="#"><span>
                                <i--}}
                                    {{--                                                                                            class="fal fa-sync mr-1"></i>Clear</span>--}}
                                    {{--                                                                                </button>--}}
                                    </div> </div> <div class="form-row form-group">
                                    <div class="col-md-12 mb-12">
                                        <div class="panel-container show">
                                            {{--                                                                                    @if(isset($getApp->data->summaryCredit))--}}
                                            {{--                                                                                        <input type="hidden" name="isSummary" id="isSummary" value="{{$getApp->data->summaryCredit}}">@endif--}}
                                            <div class="panel-content">
                                                <textarea class="js-summernoteFinancialCreditEvaluation"
                                                    name="financialCreditEvaluation"></textarea>
                                            </div>
                                        </div>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <div
                class="panel-content border-faded border-left-0 border-right-0 border-bottom-0 d-flex flex-row align-items-center">
                <button class="btn btn-primary ml-auto btnPrev">Prev</button>
                <button class="btn btn-primary ml-3 btnNext" name="btnSave" type="submit">Next</button>
            </div>
    </form>
</div>
