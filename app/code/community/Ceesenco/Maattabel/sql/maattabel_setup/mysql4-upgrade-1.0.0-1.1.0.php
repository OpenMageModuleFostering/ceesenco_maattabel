<?php
$installer = $this;
$installer->startSetup();
#$setup = new Mage_Catalog_Model_Resource_Eav_Mysql4_Setup('core_setup');

#$setup = new Mage_Eav_Model_Entity_Setup('core_setup');
#$setup->removeAttribute( 'catalog_category', 'maattabel_categorie' );
$installer->removeAttribute('catalog_category', 'maattabel_categorie');

#$setup->addAttribute('catalog_category', 'maattabel_categorie', array(

$entityTypeId     = $installer->getEntityTypeId('catalog_category');
$attributeSetId   = $installer->getDefaultAttributeSetId($entityTypeId);
$attributeGroupId = $installer->getDefaultAttributeGroupId($entityTypeId, $attributeSetId);
$group = $installer->getAttributeGroup($entityTypeId, $attributeSetId, $attributeGroupId, 'attribute_group_name');

$installer->addAttribute('catalog_category', 'maattabel_categorie', array(
		'group'   			           => $group,
    'type'          					 => 'varchar',
    'backend'      			       => '',
    'frontend_input'    			 => '',
    'frontend'         			   => '',
    'label'         					 => 'Maattabel categorie',
    'input'         					 => 'select',
    'class'             			 => '',
    'source'                   => 'eav/entity_attribute_source_table',
    'global'        					 => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
    'visible'       					 => true,
    'frontend_class'    			 => '',
    'required'      					 => false,
    'user_defined'             => true,
    'default'           			 => '',
		'option'        					 => array ('value' => array(
		'men'=>array('1 - Men'),
		'men_pants'=>array('1/33 - Men -> Pants'),
		'men_shoes'=>array('1/21 - Men -> Shoes'),
		'men_belts'=>array('1/20 - Men -> Belts'),
		'men_under'=>array('1/19 - Men -> Under and Swimwear'),
		'men_shirts'=>array('1/16 - Men -> Shirts'),
		'men_sweaters'=>array('1/15 - Men -> Sweaters, Outerwear and Blazers'),
		'men_gloves'=>array('1/61 - Men -> Gloves'),
		'men_jeans'=>array('1/62 - Men -> Jeans'),
		'women'=>array('2 - Women'),
		'women_bras'=>array('2/10 - Women -> Bras and Swimwear'),
		'women_slips'=>array('2/22 - Women -> Slips and Shapewear'),
		'women_tops'=>array('2/23 - Women -> Tops, Shirts, Blouses and Sweaters'),
		'women_dresses'=>array('2/24 - Women -> Dresses, Blazers and Jackets'),
		'women_skirts'=>array('2/25 - Women -> Skirts'),
		'women_pants'=>array('2/26 - Women -> Pants'),
		'women_belts'=>array('2/27 - Women -> Belts'),
		'women_shoes'=>array('2/28 - Women -> Shoes'),
		'women_jeans'=>array('2/62 - Women -> Jeans'),
		'women_gloves'=>array('2/64 - Women -> Gloves'),
		'boys'=>array('3 - Boys'),
		'boys_under'=>array('3/37 - Boys -> Under and Swimwear'),
		'boys_sweaters'=>array('3/38 - Boys -> Sweaters, Outerwear and Blazers'),
		'boys_shirts'=>array('3/39 - Boys -> Shirts'),
		'boys_jeans'=>array('3/40 - Boys -> Jeans'),
		'boys_pants'=>array('3/41 - Boys -> Pants'),
		'boys_shoes'=>array('3/42 - Boys -> Shoes'),
		'boys_belts'=>array('3/43 - Boys -> Belts'),
		'boys_gloves'=>array('3/65 - Boys -> Gloves'),
		'girls'=>array('35 - Girls'),
		'girls_skirts'=>array('35/44 - Girls -> Skirts'),
		'girls_pants'=>array('35/45 - Girls -> Pants'),
		'girls_tops'=>array('35/46 - Girls -> Tops and Shirts'),
		'girls_shoes'=>array('35/47 - Girls -> Shoes'),
		'girls_gloves'=>array('35/48 - Girls -> Gloves'),
		'girls_bras'=>array('35/57 - Girls -> Bras and Swimwear'),
		'girls_slips'=>array('35/58 - Girls -> Slips and Shapewear'),
		'girls_sweaters'=>array('35/59 - Girls -> Sweaters, Blouses and Jackets'),
		'girls_jeans'=>array('35/63 - Girls -> Jeans'),
		'children'=>array('36 - Children'),
		'children_under'=>array('36/49 - Children -> Under and Swimwear'),
		'children_sweaters'=>array('36/50 - Children -> Sweaters, Blouses and Jackets'),
		'children_shirts'=>array('36/51 - Children -> Shirts'),
		'children_jeans'=>array('36/52 - Children -> Jeans'),
		'children_pants'=>array('36/53 - Children -> Pants'),
		'children_shoes'=>array('36/54 - Children -> Shoes'),
		'children_belts'=>array('36/55 - Children -> Belts'),
		'children_gloves'=>array('36/56 - Children -> Gloves')))
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