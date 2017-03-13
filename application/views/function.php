<?php
function listname($name, $pass)
{
  $sql = 'SELECT * FROM member WHERE Username = ? AND Password = ?';
  $rs = $this->db->query($sql,array($name , $pass));
  if($rs->num_rows() > 0){
    return  $rs->result();
  }else{
    return  0;
  }
}
?>
