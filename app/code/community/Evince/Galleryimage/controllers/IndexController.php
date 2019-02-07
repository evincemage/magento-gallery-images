<?php
class Evince_Galleryimage_IndexController extends Mage_Core_Controller_Front_Action{
    public function IndexAction() {
      
	  $this->loadLayout();   
	  $this->getLayout()->getBlock("head")->setTitle($this->__("Gallery Image"));
	        $breadcrumbs = $this->getLayout()->getBlock("breadcrumbs");
      $breadcrumbs->addCrumb("home", array(
                "label" => $this->__("Home Page"),
                "title" => $this->__("Home Page"),
                "link"  => Mage::getBaseUrl()
		   ));

      $breadcrumbs->addCrumb("gallery image", array(
                "label" => $this->__("Gallery Image"),
                "title" => $this->__("Gallery Image")
		   ));

      $this->renderLayout(); 
	  
    }
}