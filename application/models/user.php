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
    $sql = 'SELECT * FROM member WHERE Username = ? AND Password = ?';
    $rs = $this->db->query($sql,array($name , $pass));
    if($rs->num_rows() > 0){
      return  $rs->result();
    }else{
      return  0;
    }
  }

  function checkoverlapssid($id) //เช็คว่าบัตรประชาชน ซ้ำหรือไม่
  {
    # code...
    $rs = $this->db->select('*')->from('member')->where('IDCard' , $id)->get();
    if($rs->num_rows() > 0){
      return 1;  //แสดงว่าซ้ำ
    }else{
      return 0; //แสดงว่าไม่ซ้ำ
    }
  }

  function checkuser($Username) //เช็คว่า username ซ้ำกันหรือไม่
  {
    # code...
    $rs = $this->db->select('*')->from('member')->where('Username' , $Username)->get();
    if($rs->num_rows() > 0){
      return 1;  //แสดงว่าซ้ำ
    }else{
      return 0; //แสดงว่าไม่ซ้ำ
    }
  }

  function insertuser($IDCard,$Fname,$Lname,$Address,$Tel,$Email,$Username,$Password,$Province,$Didtrict,$Postcode){ //insert ข้อมูลuser
    $sql = array(
      'IDCard' => $IDCard,
      'Fname' => $Fname,
      'Lname' => $Lname,
      'Address' => $Address,
      'Tel' => $Tel,
      'Email' => $Email,
      'Username' => $Username,
      'Password' => $Password,
      'Province' => $Province,
      'Didtrict' => $Didtrict,
      'Postcode' => $Postcode
    );
    $this->db->insert('member',$sql);
  }

  function checkssid($ssid) //เช็คบัตรประชาชน
  {
    # code...
    $sum = 0;
    for ($i=0; $i < strlen($ssid)-1; $i++) {
      # code...
      $sum = $sum + $ssid[$i] * (13 - $i);
    }
    $sum = $sum % 11;
    $sum = 11 - $sum;
    if($sum == $ssid[12]){
      return 1;
    }else{
      return 0;
    }
  }

}

 ?>
