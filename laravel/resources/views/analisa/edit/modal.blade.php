<div class="modal fade" id="credit" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lx" id="callAgunan" role="document" style="max-width: 80%">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Credit Facility</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i
                            class="fal fa-times"></i></span>
                </button>
            </div>
            <div class="panel-hdr">
                <h2></h2>
                <div class="panel-toolbar">
                    <h5 class="m-0"></h5>
                </div>
                <div class="panel-toolbar ml-0">
                    <h5 class="m-0">
                        {{--                                <input type="reset" value="Reset"/>--}}
                        <button type="button" onclick="resetFormFacility('addFacility',2); return false;">Reset</button>
                    </h5>
                </div>
            </div>
            <form id="addFacility" class="needs-validation" enctype="multipart/form-data" method="POST">
                <div class="modal-body">
                    <div class="panel-content">
                        <div class="panel-container show">
                            <div class="panel-content">
                                <div class="form-row form-group">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="validationCustom01">Name of Facility<span
                                                class="text-danger">*</span>
                                        </label>
                                        <select class="custom-select nameFacilitySelected" name="nameFacility" id="nameFacility" required="">
                                        </select>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="validationCustom01">Collateral<span
                                                class="text-danger">*</span>
                                        </label>
                                        <select class="custom-select" id="collateral" name="collateral" required=""
                                            multiple></select>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label" for="validationCustom01">Type of Facility<span
                                                class="text-danger">*</span>
                                        </label>
                                        <select class="custom-select typeFacilitySelected" name="typeFacility" id="typeFacility" required="">

                                        </select>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label" for="validationCustom01">Type of Loan<span
                                                class="text-danger">*</span>
                                        </label>
                                        <select class="custom-select" name="typeLoan" id="typeLoan" required="">
                                            <option value="" disabled selected>Select</option>
                                            <option value="D">D</option>
                                            <option value="D1">D1</option>
                                            <option value="I">I</option>
                                            <option value="I1">I1</option>
                                            <option value="S">S</option>
                                            <option value="F">F</option>
                                            <option value="SL">SL</option>
                                        </select>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label" for="validationCustom01">Currency<span
                                                class="text-danger">*</span>
                                        </label>
                                        <select class="custom-select currencySelected" name="currency" id="currency"
                                            data-form="#addFacility" required="">
                                            <option value="" disabled selected>Select</option>
                                        </select>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label" for="validationCustom01">Existing Limit<span
                                                class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control currency" name="existingLimit"
                                            id="existingLimit2" placeholder="" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label" for="validationCustom01">Purposed Limit<span
                                                class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control currency" name="purposedLimit"
                                            id="purposedLimit2" placeholder="" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label" for="validationCustom01">Final Limit<span
                                                class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control currency" name="finalLimit"
                                            id="finalLimit2" placeholder="" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label" for="validationCustom01">Existing Interest<span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text">%</span>
                                            </div>
                                            <input type="text" data-type="currency" class="form-control"
                                                name="existingInterest" placeholder="" required>
                                        </div>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label" for="validationCustom01">Purposed Interest<span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text">%</span>
                                            </div>
                                            <input type="text" class="form-control" data-type="currency"
                                                name="purposedInterest" placeholder="" required>
                                        </div>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label" for="validationCustom01">Outstanding<span
                                                class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control currency" name="outstanding"
                                            placeholder="" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label" for="validationCustom01">Repaid<span
                                                class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control currency" name="repaid" placeholder=""
                                            required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label" for="validationCustom01">Provision Fee<span
                                                class="text-danger">*</span>
                                        </label>
                                        <input type="text" name="provisionFee" id="provisionFee2"
                                            class="form-control currency" placeholder="" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label" for="validationCustom01">Admin Fee<span
                                                class="text-danger">*</span>
                                        </label>
                                        <div id="totaladmin">
                                            <input class="form-control currency" type="text" name="adminFee"
                                                id="adminFee2">
                                        </div>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label" for="validationCustom01">Tenor<span
                                                class="text-danger">*</span>
                                        </label>
                                        <div class="input-group">
                                            <select class="form-control" id="type_tenor" name="typeTenor">
                                                <option value="" selected disabled="">Select</option>
                                                <option value="1">Between Date</option>
                                                <option value="2">In Month</option>
                                                <option value="3">Other</option>
                                            </select>
                                            <div id="tenor"></div>
                                            <div class="input-group-append">
                                                <span class="input-group-text fs-xl">
                                                    <i class="fal fa-calendar"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label" for="validationCustom01">Purpose<span
                                                class="text-danger">*</span>
                                        </label>
                                        <textarea class="form-control" name="tujuan" placeholder="" required=""
                                            rows="3"></textarea>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <a href="#">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade " id="editFacility" >
    <div class="modal-dialog modal-lx" id="callAgunan" role="document" style="max-width: 80%">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tittle-facility">Edit Credit Facility</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fal fa-times"></i></span>
                </button>
            </div>
            <div class="panel-hdr">
                <h2></h2>
                <div class="panel-toolbar">
                    <h5 class="m-0"></h5>
                </div>
                <div class="panel-toolbar ml-0">
                    <h5 class="m-0">
                        {{--                                <button type="reset" value="Reset" onclick="resetFormFacility('editFacilityForm',2); return false;"/>--}}
                        <button type="button" onclick="resetFormFacility('editFacilityForm',2); return false;">Reset</button>
                    </h5>
                </div>
            </div>
            <form id="editFacilityForm" class="needs-validation" enctype="multipart/form-data" method="POST">
                <div class="modal-body">
                    <div class="panel-content">
                        <div class="panel-container show">
                            <div class="panel-content">
                                <div class="form-row form-group">
                                    <input type="hidden" name="id" id="id_facility">
                                    <input type="hidden" name="isGetOne" id="isGetOne">
                                    <div id="arrayHT"></div>
                                    <div class="col-md-5 mb-3">
                                        <label class="form-label" for="nameFacility">Name of Facility<span class="text-danger">*</span>
                                        </label>
                                        <select class="custom-select nameFacilitySelected" name="nameFacility" id="nameFacility" required="">
                                        </select>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-5 mb-3">
                                        <label class="form-label" for="collateral_edit">Collateral<span class="text-danger">*</span>
                                        </label>
                                        <select class="custom-select" id="collateral_edit" name="collateral" required="" multiple></select>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <label class="form-label" for="validationCustom033">Use for HT details<span class="text-danger">*</span>
                                        </label>
                                        <a data-toggle="modal" href="#modal-detail-ht" class="btn btn-primary btn-detail-ht">Detail</a>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label" for="validationCustom01">Type of Facility<span class="text-danger">*</span>
                                        </label>
                                        <div class="getOne">
                                            <select class="custom-select typeFacilitySelected" name="typeFacility" id="typeFacility" required="">

                                            </select>
                                        </div>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label" for="validationCustom01">Type of Loan<span class="text-danger">*</span>
                                        </label>
                                        <select class="custom-select" name="typeLoan" id="typeLoan" required="">
                                            <option value="" disabled selected>Select</option>
                                            <option value="D">D</option>
                                            <option value="D1">D1</option>
                                            <option value="I">I</option>
                                            <option value="I1">I1</option>
                                            <option value="S">S</option>
                                            <option value="F">F</option>
                                            <option value="SL">SL</option>
                                        </select>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label" for="currencyEdit">Currency<span class="text-danger">*</span>
                                        </label>
                                        <select class="custom-select currencySelected" name="currency" id="currencyEdit" required="">
                                        </select>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label" for="validationCustom01">Existing Limit<span class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control uang" name="existingLimit" id="existingLimit" data-type="currency" placeholder="" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label" for="validationCustom01">Purposed Limit<span class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control" name="purposedLimit" id="purposedLimit" data-type="currency" placeholder="" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label" for="validationCustom01">Final Limit<span class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control" name="finalLimit" id="finalLimit" data-type="currency" placeholder="" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label" for="validationCustom01">Existing Interest<span class="text-danger">*</span>
                                        </label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text">%</span>
                                            </div>
                                            <input type="text" data-type="currency" value="0" class="form-control" id="existingInterest" name="existingInterest" placeholder="" required>
                                        </div>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label" for="validationCustom01">Purposed Interest<span class="text-danger">*</span>
                                        </label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text">%</span>
                                            </div>
                                            <input type="text" class="form-control" data-type="currency" value="0" id="purposedInterest" name="purposedInterest" placeholder="" required>
                                        </div>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label" for="validationCustom01">Outstanding<span class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control" name="outstanding" id="outstanding" data-type="currency" placeholder="" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label" for="validationCustom01">Repaid<span class="text-danger">*</span>
                                        </label>
                                        <input type="text" class="form-control" name="repaid" id="repaid" data-type="currency" placeholder="" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label" for="validationCustom01">Provision Fee<span class="text-danger">*</span>
                                        </label>
                                        <input type="text" name="provisionFee" id="provisionFee" class="form-control uang" data-type="currency" placeholder="" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label" for="validationCustom01">Admin Fee<span class="text-danger">*</span>
                                        </label>
                                        <input class="form-control adminFeeEdit" type="text" value="" name="adminFee" id="adminFee" data-type="currency">
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label" for="validationCustom01">Tenor<span class="text-danger">*</span>
                                        </label>
                                        <div class="input-group">
                                            <select class="form-control" id="type_tenor2" name="typeTenor">
                                                <option value="" selected disabled="">Select</option>
                                                <option value="1">Between Date</option>
                                                <option value="2">In Month</option>
                                                <option value="3">Other</option>
                                            </select>
                                            <div id="tenor2"></div>
                                            <div class="input-group-append"> <span class="input-group-text fs-xl">
                                                                        <i class="fal fa-calendar"></i>
                                                                    </span>
                                            </div>
                                        </div>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label class="form-label" for="validationCustom01">Purpose<span class="text-danger">*</span>
                                        </label>
                                        <textarea class="form-control" id="tujuan" name="tujuan" placeholder="" required="" rows="3"></textarea>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <a href="#">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div id="lock-modal"></div>
                <div id="loading-circle"></div>
            </form>
        </div>
    </div>
