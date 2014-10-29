<?php


	class Plot_model extends CI_Model {



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
   function get_coord()
   {
		$return=array();
		$this->db->select("latitude,longitude");
		$this->db->from("plot");
		$query=$this->db->get();
		if($query->num_rows()>0)
		{
			foreach($query->result() as $row)
			{
				array_push($return,$row);
			}
		}




		return $return;
		
		/*
		foreach ($query->result() as $row)
		{
			echo $row->section;
		}
		*/


   }
   function show_price($lp,$hp)
   {
 

	$this->db->select('plot_id,latitude,longitude,map_link');
	// $this->db->from('plot');
	$this->db->where('price >=',$lp);
	$this->db->where('price <=',$hp);
	//$this->db->where('order_datetime >','2012-10-01');

	$result = $this->db->get('plot');
	//echo $this->db->last_query();
	return $result->result();

   }
   
  
    function select_price($id)
   {
   		
		$this->db->where('plot_id',$id);
		$query = $this->db->get('plot');

		return $query->row();
		
		/*
		foreach ($query->result() as $row)
		{
			echo $row->section;
		}
		*/


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