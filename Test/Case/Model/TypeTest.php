<?php
/* Type Test cases generated on: 2011-07-21 16:28:36 : 1311262116*/
App::uses('Type', 'Model');

/**
 * Type Test Case
 *
 */
class TypeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.type');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Type = ClassRegistry::init('Type');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Type);
		ClassRegistry::flush();

		parent::tearDown();
	}

}