</div>
<div class="modal" id="modal-detail-ht" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">HT Details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div><div class="container"></div>
            <div class="modal-body">
                <form id="detailHT" enctype="multipart/form-data" method="POST">
                    <div class="range-detail-ht">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <a href="#">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{--Credit Facility end--}}


{{--collateral start--}}
<div class="modal fade" id="pilih" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document" style="max-width: 80%">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Collateral</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i
                            class="fal fa-times"></i></span>
                </button>
            </div>
            <form id="addCollateral" class="needs-validation" enctype="multipart/form-data" method="POST">
                <div class="panel-hdr">
                    <h2></h2>
                    <div class="panel-toolbar">
                        <h5 class="m-0"></h5>
                    </div>
                    <div class="panel-toolbar ml-0">
                        <h5 class="m-0">
                            <input type="reset" value="Reset" />
                        </h5>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="panel-content">
                        <div class="panel-container show">
                            <div class="panel-content">
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label" for="validationDefault02">Type</label>
                                        <select class="custom-select" id="typeColleteral" name="type">
                                            <option value="" disabled selected>Select</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label">Pledge of Coll – HT</label>
                                        <div class="input-group valid">
                                            <div class="input-group-prepend"><span class="input-group-text">Rp. </span>
                                            </div>
                                            <input type="text" placeholder="eg: 10000" data-type="currency" name="ht"
                                                class="form-control" required="">
                                            <div></div>
                                        </div>
                                    </div>
                                </div>
                                <div id="dataCollateral"></div>
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label" for="">Collateral Detail</label>
                                        <textarea class="js-hint2emoji" name="detail"></textarea>{{--
											<input type="email" id="email" pattern=".+@tutsplus\.com|.+@envato\.com">--}}</div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
{{--collateral end--}}

