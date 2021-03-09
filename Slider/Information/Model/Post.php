<?php
namespace Slider\Information\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'slider_information_post';

	protected $_cacheTag = 'slider_information_post';

	protected $_eventPrefix = 'slider_information_post';

	protected function _construct()
	{   
        // die("model");
		$this->_init('Slider\Information\Model\ResourceModel\Post');
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