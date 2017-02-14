<?php
/**
 * ModuleFixture
 *
 */
class ModuleFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'module';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'ID_ELEVE' => array('type' => 'integer', 'null' => false, 'default' => null),
		'intitule' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'note' => array('type' => 'integer', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'ID_ELEVE' => 1,
			'intitule' => 'Lorem ipsum dolor sit amet',
			'note' => 1
		),
	);

}
