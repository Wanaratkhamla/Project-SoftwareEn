<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class checklogin extends CI_Controller
{

  public  function __construct()
  {
    parent::__construct();
    $this->load->model('user','',TRUE);
    # code...
  }

  public function index()
  {
    # code...
    // $this->load->helper(array('form'));
    // $this->load->view('login');
    $username = $_POST["username"];
    $password = $_POST["password"];
    $result = $this->user->listname($username, $password);
    foreach ($result as $row) {
      # code...
      echo $row->name . ' ' . $row->username . ' ' . $row->id . ' ' . $row->email;
    }



  }
}
 ?>
