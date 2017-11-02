@extends('layouts.surveyor')
@section('content')
   <div class="container">
      <br>
      <h5 class="header center text-lighten-4">{{$nama}}</h5><br>
      <div class="section">
        <div class="row">
          <div class="col s5">Rentang Pengisian</div>
          <div class="col s7"><strong>{{$tgl_mulai}}</strong> sampai <strong>{{$tgl_selesai}}</strong></div><br><br>
        <a class="btn waves-effect waves-light col s12 light-blue darken-4" href="isi-survey?id_survey={{$id}}" style="margin-top: 2%;">ISI FORMULIR</a>
        </div>
      </div>

      <div class="card">
        <div class="card-content">
          <p>
            
    1. Wajib menjunjung tinggi Falsafah dan UUD negara <br>
    2. Harus memiliki kesadaran integritas Nasional <br>
    3. Setiap saat, dalam kedudukan apapun hendaknya berperilaku terpuji, sehingga dengan demikian menjunjung kehormatan profesi surveyor indonesia <br>
    4. Harus yakin akan kebenaran dan kecukupan tentang data dan informasi yang ia sajikan <br>
    5. Harus yakin akan kebenaran dan kecukupan tentang metoda, sarana dan tenaga, yang ia pergunakan dalam pengumpulan data informasi, dalam pengolahan serta penyajiannya <br>
    6. Harus yakin akan kebenaran dan kecukupan tentang metoda, sarana dan tenaga, yang ia pergunakan dalam menilai kegiatan pengumpulan data / informasi, pengolahan dan penyajiannya <br>
    7. Hendaknya memberikan penghargaan yang layak terhadap orang lain dan/atau perusahaan atas sumbangan profesionalnya. <br>

          </p>
        </div>
      </div>
  </div>
@stop