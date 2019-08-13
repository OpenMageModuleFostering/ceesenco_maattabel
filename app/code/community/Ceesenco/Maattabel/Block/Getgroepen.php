<?php
class Ceesenco_Maattabel_Block_Getgroepen extends Mage_Adminhtml_Block_System_Config_Form_Field
{
    /*
     * Set template
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('ceesenco/button.phtml');
    } 

    /**
     * Return element html
     *
     * @param  Varien_Data_Form_Element_Abstract $element
     * @return string
     */
    protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element)
    {
        return $this->_toHtml();
    }

    /**
     * Return ajax url for button
     *
     * @return string
     */
    public function getAjaxCheckUrl()
    {
        return Mage::helper('adminhtml')->getUrl('adminmaattabel/index/getgroepen');
    }
    public function getFunctienaam()
    {
        return "getgroepen";
    }

    /**
     * Generate button html
     *
     * @return string
     */
    public function getButtonHtml()
    {
        $button = $this->getLayout()->createBlock('adminhtml/widget_button')
            ->setData(array(
            'id'        => 'maattabel_button',
            'label'     => $this->helper('maattabel')->__('Retrieve groups'),
            'onclick'   => 'javascript:getgroepen(); return false;'
        ));

        return $button->toHtml();
    }
}
?>