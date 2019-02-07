<?php
$installer = $this;
$installer->startSetup();
$sql=<<<SQLTEXT
create table {$this->getTable('evincegalleryimage')}(id int not null auto_increment, title varchar(255),  image varchar(255), url varchar(255),  description varchar(255), status varchar(100), primary key(id));

insert into {$this->getTable('evincegalleryimage')} (`title`,`image`,`description`,`url`,`status`) VALUES 
('Image gallery  1','galleryimage/galleryimage/3.jpg','Image gallery  1','www.evincedev.com','0'), 
('Image gallery  2','galleryimage/galleryimage/4.jpg','Image gallery  2','www.evincedev.com','0'),
('Image gallery  3','galleryimage/galleryimage/5.jpg','Image gallery  3','www.evincedev.com','0'),
('Image gallery  4','galleryimage/galleryimage/6.jpg','Image gallery  4','www.evincedev.com','0')
;

		
SQLTEXT;

$installer->run($sql);
//demo 
Mage::getModel('core/url_rewrite')->setId(null);
//demo 
$installer->endSetup();
	 
