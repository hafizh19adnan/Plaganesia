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
             if($request->session()->has('gov')){
                return redirect('dashboard-pemerintah');
             }else{
                return redirect('dashboard-surveyor');
             }
            
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

    public function isiSurvey() {
        return view("pages.isi-survey");
    }

    public function listSurveyOfSurveyor() {
        return view("pages.list-survey");
    }

    public function loginAction(Request $request){
        $username = $request->input('username');
        $password = $request->input('password');
        $account=DB::table('account')->where('username',$username)->count();
        $passwordDB=DB::table('account')->where('username',$username)->value('password');
        $role=DB::table('account')->where('username',$username)->value('role');


        if($account==1 && $passwordDB==$password && $role="1"){
            $request->session()->put('users', '$username');
            $request->session()->put('gov', '$username');
            return redirect('dashboard-gov');
        }else if($account==1 && $passwordDB==$password && $role="2"){
            $request->session()->put('users', '$username');
            return redirect('dashboard-surveyor');
        }else{
            return redirect('login');
        }
    }
    public function logout(Request $request){
        $request->session()->flush();
        return redirect('home');   
    }

}
