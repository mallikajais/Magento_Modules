<?php

namespace Inchoo\Helloworld\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;


class InstallData implements InstallDataInterface
{

  
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
          
          $data = [
              ['message' => 'Magento1'],
              ['message' => 'Magento2']
          ];
          foreach ($data as $bind) {
              $setup->getConnection()
                ->insertForce($setup->getTable('text_message'), $bind);
          }
    }
}
