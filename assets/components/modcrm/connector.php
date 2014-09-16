<?php

require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php';
require_once MODX_CORE_PATH . 'config/' . MODX_CONFIG_KEY . '.inc.php';
require_once MODX_CONNECTORS_PATH . 'index.php';

$corePath = $modx->getOption('modcrm_core_path', null, $modx->getOption('core_path') . 'components/modcrm/');
require_once $corePath . 'model/modcrm/modcrm.class.php';
$modx->modcrm = new modCRM($modx);

$modx->lexicon->load('modcrm:default');

/* handle request */
$path = $modx->getOption('processorsPath', $modx->modcrm->config, $corePath . 'processors/');
$modx->request->handleRequest(array(
	'processors_path' => $path,
	'location' => '',
));