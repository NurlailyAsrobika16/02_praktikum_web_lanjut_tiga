<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
   public function index(){
       return 'Selamat Datang';
   }
   public function about(){
       return 'NIM : 2041720172<br>Nama : Nurlaily Asrobika<br>Kelas : TI-2B';
   }
   public function articles($id=null){
       return 'Ini adalah halaman artikel dengan id= '.$id;
   }

   
    
}

