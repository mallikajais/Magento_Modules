<?php
namespace Employee\Information\Block\Adminhtml\Employee;

class Edit extends \Magento\Backend\Block\Widget\Form\Container
{
    /**
     * Core registry
     *
     * @var \Magento\Framework\Registry
     */
    protected $_coreRegistry = null;

    /**
     * @param \Magento\Backend\Block\Widget\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Widget\Context $context,
        \Magento\Framework\Registry $registry,
        array $data = []
    ) {

        $this->_coreRegistry = $registry;
        parent::__construct($context, $data);
    }

    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_objectId = 'entity_id';
        $this->_blockGroup = 'employee_information';
        $this->_controller = 'adminhtml_employee';

        parent::_construct();

        $this->updateButton('save', 'label', __('Save Employee'));

        $this->addButton(
            'delete',
            [
                'label' => __('Delete'),
                'class' => 'delete',
                'onclick' => 'deleteConfirm(\'' . __(
                        'Are you sure you want to do this?'
                    ) . '\', \'' . $this->getDeleteUrl() . '\')',
                'area' => 'adminhtml'
            ],
            -1
        );

        $this->addButton(
            'save_and_edit_button',
            [
                'label' => __('Save and Continue Edit'),
                'class' => 'save',
                'onclick' => 'saveAndContinueEdit(\'' . $this->getSaveAndContinueUrl('edit') . '\')',
            ]
        );


        $this->addButton(
            'save_and_upload_button',
            [
                'label' => __('Save and Manage Product'),
                'class' => 'save',
                'onclick' => 'saveAndContinueEdit(\'' . $this->getSaveAndContinueUrl('upload') . '\')',
            ]
        );

        $this->_formScripts[] = "
			function saveAndContinueEdit(urlTemplate) {
                var editForm = jQuery('#edit_form');
				editForm.attr('action', urlTemplate);
				editForm.submit();
			}
        ";

    }

    /**
     * {@inheritdoc}
     */
    public function addButton($buttonId, $data, $level = 0, $sortOrder = 0, $region = 'toolbar')
    {

        if ($this->getRequest()->getParam('popup')) {
            $region = 'header';
        }
        parent::addButton($buttonId, $data, $level, $sortOrder, $region);
    }



    public function getSaveAndContinueUrl($back)
    {

        return $this->getUrl('*/*/save', array(
            '_current'   => true,
            'back'       => $back,
            'active_tab' => null,
            'pcode' => $this->getRequest()->getParam('pcode',false),
            'section'=>'ced_csmarketplace',
            'website' => $this->getRequest()->getParam('website',false),
        ));

    }
    /**
     * Retrieve header text
     *
     * @return \Magento\Framework\Phrase
     */
    public function getHeaderText()
    {

        if($this->_coreRegistry->registry('profile_data') && $this->_coreRegistry->registry('profile_data')->getId() ) {
            return __('Edit Profile "%s" ', $this->escapeHtml($this->_coreRegistry->registry('profile_data')->getName()));
        } else {
            return __('Add Employee');
        }
    }
    /**
     * Retrieve URL for validation
     *
     * @return string
     */
//    public function getValidationUrl()
//    {
//    	return $this->getUrl('*/*/validate', ['_current' => true]);
//    }

    /**
     * Retrieve URL for save
     *
     * @return string
     */
    public function getSaveUrl()
    {
        return $this->getUrl(
            '*/*/save',
            ['_current' => true, 'back' => null, 'pcode' => $this->getRequest()->getParam('pcode')]
        );
    }
    public function getDeleteUrl()
    {
        return $this->getUrl(
            '*/*/delete',
            ['back' => null, 'pcode' => $this->getRequest()->getParam('pcode')]
        );
    }

    /**
     * Retrieve URL for validation
     *
     * @return string
     */
    public function getValidationUrl()
    {
        return $this->getUrl('*/*/validate', ['_current' => true]);
    }
}



