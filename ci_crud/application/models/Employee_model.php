<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Employee_model extends CI_Model {

    function __construct()
    {
         parent::__construct();
    }

    public function add($data)
    {
        $status = $this->db->insert('employee', $data);
        return   $this->db->insert_id();
          
    }

    // public function getUser()
    // {
    //     $query = $this->db->get('employee'); 
    
    //     return  $query->result_array();
          
    // }
    public function getUser($limit, $start) {
       
        $this->db->limit($limit, $start);
        $query = $this->db->get('employee');

        return $query->result_array();
    }
    

    public function getUserById($id)
    {

         $query = $this->db->get_where('employee', array('emp_id' => $id));
    
        return  $query->row_array();
          
    }

    public function get_user_count() {
        return $this->db->count_all('employee');
    }

 



    public function update($data)
    {
       // print_r($data);die;
        $post = array(
            'name' => $data['name'],
            'email' => $data['email'],
            'image' => $data['image'],
            'address' => $data['address'],
            'phone' => $data['phone']
           
        );
        // print_r($post);die;
        $this->db->where('emp_id', $data['emp_id']);
        $status = $this->db->update('employee', $post);
         
    
        return  $status;
          
    }

    public function delete($id)
    {
        $this->db->delete('employee', array('emp_id' => $id));
        return true;
    }

    public function multiDelete($ids)
    {
        if($ids){
            foreach($ids as $id){
                $this->db->delete('employee', array('emp_id' => $id));
            }

        }
      
        return true;
    }
}