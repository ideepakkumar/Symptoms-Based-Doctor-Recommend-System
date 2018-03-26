<html lang="en" class="">
<head>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  background-color: white;
  font-family: "Roboto", Arial, sans-serif;
  text-align: center;
  padding-top: 30px;
  font-size: 14px;
}

h1 {
  font-size: 1.5em;
  color: #666666;
}

h2, a {
  font-size: 0.8em;
  color: #9BC788;
}
a.result-option{
  color: white;
  text-decoration: none;
}

h3 {
  color: #999;
  margin-top: 40px;
}

/* ============================ */
/* VARIABLES                    */
/* ============================ */
/* ============================ */
/* SEARCH BAR                   */
/* ============================ */
.search-container {
  margin: 40px auto;
  background: aqua;
  padding:20px;
}

.search-box {
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  background-color: #f2f2f2;
  height: 40px;
  position: relative;
}

.search-icon {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  float: left;
  width: 32px;
  height: 40px;
  color: #999;
  font-size: 1.3em;
  padding: 7px 15px;
}

.search-input {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  /* width: 368px; */
  height: 40px;
  /* float: right; */
  background-color: transparent;
  border: 0px;
  padding: 10px;
  text-transform: uppercase;
  /* font-family: "Roboto", Arial, sans-serif; */
  font-size: 1em;
  position: relative;
  outline: 0px;
}

@-webkit-keyframes fadeInTop {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-1.334em) translateZ(0);
  }
  100% {
    opacity: 1;
  }
}
@-moz-keyframes fadeInTop {
  0% {
    opacity: 0;
    -moz-transform: translateY(-1.334em) translateZ(0);
  }
  100% {
    opacity: 1;
  }
}
@keyframes fadeInTop {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-1.334em) translateZ(0);
    -moz-transform: translateY(-1.334em) translateZ(0);
    -ms-transform: translateY(-1.334em) translateZ(0);
    -o-transform: translateY(-1.334em) translateZ(0);
    transform: translateY(-1.334em) translateZ(0);
  }
  100% {
    opacity: 1;
  }
}
.search-results {
  list-style: none;
  margin: 0;
  padding: 0;
  position: absolute;
  z-index: 999;
  /* width: 368px; */
  width: 80%;
  max-height: 200px;
  overflow: scroll;
  top: 40px;
  left: 32px;
  text-align: left;
  overflow: hidden;
}
.search-results li {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  padding: 10px;
  height: 40px;
  background-color: #9BC788;
  color: white;
  font-weight: bold;
  /* ANIMATION */
  /* remove this part if you dont like the animation */
  /* END OF ANIMATION */
}
.search-results li:hover {
  background-color: #87bc70;
  cursor: pointer;
}
.search-results li:nth-child(1) {
  /* Animation */
  -webkit-animation: fadeInTop 0.4s 0s forwards;
  animation: fadeInTop 0.4s 0s forwards;
  opacity: 0;
}
.search-results li:nth-child(2) {
  /* Animation */
  -webkit-animation: fadeInTop 0.4s 0.1s forwards;
  animation: fadeInTop 0.4s 0.1s forwards;
  opacity: 0;
}
.search-results li:nth-child(3) {
  /* Animation */
  -webkit-animation: fadeInTop 0.4s 0.2s forwards;
  animation: fadeInTop 0.4s 0.2s forwards;
  opacity: 0;
}
.search-results li:nth-child(4) {
  /* Animation */
  -webkit-animation: fadeInTop 0.4s 0.3s forwards;
  animation: fadeInTop 0.4s 0.3s forwards;
  opacity: 0;
}
.search-results li:nth-child(5) {
  /* Animation */
  -webkit-animation: fadeInTop 0.4s 0.4s forwards;
  animation: fadeInTop 0.4s 0.4s forwards;
  opacity: 0;
}
#search::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  color: rgba(0, 55, 0, 0.2); text-align: center;
}
#search::-moz-placeholder { /* Firefox 19+ */
  color: rgba(0, 55, 0, 0.2); text-align: center;
}
#search:-ms-input-placeholder { /* IE 10+ */
  color: rgba(0, 55, 0, 0.2); text-align: center;
}
#search:-moz-placeholder { /* Firefox 18- */
  color: rgba(0, 55, 0, 0.2); text-align: center;
}
.se-btn{
      border: 2px solid white;
      background: aqua;
      padding: 15px;
      color: #3a3737;
      text-transform: uppercase;
      font-size: 75%;
      opacity: 0.5;
}

