<?php


namespace AsianTech\SecondStoreLocator\Model;

use AsianTech\SecondStoreLocator\Api\Data\SecondStoreLocatorInterface;

class SecondStoreLocator extends \Magento\Framework\Model\AbstractModel implements SecondStoreLocatorInterface
{

    protected $_eventPrefix = 'secondstorelocator';

    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_init('AsianTech\SecondStoreLocator\Model\ResourceModel\SecondStoreLocator');
    }

    /**
     * Get secondstorelocator_id
     * @return string
     */
    public function getSecondstorelocatorId()
    {
        return $this->getData(self::SECONDSTORELOCATOR_ID);
    }

    /**
     * Set secondstorelocator_id
     * @param string $secondstorelocatorId
     * @return \AsianTech\SecondStoreLocator\Api\Data\SecondStoreLocatorInterface
     */
    public function setSecondstorelocatorId($secondstorelocatorId)
    {
        return $this->setData(self::SECONDSTORELOCATOR_ID, $secondstorelocatorId);
    }

    /**
     * Get id
     * @return string
     */
    public function getId()
    {
        return $this->getData(self::ID);
    }

    /**
     * Set id
     * @param string $id
     * @return \AsianTech\SecondStoreLocator\Api\Data\SecondStoreLocatorInterface
     */
    public function setId($id)
    {
        return $this->setData(self::ID, $id);
    }

    /**
     * Get name
     * @return string
     */
    public function getName()
    {
        return $this->getData(self::NAME);
    }

    /**
     * Set name
     * @param string $name
     * @return \AsianTech\SecondStoreLocator\Api\Data\SecondStoreLocatorInterface
     */
    public function setName($name)
    {
        return $this->setData(self::NAME, $name);
    }

    /**
     * Get address
     * @return string
     */
    public function getAddress()
    {
        return $this->getData(self::ADDRESS);
    }

    /**
     * Set address
     * @param string $address
     * @return \AsianTech\SecondStoreLocator\Api\Data\SecondStoreLocatorInterface
     */
    public function setAddress($address)
    {
        return $this->setData(self::ADDRESS, $address);
    }

    /**
     * Get hours_opening
     * @return string
     */
    public function getHoursOpening()
    {
        return $this->getData(self::HOURS_OPENING);
    }

    /**
     * Set hours_opening
     * @param string $hoursOpening
     * @return \AsianTech\SecondStoreLocator\Api\Data\SecondStoreLocatorInterface
     */
    public function setHoursOpening($hoursOpening)
    {
        return $this->setData(self::HOURS_OPENING, $hoursOpening);
    }

    /**
     * Get latitude
     * @return string
     */
    public function getLatitude()
    {
        return $this->getData(self::LATITUDE);
    }

    /**
     * Set latitude
     * @param string $latitude
     * @return \AsianTech\SecondStoreLocator\Api\Data\SecondStoreLocatorInterface
     */
    public function setLatitude($latitude)
    {
        return $this->setData(self::LATITUDE, $latitude);
    }

    /**
     * Get longitude
     * @return string
     */
    public function getLongitude()
    {
        return $this->getData(self::LONGITUDE);
    }

    /**
     * Set longitude
     * @param string $longitude
     * @return \AsianTech\SecondStoreLocator\Api\Data\SecondStoreLocatorInterface
     */
    public function setLongitude($longitude)
    {
        return $this->setData(self::LONGITUDE, $longitude);
    }
}
