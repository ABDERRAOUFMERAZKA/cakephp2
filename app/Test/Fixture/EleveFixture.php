<?php
/**
 * EleveFixture
 *
 */
class EleveFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'eleve';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'ID' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'nom' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'prenom' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'datenaissance' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'ID', 'unique' => 1)
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
			'ID' => 1,
			'nom' => 'Lorem ipsum dolor sit amet',
			'prenom' => 'Lorem ipsum dolor sit amet',
			'datenaissance' => '2017-02-14 18:24:06'
		),
	);

}
