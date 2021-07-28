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
                <i class='subheader-icon fal fa-table'></i> Tabel <span class='fw-300'>Master Dokument</span> 
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
                            Master Dokument <span class="fw-300"><i>Tambah</i></span>
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
                    <div class="panel-container show">
                        <br>
                        @if(session()->has('message'))
                        <div class="col-md-12 mb-3">
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
                        <form method="POST" action="parameter/store" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <div class="form-group">
                                            <label class="form-label" for="I">Nama SK Dokument</label>
                                            <input type="text" id="namask" placeholder="input nama sk dokument" name="namask" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label class="form-label" for="totalAsset">Jabatan</label>
                                            <select class="form-control select2" id="jabatan" name="jabatan">
                                                <option value="">-- Pilihan --</option>
                                                @foreach ($jabatan_peg as $item)
                                                    <option value="{{ $item->id_jab }}">{{ $item->kode.'-'.$item->n_jab }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label class="form-label" for="totalAsset">Job Deskripsi</label>
                                            <select class="form-control select2" id="jobdesk" name="jobdesk">
                                                <option value="">-- Pilihan --</option>
                                                @foreach ($satgas as $item)
                                                    <option value="{{ $item->id }}">{{ $item->satgas }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label" for="I">Upload Dokument SK</label>
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
                                    <div class="col-md-12 mb-3 float-end">
                                    <button type="submit" class="btn btn-primary"><i class="fal fa-upload"></i> Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr bg-primary-700 bg-success-gradient">
                        <h2>
                            Master Dokument <span class="fw-300">Tabel</span>
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
                                                        <th>Nama SK</th>
                                                        <th>Jabatan</th>
                                                        <th>Job Deskripsi</th>
                                                        <th>File SK</th>
                                                        <th>Dibuat Tgl</th>
                                                        <th>Edit</th>
                                                        {{-- <th>Hapus</th> --}}
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php($id=1)
                                                    @foreach ($data as $item)
                                                        <tr>
                                                            <td>{{ $id++ }}</td>
                                                            <td>{{ $item->nama_sk }}</td>
                                                            <td>{{ $item->jabatan }}</td>
                                                            <td>{{ $item->jobdesk }}</td>
                                                            <td>
                                                                <a class="btn btn-success" type="submit" href="{{ url('mutasi/master/download/'.$item->id) }}"><i class="fal fa-download"></i> Download SK</a>
                                                            </td>
                                                            <td>{{ $item->created_at }}</td>
                                                            
                                                            <td style="text-align: center">
                                                                <a class="btn btn-warning" type="submit" href="{{ url('mutasi/master/edit/'.$item->id) }}"><i class="fal fa-edit"></i> Edit</a>
                                                            </td>
                                                            {{-- <td>
                                                                <button class="btn btn-danger" onclick="javascript:getModalEdit({{ $item->id }})" id="{{ $item->id }}"><i class="fal fa-trash-alt"></i> Hapus</button>
                                                            </td> --}}
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    
    {{-- Modal Store --}}
    <div class="modal fade" id="pilih" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document" style="max-width: 70%">
            <div class="modal-content">
                <div class="modal-header">
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
                                         
                                        </select>
                                      
                                    </div>
                                 </div>
                                 <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <label class="form-label">Kantor Asal</label>
                                        <select class="select2 form-control" id="kan_asal" name="kan_asal" required>
                                            <option value="">-- Pilih --</option>
                                           
                                        </select>
                                     
                                    </div>
                                 </div>
                                 <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <label class="form-label">Jabatan Asal</label>
                                        <select class="select2 form-control" id="jab_asal" name="jab_asal" required>
                                            <option value="">-- Pilih --</option>
                                            @foreach ($jabatan_peg as $item)
                                            <option value="{{ $item->id_jab }}">{{ $item->kode." : ".$item->n_jab }}</option>        
                                            @endforeach
                                        </select>
                                      
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <label class="form-label">Satuan Tugas Asal</label>
                                        <select class="select2 form-control" id="satgas_asal" name="satgas_asal" required>
                                            <option value="">-- Pilih --</option>
                                            @foreach ($satgas as $item)
                                            <option value="{{ $item->id }}">{{ $item->id." : ".$item->satgas }}</option>        
                                            @endforeach
                                        </select>
                                    </div>
                                 </div>
                                 <div class="col-md-4 mb-3">
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
                                 <div class="col-md-4 mb-3">
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
                                 <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <label class="form-label">Satuan Tugas Baru</label>
                                        <select class="select2 form-control" id="satgas_baru" name="satgas_baru" required>
                                            <option value="">-- Pilih --</option>
                                            @foreach ($satgas as $item)
                                            <option value="{{ $item->id }}">{{ $item->id." : ".$item->satgas }}</option>        
                                            @endforeach
                                        </select>
                                    </div>
                                 </div>
                                 <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <label class="form-label">Golongan</label>
                                        <select class="select2 form-control" id="gol" name="gol" required>
                                            <option value="">-- Pilih --</option>
                                            <option value="1">C/1</option>
                                            <option value="2">C/2</option>
                                            <option value="3">C/3</option>
                                            {{-- @foreach ($gol as $item)
                                                <option value="{{ $item->id }}">{{ $item->gol_pangkat }}</option>
                                            @endforeach --}}
                                        </select>
                                      
                                    </div>
                                 </div>
                                 <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <label class="form-label">Tgl Efektif</label>
                                        <input data-date="" type="date" class="form-control tgl_efektif" placeholder="Bottom right" id="tgl_efektif" name="tgl_efektif" required>
                                        
                                    </div>
                                 </div>
                                 <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <label class="form-label">Tgl Surat</label>
                                        <input class="form-control" data-date="" type="date" id="tgl_surat" name="tgl_surat" required>

                                    </div>
                                 </div>
                                 <div class="col-md-3 mb-3">
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
                                 <div class="col-md-5 mb-3">
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
                                 <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <label class="form-label">Keterangan</label>
                                        <input class="form-control" placeholder="input keterangan" type="text" id="keterangan" name="keterangan">

                                      
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

        $(".money").change(function (){
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
