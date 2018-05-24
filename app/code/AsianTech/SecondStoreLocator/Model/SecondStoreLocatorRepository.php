<?php


namespace AsianTech\SecondStoreLocator\Model;

use AsianTech\SecondStoreLocator\Model\ResourceModel\SecondStoreLocator\CollectionFactory as SecondStoreLocatorCollectionFactory;
use Magento\Framework\Api\SortOrder;
use AsianTech\SecondStoreLocator\Api\Data\SecondStoreLocatorSearchResultsInterfaceFactory;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Framework\Exception\CouldNotSaveException;
use AsianTech\SecondStoreLocator\Model\ResourceModel\SecondStoreLocator as ResourceSecondStoreLocator;
use Magento\Framework\Api\DataObjectHelper;
use AsianTech\SecondStoreLocator\Api\Data\SecondStoreLocatorInterfaceFactory;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Reflection\DataObjectProcessor;
use AsianTech\SecondStoreLocator\Api\SecondStoreLocatorRepositoryInterface;

class SecondStoreLocatorRepository implements secondStoreLocatorRepositoryInterface
{

    protected $dataSecondStoreLocatorFactory;

    protected $secondStoreLocatorCollectionFactory;

    protected $resource;

    protected $secondStoreLocatorFactory;

    private $storeManager;

    protected $dataObjectProcessor;

    protected $searchResultsFactory;

    protected $dataObjectHelper;


    /**
     * @param ResourceSecondStoreLocator $resource
     * @param SecondStoreLocatorFactory $secondStoreLocatorFactory
     * @param SecondStoreLocatorInterfaceFactory $dataSecondStoreLocatorFactory
     * @param SecondStoreLocatorCollectionFactory $secondStoreLocatorCollectionFactory
     * @param SecondStoreLocatorSearchResultsInterfaceFactory $searchResultsFactory
     * @param DataObjectHelper $dataObjectHelper
     * @param DataObjectProcessor $dataObjectProcessor
     * @param StoreManagerInterface $storeManager
     */
    public function __construct(
        ResourceSecondStoreLocator $resource,
        SecondStoreLocatorFactory $secondStoreLocatorFactory,
        SecondStoreLocatorInterfaceFactory $dataSecondStoreLocatorFactory,
        SecondStoreLocatorCollectionFactory $secondStoreLocatorCollectionFactory,
        SecondStoreLocatorSearchResultsInterfaceFactory $searchResultsFactory,
        DataObjectHelper $dataObjectHelper,
        DataObjectProcessor $dataObjectProcessor,
        StoreManagerInterface $storeManager
    ) {
        $this->resource = $resource;
        $this->secondStoreLocatorFactory = $secondStoreLocatorFactory;
        $this->secondStoreLocatorCollectionFactory = $secondStoreLocatorCollectionFactory;
        $this->searchResultsFactory = $searchResultsFactory;
        $this->dataObjectHelper = $dataObjectHelper;
        $this->dataSecondStoreLocatorFactory = $dataSecondStoreLocatorFactory;
        $this->dataObjectProcessor = $dataObjectProcessor;
        $this->storeManager = $storeManager;
    }

    /**
     * {@inheritdoc}
     */
    public function save(
        \AsianTech\SecondStoreLocator\Api\Data\SecondStoreLocatorInterface $secondStoreLocator
    ) {
        /* if (empty($secondStoreLocator->getStoreId())) {
            $storeId = $this->storeManager->getStore()->getId();
            $secondStoreLocator->setStoreId($storeId);
        } */
        try {
            $secondStoreLocator->getResource()->save($secondStoreLocator);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__(
                'Could not save the secondStoreLocator: %1',
                $exception->getMessage()
            ));
        }
        return $secondStoreLocator;
    }

    /**
     * {@inheritdoc}
     */
    public function getById($secondStoreLocatorId)
    {
        $secondStoreLocator = $this->secondStoreLocatorFactory->create();
        $secondStoreLocator->getResource()->load($secondStoreLocator, $secondStoreLocatorId);
        if (!$secondStoreLocator->getId()) {
            throw new NoSuchEntityException(__('SecondStoreLocator with id "%1" does not exist.', $secondStoreLocatorId));
        }
        return $secondStoreLocator;
    }

    /**
     * {@inheritdoc}
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $criteria
    ) {
        $collection = $this->secondStoreLocatorCollectionFactory->create();
        foreach ($criteria->getFilterGroups() as $filterGroup) {
            $fields = [];
            $conditions = [];
            foreach ($filterGroup->getFilters() as $filter) {
                if ($filter->getField() === 'store_id') {
                    $collection->addStoreFilter($filter->getValue(), false);
                    continue;
                }
                $fields[] = $filter->getField();
                $condition = $filter->getConditionType() ?: 'eq';
                $conditions[] = [$condition => $filter->getValue()];
            }
            $collection->addFieldToFilter($fields, $conditions);
        }
        
        $sortOrders = $criteria->getSortOrders();
        if ($sortOrders) {
            /** @var SortOrder $sortOrder */
            foreach ($sortOrders as $sortOrder) {
                $collection->addOrder(
                    $sortOrder->getField(),
                    ($sortOrder->getDirection() == SortOrder::SORT_ASC) ? 'ASC' : 'DESC'
                );
            }
        }
        $collection->setCurPage($criteria->getCurrentPage());
        $collection->setPageSize($criteria->getPageSize());
        
        $searchResults = $this->searchResultsFactory->create();
        $searchResults->setSearchCriteria($criteria);
        $searchResults->setTotalCount($collection->getSize());
        $searchResults->setItems($collection->getItems());
        return $searchResults;
    }

    /**
     * {@inheritdoc}
     */
    public function delete(
        \AsianTech\SecondStoreLocator\Api\Data\SecondStoreLocatorInterface $secondStoreLocator
    ) {
        try {
            $secondStoreLocator->getResource()->delete($secondStoreLocator);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__(
                'Could not delete the SecondStoreLocator: %1',
                $exception->getMessage()
            ));
        }
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function deleteById($secondStoreLocatorId)
    {
        return $this->delete($this->getById($secondStoreLocatorId));
    }
}
