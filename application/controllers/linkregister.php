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
    # code...
  }

  public function index()
  {
    
    $captcha = $this->captcha->CreateCaptcha();
    $this->load->view('register' , $captcha);
  }

  public function Refresh()
  {
    $captcha = $this->captcha->refCreateCaptcha();
    echo $captcha;
  }
}
 ?>
