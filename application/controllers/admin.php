<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends CI_Controller{
    public function __construct(){
        parent:: __construct();
$this->load->library('session');
$this->load->helper('form');
$this->load->helper('url');
$this->load->library('form_validation');
$this->load->model('model');
    }
    public function index(){
        $this->user();

        
    }
    
    public function login(){
        
    $param=$this->uri->segment(4);
     $site=$this->uri->segment(3);
     $data['content']=$site;
     $data['linka']    = base_url().'admin';  
    $data['backend']    = base_url().'public/backend'; 
    $data['frontend']    = base_url().'public/frontend'; 
     $this->load->view("backend/dang_nhap",$data); 
    }
    
    public function logout(){
         $data['backend']    = base_url().'public/backend'; 
        $this->session->sess_destroy();
       $this->load->view("backend/redirect2",$data); 
    }
    
    
    
    
        public function user()
{ 	   
$data['linka']    = base_url().'admin';  
$data['backend']    = base_url().'public/backend';
$username = $this->input->post("user");
$password = $this->input->post("pass");
$this->form_validation->set_rules("user", "Username", "trim|required");
$this->form_validation->set_rules("pass", "Password", "trim|required");
 
if ($this->form_validation->run() == FALSE)
{
$this->load->view("backend/dang_nhap",$data);
}
else
{
if ($this->input->post('submit') == "login")
{
$usr_result = $this->model->get_user("thanh_vien",$username, $password);
if (count($usr_result )> 0)
{
$sessiondata = array(
'username' => $usr_result[0]['fullname'],
'user' => $usr_result[0]['user'],
'admin' => $usr_result[0]['admin']

);
$this->session->set_userdata("lay_user",$sessiondata);
$data['info_login']=$this->session->userdata('lay_user');
$this->load->view("backend/redirect",$data);
}
else
{

redirect($this->login());
}
}

}
}
    
    
    
    
    }

?>