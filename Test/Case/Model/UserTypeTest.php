<?php
/* UserType Test cases generated on: 2011-07-21 16:29:03 : 1311262143*/
App::uses('UserType', 'Model');

/**
 * UserType Test Case
 *
 */
class UserTypeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.user_type');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->UserType = ClassRegistry::init('UserType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UserType);
		ClassRegistry::flush();

		parent::tearDown();
	}

}
