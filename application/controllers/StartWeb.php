<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class startweb extends CI_Controller
{

  public function index()
  {
    # code...
    $this->load->helper(array('form'));
    $this->load->view('login');
  }
}
 ?>
