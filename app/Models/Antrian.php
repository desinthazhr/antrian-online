<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Antrian extends Model
{
    use HasFactory;

    protected $table = 'antrian';

    protected $fillable = ['user_id', 'kode_antrian','status', 'prediksi_waktu',  'layanan', 'no_antri','jenis_antrian', 'ukuran'];

    public function pengunjung() { 
        
    return $this->belongsTo('App\Pengunjung'); 
    }
};
