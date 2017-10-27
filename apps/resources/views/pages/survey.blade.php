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
          <form class="col s12">
            <div class="row">
              <div class="input-field col s12">
                <input placeholder="Survey DBD Tahun 2017" id="nama_survey" type="text" class="validate">
                <label for="nama_survey">Nama Survey</label>
              </div>
            </div>
            <div class="row">
               <div class="input-field col s12">
                <select>
                  <option value="" disabled selected>Pilih Provinsi...</option>
                  <option value="1">DKI Jakarta</option>
                  <option value="2">Jawa Tengah</option>
                  <option value="3">Jawa Timur</option>
                </select>
                <label for="last_name">Provinsi</label>
              </div>
            </div>
            <div class="row">
               <div class="input-field col s12">
                <select>
                  <option value="" disabled selected>Pilih Kabupaten/Kota...</option>
                  <option value="1">Jakarta Timur</option>
                  <option value="2">Jakarta Barat</option>
                  <option value="3">Jakarta Selatan</option>
                </select>
                <label for="last_name">Kabupaten</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <textarea id="textarea1" class="materialize-textarea"></textarea>
                <label for="textarea1">Panduan Survey</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <textarea id="textarea2" class="materialize-textarea"></textarea>
                <label for="textarea1">Tanggal Mulai</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <textarea id="textarea3" class="materialize-textarea"></textarea>
                <label for="textarea1">Tanggal Selesai</label>
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
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    closeOnSelect: false // Close upon selecting a date,
  });
</script>
@stop