<?php


	class Home_model extends CI_Model {



    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    

    function insert_employee($empID,$empSec,$name,$adr,$con,$mail,$desg)
    {
		$data=array(
			
			'emp_id'=>$empID,
			'emp_section'=>$empSec,
			'name'=>$name,
			'address'=>$adr,
			'contact'=>$con,
			'email'=>$mail,
			'designation'=>$desg
			);	
		if($empSec== 'MGR')	{
			$query= $this->db->insert('manager', $data);
			return $query;
		}
		else if($empSec== 'OFCR'){
			$query= $this->db->insert('pro', $data);
			return $query;
		}
        
		//echo $this->db->last_sql();
		
    }

    function insert_officer($empID,$empSec,$name,$adr,$con,$mail,$desg)
    {
		$data=array(
			
			'emp_id'=>$empID,
			'emp_section'=>$empSec,
			'name'=>$name,
			'address'=>$adr,
			'contact'=>$con,
			'email'=>$mail,
			'designation'=>$desg
			);		
        $query= $this->db->insert('pro', $data);
		//echo $this->db->last_sql();
		return $query;
    }

   function update_employee($section){
  
		$data=array('section'=>$section);	
		$this->db->where('id',1);
        $query= $this->db->update('employee', $data);
		
		return $query;
   }
   
   function select_employee($id)
   {
		$this->db->where('id',$id);
		$query = $this->db->get('employee');

		return $query->row();
		
		/*
		foreach ($query->result() as $row)
		{
			echo $row->section;
		}
		*/


   }
    function select_plot()
   {
		
		$query = $this->db->get('plot');

		return $query->result();
		
   }
    function select_price()
   {
   		
		//$this->db->where('plot_id',$id);
		//$query = $this->db->get('plot');

   		$query= $this->db->select('architect.name,plot.price')->from('architect')->where('architect.plot_id',$id)->join('architect.plot_id=plot.plot_id')->get();
		return $query->result();
		
		/*
		foreach ($query->result() as $row)
		{
			echo $row->section;
		}
		*/


   }
    function select_all_manager()
   {
		
		$query = $this->db->get('manager');

		return $query->result();
		
   }
   function select_all_officer()
   {
		
		$query2 = $this->db->get('pro');

		return $query2->result();
		
   }

}
?>