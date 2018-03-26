<?php
/**
 *
 */
class Database
{
  private $host = "localhost";
  private $user = "root";
  private $pass = "";
  private $dbname = "test";

  private $dbh;
  private $error;
  private $stmt;

  public function __construct()
  {
    //Set DSN
    $dsn = "mysql:host=".$this->host.";dbname=".$this->dbname;
    //Set options
    $options = array(
      PDO::ATTR_PERSISTENT => true,
      PDO::ATTR_ERRMODE    => PDO::ERRMODE_EXCEPTION
    );
    //Create new PDO
    try {
      $this->dbh =new PDO($dsn,$this->user,$this->pass,$options);

    } catch (PDOException $e) {
      $this->error = $e->getMessage();
      echo $this->error;

    }
  }

  public function query($query)
  {
    $this->stmt = $this->dbh->prepare($query);
  }

  public function bind($param,$value,$type=null)
  {
    if (is_null($type)) {
      switch (true) {
        case is_int($value):
          $type = PDO::PARAM_INT;
          break;
        case is_bool($value):
          $type = PDO::PARAM_BOOL;
          break;
        case is_null($value):
          $type = PDO::PARAM_NULL;
          break;
        default:
          $type = PDO::PARAM_STR;
          break;
      }
    }
      $this->stmt->bindValue($param,$value,$type);
    }

  public function execute($query, $bind=null)
  {
    $this->query($query);
    if ($bind != null) {
      foreach ($bind as $key => $value) {
        $this->bind($key,$value);
      }
    }

    return $this->stmt->execute();
  }

  public function resultset($query, $bind=null)
  {
    $this->execute($query, $bind);
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }

}
?>
