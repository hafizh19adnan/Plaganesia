@extends('layouts.gov')
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

        
     
    <br><br>
     <div class="container">
       <div id="squares">
          <div id="pengidap" class="red lighten-1">             
              <p>Jumlah Pengidap</p>
              <h2>12345</h2>
          </div>
          <div id="mean_pengidap" class="orange lighten-1">
              <p>Mean Umur Pengidap</p>
              <h2>20</h2>
          </div>
          <div id="modus_pengidap" class="green accent-2">
              <p>Modus Umur Pengidap</p>
              <h2>20</h2>
          </div>
          <div id="margin_of_error" class="cyan">
             <p>Margin of Error</p>
              <h2>0.5%</h2>
          </div>
          <div id="5" class="deep-purple lighten-2">
             <p>Provinsi dengan Pengidap Terbanyak</p>
              <h4>BANTEN</h4>
          </div>
        </div>
    
      <div class="section">
        <div class="row">
        <div class="col s12">
          <div class="center">
            <br>
            <h5 class="header">Detail Survey</h5><hr>
            <div class="col s6 left-align">
             Nama
            </div>
            <div class="col s6 left-align">
              Survey Nasional Penyebaran DBD Agustus 2017
             </div>
            <div class="col s6 left-align">
             Waktu
            </div>
            <div class="col s6 left-align">
              10 Januari 2017 hingga 10 Januari 2018
            </div>
            <div class="col s6 left-align">
             Jumlah Responden
            </div>
            <div class="col s6 left-align">
            1234
            </div>
          </div><br><br><br><br>
          <div class="center">
            <h5 class="header">Data Pengidap DBD Semua Provinsi</h5><hr>
            <table class="striped centered">
              <thead>
                <tr>
                    <th>Provinsi</th>
                    <th>Jumlah Penderita</th>
                    <th>Persentase</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>DKI Jakarta</td>
                  <td>1000</td>
                  <td>0.1%</td>
                </tr>
                <tr>
                  <td>Jawa Tengah</td>
                  <td>1000</td>
                  <td>0.1%</td>
                </tr>
              </tbody>
            </table>
          </div>

          <h5 class="header center">Rekomendasi</h5><hr>
            <div class="rekomendasi">
              <div class="col m4">
                <img src="asset/img/card-2.png" style="height: 130px;" class="responsive-img">
              </div>
              <div class="col m8">
                <h5>Fogging</h5>
                  -Permenkes No. 12 Tahun 2015 Tentang Penanggulangan Penyakit Menular<br>
                  -Permenkes No. 12 Tahun 2015 Tentang Penanggulangan Penyakit Menular<br>
                  -Permenkes No. 12 Tahun 2015 Tentang Penanggulangan Penyakit Menular<br>
              </div>
            </div>
            <div class="rekomendasi">
              <div class="col m4">
                <img src="asset/img/card-2.png" style="height: 130px;" class="responsive-img">
              </div>
              <div class="col m8">
                <h5>Fogging</h5>
                  -Permenkes No. 12 Tahun 2015 Tentang Penanggulangan Penyakit Menular<br>
                  -Permenkes No. 12 Tahun 2015 Tentang Penanggulangan Penyakit Menular<br>
                  -Permenkes No. 12 Tahun 2015 Tentang Penanggulangan Penyakit Menular<br>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
 <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false&amp;key=AIzaSyBfMIBkwmYD4dz9xcRPRufpL235yCQ7fl8" type="text/javascript"></script>
  
  <script type="text/javascript">
    //<![CDATA[

    if (GBrowserIsCompatible()) {

      var polys = [];
      var labels = [];

      // Display the map, with some controls and set the initial location 
      var map = new GMap2(document.getElementById("map"));
      map.addControl(new GLargeMapControl());
      map.addControl(new GMapTypeControl());
      map.setCenter(new GLatLng(-7.6074635,110.4723612),7);

   

      // Read the data from states.xml
      
      var request = GXmlHttp.create();
      request.open("GET", "states.xml", true);
      request.onreadystatechange = function() {
        if (request.readyState == 4) {
          var xmlDoc = GXml.parse(request.responseText);
          
          // ========= Now process the polylines ===========
          var states = xmlDoc.documentElement.getElementsByTagName("state");

          // read each line
          for (var a = 0; a < states.length; a++) {
            // get any state attributes
            var label  = states[a].getAttribute("name");
            var colour = states[a].getAttribute("colour");
            // read each point on that line
            var points = states[a].getElementsByTagName("point");
            var pts = [];
            for (var i = 0; i < points.length; i++) {
               pts[i] = new GLatLng(parseFloat(points[i].getAttribute("lat")),
                                   parseFloat(points[i].getAttribute("lng")));
            }
            var poly = new GPolygon(pts,"#000000",0.1,1,colour,0.5,{clickable:false});
            polys.push(poly);
            labels.push(label);
            map.addOverlay(poly);
          }
          // ================================================           
        }
      }
      request.send(null);

    }
    
    // display a warning if the browser was not compatible
    else {
      alert("Sorry, the Google Maps API is not compatible with this browser");
    }

    </script>
@stop