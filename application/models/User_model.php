<?php 

class User_model extends CI_Model {

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

     public function getUser($userEmail,$password,$type) 
     {  
        
         $this->db->select('auth_user.id,auth_user.email,auth_user.username,
                            auth_user.first_name,auth_user.last_name')
                            
                            ->from('auth_user')

                            ->join('vg_user_profile','vg_user_profile.user_id = auth_user.id','INNER')

                            ->where('auth_user.email',$userEmail)

                            ->where('company_name',$type)

                            ->where('vg_user_profile.password',$password);

        $query = $this->db->get();
       
        return $query->row_array();
         
     }




}