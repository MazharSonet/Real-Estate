<?php
 class HomeController extends CI_Controller{
     public function index() {
         $this->home();
         
 	}

	public function logout(){

		$this->session->set_userdata('logged_in', FALSE);
		redirect('HomeController/home');
	}
 	public function login(){

 		//if($this->input->post())
 		{

	   		$email = $this->input->post('inputEmail3');
	   		$pass=$this->input->post('inputPassword3');
	   		$this->load->model('login_model');
	   		$valid = $this->login_model->check_login_cred($email,$pass);
	   		 			
	   			
			$this->session->set_userdata( 'logged_in', TRUE);
	   		
	   		redirect('HomeController/home');

   		}
 	}

 	public function plot()
	{
		$this->load->library('googlemaps');

		// load model

		$this->load->model('plot_model');
		//$this->load->helper(array('form'));

		$config['apikey'] = 'ABQIBAAADiypSsSGMm4zOSm7T0Nf1BT2yXp_ZAY8_ufC3CFXhHIE1NvwkxTegq9k46u7yla9Jc-SjozzP0J8ig';
		if(!$this->input->post()){
			$config['center'] = '23.72671977, 90.38817974';
		}
		$config['zoom'] = 'auto';
		//$config['directionsDraggable']='TRUE';
		$this->googlemaps->initialize($config);

		//$loc=$this->plot_model->get_coord();
		$lp= $this->input->post('l_price');
		$hp= $this->input->post('h_price');

		$loc=$this->plot_model->show_price((int)$lp,(int)$hp);
		

		foreach($loc as $coord){
			$marker = array();
			$marker['position'] = $coord->latitude.','.$coord->longitude;
//$marker['infowindow_content'] ="<a href="portfolio">project available</a>";

			$marker['infowindow_content'] ='<a href=portfolio?id='.$coord->plot_id.'>project available</a>';
			$marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=A|9999FF|000000';
			$this->googlemaps->add_marker($marker);
		}
		//$loc=$this->plot_model->show_price();


		$data['map']=$this->googlemaps->create_map();
		$this->load->view('plot',$data);
	}
	 
	public function insert_mgr(){
		$this->load->view('employee_insert.php');
		if($this->input->post()){
		$empID= $this->input->post('emp_id');
		$empSec= $this->input->post('emp_section');
        $name= $this->input->post('name');
        $numberOfNumbersFound = preg_match("/[0-9]+/", $name);       
		$adr= $this->input->post('address');
		$con= $this->input->post('contact');
		$mail= $this->input->post('email');
		$desg= $this->input->post('designation');
		$this->load->model('home_model');
		 if($numberOfNumbersFound == 0 ){
		 	$query= $this->home_model->insert_employee($empID,$empSec,$name,$adr,$con,$mail,$desg);
        }
		
		}
		
	}
	public function insert_pro(){
		$this->load->view('employee_insert.php');
		if($this->input->post()){
		$empID= $this->input->post('emp_id');
		$empSec= $this->input->post('emp_section');
        $name= $this->input->post('name');
		$adr= $this->input->post('address');
		$con= $this->input->post('contact');
		$mail= $this->input->post('email');
		$desg= $this->input->post('designation');
		$this->load->model('home_model');
		$query= $this->home_model->insert_officer($empID,$empSec,$name,$adr,$con,$mail,$desg);
		}
		
	}


	
	public function update_emp(){
		$this->load->model('home_model');
		$query= $this->home_model->update_employee("C1");
		echo $query;
	}
	
	public function select_emp(){
		$this->load->model('home_model');
		$query= $this->home_model->select_employee(1);
		$this->load->view('employee.php',$query);
	}
	
	
	public function home()
	{
		//var_dump($this->session->userdata);
		$this->load->view('home.php');
	}
	public function plot_view()
	{
		$this->load->model('home_model');
		$query["details"]= $this->home_model->select_plot();
		$this->load->view('plot_view.php',$query);
	   // $query["price_details"]= $this->plot_model->select_price();
		
		//$this->load->view('portfolio.php',$query);
	}
	
	public function employee(){
		$this->load->model('home_model');
		$query["details"]= $this->home_model->select_all_manager();
		$query["ofc_details"]= $this->home_model->select_all_officer();
		$this->load->view('all_employee.php',$query);
		
	}

	
	
	public function portfolio(){
		$port_id=$this->input->get('id');

		$this->load->model('portfolio_model');
		$this->load->model('plot_model');
		$query["price_details"]= $this->plot_model->select_price($port_id);
		$query["places"]= $this->portfolio_model->select_plot_archi($port_id);
		$query["all_plots"]=$this->portfolio_model->get_all_portfoilo();
		//$query["all_plots"]=$this->portfolio_model->get_all_portfoilo();

		$this->load->view('portfolio.php',$query); 
        $this->load->view('related_plot_partial');        
        $this->load->view('footer');
       
	}
	/*
	public function portfolio2(){
		$this->load->model('portfolio_model');
		$this->load->model('plot_model');
		$query["price_details"]= $this->plot_model->select_price("dhanmondi_02");
		$query["places"]= $this->portfolio_model->select_plot_archi("dhanmondi_02");
		
		$this->load->view('portfolio2.php',$query);
	}
	public function portfolio3(){
		$this->load->model('portfolio_model');
		$this->load->model('plot_model');
		$query["price_details"]= $this->plot_model->select_price("basabo_03");
		$query["places"]= $this->portfolio_model->select_plot_archi("basabo_03");
		
		$this->load->view('portfolio3.php',$query);
	}

	public function portfolio4(){
		$this->load->model('portfolio_model');
		$this->load->model('plot_model');
		$query["price_details"]= $this->plot_model->select_price("bonosree_04");
		$query["places"]= $this->portfolio_model->select_plot_archi("bonosree_04");
		
		$this->load->view('portfolio4.php',$query);
	}
	public function portfolio5(){
		$this->load->model('portfolio_model');
		$this->load->model('plot_model');
		$query["price_details"]= $this->plot_model->select_price("agargaon_05");
		$query["places"]= $this->portfolio_model->select_plot_archi("agargaon_05");
		
		$this->load->view('portfolio5.php',$query);
	}
	*/
	public function about(){
		$this->load->view('about');
	}
	public function employeeLogin(){
		$this->load->view('employeeLogin.php');
	}
 }
?>


