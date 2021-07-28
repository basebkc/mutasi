

var url = "";
function getModalEdit($id){
    var bagianForm = $("#judul").val();
    url = getUrl(bagianForm);
    console.log(url);
    $(".modal-title").text("Edit Data "+bagianForm);
    openBox($id,hapus=false,url);
}

 // Get URL Form
 function getUrl(bagianForm){
    var urlTemp; 
    if(bagianForm == "mutasi"){
        urlTemp = "mutasi";
    }else 
    if(bagianForm == "Jabatan"){
        urlTemp = "jabatan";
    }else
    if(bagianForm == "Menu"){
        urlTemp = "menu";
    }else
    if(bagianForm == "parameter"){
        urlTemp = "parameter";
    }

    return urlTemp;
    
}

// modal pop up show //
function openBox(id,hapus,url) {
            
        if(id && hapus == false){
            $.ajax({
                url: url+"/show/"+id,
                type:'GET',
                data: { }
            }).done(function(data){
                //show in modal pop up
                showModal(data,url);
                
            });
        }if(id && hapus == true){
            $.ajax({
                url: url+"/delete/"+id,
                type:'GET',
                data: { }
            }).done(function(data){
                
                toastr.success('Data berhasil dihapus.')

                location.reload();
            })
        } if(id == null && hapus == false){
            $.ajax({
            url: url+"/getlastid",
                type:'GET',
                data: { }
            }).done(function(data){
                
                var id = "";
                if(url == "jabatan"){
                    id = data.data.id_jab;
                }else
                if(url == "mutasi"){
                    
                    if(data.data == null){
                        id = 1;
                    }else{
                        id = data.data.id;
                    }
                    
                }else
                if(url == "menu"){
                    
                    if(data.data == null){
                        id = 1;
                    }else{
                        id = data.data.id;
                    }
                }
                console.log("cek");
                console.log(data);
                $("#id").val(id+1);
                $("#pilih").modal({show: true});
            });
            
        }
        
    }


   

    function showModal(data,url){

        if(url == "jabatan"){
            id = data.data.id_jab;
            $("#id").val(id);
            $("#kode").val(data.data.kode);
            $("#nama").val(data.data.jabatan);
            $("#tunjangan").val(data.data.tunjangan);
            $("#gaji").val(data.data.gapok);
            $("#masa").val(data.data.m_kerja);
        }else
        if(url == "mutasi"){

            console.log(data);
            
            id = data.data.id;
            $("#id").val(id);
            $("#nip").val(data.data.nip);
            $("#nama").val(data.data.nip).change();
            $("#kan_asal").val(data.data.id_kan_asal).change();
            $("#jab_asal").val(data.data.id_jab_asal).change();
            $("#satgas_asal").val(data.data.id_satgas_asal).change();
            $("#kan_baru").val(data.data.id_kan_baru).change();
            $("#jab_baru").val(data.data.id_jab_baru).change();
            $("#satgas_baru").val(data.data.id_satgas_baru).change();
            $("#gol").val(data.data.gol).change();
            $("#jenis_mut").val(data.data.jenis_mutasi).change();
            var tmno_surat  = data.data.no_surat
            var no_surat = tmno_surat.split('/');
           
            $("#no_surat").val(no_surat[0]);
          
            var no_sur = "";
            for(i=1;i<no_surat.length;i++){
                
                if(no_surat[i] == "undefined"){
                    no_sur = "";
                }else {
                    no_sur += "/"+no_surat[i]; 

                }
            }

          
            $("#surat").text(no_sur);
            $("#jenis_mut").val(data.data.jenis_mutasi);
           
            var date = data.data.tgl_efektif;
            var arr = date.split(/ |,/);
            $("#tgl_efektif").val(arr[0]);

            var date1 = data.data.tgl_surat;
            var arr1 = date1.split(/ |,/);
            $("#tgl_surat").val(arr1[0]);

            $("#keterangan").val(data.data.keterangan);
            

        }else   
        if(url == "menu"){
            id = data.data.id;
            $("#id").val(id);
            $("#nama").val(data.data.name);
            $("#icon").val(data.data.icon);
            $("#url").val(data.data.url);
            $("#root").val(data.data.root);
        
        }else   
        if(url == "parameter"){
            id = data.data.id;
            $("#id").val(id);
            $("#parameter").val(data.data.parameter);
        }

        $("#pilih").modal({show: true});
    }


    function getRomawi(no){
        if(no == "01"){
            result = "I";
        }else if(no == "02"){
            result = "II";
            
        }else if(no == "02"){
            result = "II";
        
        }else if(no == "03"){
            result = "III";
        
        }else if(no == "04"){
            result = "IV";
        
        }else if(no == "05"){
            result = "V";
        
        }else if(no == "06"){
            result = "VI";
        
        }else if(no == "07"){
            result = "VII";
        
        }else if(no == "08"){
            result = "VIII";
        
        }else if(no == "09"){
            result = "IX";
        
        }else if(no == "10"){
            result = "X";
        
        }else if(no == "11"){
            result = "XI";
        
        }else if(no == "12"){
            result = "XII";
        }

        return result;
    }


