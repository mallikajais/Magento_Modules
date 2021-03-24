<?php

namespace Extending\Module\Model;

class Product
{
    public function afterGetPrice(\Magento\Catalog\Model\Product   $product)
    {
        $logger = \Magento\Framework\App\ObjectManager::getInstance()->get('\Psr\Log\LoggerInterface');
        $logger->debug('Price Override22');
        $product += 1000;
        return 5000.0000;
    }
}



