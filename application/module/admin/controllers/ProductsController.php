<?php
class ProductsController extends Controller{
	
	public function __construct($arrParams){
		parent::__construct($arrParams);
		$this->_templateObj->setFolderTemplate('admin/main/');
		$this->_templateObj->setFileTemplate('index.php');
		$this->_templateObj->setFileConfig('template.ini');
		$this->_templateObj->load();
	}
	public function indexAction(){
		$this->_view->products 	= $this->_model->getAllProduct();
		$this->_view->render('products/view_products');
	}
	public function addAction(){
		if(isset($this->_arrParam['form'])){
			if(isset($_FILES)) $this->_arrParam['form']['image']  = $_FILES['image'];
			if(isset($this->_arrParam['form']['token'])?$this->_arrParam['form']['token']:0 > 0){
				$validate = new Validate($this->_arrParam['form']);
				$validate->addRule('product_name','string',array('min' => 1, 'max' => 255),true)
						 ->addRule('price','int',array('min' => 1, 'max' => 255),true)
						 ->addRule('quantity','int',array('min' => 1, 'max' => 255),true)
						 ->addRule('description','string',array('min' => 1, 'max' => 10000000000000000),true)
				 		 ->addRule('image', 'file',array('min' => 100, 'max' => 1000000, 'extension' => array('jpg', 'png')));
				$validate->run();
				$this->_arrParam['form'] = $validate->getResult();
				if($validate->isValid() == false){
					$this->_view->errors = $validate->showErrors();
				}else{
					$this->_model->addProduct($this->_arrParam);
					URL::redirect('admin', 'products', 'index',array(),'products');
				}
			}
		}
		$this->_view->categories = $this->_model->getAllCategory();
		$this->_view->cpus 		 = $this->_model->getAllCPU();
		$this->_view->vgas 		 = $this->_model->getAllVGA();
		$this->_view->monitors   = $this->_model->getAllMonitor();
		$this->_view->render('products/add_product');
	}
	public function editAction(){
		if(isset($this->_arrParam['form'])){
			if(isset($this->_arrParam['form']['token'])?$this->_arrParam['form']['token']:0 > 0){
				if(isset($_FILES['image'])) $this->_arrParam['form']['image'] = $_FILES['image'];
				$validate = new Validate($this->_arrParam['form']);
				$validate->addRule('product_name','string',array('min' => 1, 'max' => 255),true)
						 ->addRule('price','int',array('min' => 1, 'max' => 255),true)
						 ->addRule('quantity','int',array('min' => 1, 'max' => 255),true)
						 ->addRule('description','string',array('min' => 1, 'max' => 10000000000000000),true);
				$validate->run();
				$this->_arrParam['form'] = $validate->getResult();
				if($validate->isValid() == false){
					$this->_view->errors = $validate->showErrors();
				}else{
					$this->_model->editProduct($this->_arrParam);
					URL::redirect('admin', 'products', 'index',array(),'products');
				}
			}
		}
		$check = $this->_model->getProduct($this->_arrParam);
		empty($check) ? URL::redirect('admin', 'products', 'index',array(),'products') : $this->_view->product = $check ;
		$this->_view->categories = $this->_model->getAllCategory();
		$this->_view->cpus 		 = $this->_model->getAllCPU();
		$this->_view->vgas 		 = $this->_model->getAllVGA();
		$this->_view->monitors   = $this->_model->getAllMonitor();
		$this->_view->render('products/edit_product');
	}
	public function deleteAction(){
		$this->_model->deleteProduct($this->_arrParam);
		URL::redirect('admin', 'products', 'index',array(),'products');
	}

	public function searchAction(){
		if(isset($this->_arrParam['form'])){
			
		}
		$this->_view->render('products/add_product');
	}
}