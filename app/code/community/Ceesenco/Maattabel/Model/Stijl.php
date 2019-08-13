<?php

class Ceesenco_Maattabel_Model_Stijl
{
    public function toOptionArray()
    {
        return array(
            array('value' => '1', 'label' => Mage::helper('maattabel')->__('Yellow simple')),
            array('value' => '2', 'label' => Mage::helper('maattabel')->__('Yellow')),              
            array('value' => '3', 'label' => Mage::helper('maattabel')->__('Dark grey')),              
            array('value' => '4', 'label' => Mage::helper('maattabel')->__('Green')),              
            array('value' => '5', 'label' => Mage::helper('maattabel')->__('Ait blue')),              
            array('value' => '6', 'label' => Mage::helper('maattabel')->__('Twitter')),              
            array('value' => '7', 'label' => Mage::helper('maattabel')->__('Purple')),              
        );
    }
}
?>