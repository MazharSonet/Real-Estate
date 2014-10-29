<?php


	class Login_model extends CI_Model {



    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    

   function check_login_cred($email,$pass){
   	
   		$this->db->where('email',$email);
   		$this->db->where('password',$pass);
   		$query= $this->db->get('user');
   		
   		if($query->num_rows()>0){
   			return 1;
   		}
   		return 0;

   }

}
?>