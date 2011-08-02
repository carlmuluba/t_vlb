<?php
/* Country Test cases generated on: 2011-07-21 16:28:16 : 1311262096*/
App::uses('Country', 'Model');

/**
 * Country Test Case
 *
 */
class CountryTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.country');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Country = ClassRegistry::init('Country');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Country);
		ClassRegistry::flush();

		parent::tearDown();
	}

}
