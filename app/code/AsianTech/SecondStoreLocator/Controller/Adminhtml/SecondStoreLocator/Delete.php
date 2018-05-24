<?php


namespace AsianTech\SecondStoreLocator\Controller\Adminhtml\SecondStoreLocator;

class Delete extends \AsianTech\SecondStoreLocator\Controller\Adminhtml\SecondStoreLocator
{

    /**
     * Delete action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        // check if we know what should be deleted
        $id = $this->getRequest()->getParam('secondstorelocator_id');
        if ($id) {
            try {
                // init model and delete
                $model = $this->_objectManager->create('AsianTech\SecondStoreLocator\Model\SecondStoreLocator');
                $model->load($id);
                $model->delete();
                // display success message
                $this->messageManager->addSuccessMessage(__('You deleted the Secondstorelocator.'));
                // go to grid
                return $resultRedirect->setPath('*/*/');
            } catch (\Exception $e) {
                // display error message
                $this->messageManager->addErrorMessage($e->getMessage());
                // go back to edit form
                return $resultRedirect->setPath('*/*/edit', ['secondstorelocator_id' => $id]);
            }
        }
        // display error message
        $this->messageManager->addErrorMessage(__('We can\'t find a Secondstorelocator to delete.'));
        // go to grid
        return $resultRedirect->setPath('*/*/');
    }
}
