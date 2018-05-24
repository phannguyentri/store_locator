<?php


namespace AsianTech\SecondStoreLocator\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class InstallSchema implements InstallSchemaInterface
{

    /**
     * {@inheritdoc}
     */
    public function install(
        SchemaSetupInterface $setup,
        ModuleContextInterface $context
    ) {
        $installer = $setup;
        $installer->startSetup();

        $table_asiantech_secondstorelocator_secondstorelocator = $setup->getConnection()->newTable($setup->getTable('asiantech_secondstorelocator_secondstorelocator'));

        
        $table_asiantech_secondstorelocator_secondstorelocator->addColumn(
            'secondstorelocator_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            array('identity' => true,'nullable' => false,'primary' => true,'unsigned' => true,),
            'Entity ID'
        );
        

        
        $table_asiantech_secondstorelocator_secondstorelocator->addColumn(
            'name',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'name'
        );
        

        
        $table_asiantech_secondstorelocator_secondstorelocator->addColumn(
            'address',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'address'
        );
        

        
        $table_asiantech_secondstorelocator_secondstorelocator->addColumn(
            'hours_opening',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'hours_opening'
        );
        

        
        $table_asiantech_secondstorelocator_secondstorelocator->addColumn(
            'latitude',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'latitude'
        );
        

        
        $table_asiantech_secondstorelocator_secondstorelocator->addColumn(
            'longitude',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'longitude'
        );
        

        $setup->getConnection()->createTable($table_asiantech_secondstorelocator_secondstorelocator);

        $setup->endSetup();
    }
}
