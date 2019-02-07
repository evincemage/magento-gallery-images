<?php
class Evince_Galleryimage_Block_Adminhtml_Galleryimage_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
		protected function _prepareForm()
		{

				$form = new Varien_Data_Form();
				$this->setForm($form);
				$fieldset = $form->addFieldset("galleryimage_form", array("legend"=>Mage::helper("galleryimage")->__("Item information")));

				
						$fieldset->addField("title", "text", array(
						"label" => Mage::helper("galleryimage")->__("Title"),
						"name" => "title",
						));
									
						$fieldset->addField('image', 'image', array(
						'label' => Mage::helper('galleryimage')->__('Image'),
						'name' => 'image',
						'note' => '(*.jpg, *.png, *.gif)',
						));
						$fieldset->addField("url", "text", array(
						"label" => Mage::helper("galleryimage")->__("URL"),
						"name" => "url",
						));
					
						$fieldset->addField("description", "text", array(
						"label" => Mage::helper("galleryimage")->__("Description"),
						"name" => "description",
						));
									
						 $fieldset->addField('status', 'select', array(
						'label'     => Mage::helper('galleryimage')->__('Status'),
						'values'   => Evince_Galleryimage_Block_Adminhtml_Galleryimage_Grid::getValueArray4(),
						'name' => 'status',
						));

				if (Mage::getSingleton("adminhtml/session")->getGalleryimageData())
				{
					$form->setValues(Mage::getSingleton("adminhtml/session")->getGalleryimageData());
					Mage::getSingleton("adminhtml/session")->setGalleryimageData(null);
				} 
				elseif(Mage::registry("galleryimage_data")) {
				    $form->setValues(Mage::registry("galleryimage_data")->getData());
				}
				return parent::_prepareForm();
		}
}
