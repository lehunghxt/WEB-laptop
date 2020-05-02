<?php
class IndexController extends Controller{
	
	public function __construct($arrParams){
		parent::__construct($arrParams);

	}

	public function loginAction(){
		$userInfo	= Session::get('user');
		if($userInfo['login'] == true && $userInfo['time'] + TIME_LOGIN >= time()){
			URL::redirect('admin', 'index', 'index');
		}

		if(isset($this->_arrParam['form'])){
			if(isset($this->_arrParam['form']['token'])?$this->_arrParam['form']['token'] : 0 > 0){
				$data = $this->_model->checkLogin($this->_arrParam);
				if(empty($data)){
					Session::set('message', array('class' => 'success', 'content' => 'Username hoặc mật khẩu không đúng !'));
				}else{
					$arraySession	= array(
										'login'		=> true,
										'info'		=> $data,
										'time'		=> time()
									);
					Session::set('user', $arraySession);
					URL::redirect('admin', 'index', 'index');
				}
			}
		}
		$this->_templateObj->setFolderTemplate('admin/main/');
		$this->_templateObj->setFileTemplate('login.php');
		$this->_templateObj->setFileConfig('template.ini');
		$this->_templateObj->load();
		$this->_view->render('index/login');
	}
	public function logoutAction(){
		Session::destroy();
		URL::redirect('admin', 'index', 'login');
	}

	public function indexAction(){
		$this->_templateObj->setFolderTemplate('admin/main/');
		$this->_templateObj->setFileTemplate('index.php');
		$this->_templateObj->setFileConfig('template.ini');
		$this->_templateObj->load();
		$this->_view->render('index/index');
	}
	public function viewAction(){
		$this->_templateObj->setFolderTemplate('admin/main/');
		$this->_templateObj->setFileTemplate('index.php');
		$this->_templateObj->setFileConfig('template.ini');
		$this->_templateObj->load();
		$this->_view->render('category/index');
	}
}