.act-btn{
  opacity: 1;
}
.loc-btn{
  border: 2px solid white;
  background: green;
  padding: 15px;
  color: #3a3737;
  text-transform: uppercase;
  font-size: 75%;
  display: none;
}

/*Checkboxes */

/* Base for label styling */
[type="checkbox"]:not(:checked),
[type="checkbox"]:checked {
  position: absolute;
  left: -9999px;
}
[type="checkbox"]:not(:checked) + label,
[type="checkbox"]:checked + label {
  position: relative;
  padding-left: 1.95em;
  cursor: pointer;
}

/* checkbox aspect */
[type="checkbox"]:not(:checked) + label:before,
[type="checkbox"]:checked + label:before {
  content: '';
  position: absolute;
  left: 0; top: 0;
  width: 1.5em; height: 1.5em;
  border: 2px solid #ccc;
  background: #fff;
  border-radius: 4px;
  box-shadow: inset 0 1px 3px rgba(0,0,0,.1);
}
/* checked mark aspect */
[type="checkbox"]:not(:checked) + label:after,
[type="checkbox"]:checked + label:after {
  content: '✔';
  position: absolute;
  top: .2em; left: .275em;
  font-size: 1.4em;
  line-height: 0.8;
  color: #09ad7e;
  transition: all .2s;
  font-family: Helvetica, Arial, sans-serif;
}
/* checked mark aspect changes */
[type="checkbox"]:not(:checked) + label:after {
  opacity: 0;
  transform: scale(0);
}
[type="checkbox"]:checked + label:after {
  opacity: 1;
  transform: scale(1);
}
/* disabled checkbox */
[type="checkbox"]:disabled:not(:checked) + label:before,
[type="checkbox"]:disabled:checked + label:before {
  box-shadow: none;
  border-color: #bbb;
  background-color: #ddd;
}
[type="checkbox"]:disabled:checked + label:after {
  color: #999;
}
[type="checkbox"]:disabled + label {
  color: #aaa;
}
/* accessibility */
[type="checkbox"]:checked:focus + label:before,
[type="checkbox"]:not(:checked):focus + label:before {
  border: 2px dotted blue;
}

/* hover style just for information */
label:hover:before {
  border: 2px solid #4778d9!important;
}

#main-content-C label{
  text-align: left;
}
</style>

</head>

<body>



<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<h1>DocRec</h1>
<h2>Search a doctor</h2>
<button class = "se-btn col-md-4 col-xs-12 act-btn" id = "search-name">Search by name</button><button class = "se-btn col-md-4 col-xs-12" id = "loct-drop">Search by location</button><button class = "se-btn col-md-4 col-xs-12">Get a symtom-based recommendation</button>
<center><button class = "loc-btn col-md-4" id = "gps-loc-btn">Search using GPS location</button><br/><button class = "loc-btn col-md-4" id = "man-loc-btn">Manually select location</button></center>
<p id = "error"></p>
<div id = "main-content-A">
  <div class="search-container col-md-6 col-sm-10 col-xs-12">
    <div class="search-box">
      <div class="search-icon"><i class="fa fa-search"></i></div>
      <input class="search-input" id="search" type="text" placeholder="Search by name">
      <ul class="search-results" id="results"><!--<li>Bessie</li><li>Flossie</li>--></ul>
    </div>
  </div>
</div>

<div id = "main-content-B" style = "display: none;">
  <center><div id="google_map" class = "col-md-8 col-sm-10 col-xs-12" style="height:400px;"></div></center>
</div>

