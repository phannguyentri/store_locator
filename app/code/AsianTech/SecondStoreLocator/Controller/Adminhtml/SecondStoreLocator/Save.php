<?php


namespace AsianTech\SecondStoreLocator\Controller\Adminhtml\SecondStoreLocator;

use Magento\Framework\Exception\LocalizedException;

class Save extends \Magento\Backend\App\Action
{

    protected $dataPersistor;

    /**
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\App\Request\DataPersistorInterface $dataPersistor
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\App\Request\DataPersistorInterface $dataPersistor
    ) {
        $this->dataPersistor = $dataPersistor;
        parent::__construct($context);
    }

    /**
     * Save action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        $data = $this->getRequest()->getPostValue();
        if ($data) {
            $id = $this->getRequest()->getParam('secondstorelocator_id');
        
            $model = $this->_objectManager->create('AsianTech\SecondStoreLocator\Model\SecondStoreLocator')->load($id);
            if (!$model->getId() && $id) {
                $this->messageManager->addErrorMessage(__('This Secondstorelocator no longer exists.'));
                return $resultRedirect->setPath('*/*/');
            }
        
            $model->setData($data);
        
            try {
                $model->save();
                $this->messageManager->addSuccessMessage(__('You saved the Secondstorelocator.'));
                $this->dataPersistor->clear('asiantech_secondstorelocator_secondstorelocator');
        
                if ($this->getRequest()->getParam('back')) {
                    return $resultRedirect->setPath('*/*/edit', ['secondstorelocator_id' => $model->getId()]);
                }
                return $resultRedirect->setPath('*/*/');
            } catch (LocalizedException $e) {
                $this->messageManager->addErrorMessage($e->getMessage());
            } catch (\Exception $e) {
                $this->messageManager->addExceptionMessage($e, __('Something went wrong while saving the Secondstorelocator.'));
            }
        
            $this->dataPersistor->set('asiantech_secondstorelocator_secondstorelocator', $data);
            return $resultRedirect->setPath('*/*/edit', ['secondstorelocator_id' => $this->getRequest()->getParam('secondstorelocator_id')]);
        }
        return $resultRedirect->setPath('*/*/');
    }
}
