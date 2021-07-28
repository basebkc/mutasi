@extends('layouts.app')
@section('head')
    {{-- <link rel="stylesheet" media="screen, print" href="{{env('APP_ASSETS_URL')}}/assets/bs4/css/formplugins/summernote/summernote.css" xmlns="">
    <link rel="stylesheet" media="screen, print" href="{{env('APP_ASSETS_URL')}}/assets/bs4/css/formplugins/select2/select2.bundle.css">
    <link rel="stylesheet" media="screen, print" href="{{env('APP_ASSETS_URL')}}/assets/bs4/css/formplugins/dropzone/dropzone.css">
    <link rel="stylesheet" media="screen, print" href="{{env('APP_ASSETS_URL')}}/assets/bs4/css/formplugins/bootstrap-datepicker/bootstrap-datepicker.css">
    <link rel="stylesheet" media="screen, print" href="{{env('APP_ASSETS_URL')}}/assets/bs4/css/formplugins/bootstrap-daterangepicker/bootstrap-daterangepicker.css">
    <link rel="stylesheet" media="screen, print" href="{{env('APP_ASSETS_URL')}}/assets/bs4/css/datagrid/datatables/datatables.bundle.css">
    <link rel="stylesheet" href="{{env('APP_URL')}}/assets_custom/css/react-table.css" type="text/css">
    <link rel="stylesheet" href="{{env('APP_URL')}}/assets_custom/css/customStyle.css" type="text/css"> --}}
@endsection
@section('content')
    <main id="js-page-content" role="main" class="page-content">
       
        <div class="row">
            <div class="col-xl-12">
                {{-- panel menu --}}
                <div id="panel-12" class="panel">
                    <div class="panel-hdr">
                        <h2>{{-- $getApp->statusAplikasi --}} Application<span class="fw-300"><i>{{-- $typeApplication->name --}}</i></span></h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel bg-transparent fs-xl w-auto h-auto rounded-0" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"><i class="fal fa-window-minimize"></i>
                            </button>
                            <button class="btn btn-panel bg-transparent fs-xl w-auto h-auto rounded-0" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"><i class="fal fa-expand"></i>
                            </button>
                            <button class="btn btn-panel bg-transparent fs-xl w-auto h-auto rounded-0" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"><i class="fal fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="row">
                                <div class="col-auto tab-pan">
                                    @include('analisa.edit.sidebar')
                                </div>
                                <div class="col scroll">
                                    @include('analisa.edit.content')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('analisa.edit.modal')
    </main>
@endsection
@section('scripts')


    <script src="{{ asset('public/assets/js/notifications/sweetalert2/sweetalert2.bundle.js') }} "></script>
    <script src="{{ asset('public/assets/js/formplugins/summernote/summernote.js') }} "></script>
    <script src="{{ asset('public/assets/js/formplugins/dropzone/dropzone.js') }} "></script>
    <script src="{{ asset('public/assets/js/formplugins/select2/select2.bundle.js') }} "></script>
    <script src="{{ asset('public/assets/js/formplugins/bootstrap-datepicker/bootstrap-datepicker.js') }} "></script>

