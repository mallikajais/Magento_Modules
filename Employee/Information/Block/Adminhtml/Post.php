<?php
namespace Employee\Information\Block\Adminhtml;

class Post extends \Magento\Backend\Block\Widget\Grid\Container
{

    protected function _construct()
    {
        $this->_controller = 'adminhtml_post';
        $this->_blockGroup = 'Employee_Information';
        $this->_headerText = __('Posts');
        $this->_addButtonLabel = __('Add New Attribute');
        parent::_construct();
    }
}
