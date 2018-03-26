<html lang="en" class="">
<head><script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
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
  width: 368px;
  height: 40px;
  float: right;
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
  width: 368px;
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
  visibility: hidden;
}
.act-loc-btn{
  visibility: visible;
}
</style>

</head>

<body>


  <!-- <button onclick="getLocation()">Try It</button>

<p id="demo"></p>

<script>
var x = document.getElementById("demo");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    x.innerHTML = "Latitude: " + position.coords.latitude +
    "<br>Longitude: " + position.coords.longitude;
}
</script> -->




<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<h1>DocRec</h1>
<h2>Search a doctor</h2>
<button class = "se-btn col-md-4 col-xs-12 act-btn">Search by name</button><button class = "se-btn col-md-4 col-xs-12" id = "loct-drop">Search by location</button><button class = "se-btn col-md-4 col-xs-12">Get a symtom-based recommendation</button>
<center><button class = "loc-btn col-md-4">Search using GPS location</button><br/><button class = "loc-btn col-md-4">Manually select location</button></center>

<div class="search-container col-md-6 col-sm-8 col-xs-12">
  <div class="search-box">
    <div class="search-icon"><i class="fa fa-search"></i></div>
    <input class="search-input" id="search" type="text" placeholder="Search by name">
    <ul class="search-results" id="results"><!--<li>Bessie</li><li>Flossie</li>--></ul>
  </div>
</div>

<script>(function() {
  var  resultsOutput, searchInput;

  $(".se-btn").click(function(){
    $(".se-btn").removeClass("act-btn");
    $(this).addClass("act-btn");
  });

  $("#loct-drop").click(function(){
    $(".loc-btn").toggleClass("act-loc-btn");
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
          //console.log(data);
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
