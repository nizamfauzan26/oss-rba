<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DPproyek extends Model
{
    use HasFactory;

    protected $table = 'dpproyek';

    protected $fillable = [
        'Uraian_Jenis_Proyek',
        'Nib',
        'Nama_Perusahaan',
        'Tanggal_Terbit_OSS',
        'Uraian_Status_Penanaman_Modal',
        'Uraian_Jenis_Perusahaan',
        'Uraian_Risiko_Proyek',
        'Nama_Proyek',
        'Uraian_Skala_Usaha',
        'Alamat_Usaha',
        'Kab_Kota_Usaha',
        'Kecamatan_Usaha',
        'Kelurahan_Usaha',
        'Day_Of_Tanggal_Pengajuan_Proyek',
        'KBLI',
        'Judul_KBLI',
        'KL_Sektor_Pembina',
        'Luas_Tanah',
        'Satuan_Tanah',
        'Jumlah_Investasi',
        'TKI',
    ];
}