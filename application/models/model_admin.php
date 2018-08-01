<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model_admin extends CI_Model {
	
	public function check_credential($username,$password){

		$query = $this->db->get_where('user', array('username' => $username,'password' => $password));
		return $query->result();
	}
	public function isi_evaluasi($data_pesan){
		//Quert insert into
		$this->db->insert('cc_program_feedback', $data_pesan);
	}

	public function program() {
		//Query mencari record berdasarkan ID
		$hasil = $this->db->query("SELECT * FROM cc_program order by status ASC");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}
		else {
			return array();
		}
	}

	public function tambah_program($data_penilaian2){
		//Quert insert into
		$awal = strtotime($data_penilaian2['start_month']);
		$akhir = strtotime($data_penilaian2['end_month']);
		$time=round(($akhir-$awal)/3600/30/24);
		if(!$data_penilaian2['status']) {$data_penilaian2['status']='Disable';}
		//print_r($data_penilaian2['status']);exit();
		$insertData = array($data_penilaian2['cc_detail'],$data_penilaian2['cc_desc'],$time,$data_penilaian2['status'],$data_penilaian2['start_month'],$data_penilaian2['end_month']);
		//print_r($insertData);exit();
		$this->db->query("insert into cc_program (cc_detail,cc_desc,cc_time,status,start_month,end_month) values (?,?,?,?,?,?)", $insertData);
/*		$this->db->insert('tb_penilaian2', $data_penilaian2,"",$rata);*/
	}

	public function update_program($id,$data_penilaian2){
		//Quert insert into
		$awal = strtotime($data_penilaian2['start_month']);
		$akhir = strtotime($data_penilaian2['end_month']);
		$time=round(($akhir-$awal)/3600/30/24);
		//print_r($time);exit();
		$insertData = array($data_penilaian2['cc_detail'],$data_penilaian2['cc_desc'],$time,$data_penilaian2['status'],$data_penilaian2['start_month'],$data_penilaian2['end_month']);
		//print_r($insertData);exit();
		$this->db->query("update cc_program set cc_detail=?,cc_desc=?,cc_time=?,status=?,start_month=?,end_month=? where cc_id=$id", $insertData);
/*		$this->db->insert('tb_penilaian2', $data_penilaian2,"",$rata);*/
	}

	public function delete_program($id) {
		//Query delete ... where id=...
		$this->db->where('cc_id', $id)
				 ->delete('cc_program');
	}

	public function listuser() {
		//Query mencari record berdasarkan ID
		$hasil = $this->db->query("SELECT iduser,username,password FROM user where role=1");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}
		else {
			return array();
		}
	}
	public function tambah_user($data_user){
		//Quert insert into
		$this->db->insert('user', $data_user);
	}
	public function update_user($id,$data_penilaian2){
		//Quert insert into
		
		//print_r($time);exit();
		$insertData = array($data_penilaian2['username'],$data_penilaian2['password']);
		//print_r($insertData);exit();
		$this->db->query("update user set username=?,password=? where iduser=$id", $insertData);
/*		$this->db->insert('tb_penilaian2', $data_penilaian2,"",$rata);*/
	}
	public function delete_user($id) {
		//Query delete ... where id=...
		$this->db->where('iduser', $id)
				 ->delete('user');
	}

	public function listjakarta1() {
		//Query mencari record berdasarkan ID
		$hasil = $this->db->query("select * from (SELECT * FROM ca_performance_upload JOIN unit on ca_performance_upload.unit_name=unit.kode_unit where ca_performance_upload.kode='5')a LEFT JOIN cc_program_input b where a.kode_unit=b.input_user");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}
		else {
			return array();
		}
	}
	public function listjakarta() {
		//Query mencari record berdasarkan ID
		$hasil = $this->db->query("SELECT * FROM ca_performance_upload a LEFT JOIN unit b ON a.unit_name=b.kode_unit where kode=5");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}
		else {
			return array();
		}
	}

	public function listkalimantan() {
		//Query mencari record berdasarkan ID
		$hasil = $this->db->query("SELECT * FROM ca_performance_upload a LEFT JOIN unit b ON a.unit_name=b.kode_unit where kode=4");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}
		else {
			return array();
		}
	}
	public function listho() {
		//Query mencari record berdasarkan ID
		$hasil = $this->db->query("SELECT * FROM ca_performance_upload a LEFT JOIN unit b ON a.unit_name=b.kode_unit where kode=1");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}
		else {
			return array();
		}
	}
	public function listsumatra() {
		//Query mencari record berdasarkan ID
		$hasil = $this->db->query("SELECT * FROM ca_performance_upload a LEFT JOIN unit b ON a.unit_name=b.kode_unit where kode=2");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}
		else {
			return array();
		}
	}
	public function listjawa() {
		//Query mencari record berdasarkan ID
		$hasil = $this->db->query("SELECT * FROM ca_performance_upload a LEFT JOIN unit b ON a.unit_name=b.kode_unit where kode=3");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}
		else {
			return array();
		}
	}
	
    public function simpanwarrior($rowData){
            $data = array(
            	'nopeg' => $rowData['0'][0],
                'unit' => $rowData['0'][1],
                'direktorat' => $rowData['0'][2],
                'status_aktif' => $rowData['0'][3],
                'email' => $rowData['0'][4]
            );
		//Query insert into
		$this->db->replace('baru_warrior', $data);
	}

	public function simpantibwarrior($rowData){
            $data = array(
            	'nopeg' => $rowData['0'][0],
                'posisi' => $rowData['0'][1],
                'unit' => $rowData['0'][2],
                'direktorat' => $rowData['0'][3],
                'status_aktif' => $rowData['0'][4],
                'email' => $rowData['0'][5]
            );
		//Query insert into
		$this->db->replace('baru_tim_implementasi_budaya', $data);
	}

	public function progresHO(){
		$hasil = $this->db->query("SELECT b.kode_dir,CASE WHEN AVG(a.input_realisasi_) IS NULL THEN 0 ELSE AVG(a.input_realisasi_) END AS progress FROM (SELECT * FROM `cc_program_eval` a JOIN `cc_program` b on a.input_detail_c=b.cc_detail WHERE b.status='Default')a RIGHT JOIN unit b on a.input_user_c = b.kode_unit where b.kode_lokasi='HO' GROUP BY b.kode_dir ORDER BY kode_dir DESC");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}
		else {
			return array();
		}
	}
	public function progresBO(){
		$hasil = $this->db->query("SELECT b.kode_unit,b.kode_dir,CASE WHEN AVG(a.input_realisasi_) IS NULL THEN 0 ELSE AVG(a.input_realisasi_) END AS progress FROM (SELECT * FROM `cc_program_eval` a JOIN `cc_program` b on a.input_detail_c=b.cc_detail WHERE b.status='Default')a RIGHT JOIN unit b on a.input_user_c = b.kode_unit WHERE b.kode_lokasi='BO' GROUP BY b.kode_unit ORDER BY kode_unit DESC");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}
		else {
			return array();
		}
	}
	public function progresVPAREA(){
		$hasil = $this->db->query("SELECT kode_lokasi as kode_unit,AVG(progress) as progress FROM (SELECT b.kode_unit,b.kode_dir,b.kode_lokasi,CASE WHEN AVG(a.input_realisasi_) IS NULL THEN 0 ELSE AVG(a.input_realisasi_) END AS progress FROM (SELECT * FROM `cc_program_eval` a JOIN `cc_program` b on a.input_detail_c=b.cc_detail WHERE b.status='Default')a RIGHT JOIN unit b on a.input_user_c = b.kode_unit WHERE b.kode_lokasi!='HO' GROUP BY b.kode_unit)b GROUP BY kode_lokasi");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}
		else {
			return array();
		}
	}
	public function progrescorporate(){
		$hasil = $this->db->query("SELECT 'Corporate',AVG(a.input_realisasi_) AS progress FROM `cc_program_eval` a JOIN `cc_program` b on a.input_detail_c=b.cc_detail WHERE b.status='Default'");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}
		else {
			return array();
		}
	}

	public function progresHO1(){
		$hasil = $this->db->query("SELECT b.kode_dir,CASE WHEN AVG(a.input_realisasi_) IS NULL THEN 0 ELSE AVG(a.input_realisasi_) END AS progress FROM (SELECT * FROM `cc_program_eval` a JOIN `cc_program` b on a.input_detail_c=b.cc_detail WHERE b.status='Default')a RIGHT JOIN unit b on a.input_user_c = b.kode_unit where b.kode_lokasi='HO' GROUP BY b.kode_dir ORDER BY kode_dir DESC");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}
		else {
			return array();
		}
	}

	public function progresHead(){
		$hasil = $this->db->query("SELECT 'HeadOffice',AVG(a.input_realisasi_) AS progress FROM (SELECT * FROM `cc_program_eval` a JOIN `cc_program` b on a.input_detail_c=b.cc_detail WHERE b.status='Default')a RIGHT JOIN unit b on a.input_user_c = b.kode_unit where b.kode_lokasi='HO' GROUP BY b.kode_dir ORDER BY kode_dir DESC");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}
		else {
			return array();
		}
	}


	public function progresBranch(){
		$hasil = $this->db->query("SELECT 'BranchOffice',AVG(a.input_realisasi_) AS progress FROM (SELECT * FROM `cc_program_eval` a JOIN `cc_program` b on a.input_detail_c=b.cc_detail WHERE b.status='Default')a RIGHT JOIN unit b on a.input_user_c = b.kode_unit where b.kode_lokasi!='HO' GROUP BY b.kode_dir ORDER BY kode_dir DESC");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}
		else {
			return array();
		}
	}


	public function leaderHead(){
		$havewarrior = $this->db->query("SELECT * FROM baru_warrior a RIGHT JOIN unit b on a.unit = b.kode_unit where b.kode_lokasi='HO' GROUP BY b.kode_dir ORDER BY kode_dir DESC");
		if($havewarrior->num_rows() > 0){
			return $havewarrior->result();
		}
		else {
			return array();
		}
	}


	public function warrior(){
		$hasil = $this->db->query("SELECT * FROM baru_warrior");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}
		else {
			return array();
		}
	}

	public function tambah_warrior($data_warrior){
		//Quert insert into
		$this->db->insert('baru_warrior', $data_warrior);
	}

	public function update_warrior($id,$data_warrior){
		$insertData = array($data_warrior['nopeg'],$data_warrior['unit'],$data_warrior['direktorat'],$data_warrior['status_aktif'],$data_warrior['email']);
		$this->db->query("update baru_warrior set nopeg=?,unit=?,direktorat=?,status_aktif=?,email=? where nopeg=$id", $insertData);
	}

	public function delete_warrior($id) {
		//Query delete ... where id=...
		$this->db->where('nopeg', $id)
				 ->delete('baru_warrior');
	}

	public function tib(){
		$hasil = $this->db->query("SELECT * FROM baru_tim_implementasi_budaya a JOIN employee b on a.nopeg = b.NIP");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}
		else {
			return array();
		}
	}
	public function tambah_tib($data_warrior){
		//Quert insert into
		$this->db->insert('baru_tim_implementasi_budaya', $data_warrior);
	}

	public function update_tib($id,$data_warrior){
		$insertData = array($data_warrior['nopeg'],$data_warrior['posisi'],$data_warrior['unit'],$data_warrior['direktorat'],$data_warrior['status_aktif'],$data_warrior['email']);
		$this->db->query("update baru_tim_implementasi_budaya set nopeg=?,posisi=?,unit=?,direktorat=?,status_aktif=?,email=? where nopeg=$id", $insertData);
	}

	public function delete_tib($id) {
		//Query delete ... where id=...
		$this->db->where('nopeg', $id)
				 ->delete('baru_tim_implementasi_budaya');
	}

	
}