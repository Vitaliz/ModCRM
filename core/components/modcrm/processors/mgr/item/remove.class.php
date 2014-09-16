<?php
/**
 * Remove an Item
 */
class modCRMItemRemoveProcessor extends modObjectRemoveProcessor {
	public $checkRemovePermission = true;
	public $objectType = 'modCRMItem';
	public $classKey = 'modCRMItem';
	public $languageTopics = array('modcrm');

}

return 'modCRMItemRemoveProcessor';