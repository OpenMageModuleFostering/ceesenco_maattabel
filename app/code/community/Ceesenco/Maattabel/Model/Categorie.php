<?php
 
class Ceesenco_Maattabel_Model_Categorie extends Mage_Eav_Model_Entity_Attribute_Source_Table
{
    public function getAllOptions()
    {
        if ($this->_options === null) {
            $this->_options = array();
            $this->_options[] = array(
                    'value' => '',
                    'label' => Mage::helper('maattabel')->__('Choose a category...')
            );
            $this->_options[] = array(
                    'value' => '1',
                    'label' => Mage::helper('maattabel')->__('Men')
            );
            $this->_options[] = array(
                    'value' => '1/33',
                    'label' => Mage::helper('maattabel')->__('Men').' -> '.Mage::helper('maattabel')->__('Pants')
            );
            $this->_options[] = array(
                    'value' => '1/21',
                    'label' => Mage::helper('maattabel')->__('Men').' -> '.Mage::helper('maattabel')->__('Shoes')
            );
            $this->_options[] = array(
                    'value' => '1/20',
                    'label' => Mage::helper('maattabel')->__('Men').' -> '.Mage::helper('maattabel')->__('Belts')
            );
            $this->_options[] = array(
                    'value' => '1/19',
                    'label' => Mage::helper('maattabel')->__('Men').' -> '.Mage::helper('maattabel')->__('Under and Swimwear')
            );
            $this->_options[] = array(
                    'value' => '1/16',
                    'label' => Mage::helper('maattabel')->__('Men').' -> '.Mage::helper('maattabel')->__('Shirts')
            );
            $this->_options[] = array(
                    'value' => '1/15',
                    'label' => Mage::helper('maattabel')->__('Men').' -> '.Mage::helper('maattabel')->__('Sweaters, Outerwear and Blazers')
            );
            $this->_options[] = array(
                    'value' => '1/61',
                    'label' => Mage::helper('maattabel')->__('Men').' -> '.Mage::helper('maattabel')->__('Gloves')
            );
            $this->_options[] = array(
                    'value' => '1/62',
                    'label' => Mage::helper('maattabel')->__('Men').' -> '.Mage::helper('maattabel')->__('Jeans')
            );
            $this->_options[] = array(
                    'value' => '2',
                    'label' => Mage::helper('maattabel')->__('Women')
            );
            $this->_options[] = array(
                    'value' => '2/10',
                    'label' => Mage::helper('maattabel')->__('Women').' -> '.Mage::helper('maattabel')->__('Bras and Swimwear')
            );
            $this->_options[] = array(
                    'value' => '2/22',
                    'label' => Mage::helper('maattabel')->__('Women').' -> '.Mage::helper('maattabel')->__('Slips and Shapewear')
            );
            $this->_options[] = array(
                    'value' => '2/23',
                    'label' => Mage::helper('maattabel')->__('Women').' -> '.Mage::helper('maattabel')->__('Tops, Shirts, Blouses and Sweaters')
            );
            $this->_options[] = array(
                    'value' => '2/24',
                    'label' => Mage::helper('maattabel')->__('Women').' -> '.Mage::helper('maattabel')->__('Dresses, Blazers and Jackets')
            );
            $this->_options[] = array(
                    'value' => '2/25',
                    'label' => Mage::helper('maattabel')->__('Women').' -> '.Mage::helper('maattabel')->__('Skirts')
            );
            $this->_options[] = array(
                    'value' => '2/26',
                    'label' => Mage::helper('maattabel')->__('Women').' -> '.Mage::helper('maattabel')->__('Pants')
            );
            $this->_options[] = array(
                    'value' => '2/27',
                    'label' => Mage::helper('maattabel')->__('Women').' -> '.Mage::helper('maattabel')->__('Belts')
            );
            $this->_options[] = array(
                    'value' => '2/28',
                    'label' => Mage::helper('maattabel')->__('Women').' -> '.Mage::helper('maattabel')->__('Shoes')
            );
            $this->_options[] = array(
                    'value' => '2/62',
                    'label' => Mage::helper('maattabel')->__('Women').' -> '.Mage::helper('maattabel')->__('Jeans')
            );
            $this->_options[] = array(
                    'value' => '2/64',
                    'label' => Mage::helper('maattabel')->__('Women').' -> '.Mage::helper('maattabel')->__('Gloves')
            );
            $this->_options[] = array(
                    'value' => '3',
                    'label' => Mage::helper('maattabel')->__('Boys')
            );
            $this->_options[] = array(
                    'value' => '3/37',
                    'label' => Mage::helper('maattabel')->__('Boys').' -> '.Mage::helper('maattabel')->__('Under and Swimwear')
            );
            $this->_options[] = array(
                    'value' => '3/38',
                    'label' => Mage::helper('maattabel')->__('Boys').' -> '.Mage::helper('maattabel')->__('Sweaters, Outerwear and Blazers')
            );
            $this->_options[] = array(
                    'value' => '3/39',
                    'label' => Mage::helper('maattabel')->__('Boys').' -> '.Mage::helper('maattabel')->__('Shirts')
            );
            $this->_options[] = array(
                    'value' => '3/40',
                    'label' => Mage::helper('maattabel')->__('Boys').' -> '.Mage::helper('maattabel')->__('Jeans')
            );
            $this->_options[] = array(
                    'value' => '3/41',
                    'label' => Mage::helper('maattabel')->__('Boys').' -> '.Mage::helper('maattabel')->__('Pants')
            );
            $this->_options[] = array(
                    'value' => '3/42',
                    'label' => Mage::helper('maattabel')->__('Boys').' -> '.Mage::helper('maattabel')->__('Shoes')
            );
            $this->_options[] = array(
                    'value' => '3/43',
                    'label' => Mage::helper('maattabel')->__('Boys').' -> '.Mage::helper('maattabel')->__('Belts')
            );
            $this->_options[] = array(
                    'value' => '3/65',
                    'label' => Mage::helper('maattabel')->__('Boys').' -> '.Mage::helper('maattabel')->__('Gloves')
            );
            $this->_options[] = array(
                    'value' => '35',
                    'label' => Mage::helper('maattabel')->__('Girls').''
            );
            $this->_options[] = array(
                    'value' => '35/44',
                    'label' => Mage::helper('maattabel')->__('Girls').' -> '.Mage::helper('maattabel')->__('Skirts')
            );
            $this->_options[] = array(
                    'value' => '35/45',
                    'label' => Mage::helper('maattabel')->__('Girls').' -> '.Mage::helper('maattabel')->__('Pants')
            );
            $this->_options[] = array(
                    'value' => '35/46',
                    'label' => Mage::helper('maattabel')->__('Girls').' -> '.Mage::helper('maattabel')->__('Tops and Shirts')
            );
            $this->_options[] = array(
                    'value' => '35/47',
                    'label' => Mage::helper('maattabel')->__('Girls').' -> '.Mage::helper('maattabel')->__('Shoes')
            );
            $this->_options[] = array(
                    'value' => '35/48',
                    'label' => Mage::helper('maattabel')->__('Girls').' -> '.Mage::helper('maattabel')->__('Gloves')
            );
            $this->_options[] = array(
                    'value' => '35/57',
                    'label' => Mage::helper('maattabel')->__('Girls').' -> '.Mage::helper('maattabel')->__('Bras and Swimwear')
            );
            $this->_options[] = array(
                    'value' => '35/58',
                    'label' => Mage::helper('maattabel')->__('Girls').' -> '.Mage::helper('maattabel')->__('Slips and Shapewear')
            );
            $this->_options[] = array(
                    'value' => '35/59',
                    'label' => Mage::helper('maattabel')->__('Girls').' -> '.Mage::helper('maattabel')->__('Sweaters, Blouses and Jackets')
            );
            $this->_options[] = array(
                    'value' => '35/63',
                    'label' => Mage::helper('maattabel')->__('Girls').' -> '.Mage::helper('maattabel')->__('Jeans')
            );
            $this->_options[] = array(
                    'value' => '36',
                    'label' => Mage::helper('maattabel')->__('Children').''
            );
            $this->_options[] = array(
                    'value' => '36/49',
                    'label' => Mage::helper('maattabel')->__('Children').' -> '.Mage::helper('maattabel')->__('Under and Swimwear')
            );
            $this->_options[] = array(
                    'value' => '36/50',
                    'label' => Mage::helper('maattabel')->__('Children').' -> '.Mage::helper('maattabel')->__('Sweaters, Blouses and Jackets')
            );
            $this->_options[] = array(
                    'value' => '36/51',
                    'label' => Mage::helper('maattabel')->__('Children').' -> '.Mage::helper('maattabel')->__('Shirts')
            );
            $this->_options[] = array(
                    'value' => '36/52',
                    'label' => Mage::helper('maattabel')->__('Children').' -> '.Mage::helper('maattabel')->__('Jeans')
            );
            $this->_options[] = array(
                    'value' => '36/53',
                    'label' => Mage::helper('maattabel')->__('Children').' -> '.Mage::helper('maattabel')->__('Pants')
            );
            $this->_options[] = array(
                    'value' => '36/54',
                    'label' => Mage::helper('maattabel')->__('Children').' -> '.Mage::helper('maattabel')->__('Shoes')
            );
            $this->_options[] = array(
                    'value' => '36/55',
                    'label' => Mage::helper('maattabel')->__('Children').' -> '.Mage::helper('maattabel')->__('Belts')
            );
            $this->_options[] = array(
                    'value' => '36/56',
                    'label' => Mage::helper('maattabel')->__('Children').' -> '.Mage::helper('maattabel')->__('Gloves')
            );
             
        }
 
        return $this->_options;
    }
}
?>