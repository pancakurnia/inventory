<?php defined('BASEPATH') OR exit('No direct script access allowed');

class C_dashboard extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->library('template','database');
		$this->load->model('m_dashboard');
	}

	public function index()
	{
		$data['title'] = 'Material';
		$data['menu'] = $this->m_dashboard->getDataStore()->result();

		$this->template->display('v_dashboard',$data);			
	}

	public function addMaterial()
	{
		$kdmaterial  = $this->input->post('kdmat');
		$nammaterial = $this->input->post('namamat');
		$desmaterial = $this->input->post('desmat');
		$tgldate  = $this->input->post('tglmat');
		$update = $this->input->post('updmat');

		$data = array(
					  'material_code' => $kdmaterial,
					  'material_name' => $nammaterial,
					  'material_desc' => $desmaterial,
					  'material_created_date' => $tgldate,
					  'material_updated_date' => $update
						);

		$query = $this->m_dashboard->addInventory($data);
			if ($this->db->affected_rows() > 0){
				$this->session->set_flashdata('mess_sukses', '<div class="alert alert-success fade in">
    								<strong>Success!</strong> Data Berhasil di input.
    								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    								<span aria-hidden="true">&times;</span>
  									</button>
							   </div>');
				redirect('c_dashboard');	
			}
			else
			{
			echo "maaf";
			}	
	}
}

	//public function getData()
	//{
	//$data['menu'] = $this->m_dashboard->getDataStore()->result_array();
	//$this->load->view('v_dashboard',$data);




/* End of file c_dashboard.php */
/* L
ocation: ./application/controllers/c_dashboard.php */