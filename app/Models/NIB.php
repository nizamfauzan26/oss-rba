<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NIB extends Model
{
    use HasFactory;

    protected $table = 'nib';

    protected $fillable = [
        'NIB',
        'Day_Of_Tanggal_Terbit_Oss',
        'Nama_Perusahaan',
        'Status_Penanaman_Modal',
        'Uraian_Jenis_Perusahaan',
        'Uraian_Skala_Usaha',
        'Alamat_Perusahaan',
        'Kelurahan',
        'Kecamatan',
        'Kab_Kota',
    ];
}