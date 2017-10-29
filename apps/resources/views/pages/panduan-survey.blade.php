@extends('layouts.surveyor')
@section('content')
   <div class="container">
      <br>
      <h5 class="header center text-lighten-4">{{$nama}}</h5><br>
      <div class="section">
        <div class="row">
          <div class="col s5">Rentang Pengisian</div>
          <div class="col s7"><strong>{{$tgl_mulai}}</strong> sampai <strong>{{tgl_selesai}}</strong>
          <div class="col s7"><strong>{{$kabupaten}}</strong></div><br><br><br>
        <a class="btn waves-effect waves-light col s12 light-blue darken-4" href="isi-survey?id={{$id}}" style="margin-top: 2%;">ISI FORMULIR</a>
        </div>
      </div>

      <div class="card">
        <div class="card-content">
          <p>{{$panduan}}</p>
        </div>
      </div>
  </div>
@stop