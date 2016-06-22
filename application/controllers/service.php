<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Service extends CI_Controller{
    public function __construct(){
        parent:: __construct();
$this->load->library('session');
$this->load->helper('form');
$this->load->helper('url');
$this->load->library('form_validation');
$this->load->model('model');
$this->load->database();
    }
    public function index(){
        $this->view();

        
    }
    
    
    public function view(){
        
      $param=$this->uri->segment(4);
     $site=$this->uri->segment(3);
    if($site=="json"){
     $data['tt_diemthi'] =$this->model->get_leftjoin("tt_diemthi","tt_thisinh","so_bao_danh","so_bao_danh","$param");
     $tt_diemthi=$this->model->get_leftjoin("tt_diemthi","tt_thisinh","so_bao_danh","so_bao_danh","$param");
     if(count($tt_diemthi)>0){
     $dk=$tt_diemthi[0]['tong_diem'];
     $diem_bang=$this->model->get_table_dk("tt_diemthi","tong_diem","$dk");
     $diem_kem=$this->model->get_table_dk2("tt_diemthi","tong_diem","<","$dk");
     $diem_hon=$this->model->get_table_dk2("tt_diemthi","tong_diem",">","$dk");
     $b=count($diem_bang)-1;
     $k=count($diem_kem);
     $h=count($diem_hon);
     $data['diem_bang']=array(array("diem_bang"=>$b));
     $data['diem_kem']=array(array("diem_kem"=>$k));
     $data['diem_hon']=array(array("diem_hon"=>$h));
     }
     $this->load->view('service/json',$data);
        
    }

         if($site=="xml"){
    $data['tt_diemthi'] =$this->model->get_leftjoin("tt_diemthi","tt_thisinh","so_bao_danh","so_bao_danh","$param");
     $tt_diemthi=$this->model->get_leftjoin("tt_diemthi","tt_thisinh","so_bao_danh","so_bao_danh","$param");
     if(count($tt_diemthi)>0){
     $dk=$tt_diemthi[0]['tong_diem'];
     $diem_bang=$this->model->get_table_dk("tt_diemthi","tong_diem","$dk");
     $diem_kem=$this->model->get_table_dk2("tt_diemthi","tong_diem","<","$dk");
     $diem_hon=$this->model->get_table_dk2("tt_diemthi","tong_diem",">","$dk");
     $b=count($diem_bang)-1;
     $k=count($diem_kem);
     $h=count($diem_hon);
     $data['diem_bang']=array(array("diem_bang"=>$b));
     $data['diem_kem']=array(array("diem_kem"=>$k));
     $data['diem_hon']=array(array("diem_hon"=>$h));
     }
     $this->load->view('service/xml',$data);
    }

    }
    }