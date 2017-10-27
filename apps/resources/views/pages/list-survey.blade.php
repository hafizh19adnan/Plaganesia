@extends('layouts.surveyor')
@section('content')
   <div class="container">
      <br>
      <h5 class="header center text-lighten-4">DAFTAR SURVEY</h5><br>
      <div class="section">
        <div class="row">
            <form class="col s12">
              <div class="row">
                <div class="input-field col s8">
                  <input placeholder="SDKI123" id="nama_survey" type="text" class="validate" style="overflow: hidden; padding-right: .5em;">
                  <label for="nama_survey">Token Survey</label>
                </div>
                  <button class="btn waves-effect waves-light col s3" type="submit" name="action" style="float: right; margin-top: 5%;">Tambah Survey
                </button>
              </div>
            </form>
            <table class="striped centered">
              <thead>
                <tr>
                    <th>Nama Survey</th>
                    <th>Kabupaten</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Selesai</th>
                    <th>Penyakit</th>
                    <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Survey DBD 2017</td>
                  <td>Jakarta Selatan</td>
                  <td>2017-08-24</td>
                  <td>2017-08-30</td>
                  <td>DBD</td>
                  <td><a href = "isi-survey">Isi Survey</a></td>
                </tr>
                <tr>
                  <td>Survey DBD 2017</td>
                  <td>Jakarta Selatan</td>
                  <td>2017-08-24</td>
                  <td>2017-08-30</td>
                  <td>DBD</td>
                  <td><a href = "isi-survey">Isi Survey</a></td>
                </tr>
              </tbody>
            </table>
            <div class="row center">
              <ul class="pagination">
              <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
              <li class="active"><a href="#!">1</a></li>
              <li class="waves-effect"><a href="#!">2</a></li>
              <li class="waves-effect"><a href="#!">3</a></li>
              <li class="waves-effect"><a href="#!">4</a></li>
              <li class="waves-effect"><a href="#!">5</a></li>
              <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
            </ul>
            </div>
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