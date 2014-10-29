<?php


	class Portfolio_model extends CI_Model {



    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    

    function insert_employee($section)
    {
		$data=array('id'=>null, 'section'=>$section);		
        $query= $this->db->insert('employee', $data);
		//echo $this->db->last_sql();
		return $query;
    }

   function update_employee($section){
  
		$data=array('section'=>$section);	
		$this->db->where('id',1);
        $query= $this->db->update('employee', $data);
		
		return $query;
   }
   
   function select_archi()
   {
		//$this->db->where('plot_id',$id);
		$query = $this->db->get('architect');

		return $query->result();
		
		/*
		foreach ($query->result() as $row)
		{
			echo $row->section;
		}
		*/


   }
  
    function select_price()
   {
   		
		//$this->db->where('plot_id',$id);
		$query= $this->db->select('architect.name,plot.price')->from('architect')->where('architect.plot_id',$id)->join('architect.plot_id=plot.plot_id')->get();
		return $query->result();
		/*
		foreach ($query->result() as $row)
		{
			echo $row->section;
		}
		*/


   }

   function get_all_portfoilo(){
   			$this->db->select("*");
   			$query= $this->db->get('plot');
   			return $query->result();
   }

    function select_plot_archi($id)
   {
   		
		$this->db->where('plot_id',$id);
		$query = $this->db->get('architect');

		return $query->row();
		
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