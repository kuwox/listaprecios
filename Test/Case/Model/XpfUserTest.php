<?php
App::uses('XpfUser', 'Model');

/**
 * XpfUser Test Case
 *
 */
class XpfUserTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.xpf_user');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->XpfUser = ClassRegistry::init('XpfUser');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->XpfUser);

		parent::tearDown();
	}

}
