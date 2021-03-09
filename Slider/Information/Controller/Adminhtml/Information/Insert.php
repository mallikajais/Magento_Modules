<?php

namespace Slider\Information\Controller\Adminhtml\Information;

use Magento\Framework\Session\SessionManagerInterface;

class Insert extends \Magento\Framework\App\Action\Action{
    protected $_pageFactory;
 
	protected $_postFactory;
    protected $_sessionManager;

    public function __construct(\Magento\Framework\App\Action\Context $context,\Magento\Framework\View\Result\PageFactory $pageFactory,
    \Slider\Information\Model\PostFactory $postFactory,
  
    SessionManagerInterface $sessionManager
    ){
        
        $this->_pageFactory=$pageFactory;
        $this->_postFactory = $postFactory;
        $this->_sessionManager = $sessionManager;
     
       
        return parent::__construct($context);
    }

	public function execute()
	{
        // return $this->_pageFactory->create();
        
        $resultRedirect = $this->resultRedirectFactory->create();
        $model = $this->_postFactory->create();
        // $data = $this->getRequest()->getPost();
       $data= $this->getRequest()->getParams();
       $image=$this->getRequest()->getFiles();
    
    //  $imagePath=$data['slider_image'][0]['url'];
    //    die;
     
       $insert = $this->_objectManager->create('Slider\Information\Model\Post');
    //    $insert->setImageToMediaGallery($imagePath, false, false);
    //    $insert->save();die;
   

       
        // $query['slider_image'] = $this->getRequest()->getPostValue("slider_image");
        // $query['slider_image_name'] = $this->getRequest()->getPostValue("slider_image_name");
        // $query['slider_description']= $this->getRequest()->getPostValue("slider_description");
        // $query['slider_sort_order'] = $this->getRequest()->getPostValue("slider_sort_order");
        // $query['slider_store_id']=$this->getRequest()->getPostValue("slider_store_id");
      
        // if ($query){
        //    print_r($data);
     
            $insert->setslider_image(@$data['slider_image'][0]['name']);
            $insert->setslider_image_name(@$data['slider_image'][0]['url']);
            
            $insert->setslider_description(@$data['slider_description']);

            $insert->setslider_sort_order(@$data['slider_sort_order']);
            $insert->setslider_store_id(@$data['slider_store_id']);
            // print_r((@$data['slider_image'][0]['name']));
            // die;
                print_r($insert->getData());
            if($insert->save($data)){
                die('saved');
                $this->messageManager->addSuccessMessage(__('You saved the data.'));
            }else{
                $this->messageManager->addErrorMessage(__('Data was not saved.'));
            }
        // $model->save();
        // }
        
        $this->_redirect('slider/information/index');
       

		
	}
}
