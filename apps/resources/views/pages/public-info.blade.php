@extends('layouts.default')
@section('content')
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=222652828223133';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
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


  <!-- Your share button code -->

  <div class="container">
    
    <!-- START CONTENT -->
    <section id="content">
      <div class="row center">
        <h4 class="grey-text text-darken-2">STATUS WABAH DEMAM BERDARAH NASIONAL</h4><br>
        <img src="asset/img/facebook.jpg" style="height: 30px;" />
        <img src="asset/img/twitter.png" style="height: 30px;" />
        <br><br>
        <!--card stats start-->
        <div id="squares">
          <div id="pengidap" class="red lighten-1">             
              <p>Jumlah Kasus</p>
              <h3>120</h3>
          </div>
          <div id="mean_pengidap" class="orange lighten-1">
              <p>Jumlah Suspect</p>
              <h3>122</h3>
          </div>
          <div id="modus_pengidap" class="green accent-2">
              <p>Rata-Rata Usia Pengidap</p>
              <h3>21</h3>
          </div>
          <div id="margin_of_error" class="cyan">
             <p>Case Fatality Rate</p>
              <h3>30%</h3>
          </div>
          <div id="5" class="deep-purple lighten-2">
             <p>Case Proportional Rate</p>
              <h3>45%</h3>
          </div>
        </div>
        <!--card stats end-->
      </div>
    </section>
    <!-- END CONTENT -->

  <br><br>

    <section>
      <div class="">
        <div class="row">
          <div class="center">
            <h5><strong>Data Wabah Demam Berdarah Nasional Per Provinsi</strong></h5><br>
          </div>
          
          <table class="striped">
            <thead>
              <th>Provinsi</th>
              <th>Jumlah Kasus</th>
              <th>Jumlah Suspect</th>
              <th>Status</th>
              <th>Action</th>
            </thead>
            <tbody>
              <tr>
                <td>DKI Jakarta</td>
                <td>1264</td>
                <td>134</td>
                <td>Bahaya</td>
                <td><a href="#" class="btn"> View Detail</a></td>
              </tr>
              <tr>
                <td>Banten</td>
                <td>12434</td>
                <td>134</td>
                <td>Bahaya</td>
                   <td><a href="#" class="btn"> View Detail</a></td>
              </tr>
              <tr>
                <td>Jawa Barat</td>
                <td>13452</td>
                <td>134</td>
                <td>Bahaya</td>
                 <td><a href="#" class="btn"> View Detail</a></td>
              </tr>
              <tr>
                <td>Jawa Tengah</td>
                <td>1264</td>
                <td>134</td>
                <td>Bahaya</td>
                 <td><a href="#" class="btn"> View Detail</a></td>
              </tr>
              <tr>
                <td>Jawa Timur</td>
                <td>1264</td>
                <td>134</td>
                <td>Bahaya</td>
                 <td><a href="#" class="btn"> View Detail</a></td>
              </tr>
              <tr>
                <td>Yogyakarta</td>
                <td>126445</td>
                <td>134</td>
                <td>Bahaya</td>
                 <td><a href="#" class="btn"> View Detail</a></td>
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