<?php

class Signup_controller extends CI_Controller{
    public function index(){
        $userdata = array();
	    $isLoggedIn = FALSE;
	    $userdata['isLoggedIn'] = $isLoggedIn;
         $userdata['title'] = "Signup";
        $this->load->view('template/header.php',$userdata);
        $this->load->view('credential/signup.php');
        $this->load->view('template/footer.php');
    }

    public function create(){
        echo "Inside Create controller" ;

        $this->load->model('User_model');
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        $this->form_validation->set_rules('fullname', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('mobile', 'Mobile', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required',
                        array('required' => 'You must provide a %s.')
                );
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            # code...
            echo "Validation error";
            // redirect(base_url().'index.php/user/create');
        } else {
            # save record in database
            // echo "Validation okk";
             $formarray = array();
             $formarray['name'] = $this->input->post('fullname');
             $formarray['email'] = $this->input->post('email');
             $formarray['mobile'] = $this->input->post('mobile');
             $formarray['password'] = $this->input->post('password');
             $formarray['created_at'] = date('Y-m-d');
             $formarray['updated_at'] = date('Y-m-d');
             $this->User_model->create($formarray);
             $this->session->set_tempdata('success','User account created successfully!');
             
            //  redirect(base_url().'index.php/user/index');
        }
    }
}
