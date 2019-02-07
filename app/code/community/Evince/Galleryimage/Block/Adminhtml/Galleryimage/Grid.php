<?php
class Evince_Galleryimage_Block_Adminhtml_Galleryimage_Grid extends Mage_Adminhtml_Block_Widget_Grid
{

		public function __construct()
		{
				parent::__construct();
				$this->setId("galleryimageGrid");
				$this->setDefaultSort("id");
				$this->setDefaultDir("DESC");
				$this->setSaveParametersInSession(true);
		}

		protected function _prepareCollection()
		{
				$collection = Mage::getModel("galleryimage/galleryimage")->getCollection();
				$this->setCollection($collection);
				return parent::_prepareCollection();
		}
		protected function _prepareColumns()
		{
				$this->addColumn("id", array(
				"header" => Mage::helper("galleryimage")->__("ID"),
				"align" =>"right",
				"width" => "50px",
			    "type" => "number",
				"index" => "id",
				));
                
				$this->addColumn("title", array(
				"header" => Mage::helper("galleryimage")->__("Title"),
				"index" => "title",
				));
				$this->addColumn("url", array(
				"header" => Mage::helper("galleryimage")->__("URL"),
				"index" => "url",
				));
				$this->addColumn("description", array(
				"header" => Mage::helper("galleryimage")->__("Description"),
				"index" => "description",
				));
						$this->addColumn('status', array(
						'header' => Mage::helper('galleryimage')->__('Status'),
						'index' => 'status',
						'type' => 'options',
						'options'=>Evince_Galleryimage_Block_Adminhtml_Galleryimage_Grid::getOptionArray4(),				
						));
						
			$this->addExportType('*/*/exportCsv', Mage::helper('sales')->__('CSV')); 
			$this->addExportType('*/*/exportExcel', Mage::helper('sales')->__('Excel'));

				return parent::_prepareColumns();
		}

		public function getRowUrl($row)
		{
			   return $this->getUrl("*/*/edit", array("id" => $row->getId()));
		}


		
		protected function _prepareMassaction()
		{
			$this->setMassactionIdField('id');
			$this->getMassactionBlock()->setFormFieldName('ids');
			$this->getMassactionBlock()->setUseSelectAll(true);
			$this->getMassactionBlock()->addItem('remove_galleryimage', array(
					 'label'=> Mage::helper('galleryimage')->__('Remove Galleryimage'),
					 'url'  => $this->getUrl('*/adminhtml_galleryimage/massRemove'),
					 'confirm' => Mage::helper('galleryimage')->__('Are you sure?')
				));
			return $this;
		}
			
		static public function getOptionArray4()
		{
            $data_array=array(); 
			$data_array[0]='Enable';
			$data_array[1]='Disable';
            return($data_array);
		}
		static public function getValueArray4()
		{
            $data_array=array();
			foreach(Evince_Galleryimage_Block_Adminhtml_Galleryimage_Grid::getOptionArray4() as $k=>$v){
               $data_array[]=array('value'=>$k,'label'=>$v);		
			}
            return($data_array);

		}
		

}