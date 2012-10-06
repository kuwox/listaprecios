<?php
App::uses('TiposClientesTiposLista', 'Model');

/**
 * TiposClientesTiposLista Test Case
 *
 */
class TiposClientesTiposListaTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.tipos_clientes_tipos_lista', 'app.tipos_clientes', 'app.tipos_listas');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TiposClientesTiposLista = ClassRegistry::init('TiposClientesTiposLista');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TiposClientesTiposLista);

		parent::tearDown();
	}

}
