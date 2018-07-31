<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Json extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('json_model');
	}

	public function index()
	{
		// $caccontact =  array();
		// $motcontact  = array(
		// 	'ten' => 'Elon Musk',
		// 	'sdt' => '0916599888'
		// 	);
		// array_push($caccontact, $motcontact);
		// $mangmahoa = json_encode($caccontact);
		// //goi model de insert dulieu
		// $this->load->model('json_model');
		// echo $this->json_model->insertData('contact',$mangmahoa);
		
		$kq = $this->json_model->showData();
		//giai ma json
		$kq = json_decode($kq);
		$kq = array('mangkq' => $kq, );
		$this->load->view('json_view', $kq, FALSE);
		// echo '<pre>';
		// var_dump($kq);
		// echo '</pre>';

	}
	public function xoa_json($sdt)
	{
		# sua dung luon ham showData
		$dulieu = $this->json_model->showData();
		//giai ma no de bien thanh mang du lieu
		$dulieu = json_decode($dulieu);
		//duyet mang du lieu tim xem phan tu trung voi gia tri nhan vao hay khong
		// neu trun thi dung ham unset(tenmang, key) de xoa di khoi cai mang goc
		foreach ($dulieu as $key => $value) {
			if($value->sdt == $sdt){
				// echo '<pre>';
				// var_dump($value->sdt);
				// echo '</pre>';
				unset($dulieu[$key]);
			}
		}
		//ma hoa du lieu thanh chuoi json sau do moi insert
		$dulieu = json_encode($dulieu);
		//sau khi xoa di phan tu trung roi
		//cap nhan du lieu -> giao tiep voi tang du lieu -> viet trong model ham cap nhat
		//sau khi viet xong viet ham cap nhat o day
		if($this->json_model->updateData($dulieu)){
			$this->load->view('thanhcong');
		}else {
			echo "khong xoa duoc";
		}
	}
	public function do_add()
	{
		$ten = $this->input->post('ten');
		$sdt = $this->input->post('sdt');
		//1,2 lay ra du lieu json bang showData & giai ma
		$dulieu = $this->json_model->showData();
		$dulieu = json_decode($dulieu,true);
		//3tao mot phan tu con roi insert vao mang tren
		$con = array(
			'ten' => $ten,
			'sdt' => $sdt
			);
		array_push($dulieu, $con);
		//4 ma hoa nguoc thanh json
		$dulieu = json_encode($dulieu);
		//5 goi den model
		if($this->json_model->updateData($dulieu)){
			$this->load->view('thanhcong');
		}else {
			echo "khong update duoc";
		}
	}
}

/* End of file Json.php */
/* Location: ./application/controllers/Json.php */