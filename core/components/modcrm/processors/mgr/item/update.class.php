<?php
/**
 * Update an Item
 */
class modCRMItemUpdateProcessor extends modObjectUpdateProcessor {
	public $objectType = 'modCRMItem';
	public $classKey = 'modCRMItem';
	public $languageTopics = array('modcrm');
	public $permission = 'edit_document';
}

return 'modCRMItemUpdateProcessor';