{{-- 
    <script src="{{env('APP_URL')}}/assets_custom/js/logic.js"></script>
    <script src="{{env('APP_URL')}}/assets_custom/js/spreadsheet-v0.0.1.js"></script>
    <script src="{{env('APP_URL')}}/assets_custom/js/savy.min.js"></script>
    <script src="{{env('APP_URL')}}/assets_custom/js/spreadsheet_extract-v0.0.1.js"></script>

  
    <script src="{{env('APP_URL')}}/assets_custom/js/rac-v0.0.4.js"></script>
    <script src="{{env('APP_URL')}}/assets_custom/js/number-format-v0.0.2.js"></script> --}}
  
   
    <script src="{{ asset('public/assets/js/jsonpath-0.8.0.js') }} "></script>
    <script src="{{ asset('public/assets/js/datagrid/datatables/datatables.bundle.js') }}"></script>
 

    {{--    @include('application.handlebars.loading')--}}

   
    <script type="text/javascript">
        window.onbeforeunload = function() {
            return "Did you save your stuff?"
        }
    </script>
    <script>
      
        // console.log("test appraisal",appraisal);


        
        $('#branchKode').select2({
            placeholder: "-- Select Branch --",
            allowClear: true
        });

        $('#segmentation').select2({
            placeholder: "-- Select Segmentation --",
            allowClear: true

        });


        $('.btnNext').click(function () {
            if ($('.active').next('.nav-link').length) {
                $('.active').removeClass('active')
                    .next('.nav-link')
                    .addClass('active');

            }
            if ($('.show').next(".tab-pane").length) {
                $('.show').removeClass('show active')
                    .next(".tab-pane")
                    .addClass('show active');


            }
        });
        $('.btnPrev').click(function () {
            if ($('.active').prev('.nav-link').length) {
                $('.active').removeClass('active')
                    .prev('.nav-link')
                    .addClass('active');
            }
            if ($('.show').prev(".tab-pane").length) {
                $('.show').removeClass('show active')
                    .prev(".tab-pane")
                    .addClass('show active');


            }
        });
        initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
        // custom response message
        initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        //accordion filter
        initApp.listFilter($('#js_list_accordion'), $('#js_list_accordion_filter'));
        // nested list filter
        initApp.listFilter($('#js_nested_list'), $('#js_nested_list_filter'));
        //init navigation
        initApp.buildNavigation($('#js_nested_list'));
        function replaceUndifined(str){
            if (typeof str == "undefined"){
                console.log("strstr",str);
                return "";
            }
            else{
                return str;
                console.log("straaaastr",str);
            }
        }
        function modalLoading(idForm,action){
            const lockModal = $("#lock-modal");
            const loadingCircle = $("#loading-circle");
            const form = $("#"+idForm);

            if(action == "show")
            {
                lockModal.css("display", "block");
                loadingCircle.css("display", "block");

                form.children("input").each(function() {
                    $(this).attr("readonly", true);
                });
            }
            else{
                lockModal.css("display", "none");
                loadingCircle.css("display", "none");

                form.children("input").each(function() {
                    $(this).attr("readonly", false);
                });
            }
        }


        $(document).ready(function () {
            validate();

            $('.js-summernoteCreditEvaluation').summernote("code", creditEvaluation);
            $('.js-summernotePilarEvaluation').summernote("code", pilarEvaluation);
            $('.js-summernoteFacilityEvaluation').summernote("code", facilityEvaluation);
            $('.js-summernoteCollateralEvaluation').summernote("code", collateralEvaluation);
            $('.js-summernoteAnalysisCreditEvaluation').summernote("code",analysisCreditEvaluation);
            $('.js-summernoteFinancialCreditEvaluation').summernote("code", financialCreditEvaluation);
            $('.js-summernoteRiskCreditEvaluation').summernote("code", riskCreditEvaluation);
            $('.js-summernoteConclusionReviewer').summernote("code", conclusionReviewer);
            $('.js-summernoteConclusionRegional').summernote("code", conclusionRegional);


        })
        $(document).on("change", "select#categoryIndustry", function () {
            calculateRac(this.value, null);
        });
        $(function () {
            //call js template app
            $(document).ready(function () {
              
            });
            //call js number-format
            $(document).on('focus', "input[data-type='currency']", function () {
                $("input[data-type='currency']").on({
                    keyup: function () {
                        formatCurrency($(this));
                    },
                    blur: function () {
                        formatCurrency($(this), "blur");
                    }
                });
            });
        });

        $(document).ready(function () {
            if(window.CONFIG.APP_SEGMENT_CODE == "CMX"){
                if ((typeof dataApp.data.riskAnalysis.rac.category) != "undefined" || dataApp.data.riskAnalysis.rac.category != null) {
                    var category = dataApp.data.riskAnalysis.rac.category;
                    document.getElementById('categoryIndustry').value = category;
                    calculateRac("5", dataApp.data.riskAnalysis.rac);
                } else {
                    calculateRac("5", null);
                }


            }else{
                if ((typeof dataApp.data.riskAnalysis.rac.category) != "undefined" || dataApp.data.riskAnalysis.rac.category != null) {
                    var category = dataApp.data.riskAnalysis.rac.category;
                    document.getElementById('categoryIndustry').value = category;
                    calculateRac(category, dataApp.data.riskAnalysis.rac);
                } else if (dataApp.data.typeAPK.id == "5") {
                    calculateRac("1", null);
                }
            }


        });

        $(document).on('focus', "#datepicker-4-3", function () {
            $(this).datepicker();
        });
        $(document).on('focus', "#datepicker-4-2", function () {
            $(this).datepicker();
        });

        // // default list filter
        // initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
        // // custom response message
        // initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        // //accordion filter
        // initApp.listFilter($('#js_list_accordion'), $('#js_list_accordion_filter'));
        // // nested list filter
        // initApp.listFilter($('#js_nested_list'), $('#js_nested_list_filter'));
        // //init navigation
        // initApp.buildNavigation($('#js_nested_list'));

    </script>
    <script src="{{env('APP_URL')}}/assets_custom/js/initUploadFile-v0.0.4.js"></script>
    <script src="{{env('APP_URL')}}/assets_custom/js/initCollateral-v0.0.9.js"></script>
    <script src="{{env('APP_URL')}}/assets_custom/js/initFacility-v0.1.2.js"></script>
    <script src="{{env('APP_URL')}}/assets_custom/js/initGuarantor-v0.0.3.js"></script>
    <script src="{{env('APP_URL')}}/assets_custom/js/initCovenant-v0.0.4.js"></script>
    <script src="{{env('APP_URL')}}/assets_custom/js/initSaveStep-v0.0.6.js"></script>
    <script src="{{env('APP_URL')}}/assets_custom/js/initNoteAPK-v0.0.4.js"></script>
    <script>
       
        $('.js-summernoteSummary').summernote('disable');


        $(document).ready(function () {
            $(".addCollateral").hide();
            $(".deleteCollateral").hide();
            $(".appraisalCollateral").hide();
        });

  
    </script>
@endsection
