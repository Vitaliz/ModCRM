<?php
/**
 * Get an Item
 */
class modCRMItemGetProcessor extends modObjectGetProcessor {
	public $objectType = 'modCRMItem';
	public $classKey = 'modCRMItem';
	public $languageTopics = array('modcrm:default');
}

return 'modCRMItemGetProcessor';