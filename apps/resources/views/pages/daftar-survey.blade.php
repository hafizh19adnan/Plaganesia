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

        
     
    <br><br>
     <div class="container">
      <div class="section">
        <div class="row">
        <div class="col s12">
          <div class="center">
            <h5 class="header">Daftar Survey</h5><hr>
            <table class="striped centered">
              <thead>
                <tr>
                    <th>Nama Survey</th>
                    <th>Kabupaten</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Selesai</th>
                    <th>Penyakit</th>
                </tr>
              </thead>
              <tbody>
                @foreach($list_survey as $survey)
                <tr>
                  <td>{{$survey->nama}}</td>
                  <td>{{$survey->id_kabupaten}}</td>
                  <td>{{$survey->tgl_mulai}}</td>
                  <td>{{$survey->tgl_selesai}}</td>
                  <td>{{$survey->id_penyakit}}</td>
                </tr>
                @endforeach
                
              </tbody>
            </table>
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