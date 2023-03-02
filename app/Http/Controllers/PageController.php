<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index(){
        return "Selamat Datang";
    }

    public function about(){
        return "Faradisha Aldina Putri 2141720159";
    }

    public function article($id){
        return "Halaman artikel dengan id $id";
    }
}
