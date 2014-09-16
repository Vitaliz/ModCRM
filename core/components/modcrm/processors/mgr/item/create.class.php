<?php
/**
 * Create an Item
 */
class modCRMItemCreateProcessor extends modObjectCreateProcessor {
	public $objectType = 'modCRMItem';
	public $classKey = 'modCRMItem';
	public $languageTopics = array('modcrm');
	public $permission = 'new_document';


	/**
	 * @return bool
	 */
	public function beforeSet() {
		$alreadyExists = $this->modx->getObject('modCRMItem', array(
			'name' => $this->getProperty('name'),
		));
		if ($alreadyExists) {
			$this->modx->error->addField('name', $this->modx->lexicon('modcrm_item_err_ae'));
		}

		return !$this->hasErrors();
	}

}

return 'modCRMItemCreateProcessor';