@extends('layouts.surveyor')
@section('content')
   <div class="container">
      <br>
      <h5 class="header center text-lighten-4">FORMULIR SURVEY {{$nama_survey}}</h5><br>
      <div class="section">
        <div class="row">
          <div class="col s5">Rentang Pengisian</div>
          <div class="col s7"><strong>{{$tgl_mulai}}</strong> sampai <strong>{{$tgl_selesai}}</strong></div><br><br>
        <button class="btn waves-effect waves-light col s12 light-blue darken-4" href="panduan-survey?id={{$id_survey}}" style="margin-top: 2%;">PANDUAN PENGISIAN FORMULIR</button>
        </div>
      </div>
      <div class="section">
        <div class="row">
          <form class="col s12"  action="isi-sampel" method="post">
          {{ csrf_field() }}
            <input type="hidden" value="{{$id_survey}}" name="id_survey">
            <div class="row">
              <div class="input-field col s12">
                <input placeholder="Nama Responden" name="nama"  id="nama" type="text" class="validate">
                <label for="nama">Nama Lengkap</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input placeholder="Usia (Tahun)" name="umur" id="umur" type="number" class="validate">
                <label for="umur">Usia</label>
              </div>
            </div>
            <div class="row">
           <div class="input-field col s12">
                <select name="gender" id="gender">
                  <option value="" disabled selected>Pilih Jenis Kelamin...</option>
                  <option value="L">Laki-Laki</option>
                  <option value="P">Perempuan</option>
                </select>
                <label for="gender">Gender</label>
            </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                 <select name="is_sakit" id="is_sakit">
                  <option value="" disabled selected>Pilih Status...</option>
                  <option value="1">Penderita</option>
                  <option value="0">Suspect</option>
                </select>
                <label for="is_sakit">Status Penyakit</label>
              </div>
            </div>
            <div class="row">
            <div class="input-field col s12">
                <input name="tgl_sakit" id="tgl_sakit" type="text" class="datepicker">
                <label for="tgl_sakit">Tanggal Sakit</label>
            </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                 <select name="is_meninggal" id="is_meninggal">
                  <option value="" disabled selected>Pilih Status...</option>
                  <option value="1">Meninggal</option>
                  <option value="0">Hidup</option>
                </select>
                <label for="is_sakit">Status Kematian</label>
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
    closeOnSelect: false, // Close upon selecting a date,
    format: 'yyyy-mm-dd'
  });
</script>
@stop