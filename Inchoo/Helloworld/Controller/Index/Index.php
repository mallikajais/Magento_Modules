<?php
 //action
namespace Inchoo\Helloworld\Controller\Index;
 
use Magento\Framework\App\Action\Context;
 
class Index extends \Magento\Framework\App\Action\Action
{
    // protected $_resultPageFactory;
    protected $_objectFactory;
    protected $_pageFactory;

	protected $_modelFactory;
 
    public function __construct(Context $context,
    \Magento\Framework\ObjectManagerInterface $objectManager ,
    \Magento\Framework\View\Result\PageFactory $pageFactory,
	\Inchoo\Helloworld\Model\ModelFactory $modelFactory
    // \Magento\Framework\View\Result\PageFactory $resultPageFactory
    )
    {
        // $this->_resultPageFactory = $resultPageFactory;
        $this->_objectManager=$objectManager;
        $this->_pageFactory=$pageFactory;
        $this->_modelFactory=$modelFactory;
        return parent::__construct($context);
    }

 
    public function execute()
    {   
        
        //Curd Operation insert,update,delete
        $message = $this->_objectManager->create('Inchoo\Helloworld\Model\Model')->load(8);
        $message->setMessage('Magento10');
        $message->setversion('0.0.3');
        $message->delete();
        // $message->save();
        
        
        

        // $resultPage = $this->_resultPageFactory->create();
       

        // /*for fetching data
        $model=$this->_modelFactory->create();/*to create model object*/
         // return $resultPage;
        $collection = $model->getCollection();
		foreach($collection as $item){
			echo "<pre>";
			print_r($item->getData());
			echo "</pre>";
		}
		exit();
		return $this->_pageFactory->create();
    }
        
    
}

