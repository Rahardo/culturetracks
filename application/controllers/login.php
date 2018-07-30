<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

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
		$this->load->model('model_users');
		$this->load->model('model_admin');
	}
	public function index()
	{
			$this->load->view('login');

	}

	public function pegawai()
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$data = $this->model_users->check_credential($username,$password);
		//print_r($data);exit();	
		if($data == null){
			echo "<script>
			alert('Username / Password salah');
			window.location.href='".base_url('login')."';
			</script>";
			}
		else{
			//if match
			foreach($data as $d);
			$newdata = array(
			    'username'  => $d->username,
			    'role'  	=> $d->role,
			    'unit'		=> $d->kode_unit,
			    'direktorat'=> $d->kode_dir
			);
			$this->session->set_userdata($newdata);
			redirect('user');
			}
		}
}




/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */