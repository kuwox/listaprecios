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

	// este modelo es un alias que utiliza la misma tabla xpf_users, se creó con la intención de manejar la autenticación
	// y evitar el problema del prefijo xpf.  Como la admin se desarrolló aparte, hubiese sido necesario rehacer el modelo completo
	public $useTable = 'xpf_users';
	public $displayField = 'name';
	public $name = 'User';
	
	public $validate = array(
	'username' => array(
		'required' => array(
			'rule' => array('notEmpty'),
			'message' => 'Por favor indique una contraseña'
		)
	),
	'password' => array(
		'required' => array(
			'rule' => array('notEmpty'),
			'message' => 'Por favor indique una contraseña'
		)
	)
	);


}
