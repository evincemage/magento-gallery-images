<?php


class Evince_Galleryimage_Block_Adminhtml_Galleryimage extends Mage_Adminhtml_Block_Widget_Grid_Container{

	public function __construct()
	{

	$this->_controller = "adminhtml_galleryimage";
	$this->_blockGroup = "galleryimage";
	$this->_headerText = Mage::helper("galleryimage")->__("Galleryimage Manager");
	$this->_addButtonLabel = Mage::helper("galleryimage")->__("Add New Item");
	parent::__construct();
	
	}

}