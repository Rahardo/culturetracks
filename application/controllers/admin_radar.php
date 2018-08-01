<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin_radar extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('model_users2');
	}
	public function index()
	{		
		//print_r($data);
		$data['total_label']	= $this->model_users2->total_label();
		$data['label'] 		= $this->model_users2->tampil_data()->result();
		$data['list_label'] = $this->model_users2->list_label();
		$data['daftarunit'] = $this->model_users2->daftarunit();
		$data['dirJKTDC']	= $this->model_users2->dirJKTDC();
		$data['dirJKTDE']	= $this->model_users2->dirJKTDE();
		$data['dirJKTDF']	= $this->model_users2->dirJKTDF();
		$data['dirJKTDG']	= $this->model_users2->dirJKTDG();
		$data['unitSHAAM']	= $this->model_users2->unitSHAAM();
		$data['unitSINAM']	= $this->model_users2->unitSINAM();
		$data['unitTYOAM']	= $this->model_users2->unitTYOAM();
		$data['unitJKTAM']	= $this->model_users2->unitJKTAM();
		$data['unitMESAM']	= $this->model_users2->unitMESAM();
		$data['unitSUBAM']	= $this->model_users2->unitSUBAM();
		$data['unitUPGAM']	= $this->model_users2->unitUPGAM();
		$data['unitSYDAM']	= $this->model_users2->unitSYDAM();
		$data['unitLON_AMS'] = $this->model_users2->unitLON_AMS();
		$data['unitJED_MED'] = $this->model_users2->unitJED_MED();
		$data['dirJKTDI']	= $this->model_users2->dirJKTDI();
		$data['dirJKTDN']	= $this->model_users2->dirJKTDN();
		$data['dirJKTDO']	= $this->model_users2->dirJKTDO();
		$data['dirJKTDR']	= $this->model_users2->dirJKTDR();
		$data['dirJKTDZ']	= $this->model_users2->dirJKTDZ();
		$data['avgJKTDC']	= $this->model_users2->avgJKTDC();
		$data['avgJKTDE']	= $this->model_users2->avgJKTDE();
		$data['avgJKTDF']	= $this->model_users2->avgJKTDF();
		$data['avgJKTDG']	= $this->model_users2->avgJKTDG();
		$data['avgJKTDI']	= $this->model_users2->avgJKTDI();
		$data['avgJKTDN']	= $this->model_users2->avgJKTDN();
		$data['avgJKTDO']	= $this->model_users2->avgJKTDO();
		$data['avgJKTDR']	= $this->model_users2->avgJKTDR();
		$data['avgJKTDZ']	= $this->model_users2->avgJKTDZ();
		$data['avgJKTAM']	= $this->model_users2->avgJKTAM();
		$data['avgMESAM']	= $this->model_users2->avgMESAM();
		$data['avgSUBAM']	= $this->model_users2->avgSUBAM();
		$data['avgUPGAM']	= $this->model_users2->avgUPGAM();
		$data['avgSHAAM']	= $this->model_users2->avgSHAAM();
		$data['avgSINAM']	= $this->model_users2->avgSINAM();
		$data['avgTYOAM']	= $this->model_users2->avgTYOAM();
		$data['avgSYDAM']	= $this->model_users2->avgSYDAM();
		$data['avgLON_AMS'] = $this->model_users2->avgLON_AMS();
		$data['avgJED_MED'] = $this->model_users2->avgJED_MED();
		$this->load->view('admin/view_admin',$data);
	}

	public function tambah_label()
	{		
		$label = $this->input->post('label');
 	
		$data = array('label' => $label);
		$this->model_users2->input_data($data,'label');
		redirect('admin');
	}

	function edit($id)
	{
		//$id = $this->input->post('id');
		$data_label= array(
			'label' => $this->input->post('label'), 
		);
		$this->model_users2->edit_data($data_label,$id);
		redirect('admin');
	}

	function update()
	{
		$id = $this->input->post('id');
		$label = $this->input->post('label');
	 
		$data = array('label' => $label); 
		$where = array('id' => $id);
	 
		$this->model_users2->update_data($where,$data,'label');
		redirect('admin');
	}

	public function delete($id){
		$this->model_users2->delete($id);
		redirect('admin');
	}
 		
	function logout()
	{
		$this->session->sess_destroy();
		redirect('admin_login');
	}
}