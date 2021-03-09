<?php

namespace Learning\GreetingMessage\Model;

class Model extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface, \Learning\GreetingMessage\Model\Api\Data\ModelInterface{

    const CACHE_TAG = 'inchoo_model';

    protected function _construct(){
        $this->_init('Learning\GreetingMessage\Model\ResourceModel\Model');
    }

    public function getIdentities(){
        return [self::CACHE_TAG . '_' . $this->getId()];
    }


}