{{--collateral start--}}
<div class="modal fade" id="editAgunan" >
    <div class="modal-dialog modal-lg" role="document" style="max-width: 80%">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Collateral</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i
                            class="fal fa-times"></i></span>
                </button>
            </div>
            <form id="addCollateral" class="needs-validation" enctype="multipart/form-data" method="POST">
                <div class="panel-hdr">
                    <h2></h2>
                    <div class="panel-toolbar">
                        <h5 class="m-0"></h5>
                    </div>
                    <div class="panel-toolbar ml-0">
                        <h5 class="m-0">
                            <input type="reset" value="Reset" />
                        </h5>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="panel-content">
                        <div class="panel-container show">
                            <div class="panel-content" id="edit-collateral"></div>
                            <div id="collateralDocument"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary btn-submit-coll">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
{{--collateral end--}}

{{--appraisal start--}}
<div class="modal fade" id="appraisal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document" style="max-width: 80%">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Appraisal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i
                            class="fal fa-times"></i></span>
                </button>
            </div>
            <form id="appraisal" class="needs-validation" enctype="multipart/form-data" method="POST">
                <div class="panel-tag">Make sure collateral data to be appraised is correct (maximum : 3 times requests)
                </div>{{--
					<div class="panel-hdr">--}} {{--
						<h2></h2>--}} {{--
						<div class="panel-toolbar">--}} {{--
							<h5 class="m-0"></h5>--}} {{--</div>--}} {{--
						<div class="panel-toolbar ml-0">--}} {{--
							<h5 class="m-0">--}}
                {{--                                    <input type="reset" value="Reset" />--}}
                {{--                                </h5>--}} {{--</div>--}} {{--</div>--}}
                <div class="modal-body">
                    <div class="panel-content">
                        <div class="panel-container show">
                            <div class="panel-content" id="js-contacts"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
{{--appraisal end --}}


