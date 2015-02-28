<?php
echo $this->Html->charset();

echo $this->Form->create(null, array(
    'url' => array('controller' => 'mailsends', 'action' => 'index')
));
echo $this->Form->input('Message.mail_address');
echo $this->Form->input('Message.mail_remind_date',
				array('label' => 'send date',
				'dateFormat' => 'YMD',
				'monthNames' => false,
				'empty' => false,
				'minYear' => date('Y'),
				'maxYear' => date('Y')+100));
echo $this->Form->input('Message.mail_text');
echo $this->Form->hidden('Message.sendedPage',array('value'=>'confirm'));
echo $this->Form->submit();
echo $this->Form->end();

?>