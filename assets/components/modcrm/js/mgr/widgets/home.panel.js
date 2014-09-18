modCRM.panel.Home = function(config) {
	config = config || {};
	Ext.apply(config,{
		border: false
		,baseCls: 'modx-formpanel'
		,items: [{
			html: '<h2>'+_('modcrm')+'</h2>'
			,border: false
			,cls: 'modx-page-header container'
		},{
			xtype: 'modx-tabs'
			,bodyStyle: 'padding: 10px'
			,defaults: { border: false ,autoHeight: true }
			,border: true
			,activeItem: 0
			,hideMode: 'offsets'
			,items: [{
				title: _('modcrm_objects')
				,items: [{
					html: _('modcrm_objects_intro')
					,border: false
					,bodyCssClass: 'panel-desc'
					,bodyStyle: 'margin-bottom: 10px'
				},{
					xtype: 'modcrm-grid-objects'
					,preventRender: true
				}]
			}]
		}]
	});
	modCRM.panel.Home.superclass.constructor.call(this,config);
};
Ext.extend(modCRM.panel.Home,MODx.Panel);
Ext.reg('modcrm-panel-home',modCRM.panel.Home);
