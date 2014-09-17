<?php


/**
 * Class modCRMMainController
 */
abstract class modCRMMainController extends modExtraManagerController {
    /** @var modCRM $modCRM */
    public $modCRM;


    /**
     * @return void
     */
    public function initialize() {
        $corePath = $this->modx->getOption('modcrm_core_path', null, $this->modx->getOption('core_path') . 'components/modcrm/');
        require_once $corePath . 'model/modcrm/modcrm.class.php';

        $this->modCRM = new modCRM($this->modx);

        $this->addCss($this->modCRM->config['cssUrl'] . 'mgr/main.css');
        $this->addJavascript($this->modCRM->config['jsUrl'] . 'mgr/modcrm.js');
        $this->addHtml('<script type="text/javascript">
		Ext.onReady(function() {
			modCRM.config = ' . $this->modx->toJSON($this->modCRM->config) . ';
			modCRM.config.connector_url = "' . $this->modCRM->config['connectorUrl'] . '";
		});
		</script>');

        parent::initialize();
    }


    /**
     * @return array
     */
    public function getLanguageTopics() {
        return array('modcrm:default');
    }


    /**
     * @return bool
     */
    public function checkPermissions() {
        return true;
    }
}


/**
 * Class IndexManagerController
 */
class IndexManagerController extends modCRMMainController {

    /**
     * @return string
     */
    public static function getDefaultController() {
        return 'home';
    }
}