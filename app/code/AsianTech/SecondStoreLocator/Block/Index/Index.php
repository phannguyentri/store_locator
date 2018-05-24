<?php


namespace AsianTech\SecondStoreLocator\Block\Index;

class Index extends \Magento\Framework\View\Element\Template
{
	public function getRecords(){
		$objectManager = \Magento\Framework\App\ObjectManager::getInstance(); // Instance of object manager
		$resource = $objectManager->get('Magento\Framework\App\ResourceConnection');
		$connection = $resource->getConnection();
		$tableName = $resource->getTableName('asiantech_secondstorelocator_secondstorelocator'); //gives table name with prefix
		$sql = "Select * FROM " . $tableName;
		$result = $connection->fetchAll($sql);

		return $result;
	} 
}
