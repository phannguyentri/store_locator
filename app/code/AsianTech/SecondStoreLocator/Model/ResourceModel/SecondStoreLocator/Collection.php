<?php


namespace AsianTech\SecondStoreLocator\Model\ResourceModel\SecondStoreLocator;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            'AsianTech\SecondStoreLocator\Model\SecondStoreLocator',
            'AsianTech\SecondStoreLocator\Model\ResourceModel\SecondStoreLocator'
        );
    }
}
