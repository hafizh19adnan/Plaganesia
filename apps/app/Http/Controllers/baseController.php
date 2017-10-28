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
             }else if($request->session()->has('survey')){
                return redirect('list-survey');
             }
        }else{
           return view("pages.home");
        }  
    }

    public function addLaporan(Request $request){
        $nama_pelapor = $request -> input('nama');
        $alamat = $request -> input('alamat');
        $id_kabupaten = $request -> input('kabupaten');
        $isi = $request -> input('laporan');
        $tgl_lapor = $request -> input('tgl_lapor');

        $pesan = "Laporan Berhasil dikirim";

        DB::table('laporan')->insert(['nama_pelapor'=> $nama_pelapor, 'alamat'=>$alamat,'id_kabupaten'=>$id_kabupaten,'isi'=>$isi ,'tgl_lapor'=>$tgl_lapor]);
        return redirect("/");
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
        $status0="danger";
        $status1="danger";
        $status2="danger";
        $status3="danger";
        $status4="danger";
        $status5="danger";
        $status6="danger";
        $status7="danger";

        return view("pages.dashboard-gov",['status0'=>$status0,'status1'=>$status1,'status2'=>$status2,'status3'=>$status3,'status4'=>$status4,'status5'=>$status5,'status6'=>$status6,'status7'=>$status7]);
    }

    public function login(){
        return view("pages.login-page");
    }

    public function daftarLaporan() {
        $list_laporan = DB::table('laporan')->get();
        return view("pages.daftar-laporan",['list_laporan'=>$list_laporan]);
    }

    public function daftarSurvey() {
        $list_survey = DB::table('survey')->get();
        return view("pages.daftar-survey",['list_survey'=>$list_survey]);
    }
   
    public function buatSurvey() {

        $provinsis = DB::table('provinsi')->get();
        $kabupatens = DB::table('kabupaten')->get();
        $penyakits = DB::table('penyakit')->get();
        return view('pages.survey', ['provinsis'=>$provinsis, 'kabupatens'=>$kabupatens, 'penyakits'=>$penyakits]);
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
        $account_gov=DB::table('account')->where('username',$username)->where('role',1)->count();
        $account_survey=DB::table('account')->where('username',$username)->where('role',2)->count();
        $passwordDB=DB::table('account')->where('username',$username)->value('password');
        if($account_gov==1 && $passwordDB==$password){
            $request->session()->put('username',$username);
            $request->session()->put('gov',$username);
            return redirect("/dashboard-gov");
        }else{
            if($account_survey==1 && $passwordDB==$password){
                $request->session()->put('username',$username);
                $request->session()->put('survey',$username);
                return redirect("/dashboard-surveyor");
            }else{
                return redirect("/login");
            }
           
        }


        
    }
    public function logout(Request $request){
        $request->session()->flush();
        return redirect('home');   
    }
    public function jakarta_gov(Request $request){
        $status0="danger";
        $status1="danger";
        $status2="warning";
        $status3="danger";
        $status4="warning";
        return view("pages.gov-jakarta",['status0'=>$status0,'status1'=>$status1,'status2'=>$status2,'status3'=>$status3,'status4'=>$status4]);
    }

    public function tambahSurvey(Request $request) {
        $namaSurvey = $request->input('nama_survey');
        $idProvinsi = $request->input('provinsi');
        $idKabupaten = $request->input('kabupaten');
        $idPenyakit = $request->input('penyakit');
        $tanggalMulai = $request->input('tanggal-mulai');
        $tanggalSelesai = $request->input('tanggal-selesai');
        $panduan = $request->input('panduan');
        $token = rand();

        DB::table('survey')->insert(['nama' => $namaSurvey, 'id_penyakit' => $idPenyakit, 'id_kabupaten'=>$idKabupaten, 'token'=>$token, 'tgl_mulai'=>$tanggalMulai, 'tgl_selesai'=>$tanggalSelesai]);
        return redirect('dashboard-gov');
    }
}
