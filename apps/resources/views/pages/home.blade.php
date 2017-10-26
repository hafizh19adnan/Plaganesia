@extends('layouts.default')
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
         <a class="waves-effect waves-light btn-large teal lighten-2" href="peta-wabah.html">LIHAT PEMETAAN</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="asset/img/background-1.png" alt="Unsplashed background img 1"></div>
  </div>

  <br><br>
  <div class="container">
    <div class="section">
      <div class="row">
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="asset/img/card-1.png">
              <span class="card-title"></span>
            </div>
            <div class="card-content">
              <div class="row center">
                <h5>Peta Wabah</h5><br>
                <div class="row center">
                 <a class="waves-effect waves-light btn teal lighten-2" href="peta-wabah.html">Lihat Selengkapnya</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="asset/img/card-2.png">
              <span class="card-title"></span>
            </div>
            <div class="card-content">
              <div class="row center">
                <h5>Berita dan Pengumuman</h5><br>
                <div class="row center">
                 <a class="waves-effect waves-light btn teal lighten-2" href="berita.html">Lihat Selengkapnya</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="asset/img/card-3.png">
              <span class="card-title"></span>
            </div>
            <div class="card-content">
              <div class="row center">
                <h5>Info Penyakit</h5><br>
                <div class="row center">
                 <a class="waves-effect waves-light btn teal lighten-2" href="info-penyakit.html">Lihat Selengkapnya</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="section">
      <div class="row">
        <div class="col s12">
          <div class="center">
            <h4 class="header">Berita dan Pengumuman</h4><hr><br>  
          </div>
        
          <div class="card horizontal">
            <div class="card-image" style="width: 25%;">
              <img src="asset/img/menteri-kesehatan.png">
            </div>
            <div class="card-stacked">
              <div class="card-content">
                <h5>JUDUL BERITA</h5>
                <p>Ini isinya berita. Bisa dibaca sama pembaca yang sedang melihat berita ini. Banyak informasi yang bisa didapat.</p>
              </div>
              <div class="card-action">
                <a href="#">Selengkapnya</a>
              </div>
            </div>
          </div>

          <div class="card horizontal">
            <div class="card-image" style="width: 25%;">
              <img src="asset/img/menteri-kesehatan.png">
            </div>
            <div class="card-stacked">
              <div class="card-content">
                <h5>JUDUL BERITA</h5>
                <p>Ini isinya berita. Bisa dibaca sama pembaca yang sedang melihat berita ini. Banyak informasi yang bisa didapat.</p>
              </div>
              <div class="card-action">
                <a href="#">Selengkapnya</a>
              </div>
            </div>
          </div>

          <div class="card horizontal">
            <div class="card-image" style="width: 25%;">
              <img src="asset/img/menteri-kesehatan.png">
            </div>
            <div class="card-stacked">
              <div class="card-content">
                <h5>JUDUL BERITA</h5>
                <p>Ini isinya berita. Bisa dibaca sama pembaca yang sedang melihat berita ini. Banyak informasi yang bisa didapat.</p>
              </div>
              <div class="card-action">
                <a href="#">Selengkapnya</a>
              </div>
            </div>
          </div>

          <div class="card horizontal">
            <div class="card-image" style="width: 25%;">
              <img src="asset/img/menteri-kesehatan.png">
            </div>
            <div class="card-stacked">
              <div class="card-content">
                <h5>JUDUL BERITA</h5>
                <p>Ini isinya berita. Bisa dibaca sama pembaca yang sedang melihat berita ini. Banyak informasi yang bisa didapat.</p>
              </div>
              <div class="card-action">
                <a href="#">Selengkapnya</a>
              </div>
            </div>
          </div>

          <div class="card horizontal">
            <div class="card-image" style="width: 25%;">
              <img src="asset/img/menteri-kesehatan.png">
            </div>
            <div class="card-stacked">
              <div class="card-content">
                <h5>JUDUL BERITA</h5>
                <p>Ini isinya berita. Bisa dibaca sama pembaca yang sedang melihat berita ini. Banyak informasi yang bisa didapat.</p>
              </div>
              <div class="card-action">
                <a href="#">Selengkapnya</a>
              </div>
            </div>
          </div>

          <div class="center">
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
  </div>


@stop