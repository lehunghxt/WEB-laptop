<?php
class IndexController extends Controller{
	
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
	//  hien thi tat ca san pham
	public function indexAction(){
		if(isset($_GET['fSearch'])){
			$name = $this->_arrParam['fSearch']['name'];
			$this->_view->productAll  = $this->_model->searchProduct($name);
		}elseif(isset($_POST['filter'])){
			$filter = $this->_arrParam['filter'];
			$this->_view->productAll  = $this->_model->filterProduct($filter);
		}else{
			$this->_view->productAll  = $this->_model->getAllProduct();
		}
		$this->_view->categories = $this->_model->getAllCategory();
		$this->_view->cpus 		 = $this->_model->getAllCPU();
		$this->_view->vgas 		 = $this->_model->getAllVGA();
		$this->_view->monitors   = $this->_model->getAllMonitor();
		$this->_view->render('index/index');
	}
	// chi tiet mot san pham
	public function detailAction(){
		if(empty($this->_model->getProduct($this->_arrParam))){
			URL::redirect('default', 'index', 'index',array(),'home');
		}
		
		$this->_view->title = $this->_model->getProduct($this->_arrParam)['product_name'];
		$this->_view->product  = $this->_model->getProduct($this->_arrParam);
		$this->_view->render('index/detail');
	}
	// tim san pham theo loai san pham
	public function cateDetailAction(){
		if(empty($this->_model->getProductInCate($this->_arrParam))){
			URL::redirect('default', 'index', 'index',array(),'home');
		}
		$this->_view->productAll  = $this->_model->getProductInCate($this->_arrParam);
		$this->_view->render('index/listing');
	}
}