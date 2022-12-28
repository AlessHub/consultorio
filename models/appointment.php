<?php 
class Appointment {
    public $Model;
    private $db;
    private $data;
    public function __construct() {
      $this->Model = array();
      $this->db = new PDO('mysql:host=localhost;dbname=my_consult', "root", "");
    }
  
    public function insert($table, $data) {
      $consult = "INSERT INTO " . $table . " (name, email, reason)" .
      " VALUES ($data)";
      $result=$this->db->query($consult);
      if ($result){
        return true;
      }else{
        return false;
      }
    }

    public function delete($table, $condition) {
      $consult="delete from " .$table. " where " .$condition;
      $result=$this->db->query($consult);
      if ($result){
        return true;
      }else{
        return false;
      }
    }

    public function show($table, $condition) {
      $consult="select * from " .$table. " where " .$condition.";";
      $result=$this->db->query($consult);
      while($files = $result->fetchAll(PDO::FETCH_ASSOC)){
        $this->data[]=$files;
      }
      return $this->data;
  }

  public function update($table, $data, $condition) {
    $consult="update " .$table. " set " . $data . " where " .$condition;
    $result = $this->db->query($consult);
    if($result){
      return true;
    }else{
      return false;
    }
  }
  }
  
  ?>