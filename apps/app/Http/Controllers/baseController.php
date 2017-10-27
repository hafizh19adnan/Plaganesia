<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Collection;
use App\Http\Controllers\stdClass;
use Log;

class baseController extends Controller
{
    public function index(Request $request){
        if($request->session()->has('users')){
            return redirect('dashboard');
        }else{
           return view("pages.home");
        }  
    }
    public function view_peta(){
        return view("pages.view-peta");
    }

    public function berita(){
        return view("pages.berita");
    }
    public function public_info(){
        return view("pages.public-info");
    }

    public function dashboard_gov(){
        return view("pages.dashboard-gov");
    }
    public function login(){
        return view("pages.login-page");
    }

    public function daftarLaporan() {
        return view("pages.daftar-laporan");
    }

    public function daftarSurvey() {
        return view("pages.daftar-survey");
    }
   
    public function buatSurvey() {
        return view("pages.survey");
    }
}
