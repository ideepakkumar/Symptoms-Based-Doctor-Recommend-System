<?php
  require("./pdo/classes/Database.php");
  $q1 = $_POST['first']; $q2 = $_POST['second']; $q3 = $_POST['third'];
  $sql = "SELECT `id`, `Doctor Name` FROM docsinfo WHERE `Doctor Name` LIKE '%$q1%' AND `Doctor Name` LIKE '%$q2%' AND  `Doctor Name` LIKE '%$q3%' LIMIT 5";
  $db = new Database;
  $res = $db->resultset($sql);
  echo json_encode($res);
?>
