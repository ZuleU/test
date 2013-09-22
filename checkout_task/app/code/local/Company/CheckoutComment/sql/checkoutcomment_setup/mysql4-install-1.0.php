<?php

$installer = $this;
$installer->startSetup();
$installer->run("
		ALTER TABLE `{$this->getTable('sales_flat_order')}` ADD `comment` varchar(255)  character set utf8 NOT NULL default ''"
		);
$installer->endSetup();
