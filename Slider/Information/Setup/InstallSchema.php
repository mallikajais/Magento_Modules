<?php

namespace Slider\Information\Setup;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;


class InstallSchema implements InstallSchemaInterface
{
    
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
         
      $table = $setup->getConnection()
      ->newTable($setup->getTable('slider_information'))
      ->addColumn(
          'slider_id',
          \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
          null,
          ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
          'ID'
      )
      ->addColumn(
          'slider_image',
          \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
          null,
          ['nullable' => false, 'default' => ''],
            'slider_image'
      )
      ->addColumn(
        'slider_image_name',
        \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
        null,
        ['nullable' => false, 'default' => ''],
          'slider_image_name'
    )
    ->addColumn(
        'slider_description',
        \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
        null,
        ['nullable' => false, 'default' => ''],
          'slider_description'
    )
    ->addColumn(
        'slider_sort_order',
        \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
        null,
        ['nullable' => false],
          'slider_sort_order'
    )
    
    ->addColumn(
        'slider_store_id',
        \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
        null,
        ['nullable' => false],
          'slider_store_id'
    )
      ->setComment("Slider Information table");
          $setup->getConnection()->createTable($table);
      }
}
