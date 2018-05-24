<?php


namespace AsianTech\StoreLocator\Setup;

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

        $table_asiantech_storelocator_storelocator = $setup->getConnection()->newTable($setup->getTable('storelocator'));

        
        $table_asiantech_storelocator_storelocator->addColumn(
            'storelocator_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            array('identity' => true,'nullable' => false,'primary' => true,'unsigned' => true,),
            'Entity ID'
        );
        

        
       /* $table_asiantech_storelocator_storelocator->addColumn(
            'id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['identity' => true,'auto_increment' => true],
            'id'
        );*/
        

        
        $table_asiantech_storelocator_storelocator->addColumn(
            'name',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'name'
        );
        

        
        $table_asiantech_storelocator_storelocator->addColumn(
            'address',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'address'
        );
        

        
        $table_asiantech_storelocator_storelocator->addColumn(
            'hours_opening',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'hours_opening'
        );
        

        
        $table_asiantech_storelocator_storelocator->addColumn(
            'latitude',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'latitude'
        );
        

        
        $table_asiantech_storelocator_storelocator->addColumn(
            'longitude',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'longitude'
        );
        

        $setup->getConnection()->createTable($table_asiantech_storelocator_storelocator);

        $setup->endSetup();
    }
}
