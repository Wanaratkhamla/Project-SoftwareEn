<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class linkregister extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('captcha','',TRUE);
    # code...
  }

  public function index()
  {
    # code...

    $this->load->helper(array('form'));
    $captcha = $this->captcha->CreateCaptcha();
    $this->load->view('register' , $captcha);
  }
}
 ?>