<div id = "main-content-C">
  <input type="checkbox" id="test1" class = "col-md-2 col-sm-3 col-xs-5"/><label for="test1" class = "col-md-2 col-sm-3 col-xs-5"/>muscle pain</label>
  <input type="checkbox" id="test2" class = "col-md-2 col-sm-3 col-xs-5"/><label for="test2" class = "col-md-2 col-sm-3 col-xs-5"/>chest pain</label>
  <input type="checkbox" id="test3" class = "col-md-2 col-sm-3 col-xs-5"/><label for="test3" class = "col-md-2 col-sm-3 col-xs-5"/>headache</label>
  <input type="checkbox" id="test4" class = "col-md-2 col-sm-3 col-xs-5"/><label for="test4" class = "col-md-2 col-sm-3 col-xs-5"/>abdominal pain</label>
  <input type="checkbox" id="test5" class = "col-md-2 col-sm-3 col-xs-5"/><label for="test5" class = "col-md-2 col-sm-3 col-xs-5"/>fatigue</label>
  <input type="checkbox" id="test6" class = "col-md-2 col-sm-3 col-xs-5"/><label for="test6" class = "col-md-2 col-sm-3 col-xs-5"/>nausea</label>
  <input type="checkbox" id="test7" class = "col-md-2 col-sm-3 col-xs-5"/><label for="test7" class = "col-md-2 col-sm-3 col-xs-5"/>anxiety</label>
  <input type="checkbox" id="test8" class = "col-md-2 col-sm-3 col-xs-5"/><label for="test8" class = "col-md-2 col-sm-3 col-xs-5"/>common cold</label>
  <input type="checkbox" id="test9" class = "col-md-2 col-sm-3 col-xs-5"/><label for="test9" class = "col-md-2 col-sm-3 col-xs-5"/>dizziness</label>
  <input type="checkbox" id="test10" class = "col-md-2 col-sm-3 col-xs-5"/><label for="test10" class = "col-md-2 col-sm-3 col-xs-5"/>diarrhea</label>
  <input type="checkbox" id="test11" class = "col-md-2 col-sm-3 col-xs-5"/><label for="test11" class = "col-md-2 col-sm-3 col-xs-5"/>constipation</label>
  <input type="checkbox" id="test12" class = "col-md-2 col-sm-3 col-xs-5"/><label for="test12" class = "col-md-2 col-sm-3 col-xs-5"/>vomiting</label>
  <input type="checkbox" id="test13" class = "col-md-2 col-sm-3 col-xs-5"/><label for="test13" class = "col-md-2 col-sm-3 col-xs-5"/>allergy</label>
  <input type="checkbox" id="test14" class = "col-md-2 col-sm-3 col-xs-5"/><label for="test14" class = "col-md-2 col-sm-3 col-xs-5"/>skin rashes</label>
  <input type="checkbox" id="test15" class = "col-md-2 col-sm-3 col-xs-5"/><label for="test15" class = "col-md-2 col-sm-3 col-xs-5"/>fever</label>
  <input type="checkbox" id="test16" class = "col-md-2 col-sm-3 col-xs-5"/><label for="test16" class = "col-md-2 col-sm-3 col-xs-5"/>insomnia</label>
  <input type="checkbox" id="test17" class = "col-md-2 col-sm-3 col-xs-5"/><label for="test17" class = "col-md-2 col-sm-3 col-xs-5"/>hypertension</label>
  <input type="checkbox" id="test18" class = "col-md-2 col-sm-3 col-xs-5"/><label for="test18" class = "col-md-2 col-sm-3 col-xs-5"/>cough</label>
  <input type="checkbox" id="test19" class = "col-md-2 col-sm-3 col-xs-5"/><label for="test19" class = "col-md-2 col-sm-3 col-xs-5"/>joint pain</label>
  <input type="checkbox" id="test20" class = "col-md-2 col-sm-3 col-xs-5"/><label for="test20" class = "col-md-2 col-sm-3 col-xs-5"/>weight loss</label>
  <input type="checkbox" id="test21" class = "col-md-2 col-sm-3 col-xs-5"/><label for="test21" class = "col-md-2 col-sm-3 col-xs-5"/>weight gain</label>
  <input type="checkbox" id="test22" class = "col-md-2 col-sm-3 col-xs-5"/><label for="test22" class = "col-md-2 col-sm-3 col-xs-5"/>irritaion in eyes</label>
  <input type="checkbox" id="test23" class = "col-md-2 col-sm-3 col-xs-5"/><label for="test23" class = "col-md-2 col-sm-3 col-xs-5"/>hypotension</label>
  <input type="checkbox" id="test24" class = "col-md-2 col-sm-3 col-xs-5"/><label for="test24" class = "col-md-2 col-sm-3 col-xs-5"/>hair loss</label>
  <input type="checkbox" id="test25" class = "col-md-2 col-sm-3 col-xs-5"/><label for="test25" class = "col-md-2 col-sm-3 col-xs-5"/>stress</label>

