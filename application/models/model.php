<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model extends CI_Model{
    
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function get_table($table){
        
        $sql="select * from $table";
        $query=$this->db->query($sql);
        return $query->result_array();  
    }
    public function get_table_dk($table,$ma_dk,$dk){
        $sql="select * from $table where $ma_dk='$dk'";
        $query=$this->db->query($sql);
        return $query->result_array();   
    }
        public function get_table_dk2($table,$ma_dk,$dau,$dk){
        $sql="select * from $table where $ma_dk $dau '$dk'";
        $query=$this->db->query($sql);
        return $query->result_array();   
    }
    
    public function get_innerjoin($table,$table_join,$dk_with,$ma_dk,$dk){        
       $sql = "SELECT * FROM $table inner join $table_join on $table.$dk_with = $table_join.$dk_with where $table_join.$ma_dk = '$dk'";
       $query=$this->db->query($sql);
       return $query->result_array(); 
        
    } 
        public function get_leftjoin($table,$table_join,$dk_with,$ma_dk,$dk){        
       $sql = "SELECT * FROM $table left join $table_join on $table.$dk_with = $table_join.$dk_with where $table_join.$ma_dk = '$dk'";
       $query=$this->db->query($sql);
       return $query->result_array(); 
        
    }
    
    public function insert_data($table,$array){
        $query=$this->db->insert("$table",$array);
        return $query;
       
    }
    public function update_data($table,$ma_dk,$dk,$array){
        $this->db->where("$ma_dk",$dk);
        $query=$this->db->update("$table",$array);
        return $query;
    }
    public function del($table,$ma_dk,$dk){
        $this->db->where("$ma_dk",$dk);
        $query=$this->db->delete("$table");
        return $query;
    }
    
    function get_user($table,$usr,$pwd)
    {
      $sql = "select * from $table where user = '" . $usr . "' and pass = '" . md5($pwd) . "'";
      $query = $this->db->query($sql);
      return $query->result_array();
    }
     public function get_table_search($table,$ma_dk,$dk){
          $sql="select * from $table where $ma_dk like'%$dk%'";
        $query=$this->db->query($sql);
        return $query->result_array();   
    }
   
}


