@extends('layouts.app')

@section('title', 'List Izin')

@section('content')
    <h4 class="mb-3">List Izin</h4>

    <x-data-table
        route="list-izin.index"
        :rows="$data"
        :columns="[
            'Permohonan_Izin' => 'Permohonan Izin',
            'Nama_Perusahaan' => 'Nama Perusahaan',
            'Nib' => 'NIB',
            'Day_Of_Tanggal_Terbit_OSS' => 'Tanggal Terbit OSS',
            'Uraian_Status_Penanaman_Modal' => 'Status Penanaman Modal',
            'Provinsi' => 'Provinsi',
            'Kab_Kota' => 'Kab/Kota',
            'Kecamatan' => 'Kecamatan',
            'Kelurahan' => 'Kelurahan',
            'ID_Proyek' => 'ID Proyek',
            'Kd_Resiko' => 'Kode Risiko',
            'Day_Of_Tgl_Izin' => 'Tanggal Izin',
            'Uraian_Jenis_Perizinan' => 'Jenis Perizinan',
            'Nama_Documen' => 'Nama Dokumen',
            'Uraian_Kewenangan' => 'Uraian Kewenangan',
            'Status_Perizinan' => 'Status Perizinan',
            'Kewenangan' => 'Kewenangan',
            'KL_Sektor' => 'KL/Sektor',
        ]"
    />
@endsection