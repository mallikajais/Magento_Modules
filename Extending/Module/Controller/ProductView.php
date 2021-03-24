<?php

namespace Extending\Module\Controller;

class ProductView
{
    public function aroundExecute(\Magento\Catalog\Controller\Product\View $subject, \Closure $proceed)
    {
        // logging to test override
//        die('mm');
        $logger = \Magento\Framework\App\ObjectManager::getInstance()->get('\Psr\Log\LoggerInterface');
        $logger->debug(__METHOD__ . ' - ' . __LINE__);

        // call the core observed function
        $returnValue = $proceed();

        // logging to test override
        $logger->debug(__METHOD__ . ' - ' . __LINE__);

        return $returnValue;
    }

}
?>
