@extends('layouts.app')

@section('title', 'DP Proyek')

@section('content')
    <h4 class="mb-3">DP Proyek</h4>

    <x-data-table
        route="dpproyek.index"
        :rows="$data"
        :columns="[
            'Uraian_Jenis_Proyek' => 'Uraian Jenis Proyek',
            'Nib' => 'NIB',
            'Nama_Perusahaan' => 'Nama Perusahaan',
            'Tanggal_Terbit_OSS' => 'Tanggal Terbit OSS',
            'Uraian_Status_Penanaman_Modal' => 'Status Penanaman Modal',
            'Uraian_Jenis_Perusahaan' => 'Jenis Perusahaan',
            'Uraian_Risiko_Proyek' => 'Risiko Proyek',
            'Nama_Proyek' => 'Nama Proyek',
            'Uraian_Skala_Usaha' => 'Skala Usaha',
            'Alamat_Usaha' => 'Alamat Usaha',
            'Kab_Kota_Usaha' => 'Kab/Kota Usaha',
            'Kecamatan_Usaha' => 'Kecamatan Usaha',
            'Kelurahan_Usaha' => 'Kelurahan Usaha',
            'Day_Of_Tanggal_Pengajuan_Proyek' => 'Tanggal Pengajuan Proyek',
            'KBLI' => 'KBLI',
            'Judul_KBLI' => 'Judul KBLI',
            'KL_Sektor_Pembina' => 'KL/Sektor Pembina',
            'Luas_Tanah' => 'Luas Tanah',
            'Satuan_Tanah' => 'Satuan Tanah',
            'Jumlah_Investasi' => 'Jumlah Investasi',
            'TKI' => 'TKI',
        ]"
    />
@endsection