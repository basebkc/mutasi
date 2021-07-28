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
                <i class='subheader-icon fal fa-edit'></i> Edit <span class='fw-300'>Master Dokument</span> 
                <small>
                    Tampilan data master dokument sesuai job deskripsi
                </small>
            </h1>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr bg-primary-700 bg-success-gradient">
                        <h2>
                            Master Dokument <span class="fw-300"><i>Edit</i></span>
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
                            <!-- datatable start -->
                                <!-- datatable start -->
                            {{-- <form id="formUploadDokument"> --}}
                            <form method="POST" action="{{ url('mutasi/master/update')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-12 mb-3">
                                    <label class="form-label" >Nama SK Dokument</label>
                                    <input type="text" value="{{ $data->nama_sk }}" class="form-control" name="dokumentsk" id="dokumentsk">
                                    <input type="hidden" value="{{ $data->id }}" class="form-control" readonly name="idsk" id="idsk">
                                    <input type="hidden" value="{{ $data->file_sk }}" class="form-control" readonly name="file_sk" id="file_sk">
                                </div>
                                <div id="detailDokument"></div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label class="form-label" for="totalAsset">Jabatan</label>
                                        <select class="form-control select2" id="jabatan" name="jabatan">
                                            <option value="">-- Pilihan --</option>
                                            @foreach ($jabatan_peg as $item)
                                                <option @if($data->id_jab == $item->id_jab) {{ "selected" }} @endif value="{{ $item->id_jab }}">{{ $item->kode.'-'.$item->n_jab }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label class="form-label" for="totalAsset">Job Deskripsi</label>
                                        <select class="form-control select2" id="jobdesk" name="jobdesk">
                                            <option value="">-- Pilihan --</option>
                                            @foreach ($satgas as $item)
                                                <option @if($data->id_satgas == $item->id) {{ "selected" }} @endif  value="{{ $item->id }}">{{ $item->satgas }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="I">Ganti Dokument SK</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="filesk" id="filesk">
                                            <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Pilih File dokument</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="inputGroupFileAddon02">Upload</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <button type="submit" class="btn btn-primary"><i class="fal fa-save"></i> Simpan</button>
                                </div>
                            </form>
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

        // $("form#formUploadDokument").submit(function(e){
        //     e.preventDefault();
            
        //     var formData = new FormData(this);
            
        //     console.log(formData)

        //     $.ajax({
        //             url:  "{{ url('mutasi/master/update') }}",
        //             type: 'POST',
        //             data: formData,
        //             cache: false,
        //             contentType: false,
        //             processData: false,
        //             success: function (result) {
                        
        //                 toastr.success('Data berhasil disimpan.')
                        
        //                 // $('.modal').each(function(){
        //                 //     $(this).modal('hide');
        //                 // });
        
        //                 // return false;
                        
        //             },
        //             error:function(error){
        //                 toastr.error('Jaringan internet terputus.',error.message);
        //             }
        //         })

        // });

       

       $(document).ready(function () {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // $("#dokumentsk").change(function(e){
            //     var iddoc = $(this).val();
                
            //     if(iddoc == ""){
            //         $('#detailDokument').html('');
            //     }else{
            //         $.ajax({
            //             url:  'tambah/getjsonmaster/'+iddoc,
            //             type: 'GET',
            //             cache: false,
            //             contentType: false,
            //             processData: false,
            //             success: function (result) {
                            
            //                 var jabatan = result.data.n_jab;
            //                 var satgas = result.data.satgas;
            //                 var sk = result.data.nama_sk;
                            
            //                 $('#detailDokument').html('<div class="col-md-12 mb-3">\n' +
            //                     '                <label class="form-label" for="totalAsset">Jabatan</label>\n' +
            //                     '                <input class="form-control" type="hidden" value="'+sk+'" readonly name="doksk" id="doksk">\n' +
            //                     '                <input class="form-control" value="'+jabatan+'" readonly name="jabatan" id="jabatan">\n' +
            //                     '              </div>\n' +
            //                     '              <div class="col-md-12 mb-3">\n' +
            //                     '               <label class="form-label" for="totalAsset">Satuan Tugas</label>\n' +
            //                     '                <input class="form-control" value="'+satgas+'" readonly name="satgas" id="satgas">\n' +
            //                     '            </div>');
                            
            //             },
            //             error:function(error){
            //                 toastr.error('Jaringan internet terputus.',error.message);
            //             }
            //         });
            //     }
            // });

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

        $(document).on("click",".one-data",function(e) {
            var linkHref = this.getAttribute("href");
            var idLink = linkHref.substring(linkHref.lastIndexOf("/")+1);
            for (var i = 0; i < localStorage.length; i++) {
                // console.log(localStorage.getItem(localStorage.key(i)));
                var keyLocal= localStorage.key(i);
                var idStorage = keyLocal.substring(0,keyLocal.indexOf("-"));
                if(idStorage === idLink){
                    localStorage.removeItem(keyLocal);
                }
            }

        });

        $(document).ready(function () {

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
