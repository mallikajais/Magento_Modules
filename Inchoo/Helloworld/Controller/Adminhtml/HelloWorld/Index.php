<?php
namespace Inchoo\Helloworld\Controller\Adminhtml\HelloWorld;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;


class Index extends Action implements HttpGetActionInterface
{
    const MENU_ID = 'Inchoo_Helloworld::greetings_helloworld';


    protected $resultPageFactory;

   
    public function __construct(
       
        Context $context,
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context);

        $this->resultPageFactory = $resultPageFactory;
    }

   
    public function execute()
    {   
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu(static::MENU_ID);
        $resultPage->getConfig()->getTitle()->prepend(__('Hello World'));

        return $resultPage;
    }
        /**
     * IsALLowed
     * @return boolean
     */
    public function _isAllowed()
    {
        return true;
    }
}
