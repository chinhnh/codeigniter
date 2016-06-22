<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Back extends CI_Controller{
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
    $param=$this->uri->segment(4);
     $site=$this->uri->segment(3);
     $data['content']=$site;
        
    }
    }

?>