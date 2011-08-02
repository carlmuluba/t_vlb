<?php
/* Publishers Test cases generated on: 2011-07-31 16:44:10 : 1312127050*/
App::uses('Publishers', 'Controller');

/**
 * TestPublishers 
 *
 */
class TestPublishers extends Publishers {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;

/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

/**
 * Publishers Test Case
 *
 */
class PublishersTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.publisher', 'app.user', 'app.profile', 'app.user_type', 'app.country', 'app.publication', 'app.category', 'app.type');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Publishers = new TestPublishers();
		$this->->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Publishers);
		ClassRegistry::flush();

		parent::tearDown();
	}

}
