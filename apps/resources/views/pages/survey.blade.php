@extends('layouts.gov')
@section('content')
 <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
         <h4 class="header center white-text text-lighten-4" style="margin-top:12%;">Portal Informasi Pemetaan Wabah Pertama di Indonesia</h4>
        <div class="row center">
          <h5 style="margin-top:-1%;" class="header col s12 light">Temukan informasi seputar wabah, pemetaannya, dan penanggulangannya disini</h5>
        </div>
        <div class="row center">
         <a class="waves-effect waves-light btn-large teal lighten-2" href="view-peta">LIHAT PEMETAAN</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="asset/img/background-1.png" alt="Unsplashed background img 1"></div>
  </div>
   <div class="container">
      <h3 class="header center text-lighten-4" >Buat Survey</h3>
      <div class="section">
        <div class="row">
          <form class="col s12" method="post" action="tambahSurvey">
              {{csrf_field()}}
            <div class="row">
              <div class="input-field col s12">
                <input placeholder="Survey DBD Tahun 2017" id="nama_survey" type="text" class="validate" name="nama_survey">
                <label for="nama_survey">Nama Survey</label>
              </div>
            </div>
            <div class="row">
               <div class="input-field col s12">
                <select name="provinsi">
                  <option value="" disabled selected>Pilih Provinsi...</option>
                  @foreach ($provinsis as $provinsi)
                    <option value="{{$provinsi->id}}">{{$provinsi->nama}}</option>
                  @endforeach
                </select>
                <label for="last_name">Provinsi</label>
              </div>
            </div>
            <div class="row">
               <div class="input-field col s12">
                <select name="kabupaten">
                  <option value="" disabled selected>Pilih Kabupaten/Kota...</option>
                  @foreach ($kabupatens as $kabupaten)
                   <option value="{{$kabupaten->id}}">{{$kabupaten->nama}}</option>
                  @endforeach
                </select>
                <label for="last_name">Kabupaten</label>
              </div>
            </div>
            <div class="row">
               <div class="input-field col s12">
                <select name="penyakit">
                  <option value="" disabled selected>Pilih Penyakit...</option>
                  @foreach ($penyakits as $penyakit)
                   <option value="{{$penyakit->id}}">{{$penyakit->nama}}</option>
                  @endforeach
                </select>
                <label for="">Nama Penyakit</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input type="text" class="datepicker" name="tanggal-mulai">
                <label for="textarea1">Tanggal Mulai</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input type="text" class="datepicker" name="tanggal-selesai">
                <label for="textarea1">Tanggal Selesai</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <textarea id="textarea1" class="materialize-textarea" name="panduan-survey"></textarea>
                <label for="textarea1">Panduan Survey</label>
              </div>
            </div>
            <div class="row center">
                 <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                </button>
            </div>
          </form>
      </div>
    </div>
  </div>
<script>
    $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year,
    format: 'yyyy-mm-dd'
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    closeOnSelect: false // Close upon selecting a date,
  });
</script>
@stop