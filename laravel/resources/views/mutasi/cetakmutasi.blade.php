@extends('layouts.app')

@section('head')
    <link rel="stylesheet" media="screen, print"
          href="{{asset('public/assets/css/datagrid/datatables/datatables.bundle.css') }}">
    <link rel="stylesheet" media="screen, print"
          href="{{asset('public/assets/css/formplugins/select2/select2.bundle.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{asset('public/assets/css/fa-solid.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{asset('public/assets/css/fa-brands.css') }}">
    
    <style>
        .select2-close-mask {
            z-index: 2099;
        }

        .select2-dropdown {
            z-index: 3051;
        }

        span.select2-container {
            z-index: 10050;
        }
    </style>
@endsection
@section('content')
    <main id="js-page-content" role="main" class="page-content">
        <ol class="breadcrumb page-breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
            <li class="breadcrumb-item">Master Dokument</li>
            
            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
        </ol>
        <div class="subheader">
            <h1 class="subheader-title">
                <i class='subheader-icon fal fa-print'></i> Cetak <span class='fw-300'>SK Mutasi</span> 
                <small>
                    Download dokument Sk sesuai pilihan
                </small>
            </h1>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr bg-primary-700 bg-success-gradient">
                        <h2>
                             SK Mutasi<span class="fw-300"><i>Cetak Dokument</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel bg-transparent fs-xl w-auto h-auto rounded-0"
                                    data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10"
                                    data-original-title="Collapse"><i class="fal fa-window-minimize"></i></button>
                            <button class="btn btn-panel bg-transparent fs-xl w-auto h-auto rounded-0"
                                    data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10"
                                    data-original-title="Fullscreen"><i class="fal fa-expand"></i></button>
                            <button class="btn btn-panel bg-transparent fs-xl w-auto h-auto rounded-0"
                                    data-action="panel-close" data-toggle="tooltip" data-offset="0,10"
                                    data-original-title="Close"><i class="fal fa-times"></i></button>
                        </div>
                    </div>
                    <input id="judul" type="hidden" value="mutasi">
                    <div class="panel-container show">
                        <div class="panel-content">
                           
                            <div class="panel-container show">
                                <div class="panel-content">
                                    <div class="panel-tag">
                                        Pilih Dokument SK sesuai dengan mutasi jabatan baru.
                                    </div>
                                    @if(session()->has('message'))
                                        <div class="alert border-faded bg-transparent alert-dismissible  text-secondary fade show" role="alert">
                                            <div class="d-flex align-items-center">
                                                <div class="alert-icon">
                                                    <span class="icon-stack icon-stack-md">
                                                        <i class="base-7 icon-stack-3x color-success-600"></i>
                                                        <i class="fal fa-check icon-stack-1x text-white"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-1">
                                                    <span class="h5 color-success-600">Informasi Sukses!</span>
                                                    <br>
                                                    {{ session()->get('message') }}
                                                </div>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true"><i class="fal fa-times"></i></span>
                                                </button>
                                            </div>
                                        </div>
                                    @endif
                                    @if(session()->has('error'))
                                    <div class="col-md-12 mb-3">
                                        <div class="alert border-danger  bg-transparent alert-dismissible  text-secondary fade show" role="alert">
                                            <div class="d-flex align-items-center">
                                                <div class="alert-icon">
                                                    <span class="icon-stack icon-stack-md">
                                                        <i class="base-7 icon-stack-3x color-danger-900"></i>
                                                        <i class="fal fa-times icon-stack-1x text-white"></i>
                                                    </span>
                                                </div>
                                                <div class="flex-1">
                                                    <span class="h5 color-danger-900">Maaf</span>
                                                    <br>
                                                    {{ session()->get('error') }}
                                                </div>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true"><i class="fal fa-times"></i></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    <!-- datatable start -->
                                    <div class="panel-container show">
                                            <!-- datatable start -->
                                        
                                        <form action="cetak/dowload" enctype="multipart/form-data" method="POST">
                                        {{-- <form id="formCetakSKMutasi"> --}}
                                            @csrf
                                            <div class="col-md-12 mb-3">
                                                <label class="form-label" for="totalAsset">Pegawai dimutasi</label>
                                                <select class="form-control select2" id="pegawai" name="pegawai" required>
                                                    <option value="">-- Cari Pegawai --</option>
                                                    @foreach ($pegawai as $item)
                                                        <option value="{{ $item->id }}">{{ $item->nip ." - ". $item->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div id="detailDokument"></div>
                                            <div id="dokument"></div>
                                            
                                            <div class="col-md-12 mb-3">
                                                 <button type="submit" id="send_form" class="btn btn-primary"> <i class="fa fa-download"></i> Download</button>
                                               
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
@endsection
@section('scripts')

    <script src="{{asset('public/assets/js/datagrid/datatables/datatables.bundle.js') }}"></script>
    <script src="{{asset('public/assets/js/formplugins/inputmask/inputmask.bundle.js') }}"></script>
    <script src="{{asset('public/assets/js/formplugins/select2/select2.bundle.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/assets/js/custom/master.js')}}"></script>
    <script type="text/javascript">

        
        $("form#formUploadDokument").submit(function(e){
        e.preventDefault();
        
        var formData = new FormData(this);
        
        console.log(formData)

        $.ajax({
                url:  "{{ url('mutasi/master/tambah/store') }}",
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function (result) {
                    
                    toastr.success('Data berhasil disimpan.')
                    
                    // $('.modal').each(function(){
                    //     $(this).modal('hide');
                    // });
    
                    // location.reload();
                    return false;
                    
                },
                error:function(error){
                    toastr.error('Jaringan internet terputus.',error.message);
                }
            })
        

    });


       

       $(document).ready(function () {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

            $("#pegawai").change(function(e){
                var iddoc = $(this).val();

                console.log("cek "+iddoc);
                
                if(iddoc == ""){
                    $('#detailDokument').html('');
                    $('#dokument').html('');
                }else{
                    $.ajax({
                        url:  'tambah/getjsonmaster/'+iddoc,
                        type: 'GET',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        // data: {id:iddoc},
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function (result) {
                            
                            console.log(result)
                            var jabatan = result.data.jabatanbaru;
                            var satgas = result.data.satgasbaru;
                            var kantor = result.data.kantorbaru;
                            
                            $('#detailDokument').html('<div class="col-md-12 mb-3">\n' +
                                '                <label class="form-label" for="totalAsset">Kantor Baru</label>\n' +
                                '                <input class="form-control" value="'+kantor+'" readonly name="kantor" id="kantor">\n' +
                                '              </div>\n' +
                                '               <div class="col-md-12 mb-3">\n' +
                                '                <label class="form-label" for="totalAsset">Jabatan Baru</label>\n' +
                                '                <input class="form-control" value="'+jabatan+'" readonly name="jabatan" id="jabatan">\n' +
                                '              </div>\n' +
                                '              <div class="col-md-12 mb-3">\n' +
                                '               <label class="form-label" for="totalAsset">Jobdesk Baru</label>\n' +
                                '                <input class="form-control" value="'+satgas+'" readonly name="satgas" id="satgas">\n' +
                                '            </div>');

                                $.ajax({
                                            url:  'cetak/getjsondocsk/'+result.data.id_jab_baru+'/'+result.data.id_satgas_baru,
                                            type: 'GET',
                                            headers: {
                                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                            },
                                            cache: false,
                                            contentType: false,
                                            processData: false,
                                            success: function (hasil) {
                                                
                                                $('#dokument').html('<div class="col-md-12 mb-3">\n' +
                                                                    '   <label class="form-label" for="totalAsset">Dokument SK</label>\n' +
                                                                    '   <div class="input-group">\n' +
                                                                    '       <select class="form-control select2" id="dokumentsk" name="dokumentsk">\n' +
                                                                    '             <option value="'+hasil.data.file_sk+'">'+hasil.data.nama_sk+'</option>\n' +
                                                                    '        </select>\n' +
                                                                    '    </div>\n' +
                                                                    '</div">\n');
                                            }
                                    });
                            
                            
                        },
                        error:function(error){
                            toastr.error('Jaringan internet terputus.',error.message);
                        }
                    });
                }
            });

        $(".money").change(function () {
            console.log(this.value);
            result = accounting.formatMoney(this.value,{
                precision : 2,
                thousand : ".",
                decimal  : ",",
            });
            $("#"+this.id).val(result);

        });

        $('.select2').select2();

        $('#nama').select2({
            
            placeholder: "-- Pilih Nama --",
            allowClear: true
        });
        $('#branchKode').select2({
            placeholder: "-- Select Branch --",
            allowClear: true
        });

        $('#filter1').select({
            dropdownParent: $('#pilih'),
            placeholder: "-- Select  --",
            allowClear: true
        });

        $('#typeApplication').select2({
            placeholder: "-- Select type application --",
            allowClear: true
        });

        $('#personGender').select2({
            dropdownParent: $('#pilih'),
            placeholder: "-- Select Gender --",
            allowClear: true
        });

    });

    </script>
    <script>

        $(document).ready(function () {

            // $('.btnNext').click(function () {
            //     stepScroing();
            // });

            $('.btnPrev').click(function () {
                // if ($('.active').prev('.nav-link').length) {
                //     $('.active').removeClass('active')
                //         .prev('.nav-link')
                //         .addClass('active');
                // }
                if ($('.tab-pane.fade.show').prev(".tab-pane").length) {
                    $('.tab-pane.fade.show').removeClass('active show')
                        .prev(".tab-pane")
                        .addClass('active show');


                }
                var countPrev =  $('#step').val();
                $('#step').val(parseInt(countPrev)-1);
            });

            $(document).on('keyup', '#js-filter-contacts', function () {
                var query = $(this).val();
                fetch_customer_data(query);
            });
        });


    </script>

    <script>
        $('#application').select2({
            dropdownParent: $('#pilih'),
            placeholder: "-- Select Province --",
            allowClear: true
        });

        $(document).ready(function () {
                      
            $('#dt-basic-example').dataTable(
            {
                responsive: true
            });

            $('.js-thead-colors a').on('click', function()
            {
                var theadColor = $(this).attr("data-bg");
                console.log(theadColor);
                $('#dt-basic-example thead').removeClassPrefix('bg-').addClass(theadColor);
            });

            $('.js-tbody-colors a').on('click', function()
            {
                var theadColor = $(this).attr("data-bg");
                console.log(theadColor);
                $('#dt-basic-example').removeClassPrefix('bg-').addClass(theadColor);
            });
        });

    </script>
@endsection
