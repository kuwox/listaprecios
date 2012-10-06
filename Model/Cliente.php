<?php
App::uses('AppModel', 'Model');
/**
 * Cliente Model
 *
 * @property XpfUsers $XpfUsers
 * @property TiposClientes $TiposClientes
 */
class Cliente extends AppModel {



	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'XpfUsers' => array(
			'className' => 'XpfUsers',
			'foreignKey' => 'xpf_users_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TiposClientes' => array(
			'className' => 'TiposClientes',
			'foreignKey' => 'tipos_clientes_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
