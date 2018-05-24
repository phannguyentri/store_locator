<?php


namespace AsianTech\SecondStoreLocator\Model\ResourceModel;

class SecondStoreLocator extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('asiantech_secondstorelocator_secondstorelocator', 'secondstorelocator_id');
    }
}
