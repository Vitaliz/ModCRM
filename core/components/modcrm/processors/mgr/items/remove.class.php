<?php
/**
 * Remove an Items
 */
class modCRMItemsRemoveProcessor extends modProcessor {
    public $checkRemovePermission = true;
	public $objectType = 'modCRMItem';
	public $classKey = 'modCRMItem';
	public $languageTopics = array('modcrm');

	public function process() {

        foreach (explode(',',$this->getProperty('items')) as $id) {
            $item = $this->modx->getObject($this->classKey, $id);
            $item->remove();
        }
        
        return $this->success();

	}

}

return 'modCRMItemsRemoveProcessor';