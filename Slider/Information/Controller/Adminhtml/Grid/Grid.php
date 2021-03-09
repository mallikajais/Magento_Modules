<?php
/**
 *
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Slider\Information\Controller\Adminhtml\Grid;

class Grid extends  \Magento\Backend\App\Action
{
    /**
     * Queue list Ajax action
     *
     * @return void
     */
    public function execute()
    {
       $this->_view->loadLayout(false);
        $this->_view->getLayout()->getMessagesBlock()->setMessages($this->messageManager->getMessages(true));
        $this->_view->renderLayout();
    }
}