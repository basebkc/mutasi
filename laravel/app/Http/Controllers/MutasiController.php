<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\PegawaiLama;
use App\Models\Kantor;
use App\Models\Jabatan;
use App\Models\SatuanTugas;
use App\Models\Golongan;
use App\Models\Mutasi;
use App\Models\Parameter;
use DB;
use Carbon\Carbon;
use WordTemplate;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;
use File;
use Auth;
use \PhpOffice\PhpWord\TemplateProcessor,
    \PhpOffice\PhpWord\Shared\Html,
    \PhpOffice\PhpWord\PhpWord;



class MutasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          //
          $user       = 'Admin';
          $jabatan       = 'Staff IT';
          $title      = 'Mutasi Online';
          // $data       = Mutasi::get(); 
          $data       = $this->getPegawaiMutasi();
                     
          $pegawai    = PegawaiLama::select('id','nip','nama')->where('kdstatusp','!=','0')->orderBy('nama', 'asc')->get();
          
          $kantor     = Kantor::all();
          $jabatan_peg    = Jabatan::orderBy('kode', 'desc')->get();
          $satgas     = SatuanTugas::orderBy('id', 'asc')->get();
          $gol        = Golongan::select('id','gol_pangkat')->get();
          
          return View('mutasi.list',
                      [
                          'title'=>$title,
                          'data' => $data,
                          'pegawai' => $pegawai,
                          'kantor' => $kantor,
                          'jabatan_peg' => $jabatan_peg,
                          'jabatan' => $jabatan,
                          'satgas' => $satgas,
                          'gol' => $gol,
                          'user' => $user
                      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        Mutasi::updateOrCreate(
            [
              'id' => $request->id
            ],
            [
              'nip' => $request->nip,
              'gol' => $request->golbaru,
              'id_kan_asal' => $request->kan_asal,
              'id_jab_asal' => $request->jab_asal,
              'id_satgas_asal' => $request->satgas_asal,
              'id_kan_baru' => $request->kan_baru,
              'id_jab_baru' => $request->jab_baru,
              'id_satgas_baru' => $request->satgas_baru,
              'jenis_mutasi' => $request->jenis_mut,
              'tgl_efektif' => $request->tgl_efektif,
              'tgl_surat' => $request->tgl_surat,
              'no_surat' => $request->no_surat,
              'keterangan' => $request->keterangan,
              'created_at' => Carbon::now()
              
            ]
          );
      
          return response()->json(
            [
              'success' => true,
              'message' => 'Data inserted successfully'
            ]
          );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data  = Mutasi::find($id);
      
        return response()->json([
          'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function generateDoc($id){
        
        $dataInput = [];
        $data   = $this->getPegawaiMutasi($id); 
        $dataInput[] = $data;
      
        $getSK  = DB::table('sk_mutasi as a')
                ->selectRaw('a.id, a.file_sk')
                ->leftJoin('tbl_jabatan as b','a.id_jab','=','b.id_jab')
                ->leftJoin('satuan_tugas as c','c.id','=','a.id_satgas')
                ->where(['b.n_jab' => $data->jab_baru , 'c.satgas' => $data->satgas_baru ])
                ->first();
                
        $file = Storage::disk('local')->exists('public/sk/'. $getSK->file_sk);
        
        if($file){
            
            $parameter = [];
            $getParameter = DB::table('parameter_sk')->where('id_sk_mutasi',$getSK->id)->get();
              
            foreach($data as $items ){
              dd($items);
              $parameter[] = $item;
            }
        }
        
        $tgl_efektif  = date_create($data->tgl_efektif);
        $tgl_lahir    = date_create($data->tgl_lahir);
        $lowNama      = strtolower($data->nama);
        $nama         = ucfirst($lowNama);
        $lowAlamat      = strtolower($data->alamat);
        $alamat         = ucfirst($lowAlamat);
        $lowtmpt_lahir  = strtolower($data->tmpt_lahir);
        $tmpt_lahir     = ucfirst($lowtmpt_lahir);
        $lowkan_asal  = strtolower($data->kan_asal);
        $kan_asal     = ucfirst($lowkan_asal);
        $lowjab_asal  = strtolower($data->jab_asal);
        $jab_asal     = ucfirst($lowjab_asal);
        $lowsatgas_asal  = strtolower($data->satgas_asal);
        $satgas_asal     = ucfirst($lowsatgas_asal);
        $lowkan_baru  = strtolower($data->kan_baru);
        $kan_baru     = ucfirst($lowkan_baru);
        $lowjab_baru  = strtolower($data->jab_baru);
        $jab_baru     = ucfirst($lowjab_baru);
        $lowsatgas_baru  = strtolower($data->satgas_baru);
        $satgas_baru     = ucfirst($lowsatgas_baru);
        

        $array = array(
          'no_surat' => $data->no_surat,
          '[TGL_EFEKTIF]' => date_format($tgl_efektif,"d F Y"),
          '[NAMA]' => $nama,
          '[ALAMAT]' => $alamat,
          'tmpt_lahir' => $tmpt_lahir,
          'tgl_lahir' => date_format($tgl_lahir,"d-m-Y"),
          '[GOL]' => $data->gol,
          'kan_asal' => $kan_asal,
          '[JAB_LAMA]' => $jab_asal,
          'satgas_asal' => $satgas_asal,
          '[KAN_BARU]' => $kan_baru,
          'jb_baru' => $jab_baru,
          'sat_baru' => $satgas_baru,
          '[KET]' => $data->keterangan,
          
        );
        
        $nama_file = 'SK MUTASI '.$data->nama.'.docx';
        // dd($array);
        return WordTemplate::export($file, $array, $nama_file);
    }


    public function getPegawaiMutasi($id=null){

        if($id == null){

          $data = DB::table('mutasi')
                ->select('mutasi.id',
                        'mutasi.nip',
                        'mutasi.tgl_efektif',
                        'mutasi.tgl_surat',
                        'mutasi.no_surat',
                        'mutasi.keterangan',
                        'pegawai.nama',
                        'pegawai.alamat',
                        'pegawai.tgl_lahir',
                        'pegawai.tmpt_lahir',
                        'golongans.gol_pangkat as gol',
                        'jenis_mutasi.jenismutasi as jenis_mutasi',
                        'kantor1.n_kan as kan_asal',
                        'jabatan1.n_jab as jab_asal',
                        'satgas1.satgas as satgas_asal',
                        'tbl_kantor.n_kan as kan_baru',
                        'tbl_jabatan.n_jab as jab_baru',
                        'satuan_tugas.satgas as satgas_baru',
                        'mutasi.created_at')
                ->join('bankbkc_simpeglite.pegawai','mutasi.nip','=','pegawai.nip')
                ->join('golongans','mutasi.gol','=','golongans.id')
                ->join('bankbkc_simpeglite.tbl_kantor as kantor1','mutasi.id_kan_asal','=','kantor1.id_kan')
                ->join('jenis_mutasi','mutasi.jenis_mutasi','=','jenis_mutasi.id')
                ->join('bankbkc_simpeglite.tbl_jabatan as jabatan1','mutasi.id_jab_asal','=','jabatan1.id_jab')
                ->join('satuan_tugas as satgas1','mutasi.id_satgas_asal','=','satgas1.id')
                ->join('bankbkc_simpeglite.tbl_kantor','mutasi.id_kan_baru','=','tbl_kantor.id_kan')
                ->join('bankbkc_simpeglite.tbl_jabatan','mutasi.id_jab_baru','=','tbl_jabatan.id_jab')
                ->join('satuan_tugas','mutasi.id_satgas_baru','=','satuan_tugas.id')
                ->get();
          // dd($data);
          return $data;
        }
        else{
          return DB::table('mutasi')
                ->select('mutasi.id',
                        'mutasi.nip',
                        'mutasi.tgl_efektif',
                        'mutasi.tgl_surat',
                        'mutasi.no_surat',
                        'mutasi.keterangan',
                        'pegawai.nama',
                        'pegawai.tgl_lahir',
                        'pegawai.alamat',
                        'pegawai.tmpt_lahir',
                        'golongans.gol_pangkat as gol',
                        'jenis_mutasi.jenismutasi as jenis_mutasi',
                        'kantor1.n_kan as kan_asal',
                        'jabatan1.n_jab as jab_asal',
                        'satgas1.satgas as satgas_asal',
                        'tbl_kantor.n_kan as kan_baru',
                        'tbl_jabatan.n_jab as jab_baru',
                        'tbl_jabatan.id_jab',
                        'satuan_tugas.satgas as satgas_baru',
                        'satuan_tugas.id as id_satgas',
                        'mutasi.created_at')
                ->join('bankbkc_simpeglite.pegawai','mutasi.nip','=','pegawai.nip')
                ->join('bankbkc_simpeglite.tbl_kantor as kantor1','mutasi.id_kan_asal','=','kantor1.id_kan')
                ->join('bankbkc_simpeglite.tbl_jabatan as jabatan1','mutasi.id_jab_asal','=','jabatan1.id_jab')
                ->join('satuan_tugas as satgas1','mutasi.id_satgas_asal','=','satgas1.id')
                ->join('bankbkc_simpeglite.tbl_kantor','mutasi.id_kan_baru','=','tbl_kantor.id_kan')
                ->join('bankbkc_simpeglite.tbl_jabatan','mutasi.id_jab_baru','=','tbl_jabatan.id_jab')
                ->join('satuan_tugas','mutasi.id_satgas_baru','=','satuan_tugas.id')
                ->leftJoin('jenis_mutasi','mutasi.jenis_mutasi','=','jenis_mutasi.id')
                ->join('golongans','mutasi.gol','=','golongans.id')
                ->where('mutasi.id',$id)
                ->first();
        }
        
    }

    public function getlastid()
    {
        $data  = Mutasi::latest('id')->first();
        
          return response()->json([
            'data' => $data
          ]);
        
    }

    public function indexMaster()
    {
         //
        
         $user       = 'Admin';
         $jabatan       = 'Staff IT';
         $title      = 'Master Dokument';
         // $data       = Mutasi::get(); 
         $data       = $this->getMasterDokument();
         $pegawai    = PegawaiLama::select('nip','nama')->orderBy('nama', 'asc')->get();
         $kantor     = Kantor::all();
         $jabatan_peg    = Jabatan::orderBy('kode', 'desc')->get();
         $satgas     = SatuanTugas::orderBy('satgas', 'asc')->get();
         $gol        = Golongan::select('id','gol_pangkat')->get();
         
         return View('mutasi.master',
                     [
                         'title'=>$title,
                         'data' => $data,
                         'pegawai' => $pegawai,
                         'kantor' => $kantor,
                         'jabatan_peg' => $jabatan_peg,
                         'jabatan' => $jabatan,
                         'satgas' => $satgas,
                         'gol' => $gol,
                         'user' => $user
                     ]);
        
    }

    public function getMasterDokument($id=null){

        if($id == null){
            $data = DB::table('sk_mutasi as a')
                    ->selectRaw('a.*, b.n_jab as jabatan, c.satgas as jobdesk')
                    ->leftJoin('bankbkc_simpeglite.tbl_jabatan as b','a.id_jab','=','b.id_jab')
                    ->leftJoin('satuan_tugas as c','a.id_satgas','=','c.id')
                    ->where('a.file_sk','!=','')
                    ->get();
        }else{
            $data = DB::table('sk_mutasi')
                    // ->leftJoin('tbl_jabatan as b','a.id_jab','=','b.id_jab')
                    // ->leftJoin('satuan_tugas as c','c.id','=','a.id_satgas')
                    ->where('id',$id)
                    ->first();
        }
        
        return $data;
    }

    public function tambah(){
      $title  = 'Master Dokument';
      $user   = 'Admin';
      $jabatan = 'Staff IT';
      $data  = DB::table('sk_mutasi')->orderBy('nama_sk','asc')->get();
      $satgas       = DB::table('satuan_tugas')->orderBy('satgas','asc')->get();
      return view('mutasi.tambah',compact('title','user','jabatan','data','satgas'));
    }


    public function parameter(){
      $title  = 'Parameter Dokument';
      $user   = 'Admin';
      $jabatan = 'Staff IT';
      $jabatan_peg  = DB::table('bankbkc_simpeglite.tbl_jabatan')->orderBy('kode','desc')->get();
      $satgas       = DB::table('satuan_tugas')->orderBy('satgas','asc')->get();
      $sk           = DB::table('sk_mutasi')->orderBy('nama_sk','asc')->get();
      $data         = DB::table('parameter_sk')->orderBy('created_at','desc')->get();
      
      return view('mutasi.parameter',compact('title','user','jabatan','jabatan_peg','satgas','data','sk'));
    }

    public function storeParameter(Request $request){
     
      request()->validate([
        'filesk'  => 'required|mimes:doc,docx,txt|max:2048',
      ]);

      $cek = DB::table('sk_mutasi')
                ->where([
                    'id_jab' => $request->jabatan,
                    'id_satgas' => $request->jobdesk, 
                  ])
                ->first();
      
      if($cek){
          return redirect()->back()->with('error', 'Maaf Dokument SK sudah dibuat.');
      }
      
      $namadok    = $request->namask.'.docx';
      if ($files = $request->file('filesk')) {
          $path = $request->file('filesk')->storeAs('public/sk',$namadok);
      }
      
      DB::table('sk_mutasi')->insert([
          'id_jab' => $request->jabatan,
          'id_satgas' => $request->jobdesk,
          'nama_sk' => $request->namask,
          'file_sk' => $namadok,
          'created_at' => Carbon::now()
      ]);

      return redirect()->back()->with('message', '1 data dokument berhasil disimpan.');
    }

    public function storeParameterSK(Request $request){

      if(is_null($request->id)){

        $data = Parameter::Create(
              [
                'parameter' => $request->parameter,
                'created_at' => Carbon::now()
              ]);
    
      }else{

        $data = Parameter::where('id',$request->id)->update(['parameter' => $request->parameter]);
          
      }
      
      
      return response()->json(
        [
          'success' => true,
          'message' => 'Data berhasil disimpan.'
        ]
      );

    }

    public function cetakDokumentSK_lama(Request $request){
       
        // $dataInput = [];
        $data   = $this->getPegawaiMutasi($request->pegawai); 
        
        // $dataInput[] = $data;
      
       
        // // dd(count((array)$data));
        // $getSK  = DB::table('sk_mutasi as a')
        //         ->selectRaw('a.id, a.file_sk')
        //         ->leftJoin('bankbkc_simpeglite.tbl_jabatan as b','a.id_jab','=','b.id_jab')
        //         ->leftJoin('satuan_tugas as c','c.id','=','a.id_satgas')
        //         ->where(['b.n_jab' => $data->jab_baru , 'c.satgas' => $data->satgas_baru ])
        //         ->first();
        // dd($getSK);          
              
        // $file = Storage::get('public/sk/SK Staff IT.rtf');
        $file =   File::get(storage_path('app/public/sk/'.$request->dokumentsk));
        // $file =   Storage::disk('local')->files('public/sk/'.$request->dokumentsk, 'Contents');
        // $file = public_path('SK Staff IT.rtf');

        
        // if($file){

          $tgl_efektif  = date("d M Y",strtotime($data->tgl_efektif));
          $tgl_lahir    = date("d M Y",strtotime($data->tgl_lahir));
          $lowNama      = strtolower($data->nama);
          $nama         = ucfirst($lowNama);
          $lowAlamat      = strtolower($data->alamat);
          $alamat         = ucfirst($lowAlamat);
          $lowtmpt_lahir  = strtolower($data->tmpt_lahir);
          $tmpt_lahir     = ucfirst($lowtmpt_lahir);
          $lowkan_asal  = strtolower($data->kan_asal);
          $kan_asal     = ucfirst($lowkan_asal);
          $lowjab_asal  = strtolower($data->jab_asal);
          $jab_asal     = ucfirst($lowjab_asal);
          $lowsatgas_asal  = strtolower($data->satgas_asal);
          $satgas_asal     = ucfirst($lowsatgas_asal);
          $lowkan_baru  = strtolower($data->kan_baru);
          $kan_baru     = ucfirst($lowkan_baru);
          $lowjab_baru  = strtolower($data->jab_baru);
          $jab_baru     = ucfirst($lowjab_baru);
          $lowsatgas_baru  = strtolower($data->satgas_baru);
          $satgas_baru     = ucfirst($lowsatgas_baru);
          
  
          $array = array(

            '[nosurat]'       => $data->no_surat,
            '[tglefektif]'    => $tgl_efektif,
            // '[nama]'          => $nama,
            // '[alamat]'        => $alamat,
            // '{#tmptlahir}'    => $tmpt_lahir,
            // '[tgllahir]'      => date_format($tgl_lahir,"d-m-Y"),
            // '[gol]'           => $data->gol,
            // '[kantorbaru]'    => $kan_asal,
            // '[kantorlama]'    => $kan_asal,
            // '[jabatanlama]'   => $jab_asal
            
          );

  
        $nama_file = 'SK MUTASI '.$data->nama.'.doc';
       
        return WordTemplate::export($file, $array, $nama_file);
       
    }

     //  Nasabah Baru
     public function cetakDokumentSK(Request $request) {

  

        if(!$request->pegawai && !$request->doc){

          return response()->json(
            [
              'success' => true,
              'data'    => 'kosong'
            ],
            202
          );

        }
       
        $data     = $this->getPegawaiMutasi($request->pegawai); 
       
        
        $dokument =  DB::table('sk_mutasi')
                    ->where([
                      'id_jab' => $data->id_jab,
                      'id_satgas' => $data->id_satgas
                    ])
                    ->first();

        if(!$dokument){
          return redirect()->back()->with('error', 'Maaf Dokument SK untuk Job Deskripsi ini belum sudah dibuatkan.');
        }
       
        require_once 'laravel/vendor/autoload.php';
        
        $my_template = new \PhpOffice\PhpWord\TemplateProcessor(storage_path('app/public/sk/'.$dokument->file_sk));
        
        $my_template->setValue('{nama}',  $data->nama);
        $my_template->setValue('{nip}', $data->nip);
        $my_template->setValue('{tglsurat}', date("M Y",strtotime($data->tgl_surat)));  
        $my_template->setValue('{no_surat}', $data->no_surat);  
        $my_template->setValue('{alamat}',  $data->alamat);      
        $my_template->setValue('{kantorlama}', $data->kan_asal);      
        $my_template->setValue('{kantorbaru}', $data->kan_baru);      
        $my_template->setValue('{jabatanlama}', $data->jab_asal);      
        $my_template->setValue('{jabatanbaru}', $data->jab_baru);      
        $my_template->setValue('{tempat}', $data->tmpt_lahir);      
        $my_template->setValue('{gol}', $data->gol);      
        $my_template->setValue('{ket}', $data->keterangan);      
        $my_template->setValue('{tgl_lahir}', date("d M Y",strtotime($data->tgl_lahir)));  
       
        
        try{
            $my_template->saveAs(storage_path('SK_MUTASI_'.$data->nama.'.docx'));
        }catch (Exception $e){
            //handle exception
        }
    
        return response()->download(storage_path('SK_MUTASI_'.$data->nama.'.docx'));
        
    }

    public function getjsonmaster($id){

        // dd($id);
        $data = DB::table('mutasi as a')
            ->selectRaw('a.*,c.n_jab as jabatanbaru,g.satgas as satgasbaru, e.n_kan as kantorbaru')
            ->leftJoin('bankbkc_simpeglite.tbl_jabatan as b','b.id_jab','=','a.id_jab_asal')
            ->leftJoin('bankbkc_simpeglite.tbl_jabatan as c','c.id_jab','=','a.id_jab_baru')
            ->leftJoin('bankbkc_simpeglite.tbl_kantor as d','d.id_kan','=','a.id_kan_asal')
            ->leftJoin('bankbkc_simpeglite.tbl_kantor as e','e.id_kan','=','a.id_kan_baru')
            ->leftJoin('satuan_tugas as f','f.id','=','a.id_satgas_asal')
            ->leftJoin('satuan_tugas as g','g.id','=','a.id_satgas_baru')
            ->where('a.id',$id)
            ->first();

        return response()->json(
          [
            'success' => true,
            'data'    => $data
          ],
          202
        );
    }

    public function getjsondocsk($jabatan,$jobdesc){

        $data = DB::table('sk_mutasi')->where([
                    'id_jab' => $jabatan,        
                    'id_satgas' => $jobdesc        
                ])
                ->first();

        return response()->json(
          [
            'success' => true,
            'data'    => $data
          ],
          202
        );
    }

    public function downloadMasterDokument($id){
        $doc = DB::table('sk_mutasi')->where('id',$id)->first();
        
        // $file = Storage::disk('local')->get('public/sk/'.$doc->file_sk);

        $filename = 'attachment;filename='.$doc->file_sk;
        
        return (new Response(Storage::disk('local')->get('public/sk/'.$doc->file_sk), 200))
                ->header('Content-Type', 'application/msword')
                ->header('Content-Disposition',$filename);

    }


    public function editFile($id){

      if(is_null($id)){
         return redirect('404');
      }

      $title          = 'Master Dokument';
      $user           = 'Admin';
      $jabatan        = 'Staff IT';
      $data           = DB::table('sk_mutasi')->where('id',$id)->first();
      $jabatan_peg    = Jabatan::orderBy('kode', 'desc')->get();
      $satgas         = SatuanTugas::orderBy('satgas', 'asc')->get();
          

      return view('mutasi.edit',compact('title','user','jabatan','data','satgas','jabatan_peg'));
    }

    public function updateFile(Request $request){
        
        request()->validate([
          'filesk'  => 'required|mimes:doc,docx,txt|max:2048',
        ]);
        
      
        $cekFile    = Storage::disk('local')->exists('public/sk/'.$request->file_sk);
        
        if ($cekFile) {
            
            Storage::disk('local')->delete('public/sk/'.$request->file_sk);
           
        }

        
        $namadok    = $request->dokumentsk.'.docx';
        if ($files = $request->file('filesk')) {
            $path = $request->file('filesk')->storeAs('public/sk',$namadok);
        }

        DB::table('sk_mutasi')->where('id',$request->idsk)->update([
          'id_jab' => $request->jabatan,
          'id_satgas' => $request->jobdesk,
          'nama_sk' => $request->dokumentsk,
          'file_sk' => $namadok,
          'created_at' => Carbon::now()
        ]);

        return redirect()->back()->with('message', '1 data dokument berhasil disimpan.');
    }

    public function hapusParameter(Request $request){

        $data = DB::table('parameter_sk')->where('id',$request->id)->delete();

        return response()->json(
          [
            'success' => true,
            'message'    => 'Data berhasil dihapus.'
          ],
          200
        );
      
    }

    public function cekdokumentsk($jabatan,$satgas){
        
        $data = DB::table('sk_mutasi')
              ->where([
                'id_jab'    => $jabatan,
                'id_satgas' => $satgas
              ])
              ->first();
        if($data){
            $result = "ada";
        }else{
            $result = "tidak ada";

        }
              
        return response()->json(
          [
            'success'     => true,
            'data'        => $result,
            'message'     => 'Master Dokument SK belum dibuatkan, silakan dibuatkan dahulu.'
          ],
          200
        );

    }

    public function cetakmutasi(){

      $title  = 'Master Dokument';
      $user   = 'Admin';
      $jabatan = 'Staff IT';

      $pegawai = DB::table('mutasi as m')
                ->selectRaw('m.id, m.nip, p.nama')
                ->join('bankbkc_simpeglite.pegawai as p','m.nip','=','p.nip')
                ->orderBy('p.nama','asc')
                ->get();
      
      $sk     = DB::table('sk_mutasi')->orderBy('created_at','desc')->get();

      return view('mutasi.cetakmutasi',
              compact('title','user','jabatan','pegawai','sk'));
    }

    public function getpegawailama($id=null){
        if($id){
          $data = PegawaiLama::join('tbl_jabatan','tbl_jabatan.kode','=','pegawai.id_jab')->where('id',$id)->first();
        }else{
          $data = "kosong";
        }
        

        return response()->json(
          [
            'success' => true,
            'data'    => $data
          ],
          202
        );
    }

    public function showParameter($id){
      
      $data = DB::table('parameter_sk')->where('id',$id)->first();
      return response()->json([
        'data' => $data
      ]);
    }
    

}
