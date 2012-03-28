<?php 
/* AuditLog schema generated on: 2012-03-28 14:29:28 : 1332937768*/
class AuditLogSchema extends CakeSchema {
	var $name = 'AuditLog';

	function before($event = array()) {
		return true;
	}

	function after($event = array()) {
	}

	var $audit_deltas = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary', 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'audit_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'index', 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'property_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'old_value' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'new_value' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'audit_id' => array('column' => 'audit_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_czech_ci')
	);
	var $audits = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary', 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'event' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'model' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'entity_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'json_object' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'description' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'source_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_czech_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_czech_ci')
	);
}
?>
