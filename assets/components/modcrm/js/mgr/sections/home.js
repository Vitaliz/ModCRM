modCRM.page.Home = function(config) {
	config = config || {};
	Ext.applyIf(config,{
		components: [{
			xtype: 'modcrm-panel-home'
			,renderTo: 'modcrm-panel-home-div'
		}]
	}); 
	modCRM.page.Home.superclass.constructor.call(this,config);
};
Ext.extend(modCRM.page.Home,MODx.Component);
Ext.reg('modcrm-page-home',modCRM.page.Home);