{{--list of terms and condition latest credit proposal start--}}
{{--Modal Add Data Terms--}}
<div class="modal fade" id="addTermsModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document" style="max-width: 80%">
        <div class="modal-content">
            <form id="addTerms" enctype="multipart/form-data" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title">Add Terms and Condition new credit proposal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="panel-content">
                        <div class="panel-container show">
                            <div class="panel-content">
                                <div class="form-group row">
                                    <input type="hidden" name="email" value="{{session()->get('me')}}">
                                    <div class="col-md-11">
                                        <div class="input-group">
                                            <input type="text" class="form-control" aria-label="Text input with checkbox" name="document_name" id="document_name" placeholder="Nama Syarat">
                                            <div class="input-group-text">
                                                <div class="custom-control d-flex custom-switch">
                                                    <input name="is_file" id="is_file" type="checkbox" class="custom-control-input">
                                                    <input name='is_file' id='is_file_hidden' type='hidden' value='off' >
                                                    <label class="custom-control-label fw-500" for="is_file">Dokumen ?</label>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="text" class=" form-control" aria-label="Text input with checkbox" name="description" id="description" placeholder="Deskripsi">
                                        <div class="input-group">
                                            <select class="form-control" name="covenant_category" id="covenant_category" >
                                                <option value="0" selected>Kategori Syarat</option>
                                                <option value="1">Sebelum Akad</option>
                                                <option value="2">Saat Akad</option>
                                                <option value="3">Sesudah Akad</option>
                                                <option value="4">Syarat Pencairan</option>
                                            </select>
                                            <select class="col-2 form-control" name="is_recur" id="is_recur">
                                                <option value="0">No Repeat</option>
                                                <option value="1">per Semester</option>
                                                <option value="2">per Quartal</option>
                                                <option value="4">per Bulan</option>
                                                {{-- <option value="5">per Hari</option> --}}
                                                <option value="6">per Tahun</option>
                                            </select>
                                            <select class="form-control" name="type_due_date" id="type_due_date">
                                                <option value="date">Due Date</option>
                                                <option value="akad">Day of Akad</option>
                                                <option value="disburse">Day of Disbursment</option>
                                            </select>
                                            <input id="input-due-date" type="date" class="col-3 form-control"
                                                   placeholder="Due Date" name="due_date">
                                        </div>
                                    </div>
                                    <div class="col-md-1" style="padding-left: 0px;">
                                        <button id="btn_add_terms" type="submit" class="btn btn-primary btn-lg btn-icon" style="width: 100%; height: 100%; ">
                                            <i class="fas fa-3x fa-plus" style="vertical-align: middle;"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Show Data -->
                    </div>
                </div>
                <div class="modal-footer">
                    {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                    {{--  <a href="#">
                         <button type="submit" class="btn btn-primary">Submit</button>
                     </a> --}}
                </div>
            </form>
        </div>
    </div>
</div>

{{--Modal Edit Data Terms--}}
<div class="modal fade" id="editTermsModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document" style="max-width: 80%">
        <div class="modal-content">
            <form id="formEditTerms" enctype="multipart/form-data" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title">Add Terms and Condition new credit proposal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="panel-content">
                        <div class="panel-container show">
                            <div class="panel-content">
                                <div class="form-group row">
                                    <input type="hidden" name="email" value="{{session()->get('me')}}">
                                    <input type="hidden" name="terms_id" id="edit_terms_id">
                                    <div class="col-md-11">
                                        <div class="input-group">
                                            <input type="text" class="form-control" aria-label="Text input with checkbox" name="document_name" id="edit_document_name" placeholder="Nama Syarat">
                                            <div class="input-group-text">
                                                <div class="custom-control d-flex custom-switch">
                                                    <input name="is_file" id="edit_is_file" type="checkbox" class="custom-control-input">
                                                    <input name='is_file' id='edit_is_file_hidden' type='hidden' value='off' >
                                                    <label class="custom-control-label fw-500" for="edit_is_file">Dokumen ?</label>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Text input with checkbox" name="description" id="edit_description" placeholder="Deskripsi">
                                        <div class="input-group">
                                            <select class="form-control" name="covenant_category" id="edit_covenant_category" >
                                                <option value="0" selected>Kategori Syarat</option>
                                                <option value="1">Sebelum Akad</option>
                                                <option value="2">Saat Akad</option>
                                                <option value="3">Sesudah Akad</option>
                                                <option value="4">Syarat Pencairan</option>
                                            </select>
                                            <select class="col-2 form-control" name="is_recur" id="edit_is_recur">
                                                <option value="0">No Repeat</option>
                                                <option value="1">per Semester</option>
                                                <option value="2">per Quartal</option>
                                                <option value="4">per Bulan</option>
                                                {{-- <option value="5">per Hari</option> --}}
                                                <option value="6">per Tahun</option>
                                            </select>
                                            <select class="form-control" name="type_due_date" id="edit_type_due_date">
                                                <option value="date">Due Date</option>
                                                <option value="akad">Day of Akad</option>
                                                <option value="disburse">Day of Disbursment</option>
                                            </select>
                                            <input id="edit_input-due-date" type="date" class="col-3 form-control" placeholder="Due Date" name="due_date">
                                        </div>
                                    </div>
                                    <div class="col-md-1" style="padding-left: 0px;">
                                        <button type="submit" class="btn btn-primary btn-lg btn-icon" style="width: 100%; height: 100%; ">
                                            <i class="fas fa-3x fa-plus" style="vertical-align: middle;"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Show Data -->
                    </div>
                </div>
                <div class="modal-footer">
                    {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                    {{--  <a href="#">
                         <button type="submit" class="btn btn-primary">Submit</button>
                     </a> --}}
                </div>
            </form>
        </div>
    </div>
</div>

{{-- Modal Upload Data Terms --}}
<div class="modal fade" id="uploadTermsModal" tabindex="-1" role="dialog" aria-labelledby="uploadTermsModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Upload File</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="uploadTerms" enctype="multipart/form-data" method="POST">
                <div class="modal-body">
                    <div class="form-group ">
                        @csrf
                        <input type="hidden" name="terms_id" id="upload_terms_id">
                        <input type="hidden" name="app_id" id="upload_app_id">
                        <input type="hidden" name="email" value="{{session()->get('me')}}">
                        <label class="form-label">Nama Dokumen : </label>
                        <input type="text" class="form-control" disabled id="upload_document_name" value="document_name">
                        <br>
                        <label class="form-label">Upload Dokumen : </label>
                        <div class="custom-file ">
                            <input type="file" class="custom-file-input" name="terms_file">
                            <label class="custom-file-label" for="terms_file">Choose file</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    {{--  <button type="button" class="btn btn-secondary waves-effect waves-themed" data-dismiss="modal">Close</button> --}}
                    <button type="submit" class=" btn btn-primary waves-effect waves-themed">Upload</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{--list of terms and condition latest credit proposal end--}}

{{--add terms and condition--}}
<div class="modal fade" id="new" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document" style="max-width: 80%">
        <div class="modal-content">
            <form id="formcovenant" enctype="multipart/form-data" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title">Add Terms and Condition new credit proposal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="panel-content">
                        <div class="panel-container show">
                            <div class="panel-content">
                                    <div class="form-group row">
                                        {{--     <input type="hidden" name="email" value="{{Auth::user()->email}}"> --}}
                                        <div class="col-md-11">
                                            <div class="input-group">
                                                <input type="text" class="form-control" aria-label="Text input with checkbox" name="document_name" id="document_name" placeholder="Nama Syarat">
                                                <div class="input-group-text">
                                                    <div class="custom-control d-flex custom-switch">
                                                        <input name="is_file" id="is_file" type="checkbox" class="custom-control-input">
                                                        <input name='is_file' id='is_file_hidden' type='hidden' value='off' >
                                                        <label class="custom-control-label fw-500" for="is_file">Dokumen ?</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="text" class=" form-control" aria-label="Text input with checkbox" name="description" id="description" placeholder="Deskripsi">
                                            <div class="input-group">
                                                <select class="form-control" name="covenant_category" id="covenant_category" >
                                                    <option value="0" selected>Kategori Syarat</option>
                                                    <option value="1">Sebelum Akad</option>
                                                    <option value="2">Saat Akad</option>
                                                    <option value="3">Sesudah Akad</option>
                                                    <option value="4">Syarat Pencairan</option>
                                                </select>
                                                <select class="col-2 form-control" name="is_recur" id="is_recur">
                                                    <option value="0">No Repeat</option>
                                                    <option value="1">per Semester</option>
                                                    <option value="2">per Quartal</option>
                                                    <option value="4">per Bulan</option>
                                                    {{-- <option value="5">per Hari</option> --}}
                                                    <option value="6">per Tahun</option>
                                                </select>
                                                <select class="form-control" name="type_due_date" id="type_due_date">
                                                    <option value="date">Due Date</option>
                                                    <option value="akad">Day of Akad</option>
                                                    <option value="disburse">Day of Disbursment</option>
                                                </select>
                                                <input id="input-due-date" type="date" class="col-3 form-control"
                                                    placeholder="Due Date" name="due_date">
                                            </div>
                                        </div>
                                        <div class="col-md-1" style="padding-left: 0px;">
                                            <button id="btn_add_terms" type="submit" class="btn btn-primary btn-lg btn-icon float-right" style="width: 100%; height: 100%; ">
                                                <i class="fas fa-3x fa-plus" style="vertical-align: middle;"></i></button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <!-- Modal Show Data -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="#">
                        <button type="submit" id="btn_add_sebelum_akad" class="btn btn-primary">Submit</button>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
{{--ini--}}

<div class="modal fade" id="uploadCovenantModal" tabindex="-1" role="dialog" aria-labelledby="uploadCovenantModal"
    aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="uploadCovenantModal">Upload File</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span
                        aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="covUpload" enctype="multipart/form-data" method="POST">
                <div class="modal-body">
                    <div class="form-group ">@csrf
                        <input type="hidden" id="covenant_id" name="covenant_id" value="1">
                        <label class="form-label ">Nama Dokumen :</label>
                        <input type="text" class="form-control" disabled id="cov_name" value="document_name">
                        <br>
                        <label class=" form-label ">Upload Dokumen :</label>
                        <div class="custom-file ">
                            <input type="file" class="custom-file-input" name="cov_file">
                            <label class="custom-file-label" for="cov_file">Choose file</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">{{--
						<button type="button" class="btn btn-secondary waves-effect waves-themed" data-dismiss="modal">Close</button>--}}
                    <button type="submit" class=" btn btn-primary waves-effect waves-themed">Upload</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{--List of Terms and Condition new proposal end--}}

