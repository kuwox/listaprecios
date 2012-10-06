<?php
App::uses('AppModel', 'Model');
/**
 * XpfUser Model
 *
 * @property Cliente $xpfuser
 */
class User extends AppModel {
/**
 * Display field
 *
 * @var string
 */

	// este modelo es un alias que utiliza la misma tabla xpf_users, se cre� con la intenci�n de manejar la autenticaci�n
	// y evitar el problema del prefijo xpf.  Como la admin se desarroll� aparte, hubiese sido necesario rehacer el modelo completo
	public $useTable = 'xpf_users';
	public $displayField = 'name';
	public $name = 'User';
	
	public $validate = array(
	'username' => array(
		'required' => array(
			'rule' => array('notEmpty'),
			'message' => 'Por favor indique una contrase�a'
		)
	),
	'password' => array(
		'required' => array(
			'rule' => array('notEmpty'),
			'message' => 'Por favor indique una contrase�a'
		)
	)
	);


}
