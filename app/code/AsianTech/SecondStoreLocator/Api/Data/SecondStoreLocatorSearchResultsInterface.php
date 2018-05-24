<?php


namespace AsianTech\SecondStoreLocator\Api\Data;

interface SecondStoreLocatorSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{


    /**
     * Get SecondStoreLocator list.
     * @return \AsianTech\SecondStoreLocator\Api\Data\SecondStoreLocatorInterface[]
     */
    public function getItems();

    /**
     * Set id list.
     * @param \AsianTech\SecondStoreLocator\Api\Data\SecondStoreLocatorInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
