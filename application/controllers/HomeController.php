<?php
 class HomeController extends CI_Controller{
     public function index() {
         $this->home();
 	}
	 
	public function home()
	{
		$this->load->view('home.php');
	}
	public function employee(){
		$this->load->view('employee.php');
	}
	public function portfolio(){
		$this->load->view('portfolio.php');
	}
	
 }
?>


