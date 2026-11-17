@extends('layouts.app')

@section('title', 'NIB')

@section('content')
    <h4 class="mb-3">NIB</h4>

    <x-data-table
        route="nib.index"
        :rows="$data"
        :columns="[
            'NIB' => 'NIB',
            'Day_Of_Tanggal_Terbit_Oss' => 'Tanggal Terbit OSS',
            'Nama_Perusahaan' => 'Nama Perusahaan',
            'Status_Penanaman_Modal' => 'Status Penanaman Modal',
            'Uraian_Jenis_Perusahaan' => 'Jenis Perusahaan',
            'Uraian_Skala_Usaha' => 'Skala Usaha',
            'Alamat_Perusahaan' => 'Alamat Perusahaan',
            'Kelurahan' => 'Kelurahan',
            'Kecamatan' => 'Kecamatan',
            'Kab_Kota' => 'Kab/Kota',
        ]"
    />
@endsection