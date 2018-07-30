<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html

	 */

	public function __construct()
	{
        parent::__construct();
        if(!$this->session->userdata('username') || $this->session->userdata('role')!=1 ){
				$this->session->set_flashdata('error','Maaf anda belum log in');	
				redirect('login');			
			}
        date_default_timezone_set('Asia/Jakarta');
        $this->load->helper('text');
        $this->load->helper('form');
        $this->load->library('image_lib');
        $this->load->library('form_validation');
		$this->load->model('model_users');
		$this->load->model('model_users1');
		$this->load->model('model_admin');
		$this->load->model('model_chart');
	}
	public function index()
	{
		$data['program'] = $this->model_users->program($this->session->userdata('username'));
		//print_r($data);exit();	
		$this->load->view('user/index_user',$data);
	}

	public function isi_data($namaprogram)
	{
		$username = $this->session->userdata('username');
		$this->form_validation->set_rules('target');
		$data['program'] = $this->model_users->program($this->session->userdata('username'));
		
		if ($this->form_validation->run() == FALSE){
			$this->load->view('user/index_user',$data);
		}
		else {
			date_default_timezone_set("Asia/Jakarta");
			$mydate=getdate(date("U"));
			$jam = date('H:i:s a');
			$date = "$mydate[month] $mydate[mday], $mydate[year] $jam";
			$data_program = array(
								'input_user'			=> $this->session->userdata('username'),
								'input_detail'			=> $this->input->post('program'),
								'input_target'			=> $this->input->post('target'),
								'input_satuan'			=> $this->input->post('satuan'),
								'last_modified'			=> $jam

						);
			//print_r($data_program);exit();
			$this->model_users->isi_data($data_program);
			redirect('user/index'); 
			}
	}

	public function evaluasi_data($id)
	{
		$username = $this->session->userdata('username');
		$this->form_validation->set_rules('capaian');
		$data['programunit'] = $this->model_users->findprogram($this->session->userdata('username'),$id);
		$data['program'] = $this->model_users->program($this->session->userdata('username'));
		$data['daftarevaluasi'] = $this->model_users->daftarevaluasi($this->session->userdata('username'),$data['programunit']->cc_detail);
		$data['listevaluasi'] = $this->model_users->listevaluasi($this->session->userdata('username'),$data['programunit']->cc_detail);
		//print_r($data['listevaluasi']);exit();
		if ($this->form_validation->run() == FALSE){
			$this->load->view('user/evaluasi_view',$data);
		}
		else {
			date_default_timezone_set('Asia/Jakarta');
			$mydate=getdate(date("U"));
			$jam = date('H:i:s a');
			$data = "$mydate[month] $mydate[mday], $mydate[year] $jam";
			$month = date('m');
			$uploadOk = 1;
			$username = $_POST['user'];
			$program=$_POST['program'];
			$satuan=$_POST['satuan'];
			$target=$_POST['target'];
			$capaian=$_POST['capaian'];
			$metodologi=$_POST['metodologi'];
			$r_positif=$_POST['r_positif'];
			$r_negatif=$_POST['r_negatif'];
			$capaian_=round($capaian/$target*100);
			if ($capaian>=$target) {
				$gap=0;
			} elseif ($capaian<$target) {
				
				$gap=100-$capaian_;
			}

			if (isset($_FILES['file']['name'])&&!empty($_FILES['file']['name'])) {
			$file = rand(1000,100000)."-".$_FILES['file']['name'];
			$file_loc = $_FILES['file']['tmp_name'];
			$file_size = $_FILES['file']['size'];
				// Check file size
			if ($file_size > 4194304) {
				echo "Sorry, your file is too large.";
				$_SESSION['error2']=1;
				$uploadOk = 0;
			}
			$folder="uploads/";
				// new file size in KB
			$new_size = $file_size/1024;  
				// new file size in KB

				// make file name in lower case
			$new_file_name = strtolower($file);
				// make file name in lower case

			$final_file=str_replace(' ','-',$new_file_name);
				// Allow certain file formats

			$target_file = $folder . basename($_FILES["file"]["name"]);
			$file_type = pathinfo($target_file,PATHINFO_EXTENSION);;
				// Allow certain file formats
			if($file_type != "rar" && $file_type != "zip" ) {

				echo "Sorry, only rar and zip files are allowed.";
				$_SESSION['error']=1;
				$_SESSION['tipe']=$file_type;

				$uploadOk = 0;
			}
			if ($uploadOk == 0) {

				// if everything is ok, try to upload file
			} else {
				move_uploaded_file($file_loc,$folder.$final_file);
				$data_program = array(
								'input_user_c'			=> $this->session->userdata('username'),
								'input_detail_c'		=> $this->input->post('program'),
								'input_realisasi'		=> $capaian,
								'input_realisasi_'		=> $capaian_,
								'input_metodologi'		=> $metodologi,
								'input_reinforcement_positif'		=> $r_positif,
								'input_reinforcement_negatif'		=> $r_negatif,
								'input_attach'			=> $final_file,
								'input_gap'				=> $gap,
								'input_bulan'			=> $month,
								'last_modified_c'		=> $data

						);
				//print_r($data_program);exit();
				$this->model_users->evaluasi_data($data_program);
				redirect('user/index'); 
			}
		}
			
			}
	}
	
	public function edit_program($id){
		//sebelum mengeksekusi query
		$this->form_validation->set_rules('desc');
		
		if ($this->form_validation->run() == FALSE){
			$this->load->view('admin/tambah_program');
		}
		else {
			$data_program = array(
								'cc_detail'			=> $this->input->post('program'),
								'cc_desc'			=> $this->input->post('deskripsi'),
								'start_month'		=> $this->input->post('waktu_pelaksanaan'),
								'end_month'			=> $this->input->post('batas_pelaksanaan'),
								'status'			=> $this->input->post('status')

						);
			//print_r($data_program);exit();
			$this->model_admin->update_program($id,$data_program);
			redirect('admin/program'); 
			}
	}
	
	function history()
	{	
		$month = date('m');
		//print_r($month);
		$user = $this->session->userdata('username');
		$data['jumlahprogram']	= $this->model_users->jumlah_program_jalan();
		$data['nilairealisasi']	= $this->model_users->realisasi_program_jalan($user,$month);
		$data['program'] = $this->model_users->program_unit($this->session->userdata('username'));
		$data['programdefault'] = $this->model_users->program_jalan();
		$data['max'] = $this->model_users->max_bulan();
		$data['progresunit'] = $this->model_users->progresunit($user);
	/*	if(!$data['nilairealisasi']) { $data['rerata'] =0; } else {
		//$data['rerata'] = $data['nilairealisasi'][0]->Total/$data['jumlahprogram']; }
		//print_r($data['program']);exit();*/
		$data['rerata'] = $data['nilairealisasi'][0]->Total;
		$this->load->view('user/history_view',$data);
	}
	function feedback($id)
	{	
		$month = date('m');
		$data["id_pesan"]=$id;
		//print_r($month);
		$user = $this->session->userdata('username');
		$data['jumlahprogram']	= $this->model_users->jumlah_program_jalan();
		$data['nilairealisasi']	= $this->model_users->realisasi_program_jalan($user,$month);
		$data['program'] = $this->model_users->program_unit($this->session->userdata('username'));
		$data['programdefault'] = $this->model_users->program_jalan();
		$data['max'] = $this->model_users->max_bulan();
		if(!$data['nilairealisasi']) { $data['rerata'] =0; } else {
		$data['rerata'] = $data['nilairealisasi'][0]->Total/$data['jumlahprogram']; }
		//print_r($data['program']);exit();


		$this->load->view('user/feedback',$data);
	}
	
	function assessment()
	{	
		$mine = $this->session->userdata('unit');
		$data['pertanyaan']	= $this->model_users->daftar($mine);
		$data['setting']	= $this->model_users->skala();
             /*foreach ($data['pertanyaan'] as $a) {
                 for($j=0;$j<10;$j++) {
                 	$a='$q'.$j;
                 print_r($a);
             }
             }
                  */
		$this->load->view('user/assessment_view',$data);
	}

	function warrior()
	{
		$data['warrior']=$this->model_users->warrior($this->session->userdata('unit'));
		if ($data['warrior']) $data['status']=1;
		else $data['status']=0;
		//print_r($data);exit();
		$this->load->view('user/warrior',$data);
	}

	function addwarrior()
	{
		$username = $this->session->userdata('username');
		$this->form_validation->set_rules('nopeg');
		
		if ($this->form_validation->run() == FALSE){
			$this->load->view('user/warrior');
		}
		else {
			$data_warrior = array(
								'nopeg'			=> $this->input->post('nopeg'),
								'unit'			=> $this->session->userdata('unit'),
								'direktorat'	=> $this->session->userdata('direktorat'),
								'status_aktif'	=> $this->input->post('status_aktif'),
								'email'			=> $this->input->post('email')

						);
			//print_r($data_warrior);exit();
			$this->model_users->isi_warrior($data_warrior);
			redirect('user/warrior'); 
			}
	}

	function editwarrior($nopeg)
	{
		$username = $this->session->userdata('username');
		$this->form_validation->set_rules('nopeg');
		
		if ($this->form_validation->run() == FALSE){
			$this->load->view('user/warrior');
		}
		else {
			$data_warrior = array(
								'nopeg'			=> $this->input->post('nopeg'),
								'unit'			=> $this->session->userdata('unit'),
								'direktorat'	=> $this->session->userdata('direktorat'),
								'status_aktif'	=> $this->input->post('status_aktif'),
								'email'			=> $this->input->post('email')

						);
			//print_r($data_warrior);exit();
			$this->model_users->edit_warrior($nopeg,$data_warrior);
			redirect('user/warrior'); 
			}
	}

	function timbudaya()
	{
		$data['warrior']=$this->model_users->timbudaya($this->session->userdata('unit'));
		if ($data['warrior']) $data['status']=1;
		else $data['status']=0;
		//print_r($data);exit();
		$this->load->view('user/implementasi_budaya',$data);
	}

	function addtimbudaya()
	{
		$username = $this->session->userdata('username');
		$this->form_validation->set_rules('nopeg');
		
		if ($this->form_validation->run() == FALSE){
			$this->load->view('user/timbudaya');
		}
		else {
			$data_warrior = array(
								'nopeg'			=> $this->input->post('nopeg'),
								'posisi'		=> $this->input->post('posisi'),
								'unit'			=> $this->session->userdata('unit'),
								'direktorat'	=> $this->session->userdata('direktorat'),
								'status_aktif'	=> $this->input->post('status_aktif'),
								'email'			=> $this->input->post('email')

						);
			//print_r($data_warrior);exit();
			$this->model_users->isi_timbudaya($data_warrior);
			redirect('user/timbudaya'); 
			}
	}

	function edittimbudaya($nopeg)
	{
		$username = $this->session->userdata('username');
		$this->form_validation->set_rules('nopeg');
		
		if ($this->form_validation->run() == FALSE){
			$this->load->view('user/timbudaya');
		}
		else {
			$data_warrior = array(
								'nopeg'			=> $this->input->post('nopeg'),
								'posisi'		=> $this->input->post('posisi'),
								'unit'			=> $this->session->userdata('unit'),
								'direktorat'	=> $this->session->userdata('direktorat'),
								'status_aktif'	=> $this->input->post('status_aktif'),
								'email'			=> $this->input->post('email')

						);
			//print_r($data_warrior);exit();
			$this->model_users->edit_timbudaya($nopeg,$data_warrior);
			redirect('user/timbudaya'); 
			}
	}
	public function delete($nopeg){
		$this->model_users->delete_timbudaya($nopeg);
		redirect('user/timbudaya');
	}	
	function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */