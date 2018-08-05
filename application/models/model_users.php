<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model_users extends CI_Model {
	
	public function check_credential($username,$password){

		$hasil = $this->db->query("select * from user a JOIN unit b on a.username=b.kode_unit where a.username='$username' and a.password='$password'");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}
		else {
			return array();
		}
	}

	public function program($username) {
		//Query mencari record berdasarkan ID
		$hasil = $this->db->query("select * from cc_program a LEFT JOIN (select * from cc_program_input where input_user='$username')b on a.cc_detail=b.input_detail where status='Default'");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}
		else {
			return array();
		}
	}
	public function isi_data($data){
		//Quert insert into
		$this->db->insert('cc_program_input', $data);
	}
	public function evaluasi_data($data){
		//Quert insert into
		$this->db->insert('cc_program_eval', $data);
	}
	
	public function findprogram($unit,$id) {
		//Query mencari record berdasarkan ID
		$hasil = $this->db->query("select * from cc_program a LEFT JOIN (select * from cc_program_input where input_user='$unit')b on a.cc_detail=b.input_detail where status='Default' AND cc_id='$id'");
		if($hasil->num_rows() > 0){
			return $hasil->row();
		}
		else {
			return array();
		}
	}
	public function daftarevaluasi($unit,$namaprogram) {
		//Query mencari record berdasarkan ID
		$hasil = $this->db->query("SELECT * FROM cc_program_eval JOIN cc_program_input on cc_program_eval.input_user_c=cc_program_input.input_user  and cc_program_input.input_detail=cc_program_eval.input_detail_c where input_user='$unit' and input_detail='$namaprogram'");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}
		else {
			return array();
		}
	}
	public function listevaluasi($unit,$namaprogram) {
		//Query mencari record berdasarkan ID
		$hasil = $this->db->query("SELECT * FROM cc_program_eval where input_user_c='$unit' and input_detail_c='$namaprogram' ORDER BY input_id DESC");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}
		else {
			return array();
		}
	}

					/*	$user=mysqli_query($con, "SELECT * FROM ca_user JOIN employee on ca_user.ca_nopeg=employee.NIP where employee.unit='$unit'");
                        $sql=mysqli_query($con, "SELECT * FROM cc_program_eval JOIN employee on cc_program_eval.input_user_c=employee.NIP where input_bulan='$month' and unit='$unit'");
                        $prog=mysqli_query($con, "SELECT * FROM cc_program where status='Default'");
                        $user_=mysqli_fetch_array($user);
                        $user = $user_['ca_nopeg'];
                        $nama = $user_['nama'];
                        $email = $user_['email'];

                        $contoh=mysqli_query($con, "SELECT SUM(input_realisasi_) AS Total FROM cc_program_eval where input_bulan='$month' and input_user_c='$user'");
                        $contoh_=mysqli_fetch_array($contoh);
                        $rata=mysqli_num_rows($prog);
                        $rerata=round($contoh_['Total']/$rata);
                          $sudah=mysqli_query($con, "SELECT * FROM cc_program_input where input_user='$user' and input_detail='$xmen'");
                              $gap=mysqli_query($con, "SELECT * FROM cc_program_eval where input_user_c='$user' and input_detail_c='$xmen'");
*/
    public function jumlah_program_jalan() {
		//Query mencari record berdasarkan ID
		$hasil = $this->db->query("SELECT * FROM cc_program where status='Default'");
		if($hasil->num_rows() > 0){
			return $hasil->num_rows();
		}
		else {
			return array();
		}
	}
	public function program_jalan() {
		//Query mencari record berdasarkan ID
		$hasil = $this->db->query("SELECT * FROM cc_program where status='Default'");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}
		else {
			return array();
		}
	}

	public function realisasi_program_jalan($user,$month) {
		//Query mencari record berdasarkan ID
		$hasil = $this->db->query("SELECT AVG(input_realisasi_) AS Total FROM cc_program_eval where input_user_c='$user'");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}
		else {
			return array();
		}
	}
	public function program_unit($user) {
		//Query mencari record berdasarkan ID
		$hasil = $this->db->query("select * from cc_program a LEFT JOIN (SELECT input_user_c,input_detail_c,input_target,input_satuan, AVG(input_realisasi_) AS persen_realisasi,AVG(input_gap) AS persen_gap FROM `cc_program_eval` a JOIN cc_program_input b on a.input_detail_c=b.input_detail where input_user_c='$user' GROUP BY input_detail_c)b on a.cc_detail = b.input_detail_c where a.status='Default'");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}
		else {
			return array();
		}
	}

	public function program_unitho() {
		//Query mencari record berdasarkan ID
		$hasil = $this->db->query("select * from (SELECT * FROM cc_program a 
LEFT JOIN (SELECT input_user_c,input_detail_c,input_target,input_satuan, AVG(input_realisasi_) 
           AS persen_realisasi,AVG(input_gap) 
           AS persen_gap FROM `cc_program_eval` a 
           JOIN cc_program_input b on a.input_detail_c=b.input_detail 
           GROUP BY input_user_c)b on a.cc_detail = b.input_detail_c where a.status='Default' 
           GROUP BY input_user_c ) a JOIN unit b ON a.input_user_c = b.kode_unit WHERE b.kode_lokasi='HO'");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}
		else {
			return array();
		}
	}

	public function program_unitjkt() {
		//Query mencari record berdasarkan ID
		$hasil = $this->db->query("select * from (SELECT * FROM cc_program a 
LEFT JOIN (SELECT input_user_c,input_detail_c,input_target,input_satuan, AVG(input_realisasi_) 
           AS persen_realisasi,AVG(input_gap) 
           AS persen_gap FROM `cc_program_eval` a 
           JOIN cc_program_input b on a.input_detail_c=b.input_detail 
           GROUP BY input_user_c)b on a.cc_detail = b.input_detail_c where a.status='Default' 
           GROUP BY input_user_c ) a JOIN unit b ON a.input_user_c = b.kode_unit WHERE b.kode_lokasi!='HO' AND b.kode_lokasi!='SUBAM' AND b.kode_lokasi!='UPGAM' AND b.kode_lokasi!='MESAM'");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}
		else {
			return array();
		}
	}

	public function program_unitkal() {
		//Query mencari record berdasarkan ID
		$hasil = $this->db->query("select * from (SELECT * FROM cc_program a 
LEFT JOIN (SELECT input_user_c,input_detail_c,input_target,input_satuan, AVG(input_realisasi_) 
           AS persen_realisasi,AVG(input_gap) 
           AS persen_gap FROM `cc_program_eval` a 
           JOIN cc_program_input b on a.input_detail_c=b.input_detail 
           GROUP BY input_user_c)b on a.cc_detail = b.input_detail_c where a.status='Default' 
           GROUP BY input_user_c ) a JOIN unit b ON a.input_user_c = b.kode_unit WHERE b.kode_lokasi='UPGAM'");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}
		else {
			return array();
		}
	}

	public function program_unitsum() {
		//Query mencari record berdasarkan ID
		$hasil = $this->db->query("select * from (SELECT * FROM cc_program a 
LEFT JOIN (SELECT input_user_c,input_detail_c,input_target,input_satuan, AVG(input_realisasi_) 
           AS persen_realisasi,AVG(input_gap) 
           AS persen_gap FROM `cc_program_eval` a 
           JOIN cc_program_input b on a.input_detail_c=b.input_detail 
           GROUP BY input_user_c)b on a.cc_detail = b.input_detail_c where a.status='Default' 
           GROUP BY input_user_c ) a JOIN unit b ON a.input_user_c = b.kode_unit WHERE b.kode_lokasi='MESAM'");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}
		else {
			return array();
		}
	}

	public function program_unitjaw() {
		//Query mencari record berdasarkan ID
		$hasil = $this->db->query("select * from (SELECT * FROM cc_program a 
LEFT JOIN (SELECT input_user_c,input_detail_c,input_target,input_satuan, AVG(input_realisasi_) 
           AS persen_realisasi,AVG(input_gap) 
           AS persen_gap FROM `cc_program_eval` a 
           JOIN cc_program_input b on a.input_detail_c=b.input_detail 
           GROUP BY input_user_c)b on a.cc_detail = b.input_detail_c where a.status='Default' 
           GROUP BY input_user_c ) a JOIN unit b ON a.input_user_c = b.kode_unit WHERE b.kode_lokasi='SUBAM'");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}
		else {
			return array();
		}
	}


	public function max_bulan() {
		//Query mencari record berdasarkan ID
		$hasil = $this->db->query("SELECT MAX(cc_time) as max FROM cc_program where status= 'Default'");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}
		else {
			return array();
		}
	}
	
	public function progresunit($unit){
		$hasil = $this->db->query("SELECT b.kode_unit,b.kode_dir,CASE WHEN AVG(a.input_realisasi_) IS NULL THEN 0 ELSE AVG(a.input_realisasi_) END AS progress FROM (SELECT * FROM `cc_program_eval` a JOIN `cc_program` b on a.input_detail_c=b.cc_detail WHERE b.status='Default')a RIGHT JOIN unit b on a.input_user_c = b.kode_unit WHERE b.kode_unit= '$unit' GROUP BY b.kode_unit ORDER BY kode_dir DESC");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}
		else {
			return array();
		}
	}







	public function check_pegawai($nopeg){

		$query = $this->db->get_where('tb_pegawai', array('NIP' => $nopeg));
		return $query->result();
	}


	public function daftar($mine){
		//Query mencari record berdasarkan ID
		$hasil = $this->db->where ('kode_unit', $mine)
						  ->get('question');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else{
			return array();
		}
	}

	public function skala(){
		//Query mencari record berdasarkan ID
		$hasil = $this->db->get('setting');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else{
			return array();
		}
	}

	public function assign($mine,$tahun,$periode){
		//Query mencari record berdasarkan ID
		$hasil = $this->db->query("select d.*,e.status from (select c.target,c.name,c.penilai,1 periode,c.tahun from (SELECT DISTINCT a.target,b.name,a.penilai1 as penilai,a.tahun FROM `setup_assessment` a join tb_pegawai b ON a.target=b.NIP WHERE a.penilai1='$mine' UNION 
SELECT DISTINCT a.target,b.name,a.penilai2 as penilai,a.tahun FROM setup_assessment a join tb_pegawai b ON a.target=b.NIP WHERE a.penilai2='$mine' UNION 
SELECT DISTINCT a.target,b.name,a.penilai3 as penilai,a.tahun FROM setup_assessment a join tb_pegawai b ON a.target=b.NIP WHERE a.penilai3='$mine' UNION 
SELECT DISTINCT a.target,b.name,a.penilai4 as penilai,a.tahun FROM setup_assessment a join tb_pegawai b ON a.target=b.NIP WHERE a.penilai4='$mine') c UNION 

select c.target,c.name,c.penilai,2 periode,c.tahun from (SELECT DISTINCT a.target,b.name,a.penilai1 as penilai,a.tahun FROM `setup_assessment` a join tb_pegawai b ON a.target=b.NIP WHERE a.penilai1='$mine' UNION 
SELECT DISTINCT a.target,b.name,a.penilai2 as penilai,a.tahun FROM setup_assessment a join tb_pegawai b ON a.target=b.NIP WHERE a.penilai2='$mine' UNION 
SELECT DISTINCT a.target,b.name,a.penilai3 as penilai,a.tahun FROM setup_assessment a join tb_pegawai b ON a.target=b.NIP WHERE a.penilai3='$mine' UNION 
SELECT DISTINCT a.target,b.name,a.penilai4 as penilai,a.tahun FROM setup_assessment a join tb_pegawai b ON a.target=b.NIP WHERE a.penilai4='$mine') c UNION

select c.target,c.name,c.penilai,3 periode,c.tahun from (SELECT DISTINCT a.target,b.name,a.penilai1 as penilai,a.tahun FROM `setup_assessment` a join tb_pegawai b ON a.target=b.NIP WHERE a.penilai1='$mine' UNION 
SELECT DISTINCT a.target,b.name,a.penilai2 as penilai,a.tahun FROM setup_assessment a join tb_pegawai b ON a.target=b.NIP WHERE a.penilai2='$mine' UNION 
SELECT DISTINCT a.target,b.name,a.penilai3 as penilai,a.tahun FROM setup_assessment a join tb_pegawai b ON a.target=b.NIP WHERE a.penilai3='$mine' UNION 
SELECT DISTINCT a.target,b.name,a.penilai4 as penilai,a.tahun FROM setup_assessment a join tb_pegawai b ON a.target=b.NIP WHERE a.penilai4='$mine') c UNION

select c.target,c.name,c.penilai,4 periode,c.tahun from (SELECT DISTINCT a.target,b.name,a.penilai1 as penilai,a.tahun FROM `setup_assessment` a join tb_pegawai b ON a.target=b.NIP WHERE a.penilai1='$mine' UNION 
SELECT DISTINCT a.target,b.name,a.penilai2 as penilai,a.tahun FROM setup_assessment a join tb_pegawai b ON a.target=b.NIP WHERE a.penilai2='$mine' UNION 
SELECT DISTINCT a.target,b.name,a.penilai3 as penilai,a.tahun FROM setup_assessment a join tb_pegawai b ON a.target=b.NIP WHERE a.penilai3='$mine' UNION 
SELECT DISTINCT a.target,b.name,a.penilai4 as penilai,a.tahun FROM setup_assessment a join tb_pegawai b ON a.target=b.NIP WHERE a.penilai4='$mine') c) d LEFT JOIN assessment e on d.target=e.target AND d.penilai=e.asesor AND d.periode=e.periode AND d.tahun=e.tahun");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else{
			return array();
		}
	}
	public function score($mine,$data){
		//Query mencari record berdasarkan ID
		$tahun=$data['tahun'];
		$hasil = $this->db->query("SELECT SUM(rata) as jumlah_nilai FROM `assessment` where target='$mine' AND tahun=$tahun");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else{
			return 0;
		}
	}
	public function scoreperiode1($mine,$data){
		//Query mencari record berdasarkan ID
		$tahun=$data['tahun'];
		$hasil = $this->db->query("SELECT target,tahun,periode,sum(rata) as jumlah_nilai FROM `assessment` where target='$mine' AND tahun=$tahun AND periode=1 GROUP by tahun,periode,target");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else{
			return 0;
		}
	}
	public function scoreperiode2($mine,$data){
		//Query mencari record berdasarkan ID
		$tahun=$data['tahun'];
		$hasil = $this->db->query("SELECT target,tahun,periode,sum(rata) as jumlah_nilai FROM `assessment` where target='$mine' AND tahun=$tahun AND periode=2 GROUP by tahun,periode,target");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else{
			return 0;
		}
	}
	public function scoreperiode3($mine,$data){
		//Query mencari record berdasarkan ID
		$tahun=$data['tahun'];
		$hasil = $this->db->query("SELECT target,tahun,periode,sum(rata) as jumlah_nilai FROM `assessment` where target='$mine' AND tahun=$tahun AND periode=3 GROUP by tahun,periode,target");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else{
			return 0;
		}
	}
	public function scoreperiode4($mine,$data){
		//Query mencari record berdasarkan ID
		$tahun=$data['tahun'];
		$hasil = $this->db->query("SELECT target,tahun,periode,sum(rata) as jumlah_nilai FROM `assessment` where target='$mine' AND tahun=$tahun AND periode=4 GROUP by tahun,periode,target");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else{
			return 0;
		}
	}
	public function count_periode($mine,$data){
		//Query mencari record berdasarkan ID
		$tahun=$data['tahun'];
		$hasil = $this->db->query("SELECT count(distinct(periode)) as jumlah_periode FROM `assessment` where target='$mine' AND tahun=$tahun");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else{
			return 0;
		}
	}
	public function jumlah_penilaian($mine,$data){
		//Query mencari record berdasarkan ID
		$tahun=$data['tahun'];
		$hasil = $this->db->query("SELECT COUNT(target) as jumlah_penilai FROM `assessment` where target='$mine' AND tahun='$tahun' AND periode=1");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else{
			return 0;
		}
	}
	public function jumlah_penilaian2($mine,$data){
		//Query mencari record berdasarkan ID
		$tahun=$data['tahun'];
		$hasil = $this->db->query("SELECT COUNT(target) as jumlah_penilai FROM `assessment` where target='$mine' AND tahun='$tahun' AND periode=2");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else{
			return 0;
		}
	}
	public function jumlah_penilaian3($mine,$data){
		//Query mencari record berdasarkan ID
		$tahun=$data['tahun'];
		$hasil = $this->db->query("SELECT COUNT(target) as jumlah_penilai FROM `assessment` where target='$mine' AND tahun='$tahun' AND periode=3");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else{
			return NULL;
		}
	}
	public function jumlah_penilaian4($mine,$data){
		//Query mencari record berdasarkan ID
		$tahun=$data['tahun'];
		$hasil = $this->db->query("SELECT COUNT(target) as jumlah_penilai FROM `assessment` where target='$mine' AND tahun='$tahun' AND periode=4");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else{
			return 0;
		}
	}
	public function nilai_dimensi($mine,$data){
		//Query mencari record berdasarkan ID
		$tahun=$data['tahun'];
		$hasil = $this->db->query("select b.id_rekomendasi,nilai,a.kriteria,b.top,b.bottom from (select AVG(hasilq1) as nilai,'Collaborate' kriteria,1 id from assessment where target='$mine' AND tahun=$tahun  UNION
select AVG(hasilq2) as nilai,'Empower Diversity' kriteria,2 id from assessment where target='$mine' AND tahun=$tahun UNION
select AVG(hasilq3) as nilai,'Honesty' kriteria,3 id from assessment where target='$mine' AND tahun=$tahun UNION
select AVG(hasilq4) as nilai,'Commitment' kriteria,4 id from assessment where target='$mine' AND tahun=$tahun UNION
select AVG(hasilq5) as nilai,'Care & Polite' kriteria,5 id from assessment where target='$mine' AND tahun=$tahun UNION
select AVG(hasilq6) as nilai,'Fast & Easy' kriteria,6 id from assessment where target='$mine' AND tahun=$tahun UNION 
select AVG(hasilq7) as nilai,'Adaptive & Creative' kriteria,7 id from assessment where target='$mine' AND tahun=$tahun UNION 
select AVG(hasilq8) as nilai,'Persistent' kriteria,8 id from assessment where target='$mine' AND tahun=$tahun UNION 
select AVG(hasilq9) as nilai,'Compliance' kriteria,9 id from assessment where target='$mine' AND tahun=$tahun UNION 
select AVG(hasilq10) as nilai,'Risk Management' kriteria,10 id from assessment where target='$mine' AND tahun=$tahun ) a JOIN rekomendasi b on a.id=b.id_rekomendasi ORDER BY nilai DESC");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else{
			return array();
		}
	}
	public function nilai_dimensiperiode1($mine,$data){
		$tahun=$data['tahun'];
		//Query mencari record berdasarkan ID
		$hasil = $this->db->query("select b.id_rekomendasi,nilai,a.kriteria,b.top,b.bottom from (select AVG(hasilq1) as nilai,'Collaborate' kriteria,1 id from assessment where target='$mine' AND tahun=$tahun AND periode=1 UNION
select AVG(hasilq2) as nilai,'Empower Diversity' kriteria,2 id from assessment where target='$mine' AND tahun=$tahun AND periode=1 UNION
select AVG(hasilq3) as nilai,'Honesty' kriteria,3 id from assessment where target='$mine' AND tahun=$tahun AND periode=1 UNION
select AVG(hasilq4) as nilai,'Commitment' kriteria,4 id from assessment where target='$mine' AND tahun=$tahun AND periode=1 UNION
select AVG(hasilq5) as nilai,'Care & Polite' kriteria,5 id from assessment where target='$mine' AND tahun=$tahun AND periode=1 UNION
select AVG(hasilq6) as nilai,'Fast & Easy' kriteria,6 id from assessment where target='$mine' AND tahun=$tahun AND periode=1 UNION 
select AVG(hasilq7) as nilai,'Adaptive & Creative' kriteria,7 id from assessment where target='$mine' AND tahun=$tahun AND periode=1 UNION 
select AVG(hasilq8) as nilai,'Persistent' kriteria,8 id from assessment where target='$mine' AND tahun=$tahun AND periode=1 UNION 
select AVG(hasilq9) as nilai,'Compliance' kriteria,9 id from assessment where target='$mine' AND tahun=$tahun AND periode=1 UNION 
select AVG(hasilq10) as nilai,'Risk Management' kriteria,10 id from assessment where target='$mine' AND tahun=$tahun AND periode=1) a JOIN rekomendasi b on a.id=b.id_rekomendasi ORDER BY nilai DESC");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else{
			return array();
		}
	}
	public function nilai_dimensiperiode2($mine,$data){
		$tahun=$data['tahun'];
		//Query mencari record berdasarkan ID
		$hasil = $this->db->query("select b.id_rekomendasi,nilai,a.kriteria,b.top,b.bottom from (select AVG(hasilq1) as nilai,'Collaborate' kriteria,1 id from assessment where target='$mine' AND tahun=$tahun AND periode=2 UNION
select AVG(hasilq2) as nilai,'Empower Diversity' kriteria,2 id from assessment where target='$mine' AND tahun=$tahun AND periode=2 UNION
select AVG(hasilq3) as nilai,'Honesty' kriteria,3 id from assessment where target='$mine' AND tahun=$tahun AND periode=2 UNION
select AVG(hasilq4) as nilai,'Commitment' kriteria,4 id from assessment where target='$mine' AND tahun=$tahun AND periode=2 UNION
select AVG(hasilq5) as nilai,'Care & Polite' kriteria,5 id from assessment where target='$mine' AND tahun=$tahun AND periode=2 UNION
select AVG(hasilq6) as nilai,'Fast & Easy' kriteria,6 id from assessment where target='$mine' AND tahun=$tahun AND periode=2 UNION 
select AVG(hasilq7) as nilai,'Adaptive & Creative' kriteria,7 id from assessment where target='$mine' AND tahun=$tahun AND periode=2 UNION 
select AVG(hasilq8) as nilai,'Persistent' kriteria,8 id from assessment where target='$mine' AND tahun=$tahun AND periode=2 UNION 
select AVG(hasilq9) as nilai,'Compliance' kriteria,9 id from assessment where target='$mine' AND tahun=$tahun AND periode=2 UNION 
select AVG(hasilq10) as nilai,'Risk Management' kriteria,10 id from assessment where target='$mine' AND tahun=$tahun AND periode=2) a JOIN rekomendasi b on a.id=b.id_rekomendasi ORDER BY nilai DESC");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else{
			return array();
		}
	}
	public function nilai_dimensiperiode3($mine,$data){
		$tahun=$data['tahun'];
		//Query mencari record berdasarkan ID
		$hasil = $this->db->query("select b.id_rekomendasi,nilai,a.kriteria,b.top,b.bottom from (select AVG(hasilq1) as nilai,'Collaborate' kriteria,1 id from assessment where target='$mine' AND tahun=$tahun AND periode=3 UNION
select AVG(hasilq2) as nilai,'Empower Diversity' kriteria,2 id from assessment where target='$mine' AND tahun=$tahun AND periode=3 UNION
select AVG(hasilq3) as nilai,'Honesty' kriteria,3 id from assessment where target='$mine' AND tahun=$tahun AND periode=3 UNION
select AVG(hasilq4) as nilai,'Commitment' kriteria,4 id from assessment where target='$mine' AND tahun=$tahun AND periode=3 UNION
select AVG(hasilq5) as nilai,'Care & Polite' kriteria,5 id from assessment where target='$mine' AND tahun=$tahun AND periode=3 UNION
select AVG(hasilq6) as nilai,'Fast & Easy' kriteria,6 id from assessment where target='$mine' AND tahun=$tahun AND periode=3 UNION 
select AVG(hasilq7) as nilai,'Adaptive & Creative' kriteria,7 id from assessment where target='$mine' AND tahun=$tahun AND periode=3 UNION 
select AVG(hasilq8) as nilai,'Persistent' kriteria,8 id from assessment where target='$mine' AND tahun=$tahun AND periode=3 UNION 
select AVG(hasilq9) as nilai,'Compliance' kriteria,9 id from assessment where target='$mine' AND tahun=$tahun AND periode=3 UNION 
select AVG(hasilq10) as nilai,'Risk Management' kriteria,10 id from assessment where target='$mine' AND tahun=$tahun AND periode=3) a JOIN rekomendasi b on a.id=b.id_rekomendasi ORDER BY nilai DESC");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else{
			return array();
		}
	}
	public function nilai_dimensiperiode4($mine,$data){
		$tahun=$data['tahun'];
		//Query mencari record berdasarkan ID
		$hasil = $this->db->query("select b.id_rekomendasi,nilai,a.kriteria,b.top,b.bottom from (select AVG(hasilq1) as nilai,'Collaborate' kriteria,1 id from assessment where target='$mine' AND tahun=$tahun AND periode=4 UNION
select AVG(hasilq2) as nilai,'Empower Diversity' kriteria,2 id from assessment where target='$mine' AND tahun=$tahun AND periode=4 UNION
select AVG(hasilq3) as nilai,'Honesty' kriteria,3 id from assessment where target='$mine' AND tahun=$tahun AND periode=4 UNION
select AVG(hasilq4) as nilai,'Commitment' kriteria,4 id from assessment where target='$mine' AND tahun=$tahun AND periode=4 UNION
select AVG(hasilq5) as nilai,'Care & Polite' kriteria,5 id from assessment where target='$mine' AND tahun=$tahun AND periode=4 UNION
select AVG(hasilq6) as nilai,'Fast & Easy' kriteria,6 id from assessment where target='$mine' AND tahun=$tahun AND periode=4 UNION 
select AVG(hasilq7) as nilai,'Adaptive & Creative' kriteria,7 id from assessment where target='$mine' AND tahun=$tahun AND periode=4 UNION 
select AVG(hasilq8) as nilai,'Persistent' kriteria,8 id from assessment where target='$mine' AND tahun=$tahun AND periode=4 UNION 
select AVG(hasilq9) as nilai,'Compliance' kriteria,9 id from assessment where target='$mine' AND tahun=$tahun AND periode=4 UNION 
select AVG(hasilq10) as nilai,'Risk Management' kriteria,10 id from assessment where target='$mine' AND tahun=$tahun AND periode=4) a JOIN rekomendasi b on a.id=b.id_rekomendasi ORDER BY nilai DESC");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else{
			return array();
		}
	}
	function cek_bottom($nopeg,$data) {
		$tahun=$data['tahun'];
 		$query = $this->db->query("SELECT * FROM tb_aksi WHERE tb_aksi.id_nip = '$nopeg' AND tb_aksi.status='bottom' AND tahun='$tahun' AND periode=1");
		if($query->num_rows() > 0) {
			return $query->result();
		}
		else{
			return $a=0;
		}
 	}
 	function cek_bottom2($nopeg,$data) {
 		$tahun=$data['tahun'];
 		$query = $this->db->query("SELECT * FROM tb_aksi WHERE tb_aksi.id_nip = '$nopeg' AND tb_aksi.status='bottom' AND tahun='$tahun' AND periode=2");
		if($query->num_rows() > 0) {
			return $query->result();
		}
		else{
			return $a=0;
		}
 	}
 	function cek_bottom3($nopeg,$data) {
 		$tahun=$data['tahun'];
 		$query = $this->db->query("SELECT * FROM tb_aksi WHERE tb_aksi.id_nip = '$nopeg' AND tb_aksi.status='bottom' AND tahun='$tahun' AND periode=3");
		if($query->num_rows() > 0) {
			return $query->result();
		}
		else{
			return $a=0;
		}
 	}
 	function cek_bottom4($nopeg,$data) {
 		$tahun=$data['tahun'];
 		$query = $this->db->query("SELECT * FROM tb_aksi WHERE tb_aksi.id_nip = '$nopeg' AND tb_aksi.status='bottom' AND tahun='$tahun' AND periode=4");
		if($query->num_rows() > 0) {
			return $query->result();
		}
		else{
			return $a=0;
		}
 	}

 	function cek_top($nopeg,$data) {
 		$tahun=$data['tahun'];
 		$query = $this->db->query("SELECT * FROM tb_aksi WHERE tb_aksi.id_nip = '$nopeg' AND tb_aksi.status='top' AND tahun='$tahun' AND periode=1");
		if($query->num_rows() > 0) {
			return $query->result();
		}
		else{
			return $a=0;
		}
 	}
 	function cek_top2($nopeg,$data) {
 		$tahun=$data['tahun'];
 		$query = $this->db->query("SELECT * FROM tb_aksi WHERE tb_aksi.id_nip = '$nopeg' AND tb_aksi.status='top' AND tahun='$tahun' AND periode=2");
		if($query->num_rows() > 0) {
			return $query->result();
		}
		else{
			return $a=0;
		}
 	}
 	function cek_top3($nopeg,$data) {
 		$tahun=$data['tahun'];
 		$query = $this->db->query("SELECT * FROM tb_aksi WHERE tb_aksi.id_nip = '$nopeg' AND tb_aksi.status='top' AND tahun='$tahun' AND periode=3");
		if($query->num_rows() > 0) {
			return $query->result();
		}
		else{
			return $a=0;
		}
 	}
 	function cek_top4($nopeg,$data) {
 		$tahun=$data['tahun'];
 		$query = $this->db->query("SELECT * FROM tb_aksi WHERE tb_aksi.id_nip = '$nopeg' AND tb_aksi.status='top' AND tahun='$tahun' AND periode=4");
		if($query->num_rows() > 0) {
			return $query->result();
		}
		else{
			return $a=0;
		}
 	}
 	function progres_aksi($nip,$data) {
 		$tahun=$data['tahun'];
 		$query = $this->db->query("SELECT * FROM tb_aksi WHERE tb_aksi.penanggung_jawab = '$nip' AND tahun='$tahun' AND periode=1");
		if($query->num_rows() > 0) {
			return $query->result();
		}
		else{
			return "kosong";
		}
 	}
 	function progres_aksi2($nip,$data) {
 		$tahun=$data['tahun'];
 		$query = $this->db->query("SELECT * FROM tb_aksi WHERE tb_aksi.penanggung_jawab = '$nip' AND tahun='$tahun' AND periode=2");
		if($query->num_rows() > 0) {
			return $query->result();
		}
		else{
			return "kosong";
		}
 	}
 	function progres_aksi3($nip,$data) {
 		$tahun=$data['tahun'];
 		$query = $this->db->query("SELECT * FROM tb_aksi WHERE tb_aksi.penanggung_jawab = '$nip' AND tahun='$tahun' AND periode=3");
		if($query->num_rows() > 0) {
			return $query->result();
		}
		else{
			return "kosong";
		}
 	}
 	function progres_aksi4($nip,$data) {
 		$tahun=$data['tahun'];
 		$query = $this->db->query("SELECT * FROM tb_aksi WHERE tb_aksi.penanggung_jawab = '$nip' AND tahun='$tahun' AND periode=4");
		if($query->num_rows() > 0) {
			return $query->result();
		}
		else{
			return "kosong";
		}
 	}

 	public function update_progres($id_aksi, $data_progres) {
		//Query update from ... where id = ...
		$nilai=$data_progres['progres'];
		$ket=$data_progres['keterangan'];
		$status_progres=$data_progres['status_progres'];
		$this->db->query("update tb_aksi set progres=$nilai, keterangan='$ket', status_progres='$status_progres' where id_aksi=$id_aksi");
	}


	////////////////UNIT
	function cekunit_bottom($nopeg,$data) {
		$tahun=$data['tahun'];
 		$query = $this->db->query("SELECT * FROM tb_aksiunit WHERE tb_aksiunit.id_nip = '$nopeg' AND tb_aksiunit.status='bottom' AND tahun='$tahun' AND periode=1");
		if($query->num_rows() > 0) {
			return $query->result();
		}
		else{
			return $a=0;
		}
 	}
 	function cekunit_bottom2($nopeg,$data) {
 		$tahun=$data['tahun'];
 		$query = $this->db->query("SELECT * FROM tb_aksiunit WHERE tb_aksiunit.id_nip = '$nopeg' AND tb_aksiunit.status='bottom' AND tahun='$tahun' AND periode=2");
		if($query->num_rows() > 0) {
			return $query->result();
		}
		else{
			return $a=0;
		}
 	}
 	function cekunit_bottom3($nopeg,$data) {
 		$tahun=$data['tahun'];
 		$query = $this->db->query("SELECT * FROM tb_aksiunit WHERE tb_aksiunit.id_nip = '$nopeg' AND tb_aksiunit.status='bottom' AND tahun='$tahun' AND periode=3");
		if($query->num_rows() > 0) {
			return $query->result();
		}
		else{
			return $a=0;
		}
 	}
 	function cekunit_bottom4($nopeg,$data) {
 		$tahun=$data['tahun'];
 		$query = $this->db->query("SELECT * FROM tb_aksiunit WHERE tb_aksiunit.id_nip = '$nopeg' AND tb_aksiunit.status='bottom' AND tahun='$tahun' AND periode=4");
		if($query->num_rows() > 0) {
			return $query->result();
		}
		else{
			return $a=0;
		}
 	}

 	function cekunit_top($nopeg,$data) {
 		$tahun=$data['tahun'];
 		$query = $this->db->query("SELECT * FROM tb_aksiunit WHERE tb_aksiunit.id_nip = '$nopeg' AND tb_aksiunit.status='top' AND tahun='$tahun' AND periode=1");
		if($query->num_rows() > 0) {
			return $query->result();
		}
		else{
			return $a=0;
		}
 	}
 	function cekunit_top2($nopeg,$data) {
 		$tahun=$data['tahun'];
 		$query = $this->db->query("SELECT * FROM tb_aksiunit WHERE tb_aksiunit.id_nip = '$nopeg' AND tb_aksiunit.status='top' AND tahun='$tahun' AND periode=2");
		if($query->num_rows() > 0) {
			return $query->result();
		}
		else{
			return $a=0;
		}
 	}
 	function cekunit_top3($nopeg,$data) {
 		$tahun=$data['tahun'];
 		$query = $this->db->query("SELECT * FROM tb_aksiunit WHERE tb_aksiunit.id_nip = '$nopeg' AND tb_aksiunit.status='top' AND tahun='$tahun' AND periode=3");
		if($query->num_rows() > 0) {
			return $query->result();
		}
		else{
			return $a=0;
		}
 	}
 	function cekunit_top4($nopeg,$data) {
 		$tahun=$data['tahun'];
 		$query = $this->db->query("SELECT * FROM tb_aksiunit WHERE tb_aksiunit.id_nip = '$nopeg' AND tb_aksiunit.status='top' AND tahun='$tahun' AND periode=4");
		if($query->num_rows() > 0) {
			return $query->result();
		}
		else{
			return $a=0;
		}
 	}
 	function progresunit_aksi($nip,$data) {
 		$tahun=$data['tahun'];
 		$query = $this->db->query("SELECT * FROM tb_aksiunit WHERE tb_aksiunit.penanggung_jawab = '$nip' AND tahun='$tahun' AND periode=1");
		if($query->num_rows() > 0) {
			return $query->result();
		}
		else{
			return "kosong";
		}
 	}
 	function progresunit_aksi2($nip,$data) {
 		$tahun=$data['tahun'];
 		$query = $this->db->query("SELECT * FROM tb_aksiunit WHERE tb_aksiunit.penanggung_jawab = '$nip' AND tahun='$tahun' AND periode=2");
		if($query->num_rows() > 0) {
			return $query->result();
		}
		else{
			return "kosong";
		}
 	}
 	function progresunit_aksi3($nip,$data) {
 		$tahun=$data['tahun'];
 		$query = $this->db->query("SELECT * FROM tb_aksiunit WHERE tb_aksiunit.penanggung_jawab = '$nip' AND tahun='$tahun' AND periode=3");
		if($query->num_rows() > 0) {
			return $query->result();
		}
		else{
			return "kosong";
		}
 	}
 	function progresunit_aksi4($nip,$data) {
 		$tahun=$data['tahun'];
 		$query = $this->db->query("SELECT * FROM tb_aksiunit WHERE tb_aksiunit.penanggung_jawab = '$nip' AND tahun='$tahun' AND periode=4");
		if($query->num_rows() > 0) {
			return $query->result();
		}
		else{
			return "kosong";
		}
 	}

 	public function updateunit_progres($id_aksi, $data_progres) {
		//Query update from ... where id = ...
		$nilai=$data_progres['progres'];
		$ket=$data_progres['keterangan'];
		$status_progres=$data_progres['status_progres'];
		$this->db->query("update tb_aksiunit set progres=$nilai, keterangan='$ket', status_progres='$status_progres' where id_aksi=$id_aksi");
	}

	public function tampilunit_aksi($id,$data) {
		$tahun=$data['tahun'];
		//Query update from ... where id = ...
		$hasil = $this->db->query("select * from tb_aksiunit a join rekomendasi b on a.id_rekomendasi=b.id_rekomendasi where a.id_nip='$id' AND status='top' AND tahun='$tahun' AND periode=1");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else{
			return "kosong";
		}
	}
	public function tampilunit_aksi2($id,$data) {
		$tahun=$data['tahun'];
		//Query update from ... where id = ...
		$hasil = $this->db->query("select * from tb_aksiunit a join rekomendasi b on a.id_rekomendasi=b.id_rekomendasi where a.id_nip='$id' AND status='top' AND tahun='$tahun' AND periode=2");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else{
			return "kosong";
		}
	}
	public function tampilunit_aksi3($id,$data) {
		$tahun=$data['tahun'];
		//Query update from ... where id = ...
		$hasil = $this->db->query("select * from tb_aksiunit a join rekomendasi b on a.id_rekomendasi=b.id_rekomendasi where a.id_nip='$id' AND status='top' AND tahun='$tahun' AND periode=3");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else{
			return "kosong";
		}
	}
	public function tampilunit_aksi4($id,$data) {
		$tahun=$data['tahun'];
		//Query update from ... where id = ...
		$hasil = $this->db->query("select * from tb_aksiunit a join rekomendasi b on a.id_rekomendasi=b.id_rekomendasi where a.id_nip='$id' AND status='top' AND tahun='$tahun' AND periode=4");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else{
			return "kosong";
		}
	}

	public function tampilunit_aksi_bottom($id,$data) {
		$tahun=$data['tahun'];
		//Query update from ... where id = ...
		$hasil = $this->db->query("select * from tb_aksiunit a join rekomendasi b on a.id_rekomendasi=b.id_rekomendasi where a.id_nip='$id' AND status='bottom' AND tahun='$tahun' AND periode=1");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else{
			return "kosong";
		}
	}
	public function tampilunit_aksi_bottom2($id,$data) {
		$tahun=$data['tahun'];
		//Query update from ... where id = ...
		$hasil = $this->db->query("select * from tb_aksiunit a join rekomendasi b on a.id_rekomendasi=b.id_rekomendasi where a.id_nip='$id' AND status='bottom' AND tahun='$tahun' AND periode=2");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else{
			return "kosong";
		}
	}
	public function tampilunit_aksi_bottom3($id,$data) {
		$tahun=$data['tahun'];
		//Query update from ... where id = ...
		$hasil = $this->db->query("select * from tb_aksiunit a join rekomendasi b on a.id_rekomendasi=b.id_rekomendasi where a.id_nip='$id' AND status='bottom' AND tahun='$tahun' AND periode=3");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else{
			return "kosong";
		}
	}
	public function tampilunit_aksi_bottom4($id,$data) {
		$tahun=$data['tahun'];
		//Query update from ... where id = ...
		$hasil = $this->db->query("select * from tb_aksiunit a join rekomendasi b on a.id_rekomendasi=b.id_rekomendasi where a.id_nip='$id' AND status='bottom' AND tahun='$tahun' AND periode=4");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else{
			return "kosong";
		}
	}

	public function listaksiunit($nip,$data){
		$tahun=$data['tahun'];
		$hasil = $this->db->query("SELECT * FROM tb_aksiunit a WHERE a.id_nip='$nip' AND tahun='$tahun' AND periode=1");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}
		else {
			return array();
		}
	}
	public function listaksiunit2($nip,$data){
		$tahun=$data['tahun'];
		$hasil = $this->db->query("SELECT * FROM tb_aksiunit a WHERE a.id_nip='$nip' AND tahun='$tahun' AND periode=2");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}
		else {
			return array();
		}
	}
	public function listaksiunit3($nip,$data){
		$tahun=$data['tahun'];
		$hasil = $this->db->query("SELECT * FROM tb_aksiunit a WHERE a.id_nip='$nip' AND tahun='$tahun' AND periode=3");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}
		else {
			return array();
		}
	}
	public function listaksiunit4($nip,$data){
		$tahun=$data['tahun'];
		$hasil = $this->db->query("SELECT * FROM tb_aksiunit a WHERE a.id_nip='$nip' AND tahun='$tahun' AND periode=4");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}
		else {
			return array();
		}
	}
	public function listaksiunitfull($nip,$data){
		$tahun=$data['tahun'];
		$hasil = $this->db->query("SELECT * FROM tb_aksiunit a WHERE a.id_nip='$nip' AND tahun='$tahun'");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}
		else {
			return array();
		}
	}
	public function sumaksiunit($nip,$data){
		$tahun=$data['tahun'];
		$hasil = $this->db->query("SELECT a.status_progres, COUNT(*) as jumlah FROM tb_aksiunit a WHERE a.id_nip ='$nip' AND tahun='$tahun' AND periode=1 GROUP BY a.status_progres");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}
		else {
			return array();
		}
	}
	public function sumaksiunit2($nip,$data){
		$tahun=$data['tahun'];
		$hasil = $this->db->query("SELECT a.status_progres, COUNT(*) as jumlah FROM tb_aksiunit a WHERE a.id_nip ='$nip' AND tahun='$tahun' AND periode=2 GROUP BY a.status_progres");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}
		else {
			return array();
		}
	}
	public function sumaksiunit3($nip,$data){
		$tahun=$data['tahun'];
		$hasil = $this->db->query("SELECT a.status_progres, COUNT(*) as jumlah FROM tb_aksiunit a WHERE a.id_nip ='$nip' AND tahun='$tahun' AND periode=3 GROUP BY a.status_progres");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}
		else {
			return array();
		}
	}
	public function sumaksiunit4($nip,$data){
		$tahun=$data['tahun'];
		$hasil = $this->db->query("SELECT a.status_progres, COUNT(*) as jumlah FROM tb_aksiunit a WHERE a.id_nip ='$nip' AND tahun='$tahun' AND periode=4 GROUP BY a.status_progres");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}
		else {
			return array();
		}
	}
	public function sumaksiunitfull($nip,$data){
		$tahun=$data['tahun'];
		$hasil = $this->db->query("SELECT a.status_progres, COUNT(*) as jumlah FROM tb_aksiunit a WHERE a.id_nip ='$nip' AND tahun='$tahun' GROUP BY a.status_progres");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}
		else {
			return array();
		}
	}

	public function find($nopeg) {
		//Query mencari record berdasarkan ID
		$hasil = $this->db->query("SELECT * FROM tb_pegawai a JOIN setup_assessment b ON a.NIP = b.target where a.NIP=$nopeg");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}
		else {
			return array();
		}
	}

	public function tambah_hasilpenilaianatasan($data_penilaian2){
		//Quert insert into
		$score = (($data_penilaian2['hasilq1']+$data_penilaian2['hasilq2']+$data_penilaian2['hasilq3']+$data_penilaian2['hasilq4']+$data_penilaian2['hasilq5']+$data_penilaian2['hasilq6']+$data_penilaian2['hasilq7']+$data_penilaian2['hasilq8']+$data_penilaian2['hasilq9']+$data_penilaian2['hasilq10'])/10*0.4);
		$insertData = array($data_penilaian2['target'],$data_penilaian2['asesor'],$data_penilaian2['hasilq1']*100/$data_penilaian2['skala'],$data_penilaian2['hasilq2']*100/$data_penilaian2['skala'],$data_penilaian2['hasilq3']*100/$data_penilaian2['skala'],$data_penilaian2['hasilq4']*100/$data_penilaian2['skala'],$data_penilaian2['hasilq5']*100/$data_penilaian2['skala'],$data_penilaian2['hasilq6']*100/$data_penilaian2['skala'],$data_penilaian2['hasilq7']*100/$data_penilaian2['skala'],$data_penilaian2['hasilq8']*100/$data_penilaian2['skala'],$data_penilaian2['hasilq9']*100/$data_penilaian2['skala'],$data_penilaian2['hasilq10']*100/$data_penilaian2['skala'],$score*100/$data_penilaian2['skala'],$data_penilaian2['tahun'],$data_penilaian2['periode']);
		$this->db->query("insert into assessment (target,asesor,hasilq1,hasilq2,hasilq3,hasilq4,hasilq5,hasilq6,hasilq7,hasilq8,hasilq9,hasilq10,rata,tahun,periode) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)", $insertData);
/*		$this->db->insert('tb_penilaian2', $data_penilaian2,"",$rata);*/
	}
	public function tambah_hasilpenilaianpeers($data_penilaian2){
		//Quert insert into
		$score = (($data_penilaian2['hasilq1']+$data_penilaian2['hasilq2']+$data_penilaian2['hasilq3']+$data_penilaian2['hasilq4']+$data_penilaian2['hasilq5']+$data_penilaian2['hasilq6']+$data_penilaian2['hasilq7']+$data_penilaian2['hasilq8']+$data_penilaian2['hasilq9']+$data_penilaian2['hasilq10'])/10*0.2);
		$insertData = array($data_penilaian2['target'],$data_penilaian2['asesor'],$data_penilaian2['hasilq1']*100/$data_penilaian2['skala'],$data_penilaian2['hasilq2']*100/$data_penilaian2['skala'],$data_penilaian2['hasilq3']*100/$data_penilaian2['skala'],$data_penilaian2['hasilq4']*100/$data_penilaian2['skala'],$data_penilaian2['hasilq5']*100/$data_penilaian2['skala'],$data_penilaian2['hasilq6']*100/$data_penilaian2['skala'],$data_penilaian2['hasilq7']*100/$data_penilaian2['skala'],$data_penilaian2['hasilq8']*100/$data_penilaian2['skala'],$data_penilaian2['hasilq9']*100/$data_penilaian2['skala'],$data_penilaian2['hasilq10']*100/$data_penilaian2['skala'],$score*100/$data_penilaian2['skala'],$data_penilaian2['tahun'],$data_penilaian2['periode']);
		$this->db->query("insert into assessment (target,asesor,hasilq1,hasilq2,hasilq3,hasilq4,hasilq5,hasilq6,hasilq7,hasilq8,hasilq9,hasilq10,rata,tahun,periode) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)", $insertData);
/*		$this->db->insert('tb_penilaian2', $data_penilaian2,"",$rata);*/
	}
	public function tambah_aksi($data_aksi){
		//Quert insert into
		$this->db->insert('tb_aksi', $data_aksi);
	}
	public function tambah_aksi_unit($data_aksi){
		//Quert insert into
		$this->db->insert('tb_aksiunit', $data_aksi);
	}
	public function edit_aksi_bottom($id, $data_aksi) {
		//Query update from ... where id = ...
		$this->db->where('id_aksi', $id)
				 ->update('tb_aksi', $data_aksi);
	}
	public function edit_aksi_top($id, $data_aksi) {
		//Query update from ... where id = ...
		$this->db->where('id_aksi', $id)
				 ->update('tb_aksi', $data_aksi);
	}
	public function editunit_aksi_bottom($id, $data_aksi) {
		//Query update from ... where id = ...
		$this->db->where('id_aksi', $id)
				 ->update('tb_aksiunit', $data_aksi);
	}
	public function editunit_aksi_top($id, $data_aksi) {
		//Query update from ... where id = ...
		$this->db->where('id_aksi', $id)
				 ->update('tb_aksiunit', $data_aksi);
	}
	public function tampil_aksi($id,$data) {
		$tahun=$data['tahun'];
		//Query update from ... where id = ...
		$hasil = $this->db->query("select * from tb_aksi a join rekomendasi b on a.id_rekomendasi=b.id_rekomendasi where a.id_nip='$id' AND status='top' AND tahun='$tahun' AND periode=1");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else{
			return "kosong";
		}
	}
	public function tampil_aksi2($id,$data) {
		$tahun=$data['tahun'];
		//Query update from ... where id = ...
		$hasil = $this->db->query("select * from tb_aksi a join rekomendasi b on a.id_rekomendasi=b.id_rekomendasi where a.id_nip='$id' AND status='top' AND tahun='$tahun' AND periode=2");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else{
			return "kosong";
		}
	}
	public function tampil_aksi3($id,$data) {
		$tahun=$data['tahun'];
		//Query update from ... where id = ...
		$hasil = $this->db->query("select * from tb_aksi a join rekomendasi b on a.id_rekomendasi=b.id_rekomendasi where a.id_nip='$id' AND status='top' AND tahun='$tahun' AND periode=3");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else{
			return "kosong";
		}
	}
	public function tampil_aksi4($id,$data) {
		$tahun=$data['tahun'];
		//Query update from ... where id = ...
		$hasil = $this->db->query("select * from tb_aksi a join rekomendasi b on a.id_rekomendasi=b.id_rekomendasi where a.id_nip='$id' AND status='top' AND tahun='$tahun' AND periode=4");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else{
			return "kosong";
		}
	}

	public function tampil_aksi_bottom($id,$data) {
		$tahun=$data['tahun'];
		//Query update from ... where id = ...
		$hasil = $this->db->query("select * from tb_aksi a join rekomendasi b on a.id_rekomendasi=b.id_rekomendasi where a.id_nip='$id' AND status='bottom' AND tahun='$tahun' AND periode=1");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else{
			return "kosong";
		}
	}
	public function tampil_aksi_bottom2($id,$data) {
		$tahun=$data['tahun'];
		//Query update from ... where id = ...
		$hasil = $this->db->query("select * from tb_aksi a join rekomendasi b on a.id_rekomendasi=b.id_rekomendasi where a.id_nip='$id' AND status='bottom' AND tahun='$tahun' AND periode=2");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else{
			return "kosong";
		}
	}
	public function tampil_aksi_bottom3($id,$data) {
		$tahun=$data['tahun'];
		//Query update from ... where id = ...
		$hasil = $this->db->query("select * from tb_aksi a join rekomendasi b on a.id_rekomendasi=b.id_rekomendasi where a.id_nip='$id' AND status='bottom' AND tahun='$tahun' AND periode=3");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else{
			return "kosong";
		}
	}
	public function tampil_aksi_bottom4($id,$data) {
		$tahun=$data['tahun'];
		//Query update from ... where id = ...
		$hasil = $this->db->query("select * from tb_aksi a join rekomendasi b on a.id_rekomendasi=b.id_rekomendasi where a.id_nip='$id' AND status='bottom' AND tahun='$tahun' AND periode=4");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else{
			return "kosong";
		}
	}
	public function listaksi($nip,$data){
		$tahun=$data['tahun'];
		$hasil = $this->db->query("SELECT * FROM tb_aksi a WHERE a.id_nip='$nip' AND tahun='$tahun' AND periode=1");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}
		else {
			return array();
		}
	}
	public function listaksi2($nip,$data){
		$tahun=$data['tahun'];
		$hasil = $this->db->query("SELECT * FROM tb_aksi a WHERE a.id_nip='$nip' AND tahun='$tahun' AND periode=2");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}
		else {
			return array();
		}
	}
	public function listaksi3($nip,$data){
		$tahun=$data['tahun'];
		$hasil = $this->db->query("SELECT * FROM tb_aksi a WHERE a.id_nip='$nip' AND tahun='$tahun' AND periode=3");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}
		else {
			return array();
		}
	}
	public function listaksi4($nip,$data){
		$tahun=$data['tahun'];
		$hasil = $this->db->query("SELECT * FROM tb_aksi a WHERE a.id_nip='$nip' AND tahun='$tahun' AND periode=4");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}
		else {
			return array();
		}
	}
	public function listaksifull($nip,$data){
		$tahun=$data['tahun'];
		$hasil = $this->db->query("SELECT * FROM tb_aksi a WHERE a.id_nip='$nip' AND tahun='$tahun'");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}
		else {
			return array();
		}
	}
	public function sumaksi($nip,$data){
		$tahun=$data['tahun'];
		$hasil = $this->db->query("SELECT a.status_progres, COUNT(*) as jumlah FROM tb_aksi a WHERE a.id_nip ='$nip' AND tahun='$tahun' AND periode=1 GROUP BY a.status_progres");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}
		else {
			return array();
		}
	}
	public function sumaksi2($nip,$data){
		$tahun=$data['tahun'];
		$hasil = $this->db->query("SELECT a.status_progres, COUNT(*) as jumlah FROM tb_aksi a WHERE a.id_nip ='$nip' AND tahun='$tahun' AND periode=2 GROUP BY a.status_progres");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}
		else {
			return array();
		}
	}
	public function sumaksi3($nip,$data){
		$tahun=$data['tahun'];
		$hasil = $this->db->query("SELECT a.status_progres, COUNT(*) as jumlah FROM tb_aksi a WHERE a.id_nip ='$nip' AND tahun='$tahun' AND periode=3 GROUP BY a.status_progres");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}
		else {
			return array();
		}
	}
	public function sumaksi4($nip,$data){
		$tahun=$data['tahun'];
		$hasil = $this->db->query("SELECT a.status_progres, COUNT(*) as jumlah FROM tb_aksi a WHERE a.id_nip ='$nip' AND tahun='$tahun' AND periode=4 GROUP BY a.status_progres");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}
		else {
			return array();
		}
	}
	public function sumaksifull($nip,$data){
		$tahun=$data['tahun'];
		$hasil = $this->db->query("SELECT a.status_progres, COUNT(*) as jumlah FROM tb_aksi a WHERE a.id_nip ='$nip' AND tahun='$tahun' GROUP BY a.status_progres");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}
		else {
			return array();
		}
	}

	public function bobot($id_bobot){
		//query semua record di table inovasi
		$hasil = $this->db->where('id', $id_bobot)
						  ->get('bobot');
		if($hasil->num_rows() > 0){
			return $hasil->row();
		}
		else {
			return array();
		}
	}

	public function find3($nip){
		$hasil = $this->db->query("SELECT * FROM tb_pegawai where NIP='$nip'");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}
		else {
			return array();
		}
	}

	public function isi_warrior($data){
		//Quert insert into
		$this->db->insert('baru_warrior', $data);
	}

	public function edit_warrior($nopeg, $data_warrior) {
		//Query update from ... where id = ...
		$this->db->where('nopeg', $nopeg)
				 ->update('baru_warrior', $data_warrior);
	}

	public function warrior($unit){
		$hasil = $this->db->query("SELECT * FROM baru_warrior where unit='$unit'");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}
		else {
			return array();
		}
	}
	public function timbudaya($unit){
		$hasil = $this->db->query("SELECT * FROM baru_tim_implementasi_budaya where unit='$unit'");
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}
		else {
			return array();
		}
	}
	public function isi_timbudaya($data){
		//Quert insert into
		$this->db->insert('baru_tim_implementasi_budaya', $data);
	}
	public function edit_timbudaya($nopeg, $data_warrior) {
		//Query update from ... where id = ...
		$this->db->where('nopeg', $nopeg)
				 ->update('baru_tim_implementasi_budaya', $data_warrior);
	}
	public function delete_timbudaya($nopeg) {
		//Query delete ... where id=...
		$this->db->where('nopeg', $nopeg)
				 ->delete('baru_tim_implementasi_budaya');
	}
}