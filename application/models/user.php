<?php
/**
 *
 */
class user extends CI_Model
{
  public function __construct()
  {
    # code...
      parent::__construct();
  }
  function listname($name, $pass)
  {
    $sql = 'SELECT * FROM member WHERE name = ? AND username = ?';
    $rs = $this->db->query($sql,array($name , $pass));
    echo $rs->num_rows();
    return  $rs->result();
  }
}

 ?>
