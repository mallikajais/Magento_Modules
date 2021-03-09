<?php

namespace Inchoo\Helloworld\Setup;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;


class InstallSchema implements InstallSchemaInterface
{
    
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
         
          $table = $setup->getConnection()
              ->newTable($setup->getTable('text_message'))
              ->addColumn(
                  'text_id',
                  \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                  null,
                  ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
                  'Text ID'
              )
              ->addColumn(
                  'message',
                  \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                  255,
                  ['nullable' => false, 'default' => ''],
                    'Message'
              )->setComment("Text Message table");
          $setup->getConnection()->createTable($table);
      }
}
