<?php
$installer = $this;
$installer->startSetup();
$setup = new Mage_Catalog_Model_Resource_Eav_Mysql4_Setup('core_setup');

$entityTypeId     = $installer->getEntityTypeId('catalog_category');
$attributeSetId   = $installer->getDefaultAttributeSetId($entityTypeId);
$attributeGroupId = $installer->getDefaultAttributeGroupId($entityTypeId, $attributeSetId);
$setup->addAttribute('catalog_category', 'maattabel_categorie', array(
    'type'          => 'varchar',
    'label'         => 'Maattabel categorie',
    'input'         => 'select',
    'backend'       => 'eav/entity_attribute_backend_array',
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
    'source'        => 'maattabel/categorie',
    'visible'       => true,
    'required'      => false,
    'user_defined' => false
));
$installer->addAttributeToGroup(
    $entityTypeId,
    $attributeSetId,
    $attributeGroupId,
    'maattabel_categorie',
    '11'                    //last Magento's attribute position in General tab is 10
);

$installer->endSetup();
?>