<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller{
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
        $this->thisinh();

        
    }

    
    public function thisinh(){
     $param=$this->uri->segment(4);
     $param2=$this->uri->segment(5);
     $site=$this->uri->segment(3);
     $data['param']=$param;
     $data['content']=$site;
     $data['linka']    = base_url().'index.php/admin';  
	 $data['link']    = base_url().'index.php/home';
     $link=  base_url().'index.php/home';
     $data['frontend']    = base_url().'public/frontend'; 
     $data['backend']    = base_url().'public/backend'; 
     $data['phong']=$this->model->get_table("phong_thi");  
		
	switch($site)
    {
        case "tt-nhan-vien" :
        break;
        
        case "diem-thi":
        $data['tt_diemthi']=$this->model->get_table("tt_diemthi");
          $data['require']="diem_thi";
        $data['title']="Thông tin điểm thi";
        break;
        
        case "khu-vuc":
        $data['tt_khuvuc']=$this->model->get_table("khu_vuc");
        $data['require']="khu_vuc";
        $data['title']="Thông tin khu vực ưu tiên";
        break;
        
        case "ton-giao":
        $data['tt_tongiao']=$this->model->get_table("ton_giao");
        $data['require']="ton_giao";
        $data['title']="Thông tin tôn giáo";
        break;
        
        case "dan-toc":
        $data['tt_dantoc']=$this->model->get_table("dan_toc");
        $data['require']="dan_toc";
        $data['title']="Thông tin dân tộc";
        break;
        
        case "phong-thi":
        $data['tt_phongthi']=$this->model->get_table("phong_thi");
        $data['require']="phong_thi";
        $data['title']="Thông tin phòng thi";
        break;
        
        case "khoi-thi":
        $data['tt_khoithi']=$this->model->get_table("khoi_thi");
        $data['require']="khoi_thi";
        $data['title']="Thông tin khối thi";
        break;
       
        
          case "sua-thi-sinh":
          $data['tt_thisinh'] = $this->model->get_table_dk("tt_thisinh","so_bao_danh","$param") ;
          $tt_thisinh= $this->model->get_table_dk("tt_thisinh","so_bao_danh","$param") ;
          $data['tt_khuvuc']=$this->model->get_table_dk("khu_vuc","ma_khu_vuc",$tt_thisinh[0]['ma_khu_vuc']);
          $data['tt_dantoc']=$this->model->get_table_dk("dan_toc","ma_dan_toc",$tt_thisinh[0]['ma_dan_toc']);
          $data['tt_tongiao']=$this->model->get_table_dk("ton_giao","ma_ton_giao",$tt_thisinh[0]['ma_ton_giao']);
         $data['tt_phongthi']=$this->model->get_table_dk("phong_thi","ma_phong_thi",$tt_thisinh[0]['ma_phong_thi']);
         $data['tt_khoithi']=$this->model->get_table_dk("khoi_thi","ma_khoi_thi",$tt_thisinh[0]['ma_khoi_thi']);
         $data['get_khuvuc']=$this->model->get_table("khu_vuc");
         $data['get_dantoc']=$this->model->get_table("dan_toc");
         $data['get_tongiao']=$this->model->get_table("ton_giao");
         $data['get_khoithi']=$this->model->get_table("khoi_thi");
         $data['get_phongthi']=$this->model->get_table("phong_thi");
           $data['require']="sua_thi_sinh";
          $data['title']="Cập nhật thông tin thí sinh";
        
         if($this->input->post('submit') == "update"){
             $so_bao_danh = $this->input->post("so_bao_danh");
             $this->form_validation->set_rules("so_bao_danh", "so_bao_danh", "trim|required");
              $ma_phong_thi = $this->input->post("ma_phong_thi");
             $this->form_validation->set_rules("ma_phong_thi", "ma_phong_thi", "trim|required");
             $ma_khoi_thi = $this->input->post("ma_khoi_thi");
             $this->form_validation->set_rules("ma_khoi_thi", "ma_khoi_thi", "trim|required");
              $gioi_tinh = $this->input->post("gioi_tinh");
             $this->form_validation->set_rules("gioi_tinh", "gioi_tinh", "trim|required");
              $ho_ten = $this->input->post("ho_ten");
             $this->form_validation->set_rules("ho_ten", "ho_ten", "trim|required");
              $ngay_sinh = $this->input->post("ngay_sinh");
             $this->form_validation->set_rules("ngay_sinh", "ngay_sinh", "trim|required");
              $dia_chi = $this->input->post("dia_chi");
             $this->form_validation->set_rules("dia_chi", "dia_chi", "trim|required");
              $so_cmt = $this->input->post("so_cmt");
             $this->form_validation->set_rules("so_cmt", "so_cmt", "trim|required");
              $ma_khu_vuc = $this->input->post("ma_khu_vuc");
             $this->form_validation->set_rules("ma_khu_vuc", "ma_khu_vuc", "trim|required");
              $ma_ton_giao = $this->input->post("ma_ton_giao");
             $this->form_validation->set_rules("ma_ton_giao", "ma_ton_giao", "trim|required");
              $ma_dan_toc = $this->input->post("ma_dan_toc");
             $this->form_validation->set_rules("ma_dan_toc", "ma_dan_toc", "trim|required");
        
                  if ($this->form_validation->run() == true)
         {
          $data = array(
           'so_bao_danh' => $so_bao_danh,
               'ma_phong_thi' => $ma_phong_thi,
               'ma_khoi_thi'=>$ma_khoi_thi,
               'gioi_tinh' => $gioi_tinh,
               'ho_ten' => $ho_ten,
               'ngay_sinh' => $ngay_sinh,
               'dia_chi' => $dia_chi,
               'so_cmt' => $so_cmt,
               'ma_khu_vuc' => $ma_khu_vuc,
               'ma_ton_giao' => $ma_ton_giao,
               'ma_dan_toc'=>$ma_dan_toc
          );
          $result=$this->model->update_data("tt_thisinh","so_bao_danh",$param,$data);
          if($result){
            echo "<script> alert('Update thành công!');</script>";
              echo"<script>location.href='$link/thisinh/sua-thi-sinh/$so_bao_danh';</script>";
          }
         }   
          else{
             echo "<script> alert('có lỗi!');</script>";
             echo"<script>location.href='$link/thisinh/sua-thi-sinh/$param';</script>";
          } 
          }
        break;
        
        
         case "them-thi-sinh":
         $data['get_khuvuc']=$this->model->get_table("khu_vuc");
         $data['get_dantoc']=$this->model->get_table("dan_toc");
         $data['get_tongiao']=$this->model->get_table("ton_giao");
         $data['get_phongthi']=$this->model->get_table("phong_thi");
         $data['get_khoithi']=$this->model->get_table("khoi_thi");
           $data['require']="them_thi_sinh";
          $data['title']="Thêm mới thí sinh";
        
         if($this->input->post('submit') == "add"){
             $so_bao_danh = $this->input->post("so_bao_danh");
             $this->form_validation->set_rules("so_bao_danh", "so_bao_danh", "trim|required");
              $ma_phong_thi = $this->input->post("ma_phong_thi");
             $this->form_validation->set_rules("ma_phong_thi", "ma_phong_thi", "trim|required");
              $ma_khoi_thi = $this->input->post("ma_khoi_thi");
             $this->form_validation->set_rules("ma_khoi_thi", "ma_khoi_thi", "trim|required");
              $gioi_tinh = $this->input->post("gioi_tinh");
             $this->form_validation->set_rules("gioi_tinh", "gioi_tinh", "trim|required");
              $ho_ten = $this->input->post("ho_ten");
             $this->form_validation->set_rules("ho_ten", "ho_ten", "trim|required");
              $ngay_sinh = $this->input->post("ngay_sinh");
             $this->form_validation->set_rules("ngay_sinh", "ngay_sinh", "trim|required");
              $dia_chi = $this->input->post("dia_chi");
             $this->form_validation->set_rules("dia_chi", "dia_chi", "trim|required");
              $so_cmt = $this->input->post("so_cmt");
             $this->form_validation->set_rules("so_cmt", "so_cmt", "trim|required");
              $ma_khu_vuc = $this->input->post("ma_khu_vuc");
             $this->form_validation->set_rules("ma_khu_vuc", "ma_khu_vuc", "trim|required");
              $ma_ton_giao = $this->input->post("ma_ton_giao");
             $this->form_validation->set_rules("ma_ton_giao", "ma_ton_giao", "trim|required");
              $ma_dan_toc = $this->input->post("ma_dan_toc");
             $this->form_validation->set_rules("ma_dan_toc", "ma_dan_toc", "trim|required");
        
                  if ($this->form_validation->run() == true)
         {
          $data = array(
           'so_bao_danh' => $so_bao_danh,
               'ma_phong_thi' => $ma_phong_thi,
                'ma_khoi_thi'=>$ma_khoi_thi,
               'gioi_tinh' => $gioi_tinh,
               'ho_ten' => $ho_ten,
               'ngay_sinh' => $ngay_sinh,
               'dia_chi' => $dia_chi,
               'so_cmt' => $so_cmt,
               'ma_khu_vuc' => $ma_khu_vuc,
               'ma_ton_giao' => $ma_ton_giao,
               'ma_dan_toc'=>$ma_dan_toc
          );
          $result=$this->model->insert_data("tt_thisinh",$data);
          if($result){
            echo "<script> alert('Thêm thành công!');</script>";
              echo"<script>location.href='$link/thisinh';</script>";
          }
         }   
          else{
             echo "<script> alert('có lỗi!');</script>";
             echo"<script>location.href='$link/thisinh';</script>";
          } 
          }
        break;
        
        //sửa điểm
        case "sua-diem":
          $data['tt_thisinh'] = $this->model->get_table_dk("tt_thisinh","so_bao_danh","$param") ;
           $data['tt_diemthi'] = $this->model->get_table_dk("tt_diemthi","so_bao_danh","$param") ;
           $data['require']="sua_diem";
          $data['title']="Cập nhật điểm thi";
        
         if($this->input->post('submit') == "update"){
             $so_bao_danh = $param;
              $diem_mon_1 = $this->input->post("diem_mon_1");
             $this->form_validation->set_rules("diem_mon_1", "diem_mon_1", "trim|required");
             $diem_mon_2 = $this->input->post("diem_mon_2");
             $this->form_validation->set_rules("diem_mon_2", "diem_mon_2", "trim|required");
             $diem_mon_3 = $this->input->post("diem_mon_3");
             $this->form_validation->set_rules("diem_mon_3", "diem_mon_3", "trim|required");
             $tong_diem = $diem_mon_1+$diem_mon_2+$diem_mon_3;
            
             
        
                  if ($this->form_validation->run() == true)
         {
          $data = array(
           'so_bao_danh' => $so_bao_danh,
               'diem_mon_1' => $diem_mon_1,
               'diem_mon_2'=>$diem_mon_2,
               'diem_mon_3' => $diem_mon_3,
               'tong_diem'=>$tong_diem
          );
          $result=$this->model->update_data("tt_diemthi","so_bao_danh",$param,$data);
          if($result){
            echo "<script> alert('Update thành công!');</script>";
              echo"<script>location.href='$link/thisinh/sua-diem/$so_bao_danh';</script>";
          }
         }   
          else{
             echo "<script> alert('có lỗi!');</script>";
             echo"<script>location.href='$link/thisinh/sua-diem/$param';</script>";
          } 
          }
        break;
        
        //thêm điểm
        case "them-diem":
          $data['tt_thisinh'] = $this->model->get_table_dk("tt_thisinh","so_bao_danh","$param") ;
          $tt_thisinh=$this->model->get_table_dk("tt_thisinh","so_bao_danh","$param") ;
           $data['tt_diemthi'] = $this->model->get_table_dk("tt_diemthi","so_bao_danh","$param") ;
            $data['tt_khuvuc']=$this->model->get_table_dk("khu_vuc","ma_khu_vuc",$tt_thisinh[0]['ma_khu_vuc']);
          $data['tt_dantoc']=$this->model->get_table_dk("dan_toc","ma_dan_toc",$tt_thisinh[0]['ma_dan_toc']);
          $data['tt_tongiao']=$this->model->get_table_dk("ton_giao","ma_ton_giao",$tt_thisinh[0]['ma_ton_giao']);
         $data['tt_phongthi']=$this->model->get_table_dk("phong_thi","ma_phong_thi",$tt_thisinh[0]['ma_phong_thi']);
         $data['tt_khoithi']=$this->model->get_table_dk("khoi_thi","ma_khoi_thi",$tt_thisinh[0]['ma_khoi_thi']);
           $data['require']="them_diem";
          $data['title']="Cập nhật điểm thi";
        
         if($this->input->post('submit') == "add"){
             $so_bao_danh = $param;
              $diem_mon_1 = $this->input->post("diem_mon_1");
             $this->form_validation->set_rules("diem_mon_1", "diem_mon_1", "trim|required");
             $diem_mon_2 = $this->input->post("diem_mon_2");
             $this->form_validation->set_rules("diem_mon_2", "diem_mon_2", "trim|required");
             $diem_mon_3 = $this->input->post("diem_mon_3");
             $this->form_validation->set_rules("diem_mon_3", "diem_mon_3", "trim|required");
             $tong_diem = $diem_mon_1+$diem_mon_2+$diem_mon_3;
            
             
        
                  if ($this->form_validation->run() == true)
         {
          $data = array(
           'so_bao_danh' => $so_bao_danh,
               'diem_mon_1' => $diem_mon_1,
               'diem_mon_2'=>$diem_mon_2,
               'diem_mon_3' => $diem_mon_3,
               'tong_diem'=>$tong_diem
          );
          $result=$this->model->insert_data("tt_diemthi",$data);
          if($result){
            echo "<script> alert('Thêm thành công!');</script>";
              echo"<script>location.href='$link/thisinh/sua-diem/$so_bao_danh';</script>";
          }
         }   
          else{
             echo "<script> alert('có lỗi!');</script>";
             echo"<script>location.href='$link/thisinh/sua-diem/$param';</script>";
          } 
          }
        break;
        
       //search
       
               case "search":
        if ($param=="phong"){
      $phong=$this->input->post("phong");
      $this->form_validation->set_rules("phong","phong","trim|required");
      if ($this->form_validation->run() == true)
         {
         $data['phong_search']=$this->model->get_table_dk("phong_thi","ma_phong_thi","$phong");
         $tt_phong=$this->model->get_table_dk("phong_thi","ma_phong_thi","$phong");
         $phong2=$tt_phong[0]['ten_phong_thi'];
        $data['tt_thisinh']= $this->model->get_innerjoin("tt_thisinh","phong_thi","ma_phong_thi","ma_phong_thi","$phong");
        $data['require']="tim_ten";
          $data['title']="Tìm tên: từ khóa ( $phong2 )";

      }
      else {
        echo "<script> alert('có lỗi!');</script>";
      }
    
      }
      if ($param=="ten"){        
      $ten=$this->input->post("ten");
      $this->form_validation->set_rules("ten","ten","trim|required");
      if ($this->form_validation->run() == true)
         {
         $data['ten']=$ten;
        $data['tt_thisinh']= $this->model->get_table_search("tt_thisinh","ho_ten","$ten");
        $data['require']="tim_ten";
          $data['title']="Tìm tên: từ khóa ( $ten )";

      }
      else {
        echo "<script> alert('có lỗi!');</script>";
      }
        
      }
        break; 
        
        
        
        
                      
        default:              
          $data['tt_thisinh'] = $this->model->get_table("tt_thisinh") ; 
        break;
             
    }
	if($site==null){
	   $this->load->view("index",$data);
	}
    else{
      
         $this->load->view("home",$data);
    }	
}
  public function xoa(){
         $param=$this->uri->segment(3);
   $link=  base_url().'index.php/home';
   $query= $this->model->del("tt_thisinh","so_bao_danh","$param");
    if($query){
         echo "<script> alert('Đã Xóa!');</script>";
              echo"<script>location.href='$link/thisinh';</script>";
    }
    else{echo"loi";}
    
  }
             
}
?>