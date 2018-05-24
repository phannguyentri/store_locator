<?php


namespace AsianTech\SecondStoreLocator\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface SecondStoreLocatorRepositoryInterface
{


    /**
     * Save SecondStoreLocator
     * @param \AsianTech\SecondStoreLocator\Api\Data\SecondStoreLocatorInterface $secondStoreLocator
     * @return \AsianTech\SecondStoreLocator\Api\Data\SecondStoreLocatorInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(
        \AsianTech\SecondStoreLocator\Api\Data\SecondStoreLocatorInterface $secondStoreLocator
    );

    /**
     * Retrieve SecondStoreLocator
     * @param string $secondstorelocatorId
     * @return \AsianTech\SecondStoreLocator\Api\Data\SecondStoreLocatorInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($secondstorelocatorId);

    /**
     * Retrieve SecondStoreLocator matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \AsianTech\SecondStoreLocator\Api\Data\SecondStoreLocatorSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete SecondStoreLocator
     * @param \AsianTech\SecondStoreLocator\Api\Data\SecondStoreLocatorInterface $secondStoreLocator
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(
        \AsianTech\SecondStoreLocator\Api\Data\SecondStoreLocatorInterface $secondStoreLocator
    );

    /**
     * Delete SecondStoreLocator by ID
     * @param string $secondstorelocatorId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($secondstorelocatorId);
}
