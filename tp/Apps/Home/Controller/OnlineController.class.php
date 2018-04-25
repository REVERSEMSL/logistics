<?php
namespace Home\Controller;
use Think\Controller;
class OnlineController extends Controller {
	public function index(){
		$this->display('index');
	}
	public function addolder()
	{
		print_r($_POST);
	}
}