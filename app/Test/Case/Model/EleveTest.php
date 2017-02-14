<?php
App::uses('Eleve', 'Model');

/**
 * Eleve Test Case
 *
 */
class EleveTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.eleve',
		'app.module'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Eleve = ClassRegistry::init('Eleve');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Eleve);

		parent::tearDown();
	}

}