$(document).ready(function() {
    var table;
    var hapus = false;
    

    table = $('#example').DataTable({
        lengthChange: false,
        scrollX: true,
        paging : false
    });

    table = $('#example2').DataTable({
        lengthChange: false,
        scrollX: true
    });

    // $("#satgas_baru").change(function(){
    //     var jab_baru    = $("#jab_baru").val();
    //     var satgas      = $(this).val();
    //     $.ajax({
    //         url: "mutasi/master/cekdokumentsk/"+jab_baru+"/"+satgas,
    //         type:'GET',
    //         data: { }
    //     }).done(function(data){
            
    //         if(data.data == "ada"){

    //         }else{
    //             Swal.fire("Informasi.!", data.message, "error");
    //             $('.modal').each(function(){
    //                 $(this).modal('hide');
    //             });

    //         }
      
            
    //     });
    // });

    // $( ".btnEditAction").click(function() {
    //     var bagianForm = $("#judul").val();
    //     url = getUrl(bagianForm);
        
    //     $(".modal-title").text("Edit Data "+bagianForm);
	// 	openBox($(this).attr("id"),hapus=false,url);
	// });

    
    $( ".btnTambahParam").button().on( "click", function() {
       
        $("#form").trigger("reset");
        
        $(".modal-title").text("Tambah Data "+$("#judul").val());
        $("#pilih").modal({show: true});
	});
    
    $( ".btnTambahAction").button().on( "click", function() {
        $('#nama').val(null).trigger('change');
        var bagianForm = $("#judul").val();
        url = getUrl(bagianForm);
        
        $("#form").trigger("reset");
        
        $(".modal-title").text("Tambah Data "+bagianForm);
        openBox(id=null,hapus=false,url);
	});

    // $( ".btnDeleteAction").button().on( "click", function() {
    //     var result = confirm("Apakah data ini ingin dihapus?");

    //     var bagianForm = $("#judul").val();
    //     url = getUrl(bagianForm);

    //     if (result) {
    //         openBox($(this).attr("id"),hapus=true,url);
    //     }
	// });

  
    $("#tgl_efektif").change(function(){
        var a = $(this).val();
        console.log(a);
        var arr1 = a.split('-');
        console.log(arr1[0]);
        var bulan = getRomawi(arr1[1]);
        console.log("/KEP.DIR/PUD-BKC/MP/"+bulan+"/"+arr1[0]);
        $("#surat").text("/KEP.DIR/PUD-BKC/MP/"+bulan+"/"+arr1[0]);
    });
   





    $("form#form").submit(function(e){
        e.preventDefault();
        
        var formData = new FormData(this);
        var nosurat  = $("#no_surat").val()+$("#surat").text();

        formData.append("nip",$("#nip").val());
        formData.append("gol",$("#gol").val());
        formData.append("kan_asal",$("#kan_asal").val());
        formData.append("jab_asal",$("#jab_asal").val());
        formData.append("satgas_asal",$("#satgas_asal").val());
        formData.append("kan_baru",$("#kan_baru").val());
        formData.append("jab_baru",$("#jab_baru").val());
        formData.append("jenis_mut",$("#jenis_mut").val());
        formData.append("tgl_efektif",$("#tgl_efektif").val());
        formData.append("tgl_surat",$("#tgl_surat").val());
        formData.append("no_surat",nosurat);
        formData.append("keterangan",$("#keterangan").val());
        
        $.ajax({
                url:  url+"/store",
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function (result) {
                    
                    toastr.success('Data berhasil disimpan.',  'Info', { positionClass: 'toast-top-center', timeOut: 10000 })
                    
                    $('.modal').each(function(){
                        $(this).modal('hide');
                    });
    
                    location.reload();
                    
                },
                error:function(error){
                    toastr.error('Jaringan internet terputus.','Info', { positionClass: 'toast-top-center', timeOut: 10000 });
                }
            })
        

    });

    $("form#formMenu").submit(function(e){
        e.preventDefault();
        
        var formData = new FormData(this);
        var nosurat  = $("#no_surat").val()+$("#surat").text();

        formData.append("id",$("#id").val());
        formData.append("nama",$("#nama").val());
        formData.append("url",$("#url").val());
        formData.append("icon",$("#icon").val());
        formData.append("root",$("#root").val());
        
        $.ajax({
                url:  url+"/store",
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
                    
                    $('.modal').each(function(){
                        $(this).modal('hide');
                    });
    
                    location.reload();
                    
                },
                error:function(error){
                    toastr.danger('Jaringan internet terputus.');
                }
            })

    });

    // $("form#formCetakSKMutasi").submit(function(e){
    //     e.preventDefault();
        
    //     // var formData = new FormData(this);
    //     let idpegawai = $("#pegawai").val();
    //     let dokumentsk = $("#dokumentsk").val();
        

    //     console.log(idpegawai)
    //     console.log(dokumentsk)

    //     $.ajax({
    //             url:  'cetak/dowload',
    //             type: 'GET',
    //             headers: {
    //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //             },
    //             data: {id:idpegawai,doc:dokumentsk},
    //             dataType: 'json',
    //             success: function (result) {
                    
    //                 toastr.success('Data berhasil disimpan.')
                    
    //                 // $('.modal').each(function(){
    //                 //     $(this).modal('hide');
    //                 // });
    
    //                 // location.reload();
                    
    //             },
    //             error:function(error){
    //                 console.log(error.data);
    //                 toastr.error('Jaringan internet terputus.');
    //             }
    //         })

    // });


    

        // onchange nik
    $("#nama").change(function(){

        $.ajax({
            url: "mutasi/getpegawailama/"+$(this).val(),
            type:'GET',
            data: { }
        }).done(function(data){
            console.log(data);
            // toastr.success('Data berhasil dihapus.')
            if(data.data == "" || data.data == null){
                $("#kan_asal").val("").change().prop('disabled', false);;
                $("#jab_asal").val("").change().prop('disabled', false);
                $("#satgas_asal").val("").change().prop('disabled', false);
                $("#golasal").val("").change().prop('disabled', false);
                
                
            }else{
                $("#kan_asal").val(data.data.id_kan).change().prop('disabled', true);
                $("#jab_asal").val(data.data.id_jab).change().prop('disabled', true);
            }
            
            
            if(data.data.kd_jbstruk === "" || data.data.kd_jbstruk === null){
                $("#satgas_asal").val(0).change();
            }else{
                $("#satgas_asal").val(data.data.kd_jbstruk).change().prop('disabled', true);
            }

            if(data.data.id_gol === "" || data.data.id_gol === null || data.data.id_gol === 0){
                $("#golasal").val(0).change().prop('disabled', false);
                
            }else{
                $("#golasal").val(data.data.id_gol).change().prop('disabled', true);
            }
            
            // location.reload();
        })

        $("#nip").val($(this).val());
        
    });
    // $("form#form").submit(function(e){
    //     e.preventDefault();

    //     // var formData = new FormData(this);
    //     // var formData = new FormData(this);  

    //     // formData.append("id",$("#id").val());
    //     // formData.append("jabatan",$("#nama").val());
    //     // formData.append("kode",$("#kode").val());
    //     // formData.append("tunjangan",$("#tunjangan").val());
    //     // formData.append("masa",$("#masa").val());
    //     // formData.append("gaji",$("#gaji").val());

    //     $.ajax({

    //         url:  url+"/store",
    //         type: 'POST',
    //         headers: {
    //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //         },
    //         data: formData,
    //         cache: false,
    //         contentType: false,
    //         processData: false,
    //         success: function (result) {
    //             console.log(result)
    //             // toastr.success('Data berhasil disimpan.')
                
    //             // $('.modal').each(function(){
    //             //     $(this).modal('hide');
    //             // });

    //             // location.reload();
                
    //         }
    //     })

        
    // })    

});









  

