<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class AppBackend extends Controller
{
    //
 function getData(){
   //  $data = Http::get("https://api.alquran.cloud/v1/quran/quran-uthmani");
    $data = Http::get("http://api.alquran.cloud/v1/quran/quran-uthmani");
   
    return view("quran",["surahdata" => $data["data"]["surahs"]]);
    // echo $Data;
 }

 public function redirectToAyah($surah, $ayah)
 {

   $data = Http::get("http://api.alquran.cloud/v1/quran/quran-uthmani");
     // Pass surah and ayah data to ayah.blade.php
     return view('ayah', [
         'surah' => $surah,
         'ayah' => $ayah,
     ]);
 }


}
