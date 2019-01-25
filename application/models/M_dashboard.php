<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function getDataStore($id=NULL)
	{
		$qw = $this->db->query('SELECT material_id, material_code, material_name, material_desc, 
		                        material_created_date, material_created_by, material_updated_date FROM tbl_Material');
		return $qw;
	}

	public function getDetailMat($id)
	{
		$query = $this->db->get_where('tbl_Material', ['material_id' => $id]);
		return $query->row();
	}

	public function AddInventory($data)
	{
		$this->db->insert('tbl_Material', $data);
	}

}

/* End of file m_dashboard.php */
/* Location: ./application/models/m_dashboard.php */