<?php
App::uses('TiposCliente', 'Model');

/**
 * TiposCliente Test Case
 *
 */
class TiposClienteTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.tipos_cliente', 'app.tipos_lista', 'app.tipos_clientes_tipos_lista');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TiposCliente = ClassRegistry::init('TiposCliente');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TiposCliente);

		parent::tearDown();
	}

}
