<?php defined('BASEPATH') OR exit('No direct script access allowed');

class C_laporan extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->library('template','database');
	}

	public function index()
	{
		$data['title'] = 'Laporan Board';
		$this->template->display('v_laporan',$data);	
	}

}
/* End of file C_laporan.php */
/* Location: ./application/controllers/C_laporan.php */