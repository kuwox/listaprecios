<?php
App::uses('AppModel', 'Model');
/**
 * TiposLista Model
 *
 * @property TiposCliente $TiposCliente
 */
class TiposLista extends AppModel {
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'nombre' => array(
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
		'TiposCliente' => array(
			'className' => 'TiposCliente',
			'joinTable' => 'tipos_clientes_tipos_listas',
			'foreignKey' => 'tipos_lista_id',
			'associationForeignKey' => 'tipos_cliente_id',
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
