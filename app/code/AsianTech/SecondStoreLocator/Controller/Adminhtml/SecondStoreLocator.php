<?php


namespace AsianTech\SecondStoreLocator\Controller\Adminhtml;

abstract class SecondStoreLocator extends \Magento\Backend\App\Action
{

    protected $_coreRegistry;
    const ADMIN_RESOURCE = 'AsianTech_SecondStoreLocator::top_level';

    /**
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\Registry $coreRegistry
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\Registry $coreRegistry
    ) {
        $this->_coreRegistry = $coreRegistry;
        parent::__construct($context);
    }

    /**
     * Init page
     *
     * @param \Magento\Backend\Model\View\Result\Page $resultPage
     */
    public function initPage($resultPage)
    {
        $resultPage->setActiveMenu(self::ADMIN_RESOURCE)
            ->addBreadcrumb(__('AsianTech'), __('AsianTech'))
            ->addBreadcrumb(__('Secondstorelocator'), __('Secondstorelocator'));
        return $resultPage;
    }
}
