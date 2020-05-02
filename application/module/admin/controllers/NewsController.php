<?php
class NewsController extends Controller{
	
	public function __construct($arrParams){
		parent::__construct($arrParams);
		$this->_templateObj->setFolderTemplate('admin/main/');
		$this->_templateObj->setFileTemplate('index.php');
		$this->_templateObj->setFileConfig('template.ini');
		$this->_templateObj->load();
	}

	public function indexAction(){
		$this->_view->news 		= $this->_model->getAllNews();
		$this->_view->render('tintuc/view_tintuc');
	}
	public function addAction(){
		if(isset($this->_arrParam['form'])){
			if(isset($_FILES)) $this->_arrParam['form']['image']  = $_FILES['image'];
			if(isset($this->_arrParam['form']['token'])?$this->_arrParam['form']['token'] : 0 > 0){
				$validate = new Validate($this->_arrParam['form']);
				$validate->addRule('title','string',array('min' => 1, 'max' => 255), true)
						 ->addRule('image', 'file',array('min' => 100, 'max' => 1000000, 'extension' => array('jpg', 'png')))
						 ->addRule('description','string',array('min' => 1, 'max' => 1000000),true);
				$validate->run();
				$this->_arrParam['form'] = $validate->getResult();
				if($validate->isValid() == false){
					$this->_view->errors = $validate->showErrors();
				}else{
					$this->_model->addNews($this->_arrParam);
					URL::redirect('admin', 'news', 'index',array(),'news');
				}
			}
		}
		$this->_view->render('tintuc/add_tintuc');
	}
	public function editAction(){
		if(isset($this->_arrParam['form'])){
			if(isset($this->_arrParam['form']['token'])?$this->_arrParam['form']['token'] : 0 > 0){
				$validate = new Validate($this->_arrParam['form']);
				$validate->addRule('title','string',array('min' => 1, 'max' => 255), array(),true)
						 ->addRule('description','string',array('min' => 1, 'max' => 1000000), array(),true);
				$validate->run();
				$this->_arrParam['form'] = $validate->getResult();
				if($validate->isValid() == false){
					$this->_view->errors = $validate->showErrors();
				}else{
					$this->_model->editNews($this->_arrParam);
					URL::redirect('admin', 'news', 'index',array(),'news');
				}
			}
		}
		$check = $this->_model->getNews($this->_arrParam);
		empty($check) ? URL::redirect('admin', 'news', 'index',array(),'news') : $this->_view->news = $check ;
		$this->_view->render('tintuc/edit_tintuc');
	}
	public function deleteAction(){
		$this->_model->deleteNews($this->_arrParam);
		URL::redirect('admin', 'news', 'index',array(),'news');
	}
}