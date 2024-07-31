<?php
	class Cadmin extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('mvalidasi');
			$this->mvalidasi->validasi();
		}
		
		function formadmin()
		{
			$this->load->view('halamanutama');	
		}
		
	}
?>