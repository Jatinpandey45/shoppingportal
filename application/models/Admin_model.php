<?php 

class Admin_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        
    }

    /**
     * function : getUser
     * @param : email
     * @param : password
     */

     public function getUser($userEmail,$password) 
     {  
        
         $this->db->select('*')
                            
                            ->from('admin')

                             ->where('email',$userEmail)

                            ->where('password',$password);

        $query = $this->db->get();
       
        return $query->row_array();
         
     }




}