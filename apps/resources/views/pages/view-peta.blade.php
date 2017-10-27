@extends('layouts.default')
@section('content')

 <div class="section row" style="margin-top: -2%;">
        <div id="map" style="width: 100%; height: 600px"></div>

  </div>

  <div class="container" style="position:absolute; left:21px; top:115px;">
    <div class="center row">
      <div class="col " style="background-color:white; height:65px; width:345px;">
        <form action="public-info">
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

  <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false&amp;key=AIzaSyBfMIBkwmYD4dz9xcRPRufpL235yCQ7fl8" type="text/javascript"></script>
  
  <script type="text/javascript">
    //<![CDATA[

    if (GBrowserIsCompatible()) {

      // Display the map, with some controls and set the initial location 
      var map = new GMap2(document.getElementById("map"));
      map.addControl(new GLargeMapControl());
      map.addControl(new GMapTypeControl());
      map.setCenter(new GLatLng(-7.6074635,110.4723612),7);

      request.send(null);

    }
    
    // display a warning if the browser was not compatible
    else {
      alert("Sorry, the Google Maps API is not compatible with this browser");
    }

    </script>

@stop