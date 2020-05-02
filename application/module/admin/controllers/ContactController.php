<?php
class ContactController extends Controller{
	
	public function __construct($arrParams){
		parent::__construct($arrParams);
		$this->_templateObj->setFolderTemplate('admin/main/');
		$this->_templateObj->setFileTemplate('index.php');
		$this->_templateObj->setFileConfig('template.ini');
		$this->_templateObj->load();
	}
	// hien thi tat ca banner
	public function indexAction(){
		$this->_view->contact 		= $this->_model->getAllContact();
		$this->_view->render('contact/view_contact');
	}
	// them banner
	public function addAction(){
		if(isset($this->_arrParam['form'])){
			if(isset($this->_arrParam['form']['token'])?$this->_arrParam['form']['token']:0 > 0){
				$validate = new Validate($this->_arrParam['form']);
				$validate->addRule('contact_name','string',array('min' => 1, 'max' => 255), array(),true);
				$validate->run();
				$this->_arrParam['form'] = $validate->getResult();
				if($validate->isValid() == false){
					$this->_view->errors = $validate->showErrors();
				}else{
					$this->_model->addContact($this->_arrParam);
					URL::redirect('admin', 'contact', 'index');
				}
			}
		}
		$this->_view->render('contact/add_contact');
	}
	// chinh sua banner
	public function editAction(){
		if(isset($this->_arrParam['form'])){
			if(isset($this->_arrParam['form']['token'])?$this->_arrParam['form']['token']:0 > 0){
				$validate = new Validate($this->_arrParam['form']);
				$validate->addRule('contact_name','string',array('min' => 1, 'max' => 255), array(),true);
				$validate->run();
				$this->_arrParam['form'] = $validate->getResult();
				if($validate->isValid() == false){
					$this->_view->errors = $validate->showErrors();
				}else{
					$this->_model->editContact($this->_arrParam);
					URL::redirect('admin', 'contact', 'index');
				}
			}
		}
		$check = $this->_model->getContact_id($this->_arrParam);
		empty($check) ? URL::redirect('admin', 'category', 'index') : $this->_view->category = $check ;
		$this->_view->render('contact/edit_contact');
	}
	public function deleteAction(){
		$this->_model->deleteContact($this->_arrParam);
		URL::redirect('admin', 'contact', 'index');
	}
}