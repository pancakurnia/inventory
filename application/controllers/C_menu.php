<?php defined('BASEPATH') OR exit('No direct script access allowed');

class C_menu extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->library('template','database');
	}

	public function index()
	{
		$data['title'] = 'Menu Board';
		$this->template->display('v_menu',$data);	
	}

}

/* End of file C_menu.php */
/* Location: ./application/controllers/C_menu.php */
?>