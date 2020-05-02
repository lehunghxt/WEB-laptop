<?php
class BannerController extends Controller{
	
	public function __construct($arrParams){
		parent::__construct($arrParams);
		$this->_templateObj->setFolderTemplate('admin/main/');
		$this->_templateObj->setFileTemplate('index.php');
		$this->_templateObj->setFileConfig('template.ini');
		$this->_templateObj->load();
	}
	// hien thi tat ca banner
	public function indexAction(){
		$this->_view->banners 		= $this->_model->getAllBanner();
		$this->_view->render('banner/view_banners');
	}
	// them banner
	public function addAction(){
		if(isset($this->_arrParam['form'])){
			if(isset($_FILES)) $this->_arrParam['form']['image']  = $_FILES['image'];
			if(isset($this->_arrParam['form']['token'])?$this->_arrParam['form']['token'] : 0 > 0){
				$validate = new Validate($this->_arrParam['form']);
				$validate->addRule('banner_name','string',array('min' => 1, 'max' => 255),true)
						 ->addRule('image', 'file',array('min' => 100, 'max' => 1000000, 'extension' => array('jpg', 'png')))
						 ->addRule('description', 'string',array('min' => 1, 'max' => 255),true);
				$validate->run();
				$this->_arrParam['form'] = $validate->getResult();
				if($validate->isValid() == false){
					$this->_view->errors = $validate->showErrors();
				}else{
					$this->_model->addBanner($this->_arrParam);
					URL::redirect('admin', 'banner', 'index',array(),'banner');
				}
			}
		}
		$this->_view->render('banner/add_banner');
	}
	// chinh sua banner
	public function editAction(){
		if(isset($this->_arrParam['form'])){
			if(isset($_FILES)) $this->_arrParam['form']['image']  = $_FILES['image'];
			if(isset($this->_arrParam['form']['token'])?$this->_arrParam['form']['token'] : 0 > 0){
				$validate = new Validate($this->_arrParam['form']);
				$validate->addRule('banner_name', 'string',array('min' => 1, 'max' => 255),true)
						 ->addRule('description', 'string',array('min' => 1, 'max' => 255),true);
				$validate->run();
				$this->_arrParam['form'] = $validate->getResult();
				if($validate->isValid() == false){
					$this->_view->errors = $validate->showErrors();
				}else{
					$this->_model->editBanner($this->_arrParam);
					URL::redirect('admin', 'banner', 'index',array(),'banner');
				}
			}
		}
		$check = $this->_model->getBanner($this->_arrParam);
		empty($check) ? URL::redirect('admin', 'banner', 'index') : $this->_view->banner = $check ;
		$this->_view->render('banner/edit_banner');
	}
	public function deleteAction(){
		$this->_model->deleteBanner($this->_arrParam);
		URL::redirect('admin', 'banner', 'index',array(),'banner');
	}
}