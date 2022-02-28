<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function world(){
        return "Hallo dunia menggunakan controller";
    }
    public function home(){
        return '<a href=" https://www.educastudio.com/">Educational Games</a>';
    }
}
