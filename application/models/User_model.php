<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_model {
    function __construct()
    {
      parent::__construct(); // construct the Model class
    }


    public function create($formarray){
        $this->db->insert('users',$formarray);
    }

    public function can_login($email,$password){
        $this->db->where('email', $email);  
        $this->db->where('password', $password);  
        $query = $this->db->get('users');  
        //SELECT * FROM users WHERE username = '$username' AND password = '$password'  
        if($query->num_rows() > 0)  
        {  
             return true;  
        }  
        else  
        {  
             return false;       
        }  

    }
    
    public function getUserByEmail($email){
        $this->db->select('user_id,email,name,mobile,userType',null);
        $this->db->from('users');
        $this->db->where('email',$email);
        $query = $this->db->get();
        if($query->num_rows() > 0)  
        {  
            return $query->result();  
        }  
        else  
        {  
             return false;       
        }
		
    }

    public function updateProfile($email,$name,$mobile){
        $array = array(
            'name' => $name,
            'email' => $email,
            'mobile' => $mobile
    );
    $this->db->update('users', $array, array('email' => $email));
    
    // $this->db->set($array);
    // $this->db->where('email', $email);
    // $this->db->update('users');


        // update table users ('email', 'name', 'mobile') values ($email, $name,$mobile)

    }

    
    
}



?>