<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_user extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    public function checkLogin($data)
    {
        $query = $this->db->get('user');
        if($query->num_rows() > 0){
            $rows = $query->result_array();
            foreach($rows as $val){
               if($val['firstname'] == $data['firstname'] && $val['lastname'] == $data['lastname']){
                   return TRUE;
               }
            }
           return FALSE;
       } 
    }
}