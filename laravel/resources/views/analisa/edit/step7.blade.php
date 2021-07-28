<div class="tab-pane fade" id="finish" role="tabpanel">
    <div class="card border mb-g">
        <div class="col-xl-12">
            <!-- notice the additions of utility paddings and display properties on .card-header -->
            <div class="card-body">
                <h1 class="card-title">Checklist</h1>
                <div class="form-row form-group">
                    <div class="col-md-12 mb-12">
                        <div class="panel-container show">
                            <div class="frame-heading">make sure all data is correct.</div>
                            <div class="bg-warning-100 border border-warning rounded">
                                <div class="d-flex position-relative py-3 px-4"> <i
                                        class="fal fa-search color-success-700 position-absolute pos-left fs-lg px-3 py-2 mt-1 ml-4"></i>
                                    <input type="text" id="js_nested_list_filter"
                                        class="form-control shadow-inset-1 pl-6 border-success"
                                        placeholder="Filter Checklist">
                                </div>
                                <!-- nav-menu-reset will reset the font colors -->
                                <ul id="js_nested_list" class="list-group px-2 pb-2 nav-menu nav-menu-reset"
                                    {{--class="nav-menu nav-menu-reset nav-menu-compact bg-success-900 bg-success mb-sm-4 mb-md-0 rounded" --}}
                                    data-nav-accordion="true">
                                    <li class="list-group-item">
                                        <a href="#"
                                            data-filter-tags="user interface buttons compass action dropdown navigation sidebars">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="validate-Application-Information" checked="" disabled=""
                                                    data-filter-tags="Application-Information">
                                                <label class="custom-control-label"
                                                    for="defaultCheckedDisabled">Application Information</label>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#"
                                            data-filter-tags="user interface buttons compass action dropdown navigation sidebars">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="validate-Credit-Information" checked="" disabled=""
                                                    data-filter-tags="Credit-Information">
                                                <label class="custom-control-label" for="defaultCheckedDisabled">Credit
                                                    Information</label>
                                            </div>
                                        </a>
                                        <ul>
                                            <li class="list-group-item">
                                                <a href="#" data-filter-tags="user interface buttons">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="validate-Collaterals" checked="" disabled=""
                                                            data-filter-tags="Collaterals">
                                                        <label class="custom-control-label"
                                                            for="defaultCheckedDisabled">Collaterals</label>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="#" data-filter-tags="user interface buttons">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="validate-Credit-Facility" checked="" disabled=""
                                                            data-filter-tags="Credit-Facility">
                                                        <label class="custom-control-label"
                                                            for="defaultCheckedDisabled">Credit Facility</label>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="#" data-filter-tags="user interface buttons">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="validate-IDEB-Result" checked="" disabled=""
                                                            data-filter-tags="IDEB-Result">
                                                        <label class="custom-control-label"
                                                            for="defaultCheckedDisabled">Credit Facility In Other Bank
                                                            (IDEB Result)</label>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="#" data-filter-tags="user interface buttons">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="validate-Summary-Credit" checked="" disabled=""
                                                            data-filter-tags="Summary-Credit">
                                                        <label class="custom-control-label"
                                                            for="defaultCheckedDisabled">Summary of Credit</label>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#"
                                            data-filter-tags="user interface buttons compass action dropdown navigation sidebars">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="validate-Terms-Condition" checked="" disabled=""
                                                    data-filter-tags="Terms-Condition">
                                                <label class="custom-control-label" for="defaultCheckedDisabled">Terms
                                                    and Condition</label>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#"
                                            data-filter-tags="user interface buttons compass action dropdown navigation sidebars">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="validate-Analysis" checked="" disabled=""
                                                    data-filter-tags="Analysis">
                                                <label class="custom-control-label"
                                                    for="defaultCheckedDisabled">Analysis</label>
                                            </div>
                                        </a>
                                        <ul>
                                            <li class="list-group-item">
                                                <a href="#" data-filter-tags="user interface buttons">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="validate-Analysis-of-Credit" checked="" disabled=""
                                                            data-filter-tags="Analysis-of-Credit">
                                                        <label class="custom-control-label"
                                                            for="defaultCheckedDisabled">Analysis of Credit</label>
                                                    </div>
                                                </a>
                                                <ul>
                                                    <li class="list-group-item">
                                                        <a href="#" data-filter-tags="user interface buttons">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="validate-Business-Activities" checked=""
                                                                    disabled="" data-filter-tags="Business-Activities">
                                                                <label class="custom-control-label"
                                                                    for="defaultCheckedDisabled">Business
                                                                    Activities</label>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <a href="#" data-filter-tags="user interface buttons">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="validate-Analysis-Debtor-Buyer-Supplier-Group"
                                                                    checked="" disabled=""
                                                                    data-filter-tags="Analysis-Debtor-Buyer-Supplier-Group">
                                                                <label class="custom-control-label"
                                                                    for="defaultCheckedDisabled">Analysis Debtor, Buyer,
                                                                    Supplier, Group</label>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <a href="#" data-filter-tags="user interface buttons">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="validate-Guarantor" checked="" disabled=""
                                                                    data-filter-tags="Guarantor">
                                                                <label class="custom-control-label"
                                                                    for="defaultCheckedDisabled">Guarantor</label>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="#" data-filter-tags="user interface buttons">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="validate-Analysis-of-Financial" checked="" disabled=""
                                                            data-filter-tags="Analysis-of-Financial">
                                                        <label class="custom-control-label"
                                                            for="defaultCheckedDisabled">Analysis of Financial</label>
                                                    </div>
                                                </a>
                                                <ul>
                                                    <li class="list-group-item">
                                                        <a href="#" data-filter-tags="user interface buttons">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="validate-Spreadsheet-File" checked=""
                                                                    disabled="" data-filter-tags="Spreadsheet-File">
                                                                <label class="custom-control-label"
                                                                    for="defaultCheckedDisabled">Upload Spreadsheet
                                                                    File</label>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <a href="#" data-filter-tags="user interface buttons">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="validate-Output-Spreadsheet" checked=""
                                                                    disabled="" data-filter-tags="Output-Spreadsheet">
                                                                <label class="custom-control-label"
                                                                    for="defaultCheckedDisabled">Output Spreadsheet
                                                                    File</label>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <a href="#" data-filter-tags="user interface buttons">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="validate-Financial-Note" checked="" disabled=""
                                                                    data-filter-tags="Financial-Note">
                                                                <label class="custom-control-label"
                                                                    for="defaultCheckedDisabled">Financial Note</label>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="#" data-filter-tags="user interface buttons">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="validate-Analysis-Risk" checked="" disabled=""
                                                            data-filter-tags="Analysis-Risk">
                                                        <label class="custom-control-label"
                                                            for="defaultCheckedDisabled">Analysis of Risk</label>
                                                    </div>
                                                </a>
                                                <ul>
                                                    <li class="list-group-item">
                                                        <a href="#" data-filter-tags="user interface buttons">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="validate-RAC" checked="" disabled=""
                                                                    data-filter-tags="RAC">
                                                                <label class="custom-control-label"
                                                                    for="defaultCheckedDisabled">RAC</label>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <a href="#" data-filter-tags="user interface buttons">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input"
                                                                    id="validate-Risk-Analysis-Note" checked=""
                                                                    disabled="" data-filter-tags="Risk-Analysis-Note">
                                                                <label class="custom-control-label"
                                                                    for="defaultCheckedDisabled">Risk Analysis
                                                                    Note</label>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="filter-message js-filter-message m-0 text-left pl-4 py-3 fw-500"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form class="stepAll" id="step" enctype="multipart/form-data" method="POST">@csrf
       
       
            <div id="aplikasiDocument"></div>
            <div id="debiturDocument"></div>
            <div class="card border mb-g">
                <div class="col-xl-12">
                    <!-- notice the additions of utility paddings and display properties on .card-header -->
                    <div class="card-body">
                        <div class="panel-hdr">
                            <h2>
                                Conclusion & Recommendation
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
                                    <div class="panel-content">@if(isset($getApp->data->recommendation))
                                        <input type="hidden" name="isRecommendation" id="isRecommendation"
                                            value="{{$getApp->data->recommendation}}">@endif
                                        <textarea class="js-summernoteConclusion" name="conclusion"
                                            id="saveConclusion"></textarea>
                                        <div class="mt-3">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="autoSaveConclusion"
                                                    checked="checked">
                                                <label class="custom-control-label" for="autoSaveConclusion">Autosave
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
       
            @php($flow = 7) @if($flow == 7)
        <div class="card border mb-g">
            <div class="col-xl-12">
                <!-- notice the additions of utility paddings and display properties on .card-header -->
                <div class="card-body">
                    <div class="panel-hdr bg-info-600">
                        <h2>
                            Conclusion & Recommendation Reviewer
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-info btn-sm mr-1 "
                                onclick="getRecommendation(); return false;" tabindex="0"
                                data-toggle="modal" data-target="#"><span><i
                                        class="fal fa-sync mr-1"></i>Clear</span>
                            </button>
                        </div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-md-12 mb-12">
                            <div class="panel-container show">
                                <div class="panel-content">
                                    <textarea class="js-summernoteConclusionReviewer" name="conclusionReviewer" id="saveConclusionReviewer"></textarea>
                                    <div class="mt-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="autoSaveConclusionReviewer"
                                                checked="checked">
                                            <label class="custom-control-label" for="autoSaveConclusionReviewer">Autosave
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
    @elseif($flow == 4)
    <div class="card border mb-g">
        <div class="col-xl-12">
            <!-- notice the additions of utility paddings and display properties on .card-header -->
            <div class="card-body">
                <div class="panel-hdr bg-success-600">
                    <h2>
                        Conclusion & Recommendation Regional
                    </h2>
                    <div class="panel-toolbar">
                        <button class="btn btn-info btn-sm mr-1 "
                            onclick="getRecommendation({{$typeApplication->id}}); return false;" tabindex="0"
                            data-toggle="modal" data-target="#"><span><i
                                    class="fal fa-sync mr-1"></i>Clear</span>
                        </button>
                    </div>
                </div>
                <div class="form-row form-group">
                    <div class="col-md-12 mb-12">
                        <div class="panel-container show">
                            <div class="panel-content">
                                <textarea class="js-summernoteConclusionRegional" name="conclusionRegional" id="saveConclusionRegional"></textarea>
                                <div class="mt-3">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="autoSaveConclusionRegional"
                                            checked="checked">
                                        <label class="custom-control-label" for="autoSaveConclusionRegional">Autosave
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
    @endif
    <div class="panel-content border-faded border-left-0 border-right-0 border-bottom-0 d-flex flex-row align-items-center">
   
            <button class="btn btn-dark ml-1 btn-finish-apk" onclick="window.location.href='#'" name="btnSave">Back to Tracking</button>
       
    </div>
    </form>
</div>
