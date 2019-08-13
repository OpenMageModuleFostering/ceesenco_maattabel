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
    	
    	$this->_categorie = Mage::getSingleton('catalog/layer')->getCurrentCategory()->getData('maattabel_categorie');
    	
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
