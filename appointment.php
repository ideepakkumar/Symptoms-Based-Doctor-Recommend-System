<html lang="en" class="">
<?php require("./pdo/classes/Database.php"); ?>
<head><script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
<style>
* {
  box-sizing: border-box;
}

body {
  background: #9de0a3;
  min-width: 320px;
}

h2 {
  text-align: center;
  margin: 50px 0;
  color: #386c3d;
  font-size: 47px;
  font-family: 'Quicksand', sans-serif;
}
@media (max-width: 540px) {
  h2 {
    font-size: 28px;
    margin: 30px 0;
  }
}

form {
  padding: 0 10%;
}
form section {
  width: calc(50% - 40px);
  padding: 20px;
  background: #8ed294;
  margin: 20px;
  border-radius: 5px;
}
form section.left {
  float: left;
}
form section.right {
  float: right;
}
form section .input-container {
  padding: 10px;
}
form section .input-container label {
  display: block;
  margin-bottom: 4px;
  color: white;
  font-size: 16px;
  text-shadow: 0px 2px 1px #65ad6b;
  font-family: 'Quicksand', sans-serif;
}
form section .input-container input,
form section .input-container textarea {
  width: 100%;
  padding: 5px 10px;
  height: 40px;
  border-radius: 5px;
  border: none;
  background: #d7ffdb;
  box-shadow: 0 2px 0px #77bd7d;
  font-family: 'Quicksand', sans-serif;
  font-size: 16px;
  color: #757575;
}
form section .input-container input:focus,
form section .input-container textarea:focus {
  outline: none;
  background: white;
}
form section .input-container textarea {
  height: 122px;
  padding: 15px 10px;
  resize: none;
}
form .send-container {
  float: right;
  width: 100%;
  text-align: right;
  margin-right: 20px;
}
form .send-container input {
  background: #77bd7d;
  border: none;
  color: white;
  padding: 15px 30px;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
}
form .send-container input:hover {
  background: #8ed294;
}
form:after {
  content: "";
  display: block;
  clear: both;
}
@media (max-width: 992px) {
  form {
    padding: 0 5%;
  }
}
@media (max-width: 768px) {
  form {
    margin-bottom: 50px;
  }
  form section {
    width: 100%;
    margin: 0;
  }
  form section.left {
    margin-bottom: -30px;
  }
  form .send-container {
    margin-right: 0;
    margin-top: 15px;
  }
  form .send-container input {
    width: 100%;
  }
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


</style>
</head>
<body>
  <h2>Book An Appointment</h2>
  <?php
    $db = new Database;
    $res = $db->resultset("SELECT * FROM docsinfo WHERE ID = :doc_id", array(':doc_id' => $_GET["q"]));
    if(!$res) header("Location: ./index.php");
    echo "<center>".$res[0]["Doctor Name"]."<br><br><small>".$res[0]["Specialist"]."</small><br><br><br></center>";

  ?>
<form action="">
  <section class="left">
    <div class="input-container">
      <label for="name">Name</label>
      <input type="text" />
    </div>
    <div class="input-container">
      <label for="age" required>Age</label>
      <input type="text" />
    </div>
    <div class="input-container">
      <label for="phone">Phone</label>
      <input type="text" />
    </div>
    <div class="input-container">
      <label for="email">Email</label>
      <input type="text" />
    </div>
  </section>
  <section class="right">
    <div class="input-container">
      <label for="address">Address 1</label>
      <input type="text" />
    </div>
    <div class="input-container">
      <label for="address">Address 2 <span>(opcional)</span></label>
      <input type="text" />
    </div>
    <!-- <div class="input-container"> -->
      <input type="checkbox" name = "muscle pain" id="test1" class = "col-md-2 col-sm-3 col-xs-5"/><label for="test1" class = "col-md-2 col-sm-3 col-xs-5"/>muscle pain</label>
      <input type="checkbox" name = "chest pain" id="test2" class = "col-md-2 col-sm-3 col-xs-5"/><label for="test2" class = "col-md-2 col-sm-3 col-xs-5"/>chest pain</label>
      <input type="checkbox" name = "headache" id="test3" class = "col-md-2 col-sm-3 col-xs-5"/><label for="test3" class = "col-md-2 col-sm-3 col-xs-5"/>headache</label>
      <input type="checkbox" name = "abdominal pain" id="test4" class = "col-md-2 col-sm-3 col-xs-5"/><label for="test4" class = "col-md-2 col-sm-3 col-xs-5"/>abdominal pain</label>
      <input type="checkbox" name = "fatigue" id="test5" class = "col-md-2 col-sm-3 col-xs-5"/><label for="test5" class = "col-md-2 col-sm-3 col-xs-5"/>fatigue</label>
      <input type="checkbox" name = "nausea" id="test6" class = "col-md-2 col-sm-3 col-xs-5"/><label for="test6" class = "col-md-2 col-sm-3 col-xs-5"/>nausea</label>
      <input type="checkbox" name = "anxiety" id="test7" class = "col-md-2 col-sm-3 col-xs-5"/><label for="test7" class = "col-md-2 col-sm-3 col-xs-5"/>anxiety</label>
      <input type="checkbox" name = "common cold" id="test8" class = "col-md-2 col-sm-3 col-xs-5"/><label for="test8" class = "col-md-2 col-sm-3 col-xs-5"/>common cold</label>
      <input type="checkbox" name = "dizziness" id="test9" class = "col-md-2 col-sm-3 col-xs-5"/><label for="test9" class = "col-md-2 col-sm-3 col-xs-5"/>dizziness</label>
      <input type="checkbox" name = "diarrhea" id="test10" class = "col-md-2 col-sm-3 col-xs-5"/><label for="test10" class = "col-md-2 col-sm-3 col-xs-5"/>diarrhea</label>
      <input type="checkbox" name = "constipation" id="test11" class = "col-md-2 col-sm-3 col-xs-5"/><label for="test11" class = "col-md-2 col-sm-3 col-xs-5"/>constipation</label>
      <input type="checkbox" name = "vomiting" id="test12" class = "col-md-2 col-sm-3 col-xs-5"/><label for="test12" class = "col-md-2 col-sm-3 col-xs-5"/>vomiting</label>
      <input type="checkbox" name = "allergy" id="test13" class = "col-md-2 col-sm-3 col-xs-5"/><label for="test13" class = "col-md-2 col-sm-3 col-xs-5"/>allergy</label>
      <input type="checkbox" name = "skin rashes" id="test14" class = "col-md-2 col-sm-3 col-xs-5"/><label for="test14" class = "col-md-2 col-sm-3 col-xs-5"/>skin rashes</label>
      <input type="checkbox" name = "fever" id="test15" class = "col-md-2 col-sm-3 col-xs-5"/><label for="test15" class = "col-md-2 col-sm-3 col-xs-5"/>fever</label>
      <input type="checkbox" name = "insomnia" id="test16" class = "col-md-2 col-sm-3 col-xs-5"/><label for="test16" class = "col-md-2 col-sm-3 col-xs-5"/>insomnia</label>
      <input type="checkbox" name = "hypertension" id="test17" class = "col-md-2 col-sm-3 col-xs-5"/><label for="test17" class = "col-md-2 col-sm-3 col-xs-5"/>hypertension</label>
      <input type="checkbox" name = "cough" id="test18" class = "col-md-2 col-sm-3 col-xs-5"/><label for="test18" class = "col-md-2 col-sm-3 col-xs-5"/>cough</label>
      <input type="checkbox" name = "joint pain" id="test19" class = "col-md-2 col-sm-3 col-xs-5"/><label for="test19" class = "col-md-2 col-sm-3 col-xs-5"/>joint pain</label>
      <input type="checkbox" name = "weight loss" id="test20" class = "col-md-2 col-sm-3 col-xs-5"/><label for="test20" class = "col-md-2 col-sm-3 col-xs-5"/>weight loss</label>
      <input type="checkbox" name = "weight gain" id="test21" class = "col-md-2 col-sm-3 col-xs-5"/><label for="test21" class = "col-md-2 col-sm-3 col-xs-5"/>weight gain</label>
      <input type="checkbox" name = "irritaion in eyes" id="test22" class = "col-md-2 col-sm-3 col-xs-5"/><label for="test22" class = "col-md-2 col-sm-3 col-xs-5"/>irritaion in eyes</label>
      <input type="checkbox" name = "hypotension" id="test23" class = "col-md-2 col-sm-3 col-xs-5"/><label for="test23" class = "col-md-2 col-sm-3 col-xs-5"/>hypotension</label>
      <input type="checkbox" name = "hair loss" id="test24" class = "col-md-2 col-sm-3 col-xs-5"/><label for="test24" class = "col-md-2 col-sm-3 col-xs-5"/>hair loss</label>
      <input type="checkbox" name = "stress" id="test25" class = "col-md-2 col-sm-3 col-xs-5"/><label for="test25" class = "col-md-2 col-sm-3 col-xs-5"/>stress</label>
    <!-- </div> -->
    <div class="input-container">
      <label for="comments">Problem</label>
      <textarea name="comments" id=""></textarea>
    </div>
  </section>
  <div class="send-container">
    <input type="submit" value="Send" onclick="return true"/>
   </div>
</form>
</body>
</html>
