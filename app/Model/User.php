<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 */
class User extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'Users';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

  // Messageに対してhas_many関係にする
  public $hasMany = array(
    'Messages' => array(
      'className' => 'Message',
      'foreignKey' => 'user_id'
    )
  );
}
