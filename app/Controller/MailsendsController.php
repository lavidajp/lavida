<?php
class MailsendsController extends AppController{
	public $uses = array('Message');

	public function index(){
		if($this->data['Message']['sendedPage'] == 'confirm'){
			$validateResult = $this->_messageValidation($this->data);
			echo "<br>".$validateResult."<br>";
			if($validateResult){
				$this->set('data',$this->data);
				$this->render('confirm');
			}else{
				$this->render('/pages/display');
			}
		}elseif($this->data['Message']['sendedPage'] == 'finish'){
			$validateResult = $this->_messageValidation($this->data);
			if($validateResult){
				$resultSave = $this->_saveData($this->data);
				if(is_array($resultSave)){
					$this->set('data',$this->data);
					$this->render('finish');
				}else{
					$this->redirect('/');
				}
			}else{
				$this->redirect('/');
			}
		}else{
			$this->redirect('/');
		}
	}

	public function _saveData($data){
		$saveData = array(
    		'mail_address' => $data['Message']['mail_address'],
    		'mail_remind_date' => $data['Message']['mail_remind_date'],
	   		'mail_text' => $data['Message']['mail_text'],
	    	'send_flg' => '1',
	    	'create_date' => date("Y-m-d")
		);
		return $this->Message->save($saveData);
	}

	public function _messageValidation($data){
		$this->Message->set($data);
		$validateflg = $this->Message->validates();
		return $validateflg;
	}
}