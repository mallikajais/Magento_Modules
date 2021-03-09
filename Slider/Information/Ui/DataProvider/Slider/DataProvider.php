<?php
namespace Slider\Information\Ui\DataProvider\Slider;
 
use Slider\Information\Model\ResourceModel\Post\CollectionFactory;
 
class DataProvider extends \Magento\Ui\DataProvider\AbstractDataProvider
{
    /**
     * @param string $name
     * @param string $primaryFieldName
     * @param string $requestFieldName
     * @param CollectionFactory $employeeCollectionFactory
     * @param array $meta
     * @param array $data
     */
    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        CollectionFactory $sliderCollectionFactory,
        array $meta = [],
        array $data = []
    ) {
        $this->collection = $sliderCollectionFactory->create();
    
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }
 
   /**
     * Get data
     *
     * @return array
     */
    public function getData()
    {
        if (!$this->getCollection()->isLoaded()) {
            $this->getCollection()->load();
        }
        $collection = $this->getCollection();
        // print_r($items =$collection->toArray());
        
       
         return $items = $collection->toArray();
        //  print_r([
        //     'totalRecords' => count($this->getCollection()->getData()),
        //     'items' => array_values($items)
        // ]);
        return [
            'totalRecords' => count($this->getCollection()->getData()),
            'items' => array_values($items)
        ];
        
    }
}