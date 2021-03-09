<?php
namespace Mage\HelloWorld\Block;
class Index extends \Magento\Framework\View\Element\Template
{	 
	// use \Mage\HelloWorld\Model\Model;
    protected $_productRepository;

	public $_objectManager;
		
	public function __construct(
		\Magento\Backend\Block\Template\Context $context,	
		\Magento\Catalog\Model\ProductRepository $productRepository,
		\Magento\Framework\ObjectManagerInterface $_objectManager,
		// Model $model,
		array $data = []
	)
	{
		// $this->model = $model;
		$this->_objectManager = $_objectManager;
		$this->_productRepository = $productRepository;
		parent::__construct($context, $data);
	}
	
	public function getProductById($productid)
	{
		return $this->_productRepository->getById($productid);
	}
	
	public function getProductBySku($sku)
	{
		return $this->_productRepository->get($sku);
	}
	public function getuseripData()
    {
        return $this->getuserip();
    }

    public function getipData()
    {
        return $this->getip();
    }
}