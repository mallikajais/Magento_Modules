<?php

namespace Mage\HelloWorld\Controller\Index;
// session_start();
/* like-action*/
class Like extends \Magento\Framework\App\Action\Action
{
	protected $_objectManager;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory,
		\Magento\Framework\View\Result\PageFactory $pageFactory,
		\Magento\Framework\ObjectManagerInterface $objectManager
         )
	{
        
		$this->resultJsonFactory = $resultJsonFactory;
		$this->_objectManager=$objectManager;
		$this->_pageFactory = $pageFactory;
		return parent::__construct($context);
	}

	public function execute()
	{	
		$result= $this->resultJsonFactory->create();
        if ($this->getRequest()->isAjax()) 
        { 
			$postData = $this->_request->getParams();
			
			 $userip=$postData['userip'];
			 $ip=$postData['ip'];
			$id= $postData['id'];
		 	$productid=$postData['productid'];
			 $postData['product_id'] = $postData['productid'];
			 $postData['remote'] = $postData['userip'];
			 $postData['like'] = 1;
			
			// die;
			//  echo "<br>";
			 $like=$postData['like'];
			 $count=0;
			
			// $insert = $this->_objectManager->create('Mage\HelloWorld\Model\Model')->getCollection()->addFieldToFilter('like', array('in' => 1));


			// print_r($insert->getData());
				// filters are  also working but sir previous data m work ni kr rh h kon sa previous data , jo insert h chuka h ?
				// kr to rha h previous data me bhii..  
			// die('s');

			// $select->addFieldToFilter('like',1)";
		
			 
			 /*$model=$this->_objectManager->create('Mage\HelloWorld\Model\Model');
			 $select = $model->getCollection()->getSelect()
            ->from('total_like')
            ->reset(\Zend_Db_Select::COLUMNS)
            ->columns(['remote', new \Zend_Db_Expr('COUNT(`total_like`.`product_id`) as count')])
            ->group('remote');
        

        //  SELECT `sales_order_item`.`created_at`, count(`sales_order_item`.`product_id`) FROM `sales_order_item` GROUP BY `created_at`
        // echo (string) $select;
			 $connection = $model->getResource()->getConnection();
			
        	$raw = $connection->fetchAll($select);
				$count=0;
				foreach($raw as $data){
					$count=$count+1;
					// print_r($data);
					
					
				}
				// var_dump(count([$data]));
				echo $count;*/
				// die;


				$this->_resources = \Magento\Framework\App\ObjectManager::getInstance()
				->get('Magento\Framework\App\ResourceConnection');
				$connection= $this->_resources->getConnection();
				$themeTable = $this->_resources->getTableName('total_like');
				$insert = $this->_objectManager->create('Mage\HelloWorld\Model\Model');
	
				$insert->setData($postData);
				$insert->setLike(1);
				$insert->setremote($userip);
				$insert->setproduct_id($productid);
				
				$insert->save();
			if ($userip!=$ip){

				$count=$count+1;
				$message = $this->_objectManager->create('Mage\HelloWorld\Model\Model');
				$message->setLike(1);
				$message->setremote($userip);
				$message->setproduct_id($productid);
				$message->save();
				// echo $collection;
				
			}
			elseif(($userip==$ip)&& ($like==1)){

				$count=$count+1;
				$message = $this->_objectManager->create('Mage\HelloWorld\Model\Model')->load($id);
				$message->setLike(1);
				$message->setproduct_id($productid);
				$message->save();
				// echo $collection;
			
			
			}
			else{
				// echo $collection;
			}
			
        }
	
		
	}
}
