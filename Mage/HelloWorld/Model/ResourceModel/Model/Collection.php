<?php
namespace Mage\HelloWorld\Model\ResourceModel\Model;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{ 
	protected $_idFieldName = 'id';
	protected $_eventPrefix = 'mage_helloworld_model_collection';
	protected $_eventObject = 'model_collection';

	
	//  Define resource model

	protected function _construct()
	{ 
		
		$this->_init('Mage\HelloWorld\Model\Model', 'Mage\HelloWorld\Model\ResourceModel\Model');
	}
}