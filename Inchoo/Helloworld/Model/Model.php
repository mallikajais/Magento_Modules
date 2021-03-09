<?php
//model
namespace Inchoo\Helloworld\Model;

class Model extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface, \Inchoo\Helloworld\Model\Api\Data\ModelInterface{

    const CACHE_TAG = 'inchoo_helloworld_model';
    protected $_cacheTag = 'inchoo_helloworld_model';

	protected $_eventPrefix = 'inchoo_helloworld_model';

    protected function _construct(){
        // die("model");
        $this->_init('Inchoo\Helloworld\Model\ResourceModel\Model');
    }

    public function getIdentities(){
    
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
    public function getDefaultValues()
	{
		$values = [];

		return $values;
	}


}