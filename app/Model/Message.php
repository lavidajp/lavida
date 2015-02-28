<?php

class Message extends AppModel {
    public $name = 'Message';
	var $useTable = 'message';


	var $validate = array(
	    'mail_address' => array(
	        'notEmpty' => array(
	            'rule' => 'notEmpty',
				'message' => '���[���A�h���X�����Ă��������B',
	         ),
	        'email' => array(
	            'rule' => 'email',
				'message' => '���[���A�h���X�𐳂�������Ă��������B',
	         ),
	    ),
	   	'mail_remind_date' => array(
	        'notEmpty' => array(
	            'rule' => 'notEmpty',
	    		'message' => '���t���L�����Ă��������B',
	         ),
	        'date' => array(
	            'rule' => 'date',
	         	'message' => '���t�𐳂����L�����Ă��������B',
	         ),
	    ),
	   	'mail_text' => array(
	        'notEmpty' => array(
	            'rule' => 'notEmpty',
	    		'message' => '���M���e���L�����Ă��������B',
	         ),
	    ),

	);
}

?>