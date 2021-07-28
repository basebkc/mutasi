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
            <li class="breadcrumb-item active">Mutasi Pegawai</li>
            <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
        </ol>
        <div class="subheader">
            <h1 class="subheader-title">
                <i class='subheader-icon fal fa-table'></i> Tabel <span class='fw-300'>Mutasi Pegawai</span> 
                <small>
                    Tampilan data hasil mutasi pegawai.
                </small>
            </h1>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr bg-primary-700 bg-success-gradient">
                        <h2>
                            Mutasi Pegawai <span class="fw-300"><i>Tabel</i></span>
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
                      
                            <div class="panel-hdr">
                                <h2></h2>
                                <div class="panel-toolbar">
                                    <h5 class="m-0"></h5>
                                </div>
                                <div class="panel-toolbar ml-0">
                                    <h5 class="m-0">
                                        {{-- <button class="btn btn-warning" onclick="javascript:getModalEdit({{ $item->id }})" id="{{ $item->id }}"><i class="fal fa-plus"></i> Tambah Mutasi</button> --}}
                                        <button class="btn btn-primary btn-md btnTambahAction">
                                            <i class="fas fa-plus"></i> Tambah Mutasi
                                        </button>
                                    </h5>
                                </div>
                            </div>
                            <div class="panel-container show">
                                <div class="panel-content">
                                    <div class="panel-tag">
                                        Lakukan pengecekan data dengan mencari data terlebih dahulu sebelum menambahkan.
                                    </div>
                                    <!-- datatable start -->
                                    <div class="panel-container show">
                                        <div class="panel-content">
                                            <!-- datatable start -->
                                            <table id="dt-basic-example" class="table table-bordered table-hover table-striped w-100">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>NIP</th>
                                                        <th>Nama</th>
                                                        <th>Gol</th>
                                                        <th>Kantor Asal</th>
                                                        <th>Jabatan Asal</th>
                                                        <th>Satgas Asal</th>
                                                        <th>Kantor Baru</th>
                                                        <th>Jabatan Baru</th>
                                                        <th>Satgas Baru</th>
                                                        <th>Jenis Mutasi</th>
                                                        <th>Tgl Efektif</th>
                                                        <th>Tgl Surat</th>
                                                        <th>No Surat</th>
                                                        <th>Keterangan</th>
                                                        <th>Dibuat Tgl</th>
                                                        <th>Edit</th>
                                                        <th>Hapus</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    @foreach ($data as $item)
                                                        <tr>
                                                            
                                                            <td>{{ $item->id }}</td>
                                                            <td>{{ $item->nip }}</td>
                                                            <td>{{ $item->nama }}</td>
                                                            <td>{{ $item->gol }}</td>
                                                            <td>{{ $item->kan_asal }}</td>
                                                            <td>{{ $item->jab_asal }}</td>
                                                            <td>{{ $item->satgas_asal }}</td>
                                                            <td>{{ $item->kan_baru }}</td>
                                                            <td>{{ $item->jab_baru }}</td>
                                                            <td>{{ $item->satgas_baru }}</td>
                                                            <td>{{ $item->jenis_mutasi }}</td>
                                                            <td>{{ date_format(date_create($item->tgl_efektif),'Y-m-d') }}</td>
                                                            <td>{{ date_format(date_create($item->tgl_surat),'Y-m-d') }}</td>
                                                            <td>{{ $item->no_surat }}</td>
                                                            <td>{{ $item->keterangan }}</td>
                                                            <td>{{ $item->created_at }}</td>
                                                            
                                                            <td>
                                                                <button class="btn btn-warning" onclick="javascript:getModalEdit({{ $item->id }})" id="{{ $item->id }}"><i class="fal fa-edit"></i> Edit</button>
                                                                
                                                            </td>
                                                            <td style="text-align: center">
                                                                <a class="btn btn-danger" type="submit" href="{{ url('mutasi/download/'.$item->id) }}"><i class="fal fa-trash-alt"></i> Hapus</a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            
                                            </table>
                                            <!-- datatable end -->
                                        </div>
                                    </div>
                                    <!-- datatable end -->
                                </div>
                            </div>
                        
                            <!-- datatable end -->
                            <div class="modal fade" id="pilihtambah" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lx" role="document" style="max-width: 80%">
                                    <div class="modal-content">
                                        <div class="modal-header panel-hdr bg-primary-700 bg-success-gradient">
                                            <h5 class="modal-title">Please select the type of application</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true"><i class="fal fa-times"></i></span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="panel-content">
                                                <form id="formAdd" class="smart-form" novalidate="novalidate">
                                                    @csrf
                                                    <div class="form-row">
                                                        <input type="hidden" name="step" id="step" value="0">
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label" for="validationCustom01">Type of
                                                                Application<span class="text-danger">*</span>
                                                            </label>
                                                            <select class="custom-select" id="typeApplication"
                                                                    name="type_application" required="">
                                                                <option value="" disabled="" selected>Select Type
                                                                </option>
                                                               
                                                            </select>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label">Proposal From
                                                                <span class="text-danger">*</span></label>
                                                            <select class="custom-select" name="branch" id="branchKode"
                                                                    required="">
                                                                <option value="">Select Branch</option>
                                                               
                                                            </select>
                                                        </div>
                                                        <div class="col-md-12 mb-3">
                                                            {{--<form action="{{ url()->current() }}" >--}}
                                                            <div class="border-faded bg-faded p-3 mb-g d-flex">

                                                                <input oninput="this.value" type="text"
                                                                       id="js-filter-contacts" name="filter-contacts"
                                                                       class="form-control shadow-inset-2 form-control-lg"
                                                                       placeholder="Search Debtor">
                                                                <button type="submit" class="btn btn-primary"
                                                                        style="display: none;">
                                                                    Search
                                                                </button>
                                                                <div
                                                                    class="btn-group btn-group-lg btn-group-toggle ml-4">
                                                                    <div class="demo">
                                                                        <div
                                                                            class="custom-control custom-radio custom-radio-rounded">
                                                                            <input type="radio"
                                                                                   class="custom-control-input"
                                                                                   id="filter-name" value="1"
                                                                                   name="filter" checked="">
                                                                            <label class="custom-control-label"
                                                                                   for="filter-name">Name</label>
                                                                        </div>
                                                                        <div
                                                                            class="custom-control custom-radio custom-radio-rounded">
                                                                            <input type="radio"
                                                                                   class="custom-control-input"
                                                                                   id="filter-id" value="2"
                                                                                   name="filter">
                                                                            <label class="custom-control-label"
                                                                                   for="filter-id">KTP/NPWP</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="demo">
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox"
                                                                                   class="custom-control-input typeDebtor"
                                                                                   id="typeDebtor1" value="1"
                                                                                   name="typeDebtor" onclick="return false;">
                                                                            <label class="custom-control-label"
                                                                                   for="typeDebtor1">Personal</label>
                                                                        </div>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox"
                                                                                   class="custom-control-input typeDebtor"
                                                                                   id="typeDebtor2" value="2"
                                                                                   name="typeDebtor" checked="" onclick="return false;">
                                                                            <label class="custom-control-label"
                                                                                   for="typeDebtor2">Perusahaan</label>
                                                                        </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>


                                                            <div class="col-md-12">
                                                                <ul class="nav nav-tabs nav-fill" role="tablist">
                                                                    <li class="nav-item active" id="t1"><a class="nav-link disabled active" data-toggle="tab" href="#tab_justified-1" role="tab" id="tab1">Debitur</a></li>
                                                                    <li class="nav-item" id="t2"><a class="nav-link disabled" data-toggle="tab" href="#tab_justified-2" role="tab" id="tab2">Eligibility</a></li>
                                                                    <li class="nav-item" id="t3"><a class="nav-link disabled" data-toggle="tab" href="#tab_justified-3" role="tab" id="tab3">Score Card</a></li>
                                                                </ul>
                                                                <div class="tab-content p-3" >
                                                                    <div class="tab-pane fade show active" id="tab_justified-1" role="tabpanel">
                                                                        <div class="col-md-12" id="js-contacts">
                                                                        </div>
                                                                        <div class="panel-content border-faded border-left-0 border-right-0 border-bottom-0 d-flex flex-row align-items-center">
                                                                            <button class="btn btn-primary ml-auto btnNext" id="btnSave1"  style="display: none;" type="button">Next</button>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </div>
   

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-warning resetsearch">
                                                            Reset
                                                        </button>
                                                        <button id="close" type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close
                                                        </button>

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
            </div>
        </div>
    </main  >
     <!-- Modal center Large no backdrop -->
     <div class="modal fade modal-backdrop-transparent" id="createApp" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Info</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger">
                        Are you sure create this data?
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="button" onclick="createApp()" class="btn btn-primary">Create</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Store --}}
    <div class="modal fade" id="pilih" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-right" role="document" style="max-width: 70%">
            <div class="modal-content">
                <div class="modal-header panel-hdr bg-primary-700 bg-success-gradient">
                    <h5 class="modal-title"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="panel-content">
                        <hr>
                        <form id="form">
                            <div class="form-row">
                                <input oninput="this.value" type="hidden" id="id" name="id" class="form-control form-control-md" readonly>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label class="form-label">NIP</label>
                                        
                                        <input class="form-control" id="nip" name="nip" type="text" readonly>
                                     
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label class="form-label">Nama</label>
                                            
                                        <select class="select2 form-control" id="nama" name="nama" required>
                                            <option value="">-- Pilih --</option>
                                            @foreach ($pegawai as $item)
                                            <option value="{{ $item->nip }}">{{ $item->nama}}</option>        
                                            @endforeach
                                        </select>
                                      
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label class="form-label">Kantor Asal</label>
                                        <select readonly class="select2 form-control" id="kan_asal" name="kan_asal" required>
                                            <option value="">-- Pilih --</option>
                                            @foreach ($kantor as $item)
                                            <option value="{{ $item->id_kan }}">{{ $item->kd_kan." : ".$item->n_kan }}</option>        
                                            @endforeach
                                        </select>
                                     
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label class="form-label">Kantor Baru</label>
                                        <select class="select2 form-control" id="kan_baru" name="kan_baru" required>
                                            <option value="">-- Pilih --</option>
                                            @foreach ($kantor as $item)
                                            <option value="{{ $item->id_kan }}">{{ $item->kd_kan." : ".$item->n_kan }}</option>        
                                            @endforeach
                                        </select>
                                     
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label class="form-label">Jabatan Asal</label>
                                        <select  class="select2 form-control" id="jab_asal" name="jab_asal" required>
                                            <option value="">-- Pilih --</option>
                                            @foreach ($jabatan_peg as $item)
                                            <option value="{{ $item->id_jab }}">{{ $item->kode." : ".$item->n_jab }}</option>        
                                            @endforeach
                                        </select>
                                      
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label class="form-label">Jabatan Baru</label>
                                        <select class="select2 form-control" id="jab_baru" name="jab_baru" required>
                                            <option value="">-- Pilih --</option>
                                            @foreach ($jabatan_peg as $item)
                                            <option value="{{ $item->id_jab }}">{{ $item->kode." : ".$item->n_jab }}</option>        
                                            @endforeach
                                        </select>
                                      
                                    </div>
                                 </div>
                                 
                                 <hr>
                                 <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label class="form-label">Job Deskripsi Asal</label>
                                        <select class="select2 form-control" id="satgas_asal" name="satgas_asal" required>
                                            <option value="">-- Pilih --</option>
                                            <option value="0">Belum Ada Golongan</option>
                                            @foreach ($satgas as $item)
                                            <option value="{{ $item->id }}">{{ $item->id." : ".$item->satgas }}</option>        
                                            @endforeach
                                        </select>
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label class="form-label">Job Deskripsi Baru</label>
                                        <select class="select2 form-control" id="satgas_baru" name="satgas_baru" required>
                                            <option value="">-- Pilih --</option>
                                            @foreach ($satgas as $item)
                                            <option value="{{ $item->id }}">{{ $item->id." : ".$item->satgas }}</option>        
                                            @endforeach
                                        </select>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label class="form-label">Asal Jabatan Golongan</label>
                                        <select class="select2 form-control" id="golasal" name="golasal" required>
                                            <option value="">-- Pilih --</option>
                                            <option value="0">Belum Ada Golongan</option>
                                            <option value="1">C/1</option>
                                            <option value="2">C/2</option>
                                            <option value="3">C/3</option>
                                          
                                        </select>
                                      
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label class="form-label">Jabatan Golongan Terbaru</label>
                                        <select class="select2 form-control" id="golbaru" name="golbaru" required>
                                            <option value="">-- Pilih --</option>
                                            <option value="0">Belum Ada Golongan</option>
                                            <option value="1">C/1</option>
                                            <option value="2">C/2</option>
                                            <option value="3">C/3</option>
                                          
                                        </select>
                                      
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label class="form-label">Jenis Mutasi</label>
                                        <select class="select2 form-control" id="jenis_mut" name="jenis_mut" required>
                                            <option value="">-- Pilih --</option>
                                            <option value="1">Promosi</option>        
                                            <option value="2">Demosi</option>        
                                            <option value="3">Rotasi</option>        
                                        </select>
                                      
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label class="form-label">Tgl Efektif</label>
                                        <input data-date="" type="date" class="form-control tgl_efektif" placeholder="Bottom right" id="tgl_efektif" name="tgl_efektif" required>
                                        
                                    </div>
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label class="form-label">Tgl Surat</label>
                                        <input class="form-control" data-date="" type="date" id="tgl_surat" name="tgl_surat" required>

                                    </div>
                                 </div>
                                
                                 <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label class="form-label">No Surat</label>
                                        <div class="input-group mb-3">
                                            <input placeholder="input no surat" class="form-control" type="text" id="no_surat" name="no_surat" required>
                                            <div class="input-group-append">
                                              <span class="input-group-text" id="surat"></span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                 </div>
                                 <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <label class="form-label">Keterangan</label>
                                        <textarea class="form-control" placeholder="input keterangan" type="text" id="keterangan" name="keterangan"></textarea>

                                      
                                    </div>
                                 </div>
                            </div>
                            <hr>
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
@endsection
@section('scripts')

    <script src="{{asset('public/assets/js/datagrid/datatables/datatables.bundle.js') }}"></script>
    <script src="{{asset('public/assets/js/formplugins/inputmask/inputmask.bundle.js') }}"></script>
    <script src="{{asset('public/assets/js/formplugins/select2/select2.bundle.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/assets/js/custom/master.js')}}"></script>
    <script type="text/javascript">

       $(document).ready(function () {
        
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
