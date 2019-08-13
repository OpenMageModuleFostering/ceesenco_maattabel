<?php

class Ceesenco_Maattabel_Model_Lang
{
    public function toOptionArray()
    {
        return array(
            array('value' => 'nl', 'label' => Mage::helper('maattabel')->__('Dutch')),
            array('value' => 'en', 'label' => Mage::helper('maattabel')->__('English')),              
            array('value' => 'de', 'label' => Mage::helper('maattabel')->__('German')),              
            array('value' => 'fr', 'label' => Mage::helper('maattabel')->__('French')),              
            array('value' => 'es', 'label' => Mage::helper('maattabel')->__('Spanish')),              
        );
    }
}
?>