{{--shareholders start--}}
<div class="modal fade" id="shareholders" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Shareholders</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i
                            class="fal fa-times"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="panel-content">
                    <div class="panel-container show">
                        <div class="panel-content">
                            <form>
                                <div class="form-row">
                                    <div class="col-md-6 mb-6">
                                        <label class="form-label" for="">Name</label>
                                        <input type="text" class="form-control " placeholder="" required="">
                                    </div>
                                    <div class="col-md-6 mb-6">
                                        <label class="form-label" for="validationDefault02">Address</label>
                                        <input type="text" class="form-control " placeholder="" required="">
                                    </div>{{--</div>--}} {{--
									<div class="form-row">--}}
                                    <div class="col-md-6 mb-6">
                                        <label class="form-label" for="">Positon</label>
                                        <input type="text" class="form-control " placeholder="" required="">
                                    </div>
                                    <div class="col-md-6 mb-6">
                                        <label class="form-label" for="validationDefault02">Shareholding (%)</label>
                                        <input type="text" class="form-control " placeholder="" required="">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <a href="#">
                            <button type="button" class="btn btn-primary">Submit</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{--shareholders end--}}

{{--Detail Collateral start--}}

{{--Guarantor start--}}
<div class="modal fade" id="guarantor" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Guarantor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i
                            class="fal fa-times"></i></span>
                </button>
            </div>
            <form id="guarantor" enctype="multipart/form-data" method="POST">
                <div class="modal-body">
                    <div class="panel-content">
                        <div class="panel-container show">
                            <div class="panel-content">
                                <form>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-6">
                                            <label class="form-label" for="">Guarantor Name</label>
                                            <input type="text" class="form-control" name="name" placeholder=""
                                                required="">
                                        </div>
                                        <div class="col-md-6 mb-6">
                                            <label class="form-label" for="validationDefault02">Identity ID</label>
                                            <input type="text" class="form-control" name="identityID" placeholder=""
                                                required="">
                                        </div>{{--</div>--}} {{--
										<div class="form-row">--}}
                                        <div class="col-md-4 mb-4">
                                            <label class="form-label" for="">Birth Date</label>{{--
												<input type="text" class="form-control " placeholder="" required="">--}}
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="birthDate" placeholder=""
                                                    data-date-format="dd/mm/yyyy" id="datepicker-4-2">
                                                <div class="input-group-append"> <span class="input-group-text fs-xl">
                                                        <i class="fal fa-calendar-exclamation"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-4">
                                            <label class="form-label" for="validationDefault02">Mother Name</label>
                                            <input type="text" class="form-control" name="motherName" placeholder=""
                                                required="">
                                        </div>
                                        <div class="col-md-4 mb-4">
                                            <label class="form-label" for="validationDefault02">Relationship With
                                                Debtors</label>
                                            <input type="text" class="form-control " name="relationship" placeholder=""
                                                required="">
                                        </div>
                                        <div class="col-md-6 mb-6">
                                            <label class="form-label" for="validationDefault02">Job</label>
                                            <input type="text" class="form-control " name="job" placeholder=""
                                                required="">
                                        </div>
                                        <div class="col-md-6 mb-6">
                                            <label class="form-label" for="validationDefault02">Job Position</label>
                                            <input type="text" class="form-control " name="position" placeholder=""
                                                required="">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <a href="#">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
