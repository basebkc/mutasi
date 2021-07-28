<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mutasi extends Model
{
    use HasFactory;
    protected $table = 'mutasi';

    protected $fillable = [
        'nip' ,
        'gol',
        'id_kan_asal',
        'id_jab_asal' ,
        'id_satgas_asal' ,
        'id_kan_baru' ,
        'id_jab_baru' ,
        'id_satgas_baru',
        'jenis_mutasi',
        'tgl_efektif',
        'tgl_surat',
        'no_surat',
        'keterangan'
    ];

    public function jabatan(){
        return $this->hasMany(Jabatan::class);
    }

    public function kantor(){
        return $this->hasMany(Kantor::class);
    }
}
