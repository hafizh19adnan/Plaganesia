@extends('layouts.gov')
@section('content')

<div class="section row" style="margin-top: -2%;">
    <div id="map" style="width: 100%; height: 600px"></div>
</div>
<?php
	$xml=simplexml_load_file("states.xml") or die("Error: Cannot create object");
	$xml->formatOutput = true;
	$color_set="";
	for ($i=0; $i<8 ; $i++) { 
		
		if(${'status'.$i}=="danger"){
			$color_set="red";
		}else if(${'status'.$i}=="warning"){
			$color_set="yellow";
		}else{
			$color_set="green";
		}
		$xml->state[$i]['colour']=$color_set;
	}
	
	$xml->asXml('states.xml');
?>
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
  <h4 class="center">Status Nasional : <strong style="color:<?php echo "$nat_color" ?>">{{$nat_status}}</strong></h4>
    <br><br>
     <div class="container">
       <div id="squares">
          <div id="pengidap" class="red lighten-1">             
              <p>Jumlah Kasus</p>
              <h3>{{$case}}</h3>
          </div>
          <div id="mean_pengidap" class="orange lighten-1">
              <p>Jumlah Suspect</p>
              <h3>{{$suspect}}</h3>
          </div>
          <div id="modus_pengidap" class="green accent-2">
              <p>Rata-Rata Usia Pengidap</p>
              <h3>{{$mean_umur}}</h3>
          </div>
          <div id="margin_of_error" class="cyan">
             <p>Case Fatality Rate</p>
              <h3><?php echo number_format((float)$cfr, 1, '.', '') ?>%</h3>
          </div>
          <div id="5" class="deep-purple lighten-2">
             <p>Case Proportional Rate</p>
              <h3><?php echo number_format((float)$cpr, 1, '.', '') ?>%</h3>
          </div>
        </div>
    
      <div class="section">
        <div class="row">
        <div class="col s12">
          <br>
          </table><br>
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
                <td><a href="dashboard-gov-jakarta"> View Detail</a></td>
              </tr>
              <tr>
                <td>Banten</td>
                <td>12434</td>
                <td>134</td>
                <td>Bahaya</td>
                   <td><a href="#"> View Detail</a></td>
              </tr>
              <tr>
                <td>Jawa Barat</td>
                <td>13452</td>
                <td>134</td>
                <td>Bahaya</td>
                 <td><a href="#" > View Detail</a></td>
              </tr>
              <tr>
                <td>Jawa Tengah</td>
                <td>1264</td>
                <td>134</td>
                <td>Bahaya</td>
                 <td><a href="#" > View Detail</a></td>
              </tr>
              <tr>
                <td>Jawa Timur</td>
                <td>1264</td>
                <td>134</td>
                <td>Bahaya</td>
                 <td><a href="#" > View Detail</a></td>
              </tr>
              <tr>
                <td>Yogyakarta</td>
                <td>126445</td>
                <td>134</td>
                <td>Bahaya</td>
                 <td><a href="#" > View Detail</a></td>
              </tr>
            </tbody>
          </table><br>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="container">
      <h5 class="header center" >Rekomendasi Tindakan</h5><hr/>
      <div class="rekomendasi">
        <br>
        <div class="row">
          <div class="col s4">
           <img src="asset/img/fogging-nyamuk.jpg" style="width: 400px;" class="responsive-img">
        </div>
        <div class="col s8">
          <h5 class="header"><strong>Fogging</strong></h5>
          <div class="row">
            <div class="col s12">
              <p><strong>Progress : </strong>70 dari 100 kecamatan</p>
            </div>
            <div class="col s12">
              <div class="progress" style=" height: 21px;">
                  <div class="determinate" style="width: 70%;"></div>
              </div>
            </div>
          </div>
          <div>
            <a class="btn green" href="detail-rekomendasi">Detail</a>
          </div>
        </div>
        </div>
        <div class="row">
          <div class="col s4">
           <img src="asset/img/abate.jpg" style="width: 400px;" class="responsive-img">
        </div>
        <div class="col s8">
          <h5 class="header"><strong>Pemberian Bubuk Abate</strong></h5>
          <div class="row">
            <div class="col s12">
              <p><strong>Progress : </strong>70 dari 100 kecamatan</p>
            </div>
            <div class="col s12">
              <div class="progress" style=" height: 21px;">
                  <div class="determinate" style="width: 70%;"></div>
              </div>
            </div>
          </div>
          <div>
            <a class="btn green" href="detail-rekomendasi">Detail</a>
          </div>
        </div>
        </div>
        <div class="row">
          <div class="col s4">
           <img src="asset/img/himbauan.png" style="width: 400px;" class="responsive-img">
        </div>
        <div class="col s8">
          <h5 class="header"><strong>Memberi Himbauan Masyarakat</strong></h5>
          <div class="row">
            <div class="col s12">
              <p><strong>Progress : </strong>30 dari 100 kecamatan</p>
            </div>
            <div class="col s12">
              <div class="progress" style=" height: 21px;">
                  <div class="determinate" style="width: 30%;"></div>
              </div>
            </div>
          </div>
          <div>
            <a class="btn green" href="detail-rekomendasi">Detail</a>
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
      var xml=new XMLHttpRequest();
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