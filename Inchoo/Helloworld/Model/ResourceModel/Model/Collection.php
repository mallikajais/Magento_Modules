<?php
namespace Inchoo\Helloworld\Model\ResourceModel\Model;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{ 
	protected $_idFieldName = 'text_id';
	protected $_eventPrefix = 'inchoo_helloworld_model_collection';
	protected $_eventObject = 'model_collection';

	
	//  Define resource model

	protected function _construct()
	{
		$this->_init('Inchoo\Helloworld\Model\Model', 'Inchoo\Helloworld\Model\ResourceModel\Model');
	}
}