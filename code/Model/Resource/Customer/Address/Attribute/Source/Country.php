<?php

class Loewenstark_Php72_Model_Resource_Customer_Address_Attribute_Source_Country
extends Mage_Eav_Model_Entity_Attribute_Source_Table
{
    /**
     * Retreive all options
     *
     * @return array
     */
    public function getAllOptions($withEmpty = true, $defaultValues = false)
    {
        if (!$this->_options) {
            $this->_options = Mage::getResourceModel('directory/country_collection')
                ->loadByStore($this->getAttribute()->getStoreId())->toOptionArray();
        }
        return $this->_options;
    }
}
