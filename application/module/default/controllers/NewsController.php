<?php
class NewsController extends Controller{
	
	public function __construct($arrParams){
		parent::__construct($arrParams);
		$this->_templateObj->setFolderTemplate('default/main/');
		$this->_templateObj->setFileTemplate('index.php');
		$this->_templateObj->setFileConfig('template.ini');
		$this->_templateObj->load();
		$this->_view->sidebar     = $this->_model->getSidebar();
		$this->_view->sliders     = $this->_model->getBanner();
		$this->_view->categories  = $this->_model->getCategory();
	}
	public function indexAction(){
		$this->_view->news  = $this->_model->getAllNews();
		$this->_view->render('news/index');
	}
	public function detailAction(){
		if(empty($this->_model->getNews($this->_arrParam))){
			URL::redirect('default', 'index', 'index',array(),'tintuc');
		}
		$this->_view->title = $this->_model->getNews($this->_arrParam)['title']; 
		$this->_view->new  = $this->_model->getNews($this->_arrParam);
		$this->_view->render('news/detail');
	}
	
}