<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    public function checkLogin($data)
    {
        $query = $this->db->get('admin');
        if($query->num_rows() > 0){
            $rows = $query->result_array();
            foreach($rows as $val){
               if($val['username'] == $data['username'] && $val['password'] == $data['password']){
                   return TRUE;
               }
            }
           return FALSE;
       } 
    }
}