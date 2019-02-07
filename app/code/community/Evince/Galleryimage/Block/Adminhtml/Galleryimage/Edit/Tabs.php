<?php
class Evince_Galleryimage_Block_Adminhtml_Galleryimage_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{
		public function __construct()
		{
				parent::__construct();
				$this->setId("galleryimage_tabs");
				$this->setDestElementId("edit_form");
				$this->setTitle(Mage::helper("galleryimage")->__("Item Information"));
		}
		protected function _beforeToHtml()
		{
				$this->addTab("form_section", array(
				"label" => Mage::helper("galleryimage")->__("Item Information"),
				"title" => Mage::helper("galleryimage")->__("Item Information"),
				"content" => $this->getLayout()->createBlock("galleryimage/adminhtml_galleryimage_edit_tab_form")->toHtml(),
				));
				return parent::_beforeToHtml();
		}

}
