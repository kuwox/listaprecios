<?php
/**
 * TiposClientesTiposListaFixture
 *
 */
class TiposClientesTiposListaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'tipos_clientes_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'tipos_listas_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'nombre_archivo' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 80, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'fk_tipos_clientes_tipos_listas_tipos_clientes1' => array('column' => 'tipos_clientes_id', 'unique' => 0), 'fk_tipos_clientes_tipos_listas_tipos_listas1' => array('column' => 'tipos_listas_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'tipos_clientes_id' => 1,
			'tipos_listas_id' => 1,
			'nombre_archivo' => 'Lorem ipsum dolor sit amet'
		),
	);
}
