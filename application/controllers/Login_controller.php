<?php

class Login_controller extends CI_Controller
{
     public function __construct()
     {
          parent::__construct();
          $this->load->model('User_model');
          // $this->load->helper(array('form', 'url'));
          $this->load->helper('url'); 
          $this->load->library('form_validation');
     }

     public function index()
     {
          $userdata = array();
	    $isLoggedIn = FALSE;
	    $userdata['isLoggedIn'] = $isLoggedIn;
         $userdata['title'] = "Login";

          $this->load->view('template/header.php', $userdata);
          $this->load->view('credential/login.php');
          $this->load->view('template/footer.php');
     }

     public function login()
     {

          $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
          $this->form_validation->set_rules('password', 'Password', 'required', array('required' => 'You must provide a %s.'));

          if (!$this->form_validation->run()) {
               //False
               // redirect(base_url().'pages/dashboard'); 
               echo "Validation fail" ;
              
          } else {
               // echo "23";
               // False
               $email = $this->input->post('email');
               $password = $this->input->post('password');
               //model function  
               //  $this->load->model('User');  
               if ($this->User_model->can_login($email, $password)) {
                    $result = $this->User_model->getUserByEmail($email);
                    $session_data = array(
                         'email'     =>     $email,
                         'userType' => $result[0]->userType,
                         'isLoggedIn' => 1,
                         'user_id' => $result[0]->user_id
                    );
                    $this->session->set_userdata($session_data);

                    if($session_data['userType'] == 0){
                         // echo "dashboard";
                         
                         $data = "Dashboard";
                         $userdata = array ();
                         $userdata['userType'] = 1;
                         $this->load->view('template/header', $data);
                         $this->load->view('pages/success',$userdata);
                         $this->load->view('template/footer');
                         // redirect(base_url().'/dashboard');
                         // $segments = array('news', 'local', '123');
                         // echo site_url($segments);
                         // redirect('/article/13', 'location', 301);
                         // redirect('redirect/computer_graphics','');

                    }
                    else if($session_data['userType'] == 1){
                         $data = "Dashboard";
                         $userdata = array ();
                         $userdata['userType'] = 1;
                         $this->load->view('template/header', $data);
                         $this->load->view('pages/success',$userdata);
                         $this->load->view('template/footer');
                    }
                    // echo "here";
                    //   redirect("a"); 
                    // echo "Login success";
               } else {
                    echo "Login failed";
                    $this->session->set_tempdata('error', 'Invalid Username and Password');
                    redirect(base_url() . 'user/login');
                    // echo "Login failed";
               }
              
          }
     }
}
