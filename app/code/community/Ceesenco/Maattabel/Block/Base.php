<?php
class Ceesenco_Maattabel_Block_Base extends Mage_Core_Block_Template
{
	protected $_isEnabled;
	protected $_accountid;
	protected $_width;
	protected $_height;
	protected $_label;
	protected $_lang;
#	protected $_product;
	protected $_categorie;

    /**
     * Constructor
     * Set up private variables
     */
    protected function _construct()
    {
    	$this->_isEnabled = Mage::getStoreConfig('ceesenco_maattabel/configuration/enabled');
    	$this->_accountid = Mage::getStoreConfig('ceesenco_maattabel/configuration/accountid');
    	$this->_width = Mage::getStoreConfig('ceesenco_maattabel/configuration/width');
    	$this->_height = Mage::getStoreConfig('ceesenco_maattabel/configuration/height');
    	$this->_label = Mage::getStoreConfig('ceesenco_maattabel/configuration/label');
    	$this->_lang = Mage::getStoreConfig('ceesenco_maattabel/configuration/lang');

    	$this->_categorie = Mage::getSingleton("eav/config")->getAttribute("catalog_category", 'maattabel_categorie')->getSource()->getOptionText(Mage::getSingleton('catalog/layer')->getCurrentCategory()->getData('maattabel_categorie'));
    	if ($this->_categorie == "") {
		    $current_product = Mage::registry('current_product');
		    if(is_object($current_product))
		    {
		        $categories = $current_product->load($current_product->getId())->getCategoryIds();
		        if (is_array($categories) and count($categories))
		        {
    					$this->_categorie = Mage::getSingleton("eav/config")->getAttribute("catalog_category", 'maattabel_categorie')->getSource()->getOptionText(Mage::getModel('catalog/category')->load($categories[count($categories)-1])->getData('maattabel_categorie'));
		        }
		    }
    	}
    	$temp = explode(" - ", $this->_categorie);
    	$this->_categorie = $temp[0];
    }	

	protected function getIsEnabled() {
		return $this->_isEnabled;
	}	
	protected function getAccountId() {
		return $this->_accountid;
	}	
	protected function getWidth() {
		return $this->_width;
	}	
	protected function getHeight() {
		return $this->_height;
	}	
	protected function getLabel() {
		return $this->_label;
	}	
	protected function getLang() {
		return $this->_lang;
	}	
	protected function getCategorie() {
		return $this->_categorie;
	}	

}
?>
