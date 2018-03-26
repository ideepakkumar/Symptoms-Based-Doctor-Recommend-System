<html lang="en" class="">
<head>
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
  width: 400px;
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
</style>

</head>

<body>

<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<h1>DocRec</h1>
<h2>Search a doctor</h2>
<div class="search-container">
  <div class="search-box">
    <div class="search-icon"><i class="fa fa-search"></i></div>
    <input class="search-input" id="search" type="text" placeholder="Search by name">
    <ul class="search-results" id="results"><!--<li>Bessie</li><li>Flossie</li>--></ul>
  </div>
</div>
<script src="//static.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js"></script>
<script>(function() {
  var displayResults, findAll, maxResults, names, resultsOutput, searchInput;

  names = ["Gentry", "Brandi", "Maryann", "Tina", "Harper", "Hayes", "Tamera", "Shauna", "Mcfarland", "Charles", "Ortiz", "Maynard", "Julie", "Gay", "Wiggins", "Navarro", "Hopkins", "Candace", "Tammi", "Horton", "Erna", "Mills", "Opal", "Wolfe", "Walter", "Bonita", "Eleanor", "Rojas", "Ochoa", "Kirk", "Rosario", "Ball", "Lucile", "Kayla", "Carmela", "Miranda", "Middleton", "Lillie", "Sherry", "Jacqueline", "Deirdre", "Mueller", "Debra", "Jodi", "Joyce", "Estrada", "Liz", "Justine", "Francis", "Benton", "Henrietta", "Elise", "Lang", "Morse", "Farrell", "Tamra", "Darla", "Amy", "Kristie", "Wyatt", "Mcbride", "Talley", "Fay", "Sweet", "Fern", "Mcintosh", "Clemons", "Travis", "Kirsten", "Rios", "Newman", "Cook", "Jocelyn", "Mcmillan", "Mona", "Bessie", "Francis", "Rosemary", "Beverly", "Chandra", "Luella", "Parrish", "Ronda", "Earlene", "Bright", "Guthrie", "Shana", "Theresa", "Wells", "Green", "Schroeder", "Russo", "Randolph", "Livingston", "Carroll", "Velasquez", "Dana", "Bridget", "Hines", "Martha", "Marci", "Fuentes", "Stuart", "Glass", "Alejandra", "Thornton", "Britt", "Jeri", "Leach", "Cleo", "Lela", "Mattie", "Bonnie", "Lucille", "Mamie", "Kelly", "Obrien", "Carol", "Murphy", "Isabella", "Lowery", "Odom", "Norris", "Mullins", "Florine", "Morales", "Frederick", "Reynolds", "Janine", "Joyce", "Dean", "Marcy", "Allison", "Rena", "Saundra", "Flossie", "Kristi", "Monica", "Molina", "Guzman", "Loretta", "Levine", "Oneill", "Mccray", "Mann", "Constance", "English", "Eula", "Butler", "Erika"];

  // Match words in a collection
  findAll = (wordList, collection) => {
    return collection.filter(function(word) {
      word = word.toLowerCase();
      return wordList.some(function(w) {
        return ~word.indexOf(w);
      });
    });
  };

  // Displays results in a list
  displayResults = function(resultsEl, wordList) {
    return resultsEl.innerHTML = (wordList.map(function(w) {
      return '<li>' + w + '</li>';
    })).join('');
  };

  // Handle keyboard events
  searchInput = document.getElementById('search');

  resultsOutput = document.getElementById('results');

  maxResults = 7;

  searchInput.addEventListener('keyup', (e) => {
    var suggested, value;
    value = searchInput.value.toLowerCase().split(' ');
    suggested = (value[0].length ? findAll(value, names) : []);
    return displayResults(resultsOutput, suggested);
  });

}).call(this);

</script>
</body></html>
