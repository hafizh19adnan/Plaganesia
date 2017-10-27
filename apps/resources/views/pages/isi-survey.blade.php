@extends('layouts.surveyor')
@section('content')
   <div class="container">
      <br>
      <h5 class="header center text-lighten-4">FORMULIR SURVEY PENYEBARAN DBD AGUSTUS 2017</h5><br>
      <div class="section">
        <div class="row">
          <div class="col s5">Rentang Pengisian</div>
          <div class="col s7"><strong>2017-08-10</strong> sampai <strong>2017-08-15</strong></div>
          <div class="col s5">Lokasi Pengisian</div>
          <div class="col s7"><strong>RSAD Cijantung, Jakarta Timur</strong></div><br><br><br>
        <button class="btn waves-effect waves-light col s12 light-blue darken-4" type="submit" name="action" style="margin-top: 2%;">PANDUAN PENGISIAN FORMULIR</button>
        </div>
      </div>
      <div class="section">
        <div class="row">
          <form class="col s12">
            <div class="row">
              <div class="input-field col s12">
                <input placeholder="Lintang Matahari" id="nama_survey" type="text" class="validate">
                <label for="nama_survey">Nama Lengkap</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input placeholder="18" id="nama_survey" type="number" class="validate">
                <label for="nama_survey">Usia</label>
              </div>
            </div>
            <div class="row">
           <div class="input-field col s12">
                <select>
                  <option value="" disabled selected>Pilih Jenis Kelamin...</option>
                  <option value="L">Laki-Laki</option>
                  <option value="P">Perempuan</option>
                </select>
                <label for="last_name">Provinsi</label>
            </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                 <select>
                  <option value="" disabled selected>Pilih Status...</option>
                  <option value="true">Penderita</option>
                  <option value="false">Suspect</option>
                </select>
                <label for="nama_survey">Status</label>
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