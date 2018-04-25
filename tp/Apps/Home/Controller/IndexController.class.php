<?php
namespace Home\Controller;
use Think\Controller;

use Home\Model\IndexModel;//导入定义的模型
class IndexController extends Controller {
	public function index(){
		$this->display('index');
	}
	public function login()
	{
		session_start();
		$indexModel = new IndexModel();
		$data = $indexModel->select();
		for ($i=0; $i < count($data); $i++) { 
			if ($data[$i]['u_name'] == I('post.u_name')&&$data[$i]['u_pwd']==i('post.u_pwd')) {
				$_SESSION['u_id'] = $data[$i]['u_id'];
				$this->ajaxReturn(array("ok"=>"success"));
				break;
			}
		}
		if ($i == count($data)) {
			$this->ajaxReturn(array("ok"=>"fail"));
		}
	}
	public function regist()
	{	
		$indexModel = new IndexModel();
		$data = $indexModel->select();
		for ($i=0; $i < count($data); $i++) { 
			if ($data[$i]['u_name'] == I('post.u_name')) {
				$this->ajaxReturn(array("ok"=>"fail"));
				break;
			}
		}
		if ($i == count($data)) {
			$data = array(
				"u_name"=>I('post.u_name'),
				"u_pwd"=>I("post.u_pwd"),
				"u_type"=>"顾客",
				"u_mail"=>I("post.u_mail"),
				"u_tel"=>I("post.u_tel"),
				"u_area"=>I("post.u_address")
			);
			$stat = $indexModel->data($data)->add();
			$this->ajaxReturn(array("ok"=>"success"));
		}

	}
}