<?php
/**
 * The home manager controller for modCRM.
 *
 */
class modCRMHomeManagerController extends modCRMMainController {
	/* @var modCRM $modCRM */
	public $modCRM;


	/**
	 * @param array $scriptProperties
	 */
	public function process(array $scriptProperties = array()) {
	}


	/**
	 * @return null|string
	 */
	public function getPageTitle() {
		return $this->modx->lexicon('modcrm');
	}


	/**
	 * @return void
	 */
	public function loadCustomCssJs() {
		$this->addJavascript($this->modCRM->config['jsUrl'] . 'mgr/widgets/items.grid.js');
		$this->addJavascript($this->modCRM->config['jsUrl'] . 'mgr/widgets/home.panel.js');
		$this->addJavascript($this->modCRM->config['jsUrl'] . 'mgr/sections/home.js');
		$this->addHtml('<script type="text/javascript">
		Ext.onReady(function() {
			MODx.load({ xtype: "modcrm-page-home"});
		});
		</script>');
	}


	/**
	 * @return string
	 */
	public function getTemplateFile() {
		return $this->modCRM->config['templatesPath'] . 'home.tpl';
	}
}