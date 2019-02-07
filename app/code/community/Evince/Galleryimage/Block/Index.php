<?php   
class Evince_Galleryimage_Block_Index extends Mage_Core_Block_Template{   



public function getGalleryimageEnabled()
    {
        return Mage::getStoreConfig('evincegalleryimagesection/evincegalleryimagegroup/status',Mage::app()->getStore());
    }

public function getGalleryimagePaggingstart()
    {
        return Mage::getStoreConfig('evincegalleryimagesection/evincegalleryimagegroup/numofiteminpage',Mage::app()->getStore());
    }

public function getGalleryimageRowitem()
    {
        return Mage::getStoreConfig('evincegalleryimagesection/evincegalleryimagegroup/numofiteminrow',Mage::app()->getStore());
    }



}
