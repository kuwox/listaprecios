<?php
App::uses('AppModel', 'Model');
/**
 * XpfUser Model
 *
 * @property Cliente $xpfuser
 */
class XpfUser extends AppModel {
/**
 * Display field
 *
 * @var string
 */


	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $hasOne = array(
		'Clientes' => array(
			'className' => 'Clientes',
			'foreignKey' => 'id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
