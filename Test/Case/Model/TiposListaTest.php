<?php
App::uses('TiposLista', 'Model');

/**
 * TiposLista Test Case
 *
 */
class TiposListaTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.tipos_lista', 'app.tipos_cliente', 'app.tipos_clientes_tipos_lista');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TiposLista = ClassRegistry::init('TiposLista');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TiposLista);

		parent::tearDown();
	}

}
