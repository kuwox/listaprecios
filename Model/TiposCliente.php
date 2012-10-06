<?php
App::uses('AppModel', 'Model');
/**
 * TiposCliente Model
 *
 * @property TiposLista $TiposLista
 */
class TiposCliente extends AppModel {
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'nombre_tipo_cliente' => array(
			'alphanumeric' => array(
				'rule' => array('alphanumeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'TiposLista' => array(
			'className' => 'TiposLista',
			'joinTable' => 'tipos_clientes_tipos_listas',
			'foreignKey' => 'tipos_cliente_id',
			'associationForeignKey' => 'tipos_lista_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
