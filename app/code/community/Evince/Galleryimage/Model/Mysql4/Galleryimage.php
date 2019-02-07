<?php 
class Evince_Galleryimage_Model_Mysql4_Galleryimage extends Mage_Core_Model_Mysql4_Abstract
{
    protected function _construct()
    {
        $this->_init("galleryimage/galleryimage", "id");
    }
}