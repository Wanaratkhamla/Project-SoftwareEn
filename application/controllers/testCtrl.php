<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class testCtrl extends CI_Controller
{

  public function index()
  {
    $password = htmlentities(hash('sha256', 'Admin2538'));
    $result = $this->test->testquery('wanarat_k@kkumail.com', $password);
    foreach ($result as $row)
    {
            $nos = $row->memberType;
    }
    echo $nos;

  }
}
 ?>
