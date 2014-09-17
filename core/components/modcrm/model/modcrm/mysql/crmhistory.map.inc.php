<?php
$xpdo_meta_map['crmHistory']= array (
  'package' => 'modcrm',
  'version' => '1.1',
  'table' => 'modcrm_histories',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'type' => '',
    'object_id' => '',
    'client_id' => '',
    'event_id' => '',
    'comment_id' => '',
    'user_id' => 0,
    'createdon' => NULL,
    'createdby' => 0,
  ),
  'fieldMeta' => 
  array (
    'type' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'object_id' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'attributes' => 'unsigned',
      'null' => true,
      'default' => '',
    ),
    'client_id' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'attributes' => 'unsigned',
      'null' => true,
      'default' => '',
    ),
    'event_id' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'attributes' => 'unsigned',
      'null' => true,
      'default' => '',
    ),
    'comment_id' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'attributes' => 'unsigned',
      'null' => true,
      'default' => '',
    ),
    'user_id' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'integer',
      'attributes' => 'unsigned',
      'null' => true,
      'default' => 0,
    ),
    'createdon' => 
    array (
      'dbtype' => 'datetime',
      'phptype' => 'datetime',
      'null' => true,
    ),
    'createdby' => 
    array (
      'dbtype' => 'integer',
      'precision' => '10',
      'phptype' => 'integer',
      'attributes' => 'unsigned',
      'null' => false,
      'default' => 0,
    ),
  ),
  'indexes' => 
  array (
    'object_id' => 
    array (
      'alias' => 'object_id',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'object_id' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
    'client_id' => 
    array (
      'alias' => 'client_id',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'client_id' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
  ),
  'aggregates' => 
  array (
    'Clients' => 
    array (
      'class' => 'crmClient',
      'local' => 'client_id',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
    'Objects' => 
    array (
      'class' => 'crmObject',
      'local' => 'object_id',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
    'Events' => 
    array (
      'class' => 'crmEvent',
      'local' => 'event_id',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
    'Comments' => 
    array (
      'class' => 'crmComment',
      'local' => 'comment_id',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
    'User' => 
    array (
      'class' => 'modUser',
      'local' => 'user_id',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
  ),
);
