<?php
namespace Mage\HelloWorld\Model;
class Model extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface,
\Mage\HelloWorld\Model\Api\Data\ModelInterface
{
	const CACHE_TAG = 'mage_helloworld_model';

	protected $_cacheTag = 'mage_helloworld_model';

	protected $_eventPrefix = 'mage_helloworld_model';

	protected function _construct()
	{ 
        //   die("model");
		$this->_init('Mage\HelloWorld\Model\ResourceModel\Model');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}
}