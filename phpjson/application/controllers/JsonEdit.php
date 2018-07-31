<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class JsonEdit extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('json_model');
		$dl = $this->json_model->showData();
		$dl = json_decode($dl,true);
		//chuyen thanh mang
		$dl = array('mangdl' => $dl);
		$this->load->view('jsonEdit_view', $dl, FALSE);
	}
	public function do_edit()
	{
		$ten = $this->input->post('ten');
		$sdt = $this->input->post('sdt');
		//tao json de con dua du lieu vao
		$dl =array();
		for ($i = 0; $i < count($ten); $i++) {
			//tao bien trung gian dang mang de luu mot phan tu $ten
			//vi phan tu $ten cung la mot mang con
			$trunggian['ten'] = $ten[$i];
			$trunggian['sdt'] = $sdt[$i];
			array_push($dl, $trunggian);
		}
		//sau khi duyet for xong thi $dl da day su lieu
		//ma hoa luon
		$dl =json_encode($dl);
		//goi model de update lai
		$this->load->model('json_model');
		if($this->json_model->updateData($dl)){
			$this->load->view('thanhcong');
		}else{
			echo "sua khong duoc";
		}
	}
}

/* End of file JsonEdit.php */
/* Location: ./application/controllers/JsonEdit.php */