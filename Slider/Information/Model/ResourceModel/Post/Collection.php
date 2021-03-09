<?php
namespace Slider\Information\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'slider_id';
	protected $_eventPrefix = 'slider_information_collection';
	protected $_eventObject = 'post_collection';

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{   
		$this->_init('Slider\Information\Model\Post', 'Slider\Information\Model\ResourceModel\Post');
	}

}
