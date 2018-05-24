<?php


namespace AsianTech\SecondStoreLocator\Api\Data;

interface SecondStoreLocatorInterface
{

    const HOURS_OPENING = 'hours_opening';
    const LONGITUDE = 'longitude';
    const NAME = 'name';
    const ID = 'id';
    const ADDRESS = 'address';
    const LATITUDE = 'latitude';
    const SECONDSTORELOCATOR_ID = 'secondstorelocator_id';


    /**
     * Get secondstorelocator_id
     * @return string|null
     */
    public function getSecondstorelocatorId();

    /**
     * Set secondstorelocator_id
     * @param string $secondstorelocatorId
     * @return \AsianTech\SecondStoreLocator\Api\Data\SecondStoreLocatorInterface
     */
    public function setSecondstorelocatorId($secondstorelocatorId);

    /**
     * Get id
     * @return string|null
     */
    public function getId();

    /**
     * Set id
     * @param string $id
     * @return \AsianTech\SecondStoreLocator\Api\Data\SecondStoreLocatorInterface
     */
    public function setId($id);

    /**
     * Get name
     * @return string|null
     */
    public function getName();

    /**
     * Set name
     * @param string $name
     * @return \AsianTech\SecondStoreLocator\Api\Data\SecondStoreLocatorInterface
     */
    public function setName($name);

    /**
     * Get address
     * @return string|null
     */
    public function getAddress();

    /**
     * Set address
     * @param string $address
     * @return \AsianTech\SecondStoreLocator\Api\Data\SecondStoreLocatorInterface
     */
    public function setAddress($address);

    /**
     * Get hours_opening
     * @return string|null
     */
    public function getHoursOpening();

    /**
     * Set hours_opening
     * @param string $hoursOpening
     * @return \AsianTech\SecondStoreLocator\Api\Data\SecondStoreLocatorInterface
     */
    public function setHoursOpening($hoursOpening);

    /**
     * Get latitude
     * @return string|null
     */
    public function getLatitude();

    /**
     * Set latitude
     * @param string $latitude
     * @return \AsianTech\SecondStoreLocator\Api\Data\SecondStoreLocatorInterface
     */
    public function setLatitude($latitude);

    /**
     * Get longitude
     * @return string|null
     */
    public function getLongitude();

    /**
     * Set longitude
     * @param string $longitude
     * @return \AsianTech\SecondStoreLocator\Api\Data\SecondStoreLocatorInterface
     */
    public function setLongitude($longitude);
}
