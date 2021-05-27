<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Dashboard_controller
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

class Dashboard_controller extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    // $this->load->helper(array('form', 'url'));
  }

  public function index()
  {
    // 
    // echo base_url();
    $email = $_SESSION['email'];

    $result = $this->User_model->getUserByEmail($email);
    $userdata = array();
    $userdata['result'] = $result[0];

    $data = array();
    $isLoggedIn = TRUE;
    $data['isLoggedIn'] = $isLoggedIn;
    $data['title'] = "Dashboard";


    $data['title'] = "Dashboard";
    $this->load->view('template/header.php', $data);
    $this->load->view('sidebar/sidebar.php',$userdata);
    $this->load->view('pages/dashboard.php');
    $this->load->view('template/footer.php');
  }

  public function getUserByEmail(){
    $email='iambiren@gmail.com';
    $result = $this->User_model->getUserByEmail($email);
    $userdata = array();
    $userdata['result'] = $result[0];

    $data['title'] = "Profile";
    $this->load->view('template/header.php', $data);
    $this->load->view('sidebar/sidebar.php',$userdata);
    $this->load->view('pages/profile.php',$userdata);
    $this->load->view('template/footer.php');

  }

  public function updateProfile(){
      // Validation
      $this->form_validation->set_rules('name', 'Name', 'required|min_length[5]|max_length[50]');
      $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
      $this->form_validation->set_rules('mobile', 'Mobile', 'required|min_length[10]|max_length[10]');
      // Error condition
      if ($this->form_validation->run() == FALSE) {
        # code...
        // echo "Validation error";

        echo "<script> alert('Validation fail');</script>";
        // redirect(base_url().'pages/profile');

        // $this->load->view('pages/profile.php');
    }
    // Providing data to model
    else{
      // echo "validation success";
      $this->load->helper('url'); //loads url helper
      $email = $this->input->post('email');
      $name = $this->input->post('name');
      $mobile = $this->input->post('mobile');
      
      $this->User_model->updateProfile($email, $name, $mobile);

     echo "<script> alert('Profile update success');</script>";

    //  redirect(base_url('dashboard'));
      // redirect('pages/dashboard');
    }

    // Redirect to the dashboard

    $userdata = array();
    $isLoggedIn = TRUE;
    $userdata['isLoggedIn'] = $isLoggedIn;
       $userdata['title'] = "Dashboard";
    $this->load->view('template/header.php', $userdata);
    $this->load->view('sidebar/sidebar.php');
    $this->load->view('pages/dashboard.php');
    $this->load->view('template/footer.php');

  }

  public function logout(){
    // $this->session->unset_userdata($session_data);
    // unset($_SESSION['session_data']);
    $this->session->sess_destroy();
   
    $data['title'] = "Homepage";
    $this->load->view('template/header.php', $data);
    // $this->load->view('sidebar/sidebar.php');
    $this->load->view('welcome_message.php');
    $this->load->view('template/footer.php');
    


  }

}


/* End of file Dashboard_controller.php */
/* Location: ./application/controllers/Dashboard_controller.php */