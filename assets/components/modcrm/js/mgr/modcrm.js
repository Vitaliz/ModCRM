var modCRM = function(config) {
	config = config || {};
	modCRM.superclass.constructor.call(this,config);
};
Ext.extend(modCRM,Ext.Component,{
	page:{},window:{},grid:{},tree:{},panel:{},combo:{},config: {},view: {}
});
Ext.reg('modcrm',modCRM);

modCRM = new modCRM();