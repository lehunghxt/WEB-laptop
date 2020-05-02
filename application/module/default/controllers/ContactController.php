<?php
class ContactController extends Controller{
	
	public function __construct($arrParams){
		parent::__construct($arrParams);
		$this->_templateObj->setFolderTemplate('default/main/');
		$this->_templateObj->setFileTemplate('index.php');
		$this->_templateObj->setFileConfig('template.ini');
		$this->_templateObj->load();
		$this->_view->sidebar     = $this->_model->getSidebar();
		$this->_view->sliders   = $this->_model->getBanner($this->_arrParam);
		$this->_view->categories  = $this->_model->getCategory($this->_arrParam);
	}
	public function indexAction(){
		$this->_view->contact  = $this->_model->getAllContact();
		$this->_view->render('contact/index');
	}
	
}