<?php

namespace Mage\HelloWorld\Setup;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;


class InstallSchema implements InstallSchemaInterface
{
    
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
         
      $table = $setup->getConnection()
      ->newTable($setup->getTable('total_like'))
      ->addColumn(
          'id',
          \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
          null,
          ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
          'ID'
      )
      ->addColumn(
          'like',
          \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
          null,
          ['nullable' => false, 'default' => ''],
            'Like'
      )->setComment("Total Like table");
          $setup->getConnection()->createTable($table);
      }
}
