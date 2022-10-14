<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// bikin 3 route(dosen,mahasiswa,matkul)
Route::get('/dosen', function () {
    $data = [
        'dosenBlockchain' => 'Adhi Rizal',
        'dosenDatmin' => 'Betha Nurina Sari',
        'dosenTechnopreneur' => 'Hannie',
        'dosenCloudcomputing' => 'Arip Solehudin',
        'dosenMatematikadiskrit' => 'Carudin',
        'dosenJaringan' => 'Chaerudin',
        'dosenBahasainggris' => 'Totoh',
        'dosenPemrogramandasar' => 'Asep',
        'dosenPemrogramanmobile' => 'Purwantoro',
        'dosenFrameworkweb' => 'Aji Primajaya ',

        'mkBlockchain' => 'Blockchain',
        'mkDatmin' => 'Data Mining',
        'mkTechnopreneur' => 'Technopreneur',
        'mkCloudcomputing' => 'Cloud Computing',
        'mkMatematikadiskrit' => 'Matematika Diskrit',
        'mkJaringan' => 'Jaringan',
        'mkBahasainggris' => 'Bahasa Inggris',
        'mkPemrogramandasar' => 'Pemrograman Dasar',
        'mkPemrogramanmobile' => 'Pemrograman Mobile',
        'mkFrameworkweb' => 'Framework Web',
    ];

    return view('dosen/index', $data);
});

Route::get('/mahasiswa', function () {
    return view('mahasiswa/index', [
        'mahasiswa1' => 'Fauzan',
        'mahasiswa2' => 'Ilham',
        'mahasiswa3' => 'Rafi',
        'mahasiswa4' => 'Ilhan',
        'mahasiswa5' => 'Arfan',
        'mahasiswa6' => 'Sidqih',
        'mahasiswa7' => 'Hanna',
        'mahasiswa8' => 'Yoga',
        'mahasiswa9' => 'Alpin',
        'mahasiswa10' => 'Shindi',
    ]);
});
Route::get('/matkul', function () {
    $dataMK = [
        'mkBlockchain' => 'Blockchain',
        'mkDatmin' => 'Data Mining',
        'mkTechnopreneur' => 'Technopreneur',
        'mkCloudcomputing' => 'Cloud Computing',
        'mkMatematikadiskrit' => 'Matematika Diskrit',
        'mkJaringan' => 'Jaringan',
        'mkBahasainggris' => 'Bahasa Inggris',
        'mkPemrogramandasar' => 'Pemrograman Dasar',
        'mkPemrogramanmobile' => 'Pemrograman Mobile',
        'mkFrameworkweb' => 'Framework Web',
    ];
    return view('matkul/index');
});
