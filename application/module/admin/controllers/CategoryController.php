<?php
class CategoryController extends Controller{
	
	public function __construct($arrParams){
		parent::__construct($arrParams);
		$this->_templateObj->setFolderTemplate('admin/main/');
		$this->_templateObj->setFileTemplate('index.php');
		$this->_templateObj->setFileConfig('template.ini');
		$this->_templateObj->load();
	}
	public function indexAction(){
		
		$this->_view->categories = $this->_model->getAllCategory();
		$this->_view->render('category/view_categories');
	}
	public function addAction(){
		if(isset($this->_arrParam['form'])){
			if(isset($this->_arrParam['form']['token'])?$this->_arrParam['form']['token']:0 > 0){
				$validate = new Validate($this->_arrParam['form']);
				$validate->addRule('category_name','string',array('min' => 1, 'max' => 255), array(),true)
						 ->addRule('description','string',array('min' => 1, 'max' => 255), array(),true);
				$validate->run();
				$this->_arrParam['form'] = $validate->getResult();
				if($validate->isValid() == false){
					$this->_view->errors = $validate->showErrors();
				}else{
					$this->_model->addCategory($this->_arrParam);
					URL::redirect('admin', 'category', 'index',array(),'category');
				}
			}
		}
		$this->_view->render('category/add_category');
	}
	public function editAction(){
		if(isset($this->_arrParam['form'])){
			if(isset($this->_arrParam['form']['token'])?$this->_arrParam['form']['token']:0 > 0){
				$validate = new Validate($this->_arrParam['form']);
				$validate->addRule('category_name', 'string',array('min' => 1, 'max' => 255),array(),true)
						 ->addRule('description', 'string',array('min' => 1, 'max' => 255),array(),true);
				$validate->run();
				$this->_arrParam['form'] = $validate->getResult();
				if($validate->isValid() == false){
					$this->_view->errors = $validate->showErrors();
				}else{
					$this->_model->editCategory($this->_arrParam);
					URL::redirect('admin', 'category', 'index',array(),'category');
				}
			}
		}
		$check = $this->_model->getCategory_id($this->_arrParam);
		empty($check) ? URL::redirect('admin', 'category', 'index') : $this->_view->category = $check ;
		$this->_view->render('category/edit_category');
	}
	public function deleteAction(){
		$this->_model->deleteCategory($this->_arrParam);
		URL::redirect('admin', 'category', 'index',array(),'category');
	}
}
