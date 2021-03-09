<?php
namespace Mage\HelloWorld\Controller\Index;

class Test extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;
	protected $_objectManager;
	protected $_modelFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\ObjectManagerInterface $objectManager ,
   			\Inchoo\Helloworld\Model\ModelFactory $modelFactory,
		\Magento\Framework\View\Result\PageFactory $pageFactory)
	{
		$this->_pageFactory = $pageFactory;
		$this->_objectManager=$objectManager;
		$this->_modelFactory=$modelFactory;
		return parent::__construct($context);
	}

	public function execute()
	{
		//  echo "Hello World";
		// exit; 
		// return $this->_pageFactory->create();
		// $remoteip = \Magento\Framework\App\ObjectManager::getInstance();
		// $remote = $remoteip->get('Magento\Framework\HTTP\PhpEnvironment\RemoteAddress');
		// $ip= $remote->getRemoteAddress();
		// echo $ip;
		 
		
	    // $message = $this->_objectManager->create('Mage\HelloWorld\Model\Model')->load();
        // $message->setproduct_id(1);
		// $message->setremote($ip);
        // $message->save();

	
	//    exit();
	   return $this->_pageFactory->create();
	}
}
