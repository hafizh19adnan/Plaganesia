@extends('layouts.default')
@section('content')
<div class="section row" style="margin-top: -2%;">
        <div id="map" style="width: 100%; height: 600px"></div>

  </div>

  <div class="container" style="position:absolute; left:21px; top:115px;">
    <div class="center row">
      <div class="col " style="background-color:white; height:65px; width:345px;">
        <form action="#">
          <div class="row" style="margin-top:-10px;">
            <div class="input-field col s8">
              <select>
                <option value="" disabled>Pilih Penyakit</option>
                <option value="1">Demam Berdarah</option>
                <option value="2">Flu Burung H5N1</option>
                <option value="3">Flu Babi H1N1</option>
              </select>
            </div>
            <div class="input-field col s1">
              <input type="submit" class="btn btn-large green" action="submit" value="Pilih">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <br>
  <div class="container">
    
    <!-- START CONTENT -->
    <section id="content">
      <div class="row center">
        <h4 class="grey-text text-darken-2">SURVEY DEMAM BERDARAH PROVINSI JAWA BARAT OKTOBER 2017</h4>
        <!--card stats start-->
        <div id="card-stats">
            <div class="row center">
                <div class="col s12" style="width:220px;">
                    <div class="card">
                        <div class="card-content red white-text" style="height:200px;">
                            <p class="card-stats-title"><i class="mdi-social-group-add"></i>Jumlah Pengidap</p>
                            <br>
                            <h3 class="card-stats-number">
                                14265
                            </h3>
                            <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i><span class="green-text text-lighten-5"></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col s12" style="width:220px;">
                    <div class="card">
                        <div class="card-content orange white-text" style="height:200px;">
                            <p class="card-stats-title"><i class="mdi-editor-attach-money"></i>Mean Umur Pengidap</p>
                            <br>
                            <h3 class="card-stats-number">
                                30,3
                            </h3>
                            <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i><span class="purple-text text-lighten-5"></span>
                            </p>
                        </div>
                    </div>
                </div>                            
                <div class="col s12" style="width:220px;">
                    <div class="card">
                        <div class="card-content green green-lighten-3 white-text" style="height:200px;">
                            <p class="card-stats-title"><i class="mdi-action-trending-up"></i>Modus Umur Pengidap</p>
                            <h3 class="card-stats-number">
                                34
                            </h3>
                            <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i><span class="blue-grey-text text-lighten-5"><?php echo $thisMonth; ?></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col s12" style="width:220px;">
                    <div class="card">
                        <div class="card-content blue lighten-2 white-text" style="height:200px;">
                            <p class="card-stats-title"><i class="mdi-editor-insert-drive-file"></i>Margin of Error</p>
                            <br>
                            <h3 class="card-stats-number">
                                0.35%
                            </h3>
                            <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-down"></i><span class="deep-purple-text text-lighten-5"></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col s12" style="width:220px;">
                    <div class="card">
                        <div class="card-content purple lighten-1 white-text" style="height:200px;">
                            <p class="card-stats-title"><i class="mdi-editor-insert-drive-file"></i>Kabupaten Dengan Pengidap Terbanyak</p><br>
                            <h5 class="card-stats-number">
                                PURWAKARTA
                            </h5>
                            <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-down"></i><span class="deep-purple-text text-lighten-5"></span>
                            </p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!--card stats end-->
      </div>
    </section>
    <!-- END CONTENT -->

    <section>
      <div class="container">
        <div class="row">
          <div class="center">
            <h5><strong>Detail Survey</strong></h5>
          </div>
          <div class="row">
            <div class="col s4">
              <p>Nama</p>
              <p>Waktu</p>
              <p>Jumlah Responden</p>
            </div>
            <div class="col s8">
              <p>Survey Demam Berdarah Provinsi Jawa Barat Oktober 2017</p>
              <p>01 - 25 Oktober 2017</p>
              <p>22386</p>
            </div>
          </div>
        </div>
      </div>
    </section><br><br>

    <section>
      <div class="">
        <div class="row">
          <div class="center">
            <h5><strong>Data Pengidap Semua Kabupaten</strong></h5><br>
          </div>
          
          <table class="striped">
            <thead>
              <th>Kabupaten</th>
              <th>Jumlah Penderita</th>
              <th>Presentase</th>
            </thead>
            <tbody>
              <tr>
                <td>Bogor</td>
                <td>1264</td>
                <td>0.05%</td>
              </tr>
              <tr>
                <td>Bekasi</td>
                <td>12434</td>
                <td>0.07%</td>
              </tr>
              <tr>
                <td>Cianjur</td>
                <td>13452</td>
                <td>0.3%</td>
              </tr>
              <tr>
                <td>Karawang</td>
                <td>1264</td>
                <td>0.05%</td>
              </tr>
              <tr>
                <td>Purwakarta</td>
                <td>1264</td>
                <td>0.05%</td>
              </tr>
              <tr>
                <td>Bandung</td>
                <td>126445</td>
                <td>0.08%</td>
              </tr>
              <tr>
                <td>Bandung Barat</td>
                <td>126454</td>
                <td>0.78%</td>
              </tr>
              <tr>
                <td>Bandung Selatan</td>
                <td>12664</td>
                <td>0.5%</td>
              </tr>
            </tbody>
          </table><br>


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
    </section>
  </div>



@stop