<?php
  $lat = $_GET["lat"];
  $lon = $_GET["lon"];

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
?>
