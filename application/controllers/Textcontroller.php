<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class textcontroller extends CI_Controller
{

  public function index()
  {
    # code...
    echo '<script language="javascript">';
    echo 'alert("message successfully sent")';
    echo '</script>';
  }
}
 ?>
