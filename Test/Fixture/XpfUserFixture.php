<?php
/**
 * XpfUserFixture
 *
 */
class XpfUserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'username' => array('type' => 'string', 'null' => false, 'length' => 150, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'email' => array('type' => 'string', 'null' => false, 'length' => 100, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'password' => array('type' => 'string', 'null' => false, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'usertype' => array('type' => 'string', 'null' => false, 'length' => 25, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'block' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 4),
		'sendEmail' => array('type' => 'integer', 'null' => true, 'default' => '0', 'length' => 4),
		'gid' => array('type' => 'integer', 'null' => false, 'default' => '1', 'length' => 3, 'key' => 'index'),
		'registerDate' => array('type' => 'datetime', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'lastvisitDate' => array('type' => 'datetime', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'activation' => array('type' => 'string', 'null' => false, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'params' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'usertype' => array('column' => 'usertype', 'unique' => 0), 'idx_name' => array('column' => 'name', 'unique' => 0), 'gid_block' => array('column' => array('gid', 'block'), 'unique' => 0), 'username' => array('column' => 'username', 'unique' => 0), 'email' => array('column' => 'email', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'username' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'usertype' => 'Lorem ipsum dolor sit a',
			'block' => 1,
			'sendEmail' => 1,
			'gid' => 1,
			'registerDate' => '2012-03-11 15:03:23',
			'lastvisitDate' => '2012-03-11 15:03:23',
			'activation' => 'Lorem ipsum dolor sit amet',
			'params' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);
}
