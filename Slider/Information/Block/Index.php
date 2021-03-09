<?php

namespace Slider\Information\Block;

use Magento\Framework\View\Element\Template;

class Index extends \Magento\Framework\View\Element\Template
{
	
		protected $_productRepository;
	
		public $_objectManager;
			
		public function __construct(
			\Magento\Backend\Block\Template\Context $context,	
			\Magento\Catalog\Model\ProductRepository $productRepository,
			\Magento\Framework\ObjectManagerInterface $_objectManager,
			
			array $data = []
		)
		{
			
			$this->_objectManager = $_objectManager;
			$this->_productRepository = $productRepository;
			parent::__construct($context, $data);
		}
		
		public function getProductById($productid)
		{
			return $this->_productRepository->getById($productid);
		}
}   

    
   
    

