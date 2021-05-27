<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Admin
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Admin extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    // 

    // $user = $this->

    $email = $_SESSION['email'];

    $result = $this->User_model->getUserByEmail($email);
    $userdata = array();
    $userdata['result'] = $result[0];


    $data['title'] = "Admin Panel";
    if ( $_SESSION['userType'] == 1) {
      $data['isLoggedIn'] = TRUE;
      $this->load->view('template/header.php', $data);
      $this->load->view('sidebar/sidebar.php',$userdata);
      $this->load->view('Dashboard/admin.php');
      $this->load->view('template/footer.php');
    }

   


  }

}


/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */