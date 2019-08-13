<?php

class Ceesenco_Maattabel_Model_Lettertype
{
    public function toOptionArray()
    {
        return array(
            array('value' => '1', 'label' => Mage::helper('maattabel')->__('Arial')),
            array('value' => '2', 'label' => Mage::helper('maattabel')->__('Verdana')),              
            array('value' => '3', 'label' => Mage::helper('maattabel')->__('Trebuchet')),              
            array('value' => '4', 'label' => Mage::helper('maattabel')->__('Helvetica')),              
            array('value' => '5', 'label' => Mage::helper('maattabel')->__('sans-serif')),              
        );
    }
}
?>