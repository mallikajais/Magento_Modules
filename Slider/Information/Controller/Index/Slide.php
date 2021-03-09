<?php

namespace Slider\Information\Controller\Index;


class Slide extends \Magento\Framework\App\Action\Action{
	protected $_pageFactory;
	protected $_objectManager;
	protected $_modelFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\ObjectManagerInterface $objectManager ,
   			\Inchoo\Helloworld\Model\ModelFactory $modelFactory,
		\Magento\Framework\View\Result\PageFactory $pageFactory)
	{
		$this->_pageFactory = $pageFactory;
		$this->_objectManager=$objectManager;
		$this->_modelFactory=$modelFactory;
		return parent::__construct($context);
	}

	public function execute()
	{

		// $post = $this->_postFactory->create();
		// $collection = $post->getCollection();
		// foreach($collection as $item){
		// 	echo "<pre>";
		// 	print_r($item->getData());
		// 	echo "</pre>";
		// }
		// exit();
		return $this->_pageFactory->create();
	}
}
