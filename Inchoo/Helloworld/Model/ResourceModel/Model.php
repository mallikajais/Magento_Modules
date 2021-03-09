<?php

//resource model- Fetch data from DB
namespace Inchoo\Helloworld\Model\ResourceModel;
class Model extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{   
	public function __construct(
		\Magento\Framework\Model\ResourceModel\Db\Context $context
	)
	{
		parent::__construct($context);
	}

	protected function _construct()
	{
		// die("resource");
		$this->_init('text_message', 'text_id');
	}
	
	
	
}