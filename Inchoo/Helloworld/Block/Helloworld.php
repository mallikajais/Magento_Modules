<?php

namespace Inchoo\Helloworld\Block;
// use  Inchoo\Helloworld\Model\Model;
use Magento\Framework\View\Element\Template;

class Helloworld extends Template
{
    protected $_productRepository;
    
    public function __construct(\Magento\Framework\View\Element\Template\Context $context,
    \Magento\Catalog\Model\ProductRepository $productRepository,
    array $data=[]
    // \Inchoo\Helloworld\Model\PostFactory $postFactory
    )
	{
		// $this->model = $model;
        // $this->_postFactory = $postFactory;
        $this->_productRepository=$productRepository;
		parent::__construct($context,$data);
	}
    public function getHelloWorldTxt()
    {
        return __('Finally worked!');
    }
    public function getProductById($id)
	{
		return $this->_productRepository->getById($id);
	}
	
	public function getProductBySku($sku)
	{
		return $this->_productRepository->get($sku);
	}

    
   
    

} 
