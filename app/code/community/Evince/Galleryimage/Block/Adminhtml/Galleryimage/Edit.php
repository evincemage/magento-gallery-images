<?php
class Evince_Galleryimage_Block_Adminhtml_Galleryimage_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
		public function __construct()
		{

				parent::__construct();
				$this->_objectId = "id";
				$this->_blockGroup = "galleryimage";
				$this->_controller = "adminhtml_galleryimage";
				$this->_updateButton("save", "label", Mage::helper("galleryimage")->__("Save Item"));
				$this->_updateButton("delete", "label", Mage::helper("galleryimage")->__("Delete Item"));

				$this->_addButton("saveandcontinue", array(
					"label"     => Mage::helper("galleryimage")->__("Save And Continue Edit"),
					"onclick"   => "saveAndContinueEdit()",
					"class"     => "save",
				), -100);



				$this->_formScripts[] = "

							function saveAndContinueEdit(){
								editForm.submit($('edit_form').action+'back/edit/');
							}
						";
		}

		public function getHeaderText()
		{
				if( Mage::registry("galleryimage_data") && Mage::registry("galleryimage_data")->getId() ){

				    return Mage::helper("galleryimage")->__("Edit Item '%s'", $this->htmlEscape(Mage::registry("galleryimage_data")->getId()));

				} 
				else{

				     return Mage::helper("galleryimage")->__("Add Item");

				}
		}
}