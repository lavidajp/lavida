<?php

class Message extends AppModel {
    public $name = 'Message';
	var $useTable = 'message';


	var $validate = array(
	    'mail_address' => array(
	        'notEmpty' => array(
	            'rule' => 'notEmpty',
				'message' => 'メールアドレスを入れてください。',
	         ),
	        'email' => array(
	            'rule' => 'email',
				'message' => 'メールアドレスを正しく入れてください。',
	         ),
	    ),
	   	'mail_remind_date' => array(
	        'notEmpty' => array(
	            'rule' => 'notEmpty',
	    		'message' => '日付を記入してください。',
	         ),
	        'date' => array(
	            'rule' => 'date',
	         	'message' => '日付を正しく記入してください。',
	         ),
	    ),
	   	'mail_text' => array(
	        'notEmpty' => array(
	            'rule' => 'notEmpty',
	    		'message' => '送信内容を記入してください。',
	         ),
	    ),

	);
}

?>