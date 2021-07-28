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
            <li class="breadcrumb-item">Parameter</li>
            
            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
        </ol>
        <div class="subheader">
            <h1 class="subheader-title">
                <i class='subheader-icon fal fa-table'></i> Tabel <span class='fw-300'>Parameter</span> 
                <small>
                    Tampilan data parameter untuk master dokument
                </small>
            </h1>
        </div>
    
        <div class="row">
            <div class="col-xl-12">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr panel-hdr bg-primary-700 bg-success-gradient">
                        <h2>
                            Parameter <span class="fw-300"><i>Tabel</i></span>
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
                    <input id="judul" type="hidden" value="parameter">
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
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-hdr">
                                <h2></h2>
                                <div class="panel-toolbar">
                                    <h5 class="m-0"></h5>
                                </div>
                                <div class="panel-toolbar ml-0">
                                    <h5 class="m-0">
                                        {{-- <button class="btn btn-warning" onclick="javascript:getModalEdit({{ $item->id }})" id="{{ $item->id }}"><i class="fal fa-plus"></i> Tambah Mutasi</button> --}}
                                        <button class="btn btn-primary btn-md btnTambahParam">
                                            <i class="fas fa-plus"></i> Tambah Parameter
                                        </button>
                                    </h5>
                                </div>
                            </div>
                            <div class="panel-container show">
                                <div class="panel-content">
                                    <div class="panel-tag">
                                        Lakukan pengecekan data dengan mencari data terlebih dahulu sebelum menambahkan.
                                    </div>
                                    <div class="panel-container show">
                                        <!-- datatable start -->
                                        <table id="dt-basic-example" class="table table-bordered table-hover table-striped w-100">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Parameter</th>
                                                    <th style="text-align: center">Edit</th>
                                                    <th style="text-align: center">Hapus</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php($id=1)
                                                @foreach ($data as $item)
                                                    <tr>
                                                        
                                                        <td>{{ $id++ }}</td>
                                                        <td>{{ $item->parameter }}</td>
                                                        <td style="text-align: center">
                                                            <button class="btn btn-warning" onclick="javascript:getModalEditParam({{ $item->id }})" id="{{ $item->id }}"><i class="fal fa-edit"></i> Edit</button>
                                                        </td>
                                                        <td style="text-align: center">
                                                            <a class="btn btn-danger" onclick="javascript:getModalDelete({{ $item->id }})" id="{{ $item->id }}"><i class="fal fa-trash-alt"></i> Hapus</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        
                                        </table>
                                        <!-- datatable end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
          {{-- Modal Store --}}
        <div class="modal fade" id="pilih" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document" style="max-width: 50%">
                <div class="modal-content">
                    <div class="modal-header panel-hdr bg-primary-700 bg-success-gradient">
                        <h5 class="modal-title"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fa fa-times"></i></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="panel-content">
                            <form id="formParameter">
                                <div class="form-row">
                                    <input oninput="this.value" type="hidden" id="id" name="id" class="form-control form-control-md" readonly>
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <label class="form-label">Parameter</label>
                                            <input class="form-control" id="parameter" placeholder="Input parameter" name="parameter" type="text" >
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Batal
                                    </button>
                                    <button type="submit" id="send_form" class="btn btn-primary"> Simpan</button>
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
        //hapus data parameter

        function getModalDelete(id){

            Swal.fire(
            {
                title: "Apakah yakin akan di hapus?",
                // text: "You won't be able to revert this!",
                type: "warning",
                showCancelButton: true,
                confirmButtonText: "Ya, Hapus data ini!"
            }).then(function(result)
            {
                if (result.value)
                {
                    $.ajax({
                        url: "parameter/hapus",
                        method: 'POST',
                        data: {id: id, _token: "{{ csrf_token() }}"},
                        dataType: 'json',
                        success: function (data) {
                           
                            Swal.fire("Hapus!", "Data sudah berhasil di hapus.", "success");
                            location.reload(true);

                            
                            
                        }
                    });

                }
            
            });

        }

        var url = "";

        function getModalEditParam($id){

            var bagianForm = "parameter";

            url = getUrl(bagianForm);
            
            $(".modal-title").text("Edit Data "+bagianForm);

            openBox($id,hapus=false,url);

        }
        
       

       $(document).ready(function () {

            $("form#formParameter").submit(function(e){
                e.preventDefault();
                
                var formData = new FormData(this);
            
                $.ajax({
                        url:  "parameter/storeparameter",
                        type: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: formData,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function (result) {
                            
                            // toastr.success('Data berhasil disimpan.',  'Info', { positionClass: 'toast-top-center', timeOut: 10000 })
                            
                            Swal.fire("Sukses", "Data sudah berhasil di update.", "success");

                            $('.modal').each(function(){
                                $(this).modal('hide');
                            });

                            location.reload(true);

                            
                        },
                        error:function(error){
                            toastr.error('Jaringan internet terputus.','Info', { positionClass: 'toast-top-center', timeOut: 10000 });
                        }
                    });
                
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