</div>

<script type="text/javascript" src="http://www.google.com/jsapi?key=AIzaSyBvWlrxVhFhEovLo3EzhaM5SMPeNHwyqUI"></script>
<script type="text/javascript">

  var MAP_DIV_ELEMENT_ID = "google_map";

  var DEFAULT_ZOOM_WHEN_NO_COORDINATE_EXISTS = 1;
  var DEFAULT_CENTER_LATITUDE = 22;
  var DEFAULT_CENTER_LONGITUDE = 13;
  var DEFAULT_ZOOM_WHEN_COORDINATE_EXISTS = 15;

  // This is the zoom level required to position the marker
  var REQUIRED_ZOOM = 15;

  google.load("maps", "2.x");

  // The google map variable
  var map = null;

  // The marker variable, when it is null no marker has been added
  var marker = null;

  function initializeGoogleMap() {
    map = new google.maps.Map2(document.getElementById(MAP_DIV_ELEMENT_ID));
    map.addControl(new GLargeMapControl());
    map.addControl(new GMapTypeControl());

    map.setMapType(G_NORMAL_MAP);

    map.setCenter(new google.maps.LatLng(DEFAULT_CENTER_LATITUDE, DEFAULT_CENTER_LONGITUDE), DEFAULT_ZOOM_WHEN_NO_COORDINATE_EXISTS);

    GEvent.addListener(map, "click", googleMapClickHandler);
  }


  function googleMapClickHandler(overlay, latlng, overlaylatlng) {

    if(map.getZoom() < REQUIRED_ZOOM) {
      alert("You need to zoom in closer to position the cursor accurately." );
      return;
    }
    if(marker == null) {
      marker = new GMarker(latlng, {draggable:false});
      map.addOverlay(marker);
    }
    else {
      marker.setLatLng(latlng);
    }

    window.location.href = "./showMap.php?lat=" + latlng.lat() + "&lon=" + latlng.lng();

  }

  google.setOnLoadCallback(initializeGoogleMap);


</script>


<script>(function() {
  var  resultsOutput, searchInput;

  $("#man-loc-btn").click(function(){
    $("#main-content-A").hide();
    $("#main-content-B").show();
  });
  $("#search-name").click(function(){
    $("#main-content-B").hide();
    $("#main-content-A").show();
  });
  $(".se-btn").click(function(){
    $(".se-btn").removeClass("act-btn");
    $(this).addClass("act-btn"); $(".loc-btn").fadeOut();
  });

  $("#loct-drop").click(function(){
    $(".loc-btn").fadeIn();
  });
  function showPosition(position){
    var url = "./showMap.php?lat=" + position.coords.latitude + "&lon=" + position.coords.longitude;
    window.location.href = url;
  }
  $("#gps-loc-btn").click(function(){
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        $("#error").text("Geolocation is not supported by this browser.");
    }
  });
  searchInput = document.getElementById('search');

  resultsOutput = document.getElementById('results');

  searchInput.addEventListener('keyup', (e) => {
    var suggested, value;
    var values = ["", "", ""];
    value = searchInput.value.toLowerCase().split(' ');

    for(var i = 0; i < value.length; i += 1) values[i] = value[i];

    $.post("handle_search.php",
    {
        first: values[0],
        second: values[1],
        third: values[2]
    },
    function(data, status){
        if(status == "success"){
          // console.log(data);
          var res = ""; data = JSON.parse(data);
          for(var i = 0; i < data.length; i += 1){
             res += "<li><a class = 'result-option' href = './newpro.php?q=" + data[i]["id"] + "'>" + data[i]["Doctor Name"] + "</a></li>";
          }
          resultsOutput.innerHTML = res;
        }else console.log("Error");
    });

  });

}).call(this);

</script>
</body></html>
