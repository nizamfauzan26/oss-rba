<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListIzin extends Model
{
    use HasFactory;

    protected $table = 'list_izins';

    protected $fillable = [
        'Permohonan_Izin',
        'Nama_Perusahaan',
        'Nib',
        'Day_Of_Tanggal_Terbit_OSS',
        'Uraian_Status_Penanaman_Modal',
        'Provinsi',
        'Kab_Kota',
        'Kecamatan',
        'Kelurahan',
        'ID_Proyek',
        'Kd_Resiko',
        'Day_Of_Tgl_Izin',
        'Uraian_Jenis_Perizinan',
        'Nama_Documen',
        'Uraian_Kewenangan',
        'Status_Perizinan',
        'Kewenangan',
        'KL_Sektor',
    ];
}